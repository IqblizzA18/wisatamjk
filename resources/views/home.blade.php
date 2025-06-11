@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-primary fw-bold">
            <i class="fas fa-chart-bar me-2"></i> Dashboard Wisata
        </h1>

        <div class="row mb-5">
            <div class="col-lg-6 mb-5">
                <div class="d-flex flex-column gap-3 h-100">
                    <div class="card shadow-sm border-left-primary p-3 h-25">
                        <h6 class="text-muted mb-1">Total Wisata</h6>
                        <h3 class="text-primary fw-semibold">{{ $totalWisata }}</h3>
                    </div>
                    <div class="card shadow-sm border-left-success p-3 h-25">
                        <h6 class="text-muted mb-1">Direkomendasikan</h6>
                        <h3 class="text-success fw-semibold">{{ $totalRekomendasi }}</h3>
                    </div>
                    <div class="card shadow-sm border-left-danger p-3 h-25">
                        <h6 class="text-muted mb-1">Tidak Direkomendasikan</h6>
                        <h3 class="text-danger fw-semibold">{{ $totalNonRekomendasi }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-white border-bottom text-center">
                        <h5 class="mb-0 fw-bold text-dark">Distribusi Jenis Wisata</h5>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center" style="height: 300px;">
                        <canvas id="jenisWisataChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('admin.dashboard.index') }}" method="GET" class="input-group">
                    <input type="text" name="search" class="form-control shadow-sm border-primary-subtle"
                        placeholder="Cari wisata berdasarkan judul..." value="{{ request('search') }}">
                    <button class="btn btn-primary" style="min-width: 100px;" type="submit">Cari</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-5">
                <div class="border-bottom mb-3 pb-2 d-flex align-items-center">
                    <h4 class="m-0 fw-bold text-success">Wisata Direkomendasikan</h4>
                </div>
                @forelse ($wisataRekomendasi as $wisata)
                    <div class="card mb-3 border-0 shadow-sm">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-4">
                                <img src="{{ $wisata->images->first() ? asset('storage/' . $wisata->images->first()->image_path) : asset('FE_wisata/images/default.jpg') }}"
                                    alt="{{ $wisata->title }}" class="img-fluid rounded-start w-100"
                                    style="height: 140px; object-fit: cover;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-3">
                                    <h5 class="card-title mb-1 text-primary fw-semibold">{{ $wisata->title }}</h5>
                                    <p class="card-text small text-muted mb-2">
                                        {{ \Illuminate\Support\Str::limit($wisata->short_description, 90) }}
                                    </p>
                                    <div class="small mb-1">
                                        <strong>Jenis:</strong> {{ $wisata->jenisWisata->name ?? '-' }}<br>
                                        <strong>Rating:</strong> {{ $wisata->rating }}
                                    </div>
                                    <span class="badge bg-success rounded-pill px-3 py-1">Recommended</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-warning">Belum ada wisata yang direkomendasikan.</div>
                @endforelse
                <div class="d-flex justify-content-center mt-3">
                    {{ $wisataRekomendasi->appends(request()->except('page'))->links() }}
                </div>
            </div>

            <div class="col-lg-6 mb-5">
                <div class="border-bottom mb-3 pb-2 d-flex align-items-center">
                    <h4 class="m-0 fw-bold text-secondary">Wisata Tidak Direkomendasikan</h4>
                </div>
                @forelse ($wisataNonRekomendasi as $wisata)
                    <div class="card mb-3 border-0 shadow-sm">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-4">
                                <img src="{{ $wisata->images->first() ? asset('storage/' . $wisata->images->first()->image_path) : asset('FE_wisata/images/default.jpg') }}"
                                    alt="{{ $wisata->title }}" class="img-fluid rounded-start w-100"
                                    style="height: 140px; object-fit: cover;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-3">
                                    <h5 class="card-title mb-1 text-dark fw-semibold">{{ $wisata->title }}</h5>
                                    <p class="card-text small text-muted mb-2">
                                        {{ \Illuminate\Support\Str::limit($wisata->short_description, 90) }}
                                    </p>
                                    <div class="small mb-1">
                                        <strong>Jenis:</strong> {{ $wisata->jenisWisata->name ?? '-' }}<br>
                                        <strong>Rating:</strong> {{ $wisata->rating }}
                                    </div>
                                    <span class="badge bg-secondary rounded-pill px-3 py-1">Non Recommended</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-secondary">Belum ada wisata tidak direkomendasikan.</div>
                @endforelse
                <div class="d-flex justify-content-center mt-3">
                    {{ $wisataNonRekomendasi->appends(request()->except('page'))->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script-alt')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('jenisWisataChart');
            if (!ctx) return;

            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: {!! json_encode($jenisLabels) !!},
                    datasets: [{
                        data: {!! json_encode($jenisCounts) !!},
                        backgroundColor: ['#4e73df', '#1cc88a', '#f6c23e', '#e74a3b', '#36b9cc'],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return `${context.label}: ${context.parsed} wisata`;
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
@endpush
