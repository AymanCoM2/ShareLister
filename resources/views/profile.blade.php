@extends('layouts.main')
@section('title', 'Profile')

@section('extra-specific-css')
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/img-overlay.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- Modal START -->
    @livewire('Profileeditmodal')
    <!-- Modal END -->

    @livewire('Profileherocard')

    @include('profile-tab-nav')
@endsection
