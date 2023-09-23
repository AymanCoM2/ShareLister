@extends('layouts.main')
@section('title', 'My Lists')
@section('content')
    <div class="container">
        <div class="row m-1 p-2 g-2">
            @foreach ($userLists as $singleList)
            <div class="col-sm-4">
                <div class="card h-100 m-1 shadow-lg d-flex flex-column">
                    <div class="card-body">
                        <h5 class="card-title">{{ $singleList->title }}</h5>
                        <p class="card-text">{{ $singleList->description }}</p>
                    </div>
                    <div class="mt-auto p-3"> <!-- Use "mt-auto" and "p-3" to push the button to the bottom -->
                        <a href="{{ route('view-list', $singleList->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <br>
        <hr class="w-50">
        <div class="row">
            {{ $userLists->links() }}
        </div>
    </div>
@endsection
