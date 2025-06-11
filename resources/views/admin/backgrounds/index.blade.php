@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-gray">
                    {{ __('Background') }}
                </h6>
                <div class="ml-auto">
                    @if ($background)
                        <a href="{{ route('admin.backgrounds.edit', $background->id ?? '') }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i> {{ __('Edit') }}
                        </a>
                    @else
                        <a href="{{ route('admin.backgrounds.create') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i> {{ __('Create Background') }}
                        </a>
                    @endif
                </div>
            </div>
            <div class="card-body">
                @if ($background)
                    <div class="text-center">
                        <img src="{{ asset('storage/' . $background->background_image) }}" alt="Background Image"
                            class="img-fluid" style="max-height: 300px;">
                        </br>
                        <!-- Tambahkan tombol hapus di sini -->
                        <form action="{{ route('admin.backgrounds.destroy', $background->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete the background?');"
                            class="d-inline-block mt-3">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> {{ __('Delete Background') }}
                            </button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
