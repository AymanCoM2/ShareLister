@extends('layouts.main')
@section('title', 'Create New Account')
@section('extra-specific-css')
    <link rel="stylesheet" href="{{ asset('css/login-two-style.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="col-xl-10 col-lg-11 mx-auto login-container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-5 col-md-6 no-padding">
                        <div class="login-box">
                            <h5>Create Account</h5>

                            <div class="login-row row ">
                                <label for=""><i class="fas fa-signature"></i>Name</label>
                                <input id="name" type="text"
                                    class="p-2 m-2 form-control form-control-sm @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="login-row row ">
                                <label for=""><i class="fas fa-envelope"></i>Email Address</label>
                                <input class="p-2 m-2 form-control form-control-sm @error('email') is-invalid @enderror"
                                    id="email" type="email" name="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="login-row row ">
                                <label for=""><i class="fas fa-unlock-alt"></i> Password</label>
                                <input id="password" type="password"
                                    class="p-2 m-2 form-control form-control-sm @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="login-row row ">
                                <label for=""><i class="fas fa-unlock-alt"></i>Confirm Password</label>
                                <input id="password-confirm" type="password" class="p-2 m-2 form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="login-row btnroo row ">
                                <button class="btn btn-success btn-sm" type="submit">Create Account</button>
                            </div>


                            {{--  --}}
                            <hr>
                            <p class="text-center">OR</p>
                            <div class="login-row row">
                                {{-- <button class="btn btn-primary btn-sm my-1">
                                    <i class="fa-brands fa-facebook"></i>
                                </button> --}}
                                {{-- FACEBOOK --}}

                                <button class="btn btn-danger btn-sm my-1">
                                    <i class="fa-brands fa-google"></i>
                                </button>

                                <button class="btn btn-dark btn-sm my-1">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </button>

                            </div>
                            <br>
                            {{--  --}}
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6 img-box">
                        <img src="{{ asset('img/sideimg.png') }}" alt="" />
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
