@extends('layouts.main')
@section('title', 'Create List')
@section('content')

    <div class="container card p-4 gy-2 m-auto shadow border-0 rounded">
        <form class="row g-3" method="POST" action="{{ route('create-list-post') }}">
            @csrf
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="inputTitle" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputTitle"
                        name="title" value="{{ old('title', '') }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inputDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="inputDescription" rows="4" name="description">{{ old('description', '') }}</textarea>
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                            name="isPublic" checked />
                        <label class="form-check-label" for="flexSwitchCheckChecked" id="privacyLabel">Public</label>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="inputState" class="form-label">Type</label>
                    <select id="inputState" class="form-select @error('type') is-invalid @enderror" name="type">
                        <option {{ old('type') == 'type1' ? 'selected' : '' }} value="type1">Normal List</option>
                        <option {{ old('type') == 'type2' ? 'selected' : '' }} value="type2">Black List</option>
                        <option {{ old('type') == 'type3' ? 'selected' : '' }} value="type3">Social List</option>
                        <option {{ old('type') == 'type4' ? 'selected' : '' }} value="type4">CTA List</option>
                    </select>
                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="">
                    <label for="e1" class="form-label">Tags</label>
                    <div class="w-100 h-100 overflow-auto">
                        <select id="e1" class="form-control" name="tags[]" multiple>
                            @if (old('tags'))
                                @foreach (old('tags') as $tag)
                                    <option value="{{ $tag }}" selected>{{ $tag }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>

    </div>
@endsection
