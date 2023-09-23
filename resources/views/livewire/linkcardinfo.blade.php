<div class="py-4">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="col">
            <div class="card shadow border-0" id="list1">
                <div class="card-body py-4 px-4 px-md-5">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ asset('img/favicon.ico') }}" alt="" height="100" width="100">
                        </div>
                        {{-- <div>
                            Current Time {{ now() }}
                        </div> --}}
                        <div class="col-9">
                            <div class="row">
                                <div class="justify-content-between">
                                    <p class="text-wrap">
                                        {{-- //TODO what if the link is Long ?  --}}
                                        <a href="">{{ $viewedLink->url }}</a>
                                    </p>
                                    Active
                                    <svg width="15" height="15">
                                        <circle cx="7" cy="7" r="7" fill="green" />
                                    </svg>
                                </div>
                            </div>
                            <div class="row">
                                <p>{{ $viewedLink->description }}</p>
                            </div>
                            {{-- // TODO  --}}
                            {{-- If you Want More Rows in Right Side you Can add Here --}}
                            <hr>
                            <div class="row">
                                <span></span>
                                <span class="" wire:poll='avgsy'>
                                    Overall Rating : {{ round($avg, 1) }}
                                    <span wire:poll='normalRatingsy'> ({{ $normalRatings }})</span>
                                </span>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <span class="fa fa-star {{ $avg >= 1 ? 'text-warning' : '' }}"></span>
                                    <span class="fa fa-star {{ $avg >= 2 ? 'text-warning' : '' }}"></span>
                                    <span class="fa fa-star {{ $avg >= 3 ? 'text-warning' : '' }}"></span>
                                    <span class="fa fa-star {{ $avg >= 4 ? 'text-warning' : '' }}"></span>
                                    <span class="fa fa-star {{ $avg >= 5 ? 'text-warning' : '' }}"></span>
                                </div>
                                {{-- Hearts and Poops  --}}
                                <div class="col">
                                    {{-- // TODO checked class was with both of them below ? --}}
                                    <span class="fas fa-thumbs-down text-brown" wire:poll='poopsy'></span>
                                    ({{ $poops }})
                                    <span class="fas fa-heart text-danger" wire:poll='heartsy'></span>
                                    ({{ $hearts }})
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
