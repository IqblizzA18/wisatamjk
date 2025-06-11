@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-edit me-2"></i> Edit Wisata
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

                {{-- ✅ FORM A: Edit Data Wisata --}}
                <form action="{{ route('admin.wisata.update', $wisata->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Wisata</label>
                        <input type="text" id="title" name="title" class="form-control shadow-sm"
                            value="{{ old('title', $wisata->title) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="short_description" class="form-label">Deskripsi Singkat</label>
                        <input type="text" id="short_description" name="short_description" class="form-control shadow-sm"
                            value="{{ old('short_description', $wisata->short_description) }}">
                    </div>

                    <div class="mb-3">
                        <label for="jenis_wisata_id" class="form-label">Jenis Wisata</label>
                        <select id="jenis_wisata_id" name="jenis_wisata_id" class="form-select shadow-sm" required>
                            <option value="">-- Pilih Jenis Wisata --</option>
                            @foreach ($jenisWisatas as $jenis)
                                <option value="{{ $jenis->id }}"
                                    {{ old('jenis_wisata_id', $wisata->jenis_wisata_id) == $jenis->id ? 'selected' : '' }}>
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
                                rows="3">
                            {{ old("paragraph_$i", $wisata["paragraph_$i"]) }}
                        </textarea>
                        </div>
                    @endfor

                    <div class="mb-3">
                        <label for="google_maps_url" class="form-label">Google Maps URL</label>
                        <input type="url" id="google_maps_url" name="google_maps_url" class="form-control shadow-sm"
                            value="{{ old('google_maps_url', $wisata->google_maps_url) }}">
                    </div>

                    <div class="mb-3">
                        <label for="opening_hours" class="form-label">Jam Operasional</label>
                        <input type="text" id="opening_hours" name="opening_hours" class="form-control shadow-sm"
                            value="{{ old('opening_hours', $wisata->opening_hours) }}">
                    </div>

                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" id="rating" name="rating" class="form-control shadow-sm"
                            value="{{ old('rating', $wisata->rating) }}" min="0" max="5" step="0.1">
                    </div>

                    <div class="form-check mb-3">
                        <input type="checkbox" id="is_recommended" name="is_recommended" class="form-check-input"
                            {{ old('is_recommended', $wisata->is_recommended) ? 'checked' : '' }}>
                        <label for="is_recommended" class="form-check-label">Rekomendasi?</label>
                    </div>

                    <button type="submit" class="btn btn-success px-4">
                        <i class="fas fa-save me-1"></i> Simpan Perubahan
                    </button>
                </form>

                <hr class="my-4">

                {{-- ✅ FORM B: Upload Gambar Baru --}}
                <h5>Upload Gambar Baru</h5>
                <form action="{{ route('admin.wisata.images.store', $wisata->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="file" name="images[]" class="form-control" multiple accept="image/*" required>
                        <small class="text-muted">Bisa upload beberapa gambar sekaligus (max 2MB per gambar).</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload Gambar</button>
                </form>

                <hr class="my-4">

                {{-- ✅ FORM C: Gambar yang Sudah Ada --}}
                <h5>Gambar yang Sudah Ada</h5>
                @if ($wisata->images && $wisata->images->count())
                    <div class="row">
                        @foreach ($wisata->images as $image)
                            <div class="col-md-3 text-center mb-4">
                                <img src="{{ asset('storage/' . $image->image_path) }}"
                                    class="img-fluid img-thumbnail mb-2">
                                <form action="{{ route('admin.wisata.images.destroy', [$wisata->id, $image->id]) }}"
                                    method="POST" onsubmit="return confirm('Yakin ingin menghapus gambar ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-muted">Belum ada gambar.</p>
                @endif

            </div>
        </div>
    </div>
@endsection
