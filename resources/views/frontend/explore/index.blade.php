@extends('frontend.layout')

@section('content')
    <div class="hero overlay">
        {{-- <div class="img-bg rellax">
            <img src="{{ asset('FE_wisata/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
        </div> --}}
        @foreach ($backgrounds as $background)
            <div class="img-bg rellax">
                <img src="{{ Storage::url($background->background_image) }}" alt="Image" class="img-fluid">
            </div>
        @endforeach
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-5">
                    <h1 class="heading" data-aos="fade-up">Temukan Wisata</h1>
                    <p class="mb-5" data-aos="fade-up">VisitMojokerto hadir sebagai panduan digital yang memudahkan
                        wisatawan dalam menemukan dan menikmati kekayaan budaya, sejarah, dan keindahan alam Kota Mojokerto.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="section">
        <div class="container">
            <form method="GET" action="{{ route('explore') }}" class="mb-5">
                <div class="row g-3 align-items-end mb-4">
                    <!-- Input Judul Wisata -->
                    <div class="col-lg-6">
                        <label for="judul" class="form-label fw-semibold">Judul Wisata</label>
                        <input type="text" name="judul" id="judul" class="form-control shadow-sm rounded-3"
                            placeholder="Cari berdasarkan judul wisata..." value="{{ request('judul') }}">
                    </div>

                    <!-- Tombol Cari -->
                    <div class="col-lg-3">
                        <label class="d-block">&nbsp;</label>
                        <button type="submit" class="btn btn-primary w-100 shadow-sm rounded-3">
                            🔍 Cari Wisata
                        </button>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Filter Jenis Wisata -->
                    <div class="col-md-4">
                        <div class="bg-warning text-white px-3 py-2 rounded-top fw-bold">🏞️ Jenis Wisata</div>
                        <div class="border border-top-0 rounded-bottom p-3 shadow-sm bg-light">
                            @foreach ($jenisWisatas as $jenis)
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="jenis[]"
                                        value="{{ $jenis->name }}" id="jenis_{{ $jenis->id }}"
                                        {{ is_array(request('jenis')) && in_array($jenis->name, request('jenis')) ? 'checked' : '' }}>
                                    <label class="form-check-label"
                                        for="jenis_{{ $jenis->id }}">{{ $jenis->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Filter Rating Bintang -->
                    <div class="col-md-4">
                        <div class="bg-warning text-white px-3 py-2 rounded-top fw-bold">⭐ Rating</div>
                        <div class="border border-top-0 rounded-bottom p-3 shadow-sm bg-light">
                            @for ($i = 5; $i >= 1; $i--)
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="rating[]"
                                        value="{{ $i }}" id="rating_{{ $i }}"
                                        {{ is_array(request('rating')) && in_array($i, request('rating')) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="rating_{{ $i }}">
                                        @for ($j = 1; $j <= $i; $j++)
                                            ⭐
                                        @endfor
                                    </label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Filter Urutkan -->
                    <div class="col-md-4">
                        <div class="bg-warning text-white px-3 py-2 rounded-top fw-bold">📌 Urutkan</div>
                        <div class="border border-top-0 rounded-bottom p-3 shadow-sm bg-light">
                            <select name="sort" onchange="this.form.submit()" class="form-select shadow-sm rounded">
                                <option value="">🔁 Semua</option>
                                <option value="terbaru" {{ request('sort') == 'terbaru' ? 'selected' : '' }}>🆕 Terbaru
                                </option>
                                <option value="recommended" {{ request('sort') == 'recommended' ? 'selected' : '' }}>🔥
                                    Rekomendasi</option>
                                <option value="a-z" {{ request('sort') == 'a-z' ? 'selected' : '' }}>🔤 A-Z</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>



            <div class="row align-items-stretch">
                @forelse ($wisatas as $wisata)
                    <div class="col-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up">
                        <div class="media-entry">
                            <a href="{{ route('explore.show', $wisata->slug) }}">
                                <img src="{{ $wisata->images->first() ? Storage::url($wisata->images->first()->image_path) : asset('FE_wisata/images/default.jpg') }}"
                                    class="img-fluid">
                            </a>
                            <div class="bg-white m-body">
                                <span
                                    class="date">{{ \Carbon\Carbon::parse($wisata->uploaded_at)->translatedFormat('d F Y') }}</span>
                                <h3><a href="{{ route('explore.show', $wisata->slug) }}">{{ $wisata->title }}</a></h3>
                                <p>{{ \Illuminate\Support\Str::limit($wisata->short_description, 90) }}</p>
                                <a href="{{ route('explore.show', $wisata->slug) }}"
                                    class="more d-flex align-items-center float-start">
                                    <span class="label">Read More</span>
                                    <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Tidak ada wisata yang ditemukan.</p>
                @endforelse
            </div>

            {{ $wisatas->withQueryString()->links('pagination::bootstrap-5') }}

        </div>
    </div>
@endsection
