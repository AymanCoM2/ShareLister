<div class="row">
    {{-- @php
        dd($linkReviews);
        // The Reviews without the Requester Review
    @endphp --}}
    <!-- Tabs navs -->
    <div class="container">
        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist"
            style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
            <li class="nav-item" role="presentation">
                <button class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button"
                    role="tab" aria-selected="true" href="#ex1-tabs-1">Reviews</button>
            </li>
            {{-- <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab"
                    aria-selected="false" href="#ex1-tabs-2">Profile</button>
            </li> --}}
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab"
                    aria-selected="false" href="#ex1-tabs-3">API data and Geo Data And Site Services  </button>
            </li>
        </ul>
    </div>
    <!-- Tabs navs -->

    <!-- Tabs content -->
    <div class="row">
        <div class="tab-content" id="ex1-content">
            <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">

                @foreach ($linkReviews as $review)
                    <div class="row m-2">
                        <div class="card">
                            <div class="card-body">
                                <p>{{ $review->content }}</p>
                                <p>Rating {{ $review->rating }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{-- <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                <div class="row m-2">
                    <div class="card">
                        <div class="card-body bg-warning">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                <div class="row m-2">
                    <div class="card p-0">
                        <div class="card-body w-100 bg-success">
                            <p>And Link Recommendation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tabs content -->

</div>
