<form method="POST" action="/orders{{isset($resource) ? '/' . $resource->id : ''}}">
    @csrf
    @method(isset($resource) ? 'PUT' : 'POST')

    <div>
        @error('status')
        <div>
            <span class="text-red-600">
                {{$message}}
            </span>
        </div>
        @enderror
        <label for="status">status</label>
        <select id="status" name="status">
            @foreach(config('enums.order_statuses') as $key => $status)
                <option value="{{$key}}"
                        @if((isset($resource) && $resource->status == $key) || old('status') == $key) selected="selected" @endif>
                    {{$status}}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">{{isset($resource) ? 'update' : 'create'}}</button>
</form>
