@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 text-gray-800">Data Jenis Wisata</h1>
            <a href="{{ route('admin.jenis.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus me-1"></i> Tambah Jenis
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card shadow">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-hover mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 50px;">No</th>
                                <th>Nama Jenis</th>
                                <th>Slug</th>
                                <th style="width: 120px;" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($jenis as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.jenis.edit', $item->id) }}"
                                            class="btn btn-sm btn-warning me-1" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.jenis.destroy', $item->id) }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" title="Hapus">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
