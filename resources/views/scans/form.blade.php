<div class="modal fade" id="scanModal" tabindex="-1" aria-labelledby="scanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="/scans{{isset($resource) ? '/' . $resource->id : ''}}">
                @csrf
                @method(isset($resource) ? 'PUT' : 'POST')
                <div class="modal-header">
                    <h5 class="modal-title" id="scanLabel">{{isset($resource) ? 'Edit' : 'Create'}} Scan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="input_container">
                        @error('data')
                        <div>
                            <span class="text-red-600"> {{$message}} </span>
                        </div>
                        @enderror
                        <label for="data">Data</label>
                        <textarea id="data" name="data" class="scan_text_area">{{$resource->data}}</textarea>
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
