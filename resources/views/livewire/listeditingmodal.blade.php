<!-- Modal -->
<div class="modal fade" id="ListEditModal" tabindex="-1" aria-labelledby="ListEditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ListEditModalLabel">Edit List</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent>
                    {{-- Title --}}
                    <div class="mb-3">
                        <label for="inputTitle" class="form-label">Title</label>
                        <input type="text" class="form-control @error('theListTitle') is-invalid @enderror"
                            id="inputTitle" wire:model='theListTitle'>
                        @error('theListTitle')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- Title --}}

                    {{-- Description --}}
                    <div class="mb-3">
                        <label for="inputDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="inputDescription" rows="4" wire:model='theListDescription'></textarea>
                    </div>
                    {{-- Description --}}

                    {{-- Tags --}}
                    <div class="mb-3">
                        <label for="inputDescription" class="form-label">Tags</label>
                        <textarea class="form-control" id="inputDescription" rows="4" wire:model='theListTagsText'></textarea>
                    </div>
                    {{-- Tags --}}

                    {{-- Privacy --}}
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                            name="isPublic" {{ $theListPrivacy == true ? 'checked' : '' }}
                            wire:model='theListPrivacy' />
                        <label class="form-check-label" for="flexSwitchCheckChecked"
                            id="privacyLabel">{{ $theListPrivacy == true ? 'Public' : 'Private' }}</label>
                    </div>
                    {{-- Privacy --}}

                    <div class="mb-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" wire:click='updateTheList()'>Save
                            Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
