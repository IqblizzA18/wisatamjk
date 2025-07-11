@extends('frontend.layout')

@section('content')
    <div class="hero overlay">
        @foreach ($backgrounds as $background)
            <div class="img-bg rellax">
                <img src="{{ Storage::url($background->background_image) }}" alt="Image" class="img-fluid">
            </div>
        @endforeach
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-5">
                    <h1 class="heading" data-aos="fade-up">Temukan Wisata</h1>
                    <p class="mb-5" data-aos="fade-up">
                        VisitMojokerto hadir sebagai panduan digital untuk menjelajahi kekayaan budaya dan alam Mojokerto.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            {{-- Form Filter --}}
            <form method="GET" action="{{ route('explore') }}" class="mb-5">
                <div class="row g-3 align-items-end mb-4">
                    <div class="col-lg-6">
                        <label class="form-label fw-semibold">Judul Wisata</label>
                        <input type="text" name="judul" class="form-control shadow-sm" placeholder="Cari wisata..."
                            value="{{ request('judul') }}">
                    </div>
                    <div class="col-lg-3">
                        <label class="d-block">&nbsp;</label>
                        <button type="submit" class="btn btn-warning w-100 shadow-sm">🔍 Cari</button>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="bg-warning text-white px-3 py-2 rounded-top fw-bold">Jenis Wisata</div>
                        <div class="border border-top-0 rounded-bottom p-3 bg-light">
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

                    <div class="col-md-4">
                        <div class="bg-warning text-white px-3 py-2 rounded-top fw-bold">Rating</div>
                        <div class="border border-top-0 rounded-bottom p-3 bg-light">
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

                    <div class="col-md-4">
                        <div class="bg-warning text-white px-3 py-2 rounded-top fw-bold">Urutkan</div>
                        <div class="border border-top-0 rounded-bottom p-3 bg-light">
                            <select name="sort" onchange="this.form.submit()" class="form-select shadow-sm">
                                <option value="cbf"
                                    {{ request('sort') === 'cbf' || !request('sort') ? 'selected' : '' }}>Rekomendasi
                                </option>
                                <option value="a-z" {{ request('sort') === 'a-z' ? 'selected' : '' }}>A-Z</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>

            {{-- List Wisata --}}
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
                                <p class="text-muted small"><i class="fas fa-eye"></i> {{ $wisata->visit_count }} kali
                                    dikunjungi</p>
                                <a href="{{ route('explore.show', $wisata->slug) }}"
                                    class="more d-flex align-items-center">
                                    <span class="label">Read More</span>
                                    <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Tidak ada wisata ditemukan.</p>
                @endforelse
            </div>

            {{ $wisatas->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
