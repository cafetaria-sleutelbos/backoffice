<div class="modal fade" id="itemModal" tabindex="-1" aria-labelledby="itemLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="/items{{isset($resource) ? '/' . $resource->id : ''}}">
                @csrf
                @method(isset($resource) ? 'PUT' : 'POST')
                <div class="modal-header">
                    <h5 class="modal-title" id="itemLabel">{{isset($resource) ? 'Edit' : 'Create'}} Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div>
                            @error('name')
                            <div>
                                <span class="text-red-600">{{$message}}</span>
                            </div>
                            @enderror
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text"
                                   value="{{old('name') ?? (isset($resource) ? $resource->name : '')}}">
                        </div>
                        <div>
                            @error('cooking_time')
                            <div>
                                <span class="text-red-600">{{$message}}</span>
                            </div>
                            @enderror
                            <label for="cooking_time">Cooking Time</label>
                            <input id="cooking_time" name="cooking_time" type="number"
                                   value="{{old('cooking_time') ?? (isset($resource) ? $resource->cooking_time : '')}}">
                        </div>
                        <div>
                            @error('complexity')
                            <div>
                                <span class="text-red-600">{{$message}}</span>
                            </div>
                            @enderror
                            <label for="complexity">Complexity</label>
                            <input id="complexity" name="complexity" type="number"
                                   value="{{old('complexity') ?? (isset($resource) ? $resource->complexity : '')}}">
                        </div>
                        <div>
                            @error('price')
                            <div>
                                <span class="text-red-600">{{$message}}</span>
                            </div>
                            @enderror
                            <label for="price">Price</label>
                            <input id="price" name="price" type="number" step="0.01"
                                   value="{{old('price') ?? (isset($resource) ? $resource->price : '')}}">
                        </div>
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
