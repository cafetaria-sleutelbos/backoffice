<form method="POST" action="/items{{isset($resource) ? '/' . $resource->id : ''}}">
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
            @error('cooking_time')
            <div>
            <span class="text-red-600">
                {{$message}}
            </span>
            </div>
            @enderror
            <label for="cooking_time">Cooking Time</label>
            <input id="cooking_time" name="cooking_time" type="number"
                   value="{{old('cooking_time') ?? (isset($resource) ? $resource->cooking_time : '')}}">
        </div>

        <div>
            @error('cooking_time')
            <div>
            <span class="text-red-600">
                {{$message}}
            </span>
            </div>
            @enderror
            <label for="price">Price</label>
            <input id="price" name="price" type="number" step="0.01"
                   value="{{old('price') ?? (isset($resource) ? $resource->price : '')}}">
        </div>
    </div>

    <button type="submit">{{isset($resource) ? 'update' : 'create'}}</button>
</form>
