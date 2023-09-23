@extends('layouts.main')
@section('title', 'Home | Pertoda')

@section('content')
    <div class="container">
        <div class="px-4 py-2 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset('img/list.png') }}" alt="" width="72" height="57">
            <h1 class="display-5 fw-bold text-body-emphasis">Pertoda: Your Ultimate Website Curation Tool</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4"> Your gateway to a smarter, more curated online journey. Whether you're a passionate
                    content curator, a researcher seeking order in the chaos, or simply someone who wants to streamline
                    their web experience, Pertoda has got you covered.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="{{ route('create-list-get') }}" class="btn btn-primary btn-lg px-4 gap-3">Get Started</a>
                    <a href="{{ route('soon-extension') }}" class="btn btn-outline-warning btn-lg px-4">
                        Download Companion Extension</a>
                </div>
            </div>
        </div>

        <li class="divider bg-primary bg-gradient border border-primary border-1" style="height: 2px;list-style: none;">
        </li>

        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold">Create and Share Customized Lists of URLs</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    Creating lists of your favorite websites or curated collections of useful links on Pertoda is a
                    breeze.
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <a href="{{ route('create-list-get') }}" class="btn btn-primary btn-lg px-4 me-sm-3">
                        Create Your List Now
                    </a>
                    {{-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">
                        Secondary
                    </button> --}}
                </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh">
                <div class="container px-5">
                    <img src="{{ asset('img/site-screen.png') }}" class="img-fluid border rounded-3 shadow-lg mb-4"
                        alt="Example image" width="700" height="500" loading="lazy" />
                </div>
            </div>
        </div>

        <li class="divider bg-warning bg-gradient border border-warning border-1" style="height: 2px;list-style: none;">
        </li>

        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1">Take Control of Your Online Experience with Companion Extension</h1>
                    <p class="lead"> Our companion extension is a game-changer for your online experience, offering a host
                        of benefits that empower you to take control of your web browsing.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <a href="{{ route('soon-extension') }}" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Install
                            Extension</a>
                        <button type="button" class="btn btn-outline-danger btn-lg px-4">Learn More</button>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                    <img class="rounded-lg-3" src="{{ asset('img/review-screen.png') }}" alt="" width="720">
                </div>
            </div>
        </div>

        <li class="divider bg-danger bg-gradient border border-danger border-1" style="height: 2px;list-style: none;">
        </li>
    </div>
    @include('main-components.footer')
@endsection
