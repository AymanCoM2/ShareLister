<div class="row mb-3">
    <div class="card">
        <form action="" wire:submit.prevent="insertNewUrl()">
            <div class="card-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="URL .. "
                        wire:model="url" />
                </div>
                <label class="text-danger">
                    @error('url')
                        {{ $message }}
                    @enderror
                </label>

                <div class="form-group">
                    <textarea class="form-control" placeholder="Description.." wire:model="description" rows="5"></textarea>
                </div>
                <label class="text-danger">
                    @error('description')
                        {{ $message }}
                    @enderror
                </label>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary btn-block m-1">
                        Save
                    </button>
                    <button type="reset" class="btn btn-warning btn-block m-1">
                        Clear
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
