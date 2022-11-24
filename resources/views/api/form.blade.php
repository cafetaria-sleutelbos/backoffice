<form method="POST" action="/api-keys{{isset($resource) ? '/' . $resource->id : ''}}">
    @csrf
    @method(isset($resource) ? 'PUT' : 'POST')

    <div>
        <div>
            @error('name')
            <div>
                <span class="text-red-600">
                    {{$message}}
                </span>
            </div>
            @enderror
            <label for="name">Name</label>
            <input id="name" name="name" type="text"
                   value="{{old('name') ?? (isset($resource) ? $resource->name : '')}}">
        </div>
        <div>
            @error('has_expire_date')
            <div>
                <span class="text-red-600">
                    {{$message}}
                </span>
            </div>
            @enderror
            <label for="has_expire_date">Has Expire Date</label>
            <input id="has_expire_date" name="has_expire_date" type="checkbox"
                   @if((old('has_expire_date') == 'on') || (isset($resource) && $resource->expire_date != null)) checked @endif>
        </div>
        <div>
            @error('expire_date')
            <div>
                <span class="text-red-600">
                    {{$message}}
                </span>
            </div>
            @enderror
            <label for="name">Expire Date</label>
            <input id="expire_date" name="expire_date" type="date"
                   value="{{old('expire_date') ?? (isset($resource) ? $resource->expire_date : '')}}">
        </div>
    </div>

    <button type="submit">{{isset($resource) ? 'update' : 'create'}}</button>
</form>
