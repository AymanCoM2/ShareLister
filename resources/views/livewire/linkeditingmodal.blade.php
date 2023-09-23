<div wire:ignore.self class="modal fade" id="linkEditingModal" tabindex="-1" aria-labelledby="linkEditingModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="linkEditingModalLabel">Edit Link</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" wire:submit.prevent="updateTheUrl()">
                    <div class="card-body">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="URL"
                                wire:model="url" />
                        </div>
                        <div class="text-danger">
                            @error('url')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Description" wire:model="description" rows="5"></textarea>
                        </div>
                        <div class="text-danger">
                            @error('description')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
