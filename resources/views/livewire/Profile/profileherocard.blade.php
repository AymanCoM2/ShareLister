<div class="container py-2 mx-auto">
    <div class="card py-2 px-2">
        <div class="row px-3">
            <div class="col-3">
                <div class="h-75">
                    <img class="fit-image" src="{{ request()->user()->image }}">
                </div>
            </div>
            <div class="col-6">
                <h2>{{ request()->user()->name }}</h2>
                <h6>{{ request()->user()->ellists()->count() }} Lists | {{ request()->user()->reviews()->count() }}
                    Reviews</h6>
                <h6><i class="fa-solid fa-at"></i>{{ request()->user()->label }}</h6>
            </div>

            <div class="col-3">
                <div class="p-5">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#profileModal">
                        <i class="fa-solid fa-gear"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
