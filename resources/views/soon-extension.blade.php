@extends('layouts.main')
@section('title', 'Coming Soon')
@section('extra-specific-css')
@endsection

@section('content')
    <div class="container text-center">
        <h3 class="display-4">Be First to Know About Our New Extension!</h3>
        <p class="lead">
            Exciting news is on the horizon! Our brand-new extension is coming soon, and we want you to be among the very
            first to experience it. To secure your spot as an early user, simply enter your email address below. We'll make
            sure to send you a notification the moment it's ready to roll out. Don't miss out on the chance to explore this
            exciting addition and be at the forefront of those trying it out!
        </p>

        <form>
            <div class="form-group">
                <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <br><br>

    </div>
@endsection
