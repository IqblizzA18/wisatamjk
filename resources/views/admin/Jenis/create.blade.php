@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-plus-circle me-2"></i> Tambah Jenis Wisata
                </h6>
                <a href="{{ route('admin.jenis.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.jenis.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Jenis Wisata</label>
                        <input type="text" name="name" id="name" required class="form-control shadow-sm"
                            value="{{ old('name') }}">
                    </div>
                    <button type="submit" class="btn btn-success px-4">
                        <i class="fas fa-save me-1"></i> Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
