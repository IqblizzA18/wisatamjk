@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-edit me-2"></i> Edit Testimoni
                </h6>
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control shadow-sm"
                            value="{{ old('name', $testimonial->name) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="job_title" class="form-label">Pekerjaan</label>
                        <input type="text" name="job_title" id="job_title" class="form-control shadow-sm"
                            value="{{ old('job_title', $testimonial->job_title) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea name="message" id="message" rows="4" class="form-control shadow-sm" required>{{ old('message', $testimonial->message) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success px-4">
                        <i class="fas fa-save me-1"></i> Update
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
