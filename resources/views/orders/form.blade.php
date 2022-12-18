<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="/orders{{isset($resource) ? '/' . $resource->id : ''}}">
                @csrf
                @method(isset($resource) ? 'PUT' : 'POST')
                <div class="modal-header">
                    <h5 class="modal-title" id="orderLabel">{{isset($resource) ? 'Edit' : 'Create'}} Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        @error('status')
                        <div>
                            <span class="text-red-600">{{$message}}</span>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">{{isset($resource) ? 'update' : 'create'}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
