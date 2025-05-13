@extends('frontend.layout')

@section('content')
    {{-- <div class="hero overlay">
        <div class="img-bg rellax">
            <img src="{{ asset('FE_wisata/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-5">
                    <h1 class="heading" data-aos="fade-up">Jolotundo</h1>
                    <p class="mb-5" data-aos="fade-up"> VisitMojokerto hadir sebagai panduan digital yang memudahkan
                        wisatawan dalam menemukan dan menikmati kekayaan budaya, sejarah, dan keindahan alam Kota Mojokerto.
                    </p>
                    <div id="destination-controls">
                        <span class="prev me-3" data-controls="prev">
                            <span class="icon-chevron-left"></span>

                        </span>
                        <span class="next" data-controls="next">
                            <span class="icon-chevron-right"></span>

                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="img-content">
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide exploreitem-img-bg rellax"
                    style="background-image: url('{{ asset('FE_wisata/images/hero_1.jpg') }}');">
                </div>
                <div class="swiper-slide exploreitem-img-bg rellax"
                    style="background-image: url('{{ asset('FE_wisata/images/hero_2.jpg') }}');">
                </div>
                <div class="swiper-slide exploreitem-img-bg rellax"
                    style="background-image: url('{{ asset('FE_wisata/images/hero_3.jpg') }}');">
                </div>
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
                    <h1 class="text-content" data-aos="fade-up">Jolotundo</h1>
                    <p class="mb-5 text-black-50 fw-bolder" data-aos="fade-up">
                        Jolotundo adalah sebuah situs pemandian kuno yang terletak di lereng Gunung Penanggungan, Mojokerto,
                        Jawa Timur. Situs ini merupakan peninggalan kerajaan kuno, dibangun pada abad ke-10 Masehi pada masa
                        Raja Udayana dari Bali untuk menghormati kelahiran putranya, Airlangga.
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
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.6848253103176!2d112.59283827430329!3d-7.609234275215385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7876718ecc41ad%3A0x4adea6c2fe00abec!2sCandi%20Jolotundo!5e0!3m2!1sid!2sid!4v1746995870000!5m2!1sid!2sid"
                                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of
                        the Semantics, a large language ocean.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                    <blockquote>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.</p>
                    </blockquote>

                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question
                        Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia,
                        put her initial into the belt and made herself on the way.</p>

                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of
                        her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the
                        Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>

                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                    <blockquote>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.</p>
                    </blockquote>

                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question
                        Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia,
                        put her initial into the belt and made herself on the way.</p>

                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of
                        her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the
                        Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>

                </div>
                <div class="col-md-4 sidebar">
                    <div class="sidebar-box mb-4 p-4 bg-light rounded-4 shadow-sm border-start border-4 border-warning">
                        <h5 class="fw-bold mb-3">
                            <i class="bi bi-info-circle-fill text-warning me-2"></i>Informasi Wisata
                        </h5>
                        <hr class="my-2">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <i class="bi bi-clock-fill text-secondary me-2"></i>
                                <strong>Jam Buka:</strong> 08.00 - 16.00 WIB
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-map-fill text-secondary me-2"></i>
                                <strong>Jenis Wisata:</strong> Sejarah, Budaya, Alam
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-star-fill text-warning me-2"></i>
                                <strong>Rating Keseluruhan:</strong> ★★★★☆ (4.2)
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-calendar-event-fill text-secondary me-2"></i>
                                <strong>Tanggal Upload:</strong> 14 Mei 2026
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
@section('scripts')
    <!-- Pastikan Swiper JS dimuat -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi Swiper
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

            // Mengakses tombol kontrol
            document.querySelector('#destination-controls .prev').addEventListener('click', function() {
                heroSwiper.slidePrev();
            });

            document.querySelector('#destination-controls .next').addEventListener('click', function() {
                heroSwiper.slideNext();
            });
        });
    </script>
@endsection
