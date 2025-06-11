@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h1 class="h3 text-gray-800">{{ __('Edit Background') }}</h1>
                <a href="{{ route('admin.backgrounds.index') }}" class="btn btn-success btn-sm">{{ __('Go Back') }}</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.backgrounds.update', $background->id ?? '') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="background_image">{{ __('Replace Background Image') }}</label>
                        <input type="file" name="background_image" id="background_image"
                            class="form-control @error('background_image') is-invalid @enderror">
                        @error('background_image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        @if ($background->background_image)
                            <div class="mt-3">
                                <img src="{{ asset('storage/' . $background->background_image) }}" class="img-fluid"
                                    style="max-height: 200px;" alt="Current Background">
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
