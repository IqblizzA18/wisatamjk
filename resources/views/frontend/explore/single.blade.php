@extends('frontend.layout')

@section('content')
    <div class="img-content">
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">
                @forelse ($wisata->images as $image)
                    <div class="swiper-slide exploreitem-img-bg rellax"
                        style="background-image: url('{{ Storage::url($image->image_path) }}');">
                    </div>
                @empty
                    <div class="swiper-slide exploreitem-img-bg rellax"
                        style="background-image: url('{{ asset('FE_wisata/images/hero_2.jpg') }}');">
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Kontrol swiper -->
        <div id="hero-swiper-controls">
            <span class="prev me-3" data-controls="prev">
                <span class="icon-chevron-left"></span>
            </span>
            <span class="next" data-controls="next">
                <span class="icon-chevron-right"></span>
            </span>
        </div>

        <div class="hero container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-5">
                    <a href="{{ route('explore') }}" data-aos="fade-up">
                        <p class="text-primary">← Kembali</p>
                    </a>
                    <h1 class="text-content" data-aos="fade-up">{{ $wisata->title }}</h1>
                    <p class="mb-5 text-white-100 fw-bolder" data-aos="fade-up">
                        {{ $wisata->short_description }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container mb-0">
            <div class="row">
                <div class="col-12 col-md-8 blog-content mx-auto px-3 px-md-0">
                    <div class="media-entry mb-4">
                        <div class="ratio ratio-16x9 shadow rounded">
                            <iframe src="{{ $wisata->google_maps_url }}" width="100%" height="350" style="border:0;"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    @if ($wisata->paragraph_1)
                        <blockquote>
                            <p>{{ $wisata->paragraph_1 }}</p>
                        </blockquote>
                    @endif

                    @foreach (['paragraph_2', 'paragraph_3', 'paragraph_4', 'paragraph_5'] as $para)
                        @if (!empty($wisata->$para))
                            <blockquote>
                                <p>{{ $wisata->$para }}</p>
                            </blockquote>
                        @endif
                    @endforeach
                </div>

                <div class="col-md-4 sidebar">
                    <div class="sidebar-box mb-4 p-4 bg-light rounded-4 shadow-sm border-start border-4 border-warning">
                        <h5 class="fw-bold mb-3">
                            <i class="me-2"></i>Informasi Wisata
                        </h5>
                        <hr class="my-2">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <strong>Jam Buka:</strong> {{ $wisata->opening_hours }}
                            </li>
                            <li class="mb-2">
                                <strong>Jenis Wisata:</strong> {{ $wisata->jenisWisata->name }}
                            </li>
                            <li class="mb-2">
                                <strong>Rating:</strong>
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $wisata->rating)
                                        <i class="text-warning">★</i>
                                    @endif
                                @endfor
                                <span>({{ $wisata->rating }})</span>
                            </li>

                            <li class="mb-2">
                                <strong>Tanggal Upload:</strong>
                                {{ \Carbon\Carbon::parse($wisata->uploaded_at)->translatedFormat('d F Y') }}
                            </li>
                            <li class="mb-2">
                                <strong>Dikunjungi:</strong> {{ $wisata->visit_count }} kali
                            </li>


                        </ul>
                    </div>

                    <div class="sidebar-box p-4 bg-warning bg-opacity-25 rounded shadow-sm">
                        <h5 class="text-black fw-bold">Berikan Penilaianmu</h5>
                        <p>Setiap perjalanan menyimpan cerita. Melalui ulasan yang Anda berikan, kami dapat terus
                            meningkatkan kualitas rekomendasi dan membantu wisatawan lain menemukan destinasi terbaik.</p>
                        <div class="text-center mt-3">
                            <a href="{{ route('feedback') }}" class="btn btn-warning fw-semibold">Ulasan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const heroSwiper = new Swiper(".heroSwiper", {
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                }
            });

            document.querySelector('#hero-swiper-controls .prev').addEventListener('click', function() {
                heroSwiper.slidePrev();
            });

            document.querySelector('#hero-swiper-controls .next').addEventListener('click', function() {
                heroSwiper.slideNext();
            });
        });
    </script>
@endsection
