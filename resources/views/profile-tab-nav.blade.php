<div class="container">
    <!-- Tabs navs -->
    <div class="container">
        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist"
            style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
            <li class="nav-item" role="presentation">
                <button class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button"
                    role="tab" aria-selected="true" href="#ex1-tabs-1">Personl social media List</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab"
                    aria-selected="false" href="#ex1-tabs-2">lists</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab"
                    aria-selected="false" href="#ex1-tabs-3">Reviews</button>
            </li>
        </ul>
    </div>
    <!-- Tabs navs -->

    <!-- Tabs content -->
    <div class="row">
        <div class="tab-content" id="ex1-content">

            <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                <div class="row m-2">
                    <div class="card">
                        <div class="card-body">
                            <h1>This is the Social Media Links List </h1>
                        </div>
                    </div>
                </div>
            </div>

            @livewire('Userlisttab')

            @livewire('Userreviewtab')
        </div>
    </div>
    <!-- Tabs content -->

</div>
