@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h1 class="h3 text-gray-800">{{ __('Create Background') }}</h1>
                <a href="{{ route('admin.backgrounds.index') }}" class="btn btn-success btn-sm">{{ __('Go Back') }}</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.backgrounds.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="background_image">{{ __('Upload Background Image') }}</label>
                        <input type="file" name="background_image" id="background_image"
                            class="form-control @error('background_image') is-invalid @enderror" required>
                        @error('background_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
