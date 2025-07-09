@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 text-gray-800">Data Wisata</h1>
            <a href="{{ route('admin.wisata.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus me-1"></i> Tambah Wisata
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Jenis</th>
                                <th>Rating</th>
                                {{-- <th>Rekomendasi</th> --}}
                                <th>Gambar</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($wisatas as $wisata)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $wisata->title }}</td>
                                    <td>{{ $wisata->jenisWisata->name ?? '-' }}</td>
                                    <td>{{ $wisata->rating }}</td>
                                    {{-- <td>
                                        <span class="badge bg-{{ $wisata->is_recommended ? 'success' : 'secondary' }}">
                                            {{ $wisata->is_recommended ? 'Ya' : 'Tidak' }}
                                        </span>
                                    </td> --}}
                                    <td>
                                        @foreach ($wisata->images as $image)
                                            <img src="{{ asset('storage/' . $image->image_path) }}" style="width: 50px;"
                                                class="img-thumbnail me-1 mb-1">
                                        @endforeach
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.wisata.edit', $wisata->id) }}"
                                            class="btn btn-sm btn-warning me-1">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.wisata.destroy', $wisata->id) }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
