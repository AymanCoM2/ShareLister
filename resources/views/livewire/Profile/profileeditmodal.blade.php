<!-- Horizontal Modal START -->
<div class="modal fade" wire:ignore.self id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Use 'modal-lg' class for a larger modal -->
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="profileModalLabel">Edit Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="">
                <div class="modal-body d-flex flex-row"> <!-- Use 'd-flex flex-row' to make it horizontal -->
                    <div class="w-50 fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview img-thumbnail" style="width: 200px; height: 150px;">
                            @if ($userProfileImage)
                                <img src="{{ $userProfileImage->temporaryUrl() }}" alt="">
                            @else
                                <img src="{{ request()->user()->image }}" alt="">
                            @endif
                        </div>
                        <div class="d-flex justify-content-start"> <!-- Align buttons to the right -->
                            <span class="btn btn-outline-secondary btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" wire:model="userProfileImage">
                            </span>
                            <a href="#" class="btn btn-outline-secondary fileinput-exists"
                                data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                    <div class="w-50"> <!-- Use 'w-50' to specify the width for the right side content -->
                        <div class="row mb-2">
                            <label for="">Name</label>
                            <input type="text" class="form-control px-2 m-1" name="" id=""
                                wire:model="userName">
                        </div>
                        <div class="row mb-2">
                            <label for="">Label Id</label>
                            <input type="text" class="form-control px-2 m-1" name="" id=""
                                wire:model="userLabel">
                        </div>
                        <div class="row mb-2">
                            <label for="">Email</label>
                            <input type="text" class="form-control px-2 m-1" name="" id=""
                                wire:model="userEmail">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" wire:click='updateProfileData()'>
                        <div class="spinner-border" role="status" wire:loading wire:target="updateProfileData">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        Save changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Horizontal Modal END -->
