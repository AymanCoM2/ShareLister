{{-- Right Hand Section Of Cards --}}
<!-- Info Section  -->
<div class="col-md-5">
    <div class="py-4 px-1">
        <div class="d-flex flex-column justify-content-between align-items-stretchh-100">
            @livewire('Listform', ['list_id' => $viewedList->id])

            {{-- Search Card --}}
            <div class="row mb-3">
                <div class="card">
                    <div class="card-body">
                        <p>
                            Search :
                            <input type="text" name="" id="" class="form-control">
                        </p>
                    </div>
                </div>
            </div>
            {{-- Search Card --}}

            {{-- Edit Button Card --}}
            <div class="row mb-3">
                <div class="card">
                    <div class="card-body">
                        <button class="btn" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#ListEditModal">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </button>
                    </div>
                </div>
            </div>
            {{-- Edit Button Card --}}

            {{-- Tags Card --}}
            <div class="row mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            Tags :
                        </div>
                        @foreach ($viewedList->tags()->get() as $tag)
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">
                                {{ $tag->tagWord }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- Tags Card --}}

        </div>
    </div>
</div>
<!-- Info Section  -->
