@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-plus-circle me-2"></i> Tambah Wisata
                </h6>
                <a href="{{ route('admin.wisata.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.wisata.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Wisata</label>
                        <input type="text" id="title" name="title" class="form-control shadow-sm"
                            value="{{ old('title') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="short_description" class="form-label">Deskripsi Singkat</label>
                        <input type="text" id="short_description" name="short_description" class="form-control shadow-sm"
                            value="{{ old('short_description') }}">
                    </div>

                    <div class="mb-3">
                        <label for="jenis_wisata_id" class="form-label">Jenis Wisata</label>
                        <select id="jenis_wisata_id" name="jenis_wisata_id" class="form-select shadow-sm" required>
                            <option value="">-- Pilih Jenis Wisata --</option>
                            @foreach ($jenisWisatas as $jenis)
                                <option value="{{ $jenis->id }}"
                                    {{ old('jenis_wisata_id') == $jenis->id ? 'selected' : '' }}>
                                    {{ $jenis->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    @for ($i = 1; $i <= 5; $i++)
                        <div class="mb-3">
                            <label for="paragraph_{{ $i }}" class="form-label">Paragraf
                                {{ $i }}</label>
                            <textarea id="paragraph_{{ $i }}" name="paragraph_{{ $i }}" class="form-control shadow-sm"
                                rows="3">{{ old("paragraph_$i") }}</textarea>
                        </div>
                    @endfor

                    <div class="mb-3">
                        <label for="google_maps_url" class="form-label">Google Maps URL</label>
                        <input type="url" id="google_maps_url" name="google_maps_url" class="form-control shadow-sm"
                            value="{{ old('google_maps_url') }}">
                    </div>

                    <div class="mb-3">
                        <label for="opening_hours" class="form-label">Jam Operasional</label>
                        <input type="text" id="opening_hours" name="opening_hours" class="form-control shadow-sm"
                            value="{{ old('opening_hours') }}">
                    </div>

                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" id="rating" name="rating" class="form-control shadow-sm"
                            value="{{ old('rating', 0) }}" min="0" max="5" step="0.1" required>
                    </div>

                    {{-- <div class="form-check mb-3">
                        <input type="checkbox" id="is_recommended" name="is_recommended" class="form-check-input"
                            {{ old('is_recommended') ? 'checked' : '' }}>
                        <label for="is_recommended" class="form-check-label">Rekomendasi?</label>
                    </div> --}}

                    <div class="mb-3">
                        <label for="images" class="form-label">Upload Gambar</label>
                        <input type="file" id="images" name="images[]" class="form-control shadow-sm" multiple
                            accept="image/*">
                        <small class="text-muted">Bisa upload lebih dari satu gambar.</small>
                    </div>

                    <button type="submit" class="btn btn-success px-4">
                        <i class="fas fa-save me-1"></i> Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
