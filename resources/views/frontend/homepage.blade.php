@extends('frontend.layout')

@section('content')
    <div class="hero overlay">

        <div class="img-bg rellax">
            <img src="{{ asset('FE_wisata/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
        </div>

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-8">

                    <h1 class="heading text-center" data-aos="fade-up">Solusi Rekomendasi Wisata untuk Kota Mojokerto</h1>
                    <p class="mb-5 text-center" data-aos="fade-up">Platform digital berbasis Collaborative Filtering untuk
                        menyediakan
                        rekomendasi destinasi wisata yang relevan, akurat, dan mendukung pengembangan sektor pariwisata
                        lokal.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="section section-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0">
                    <div class="image-stack mb-5 mb-lg-0">
                        <div class="image-stack__item image-stack__item--bottom" data-aos="fade-up">
                            <img src="{{ asset('FE_wisata/images/img_v_1.jpg') }}" alt="Image" class="img-fluid rellax ">
                        </div>
                        <div class="image-stack__item image-stack__item--top" data-aos="fade-up" data-aos-delay="100"
                            data-rellax-percentage="0.5">
                            <img src="{{ asset('FE_wisata/images/img_v_2.jpg') }}" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1">
                    <div>
                        <h2 class="heading mt-4 mb-3" data-aos="fade-up" data-aos-delay="100">Jelajahi berbagai destinasi
                            unggulan di Kota Mojokerto</h2>

                        <p data-aos="fade-up" data-aos-delay="200">Temukan pengalaman wisata yang autentik dan informatif,
                            dukung pengembangan pariwisata lokal, dan jadikan perjalanan Anda lebih terarah dan berkesan.
                        </p>
                        <p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="{{ route('explore') }}"
                                class="btn btn-warning">Selengkapnya</a></p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="section service-section-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="heading-content" data-aos="fade-up">
                        <h2>Fokus Pengembangan Kami</h2>
                        <p>Selain meningkatkan kualitas pengalaman wisata, platform ini juga bertujuan mendukung sinergi
                            antara sektor akademik, pemerintah daerah, dan pelaku industri pariwisata dalam mengembangkan
                            ekosistem wisata yang berkelanjutan.</p>
                        <p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="{{ route('about') }}"
                                class="btn btn-warning">Tentang Kami</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-1">
                                <span class="icon">
                                    <img src="{{ asset('FE_wisata/images/svg/06.svg') }}" alt="Image" class="img-fluid">
                                </span>
                                <div>
                                    <h3>Rekomendasi Destinasi</h3>
                                    <p>Dengan adanya sistem rekomendasi, pengguna dapat menemukan objek wisata yang sesuai
                                        dengan minat dan preferensi mereka, meningkatkan kepuasan saat berwisata.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-1">
                                <span class="icon">
                                    <img src="{{ asset('FE_wisata/images/svg/05.svg') }}" alt="Image" class="img-fluid">
                                </span>
                                <div>
                                    <h3>Dasar Referensi untuk Pengembangan Akademik</h3>
                                    <p>Hasil dan temuan dari sistem ini berpotensi menjadi landasan kolaborasi antara
                                        institusi pendidikan dan pemerintah daerah dalam pengembangan pariwisata dan ekonomi
                                        kreatif.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-1">
                                <span class="icon">
                                    <img src="{{ asset('FE_wisata/images/svg/09.svg') }}" alt="Image" class="img-fluid">
                                </span>
                                <div>
                                    <h3>Metode Collaborative Filtering</h3>
                                    <p>Implementasi metode Collaborative Filtering membuka ruang kerja sama strategis dengan
                                        berbagai pihak dalam membangun ekosistem digital pariwisata yang lebih adaptif dan
                                        berbasis data.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section section-3" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="row align-items-center justify-content-between  mb-5">
                <div class="col-lg-6" data-aos="fade-up">
                    <h2 class="heading mb-3">Rekomendasi wisata hari yang dapat dikungjungi</h2>
                    <p>Temukan destinasi wisata yang dapat Anda kunjungi hari ini di Kota Mojokerto, berdasarkan
                        tren terkini dan rekomendasi terbaik untuk pengalaman yang tak terlupakan.</p>
                </div>
                <div class="col-lg-4 text-md-end" data-aos="fade-up" data-aos-delay="100">
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

        <div class="destination-slider-wrap">
            <div class="destination-slider">
                <div class="destination">
                    <div class="thumb">
                        <img src="{{ asset('FE_wisata/images/img-1.jpg') }}" alt="Image" class="img-fluid">
                        <div class="price">$430</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                        <span class="meta">Maldives, Repbulic Maldives</span>
                    </div>
                </div>

                <div class="destination">
                    <div class="thumb">
                        <img src="{{ asset('FE_wisata/images/img-2.jpg') }}" alt="Image" class="img-fluid">
                        <div class="price">$560</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                        <span class="meta">Maldives, Repbulic Maldives</span>
                    </div>
                </div>

                <div class="destination">
                    <div class="thumb">
                        <img src="{{ asset('FE_wisata/images/img-3.jpg') }}" alt="Image" class="img-fluid">
                        <div class="price">$490</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                        <span class="meta">Maldives, Repbulic Maldives</span>
                    </div>
                </div>

                <div class="destination">
                    <div class="thumb">
                        <img src="{{ asset('FE_wisata/images/img-4.jpg') }}" alt="Image" class="img-fluid">
                        <div class="price">$490</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                        <span class="meta">Maldives, Repbulic Maldives</span>
                    </div>
                </div>


                <div class="destination">
                    <div class="thumb">
                        <img src="{{ asset('FE_wisata/images/img-5.jpg') }}" alt="Image" class="img-fluid">
                        <div class="price">$430</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                        <span class="meta">Maldives, Repbulic Maldives</span>
                    </div>
                </div>

                <div class="destination">
                    <div class="thumb">
                        <img src="{{ asset('FE_wisata/images/img-6.jpg') }}" alt="Image" class="img-fluid">
                        <div class="price">$560</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                        <span class="meta">Maldives, Repbulic Maldives</span>
                    </div>
                </div>

                <div class="destination">
                    <div class="thumb">
                        <img src="{{ asset('FE_wisata/images/img-7.jpg') }}" alt="Image" class="img-fluid">
                        <div class="price">$490</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                        <span class="meta">Maldives, Repbulic Maldives</span>
                    </div>
                </div>

                <div class="destination">
                    <div class="thumb">
                        <img src="{{ asset('FE_wisata/images/img-4.jpg') }}" alt="Image" class="img-fluid">
                        <div class="price">$490</div>
                    </div>
                    <div class="mt-4">
                        <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                        <span class="meta">Maldives, Repbulic Maldives</span>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="section">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0 order-lg-2" data-aos="fade-up">
                    <img src="{{ asset('FE_wisata/images/img-1.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="heading mb-4">Bagikan Pengalaman Wisatamu di Mojokerto</h2>
                    <p>Setiap perjalanan menyimpan cerita. Melalui ulasan yang Anda berikan, kami dapat terus meningkatkan
                        kualitas rekomendasi dan membantu wisatawan lain menemukan destinasi terbaik. Suarakan pendapat Anda
                        dan jadikan pengalaman Anda berarti bagi banyak orang.</p>
                    <p class="my-4" data-aos="fade-up" data-aos-delay="200"><a href="{{ route('feedback') }}"
                            class="btn btn-warning">Ulasan</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="section bg-light">
        <h2 class="heading mb-5 text-center">Testimoni pengguna</h2>

        <div class="text-center mb-5">
            <div id="prevnext-testimonial">
                <span class="prev me-3" data-controls="prev">
                    <span class="icon-chevron-left"></span>

                </span>
                <span class="next" data-controls="next">
                    <span class="icon-chevron-right"></span>

                </span>
            </div>
        </div>

        <div class="wide-slider-testimonial-wrap">
            <div class="wide-slider-testimonial">
                <div class="item">
                    <blockquote class="block-testimonial">
                        <div class="author">
                            {{-- <img src="{{ asset('FE_wisata/images/person_1.jpg') }}" alt="Free template by TemplateUX"> --}}
                            <h3>John Doe</h3>
                            <p class="position mb-5">CEO, Founder</p>
                        </div>
                        <p>
                        <div class="quote">&ldquo;</div>
                        &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                        Semantics, a large language ocean.&rdquo;</p>
                    </blockquote>
                </div>

                <div class="item">
                    <blockquote class="block-testimonial">
                        <div class="author">
                            {{-- <img src="{{ asset('FE_wisata/images/person_2.jpg') }}" alt="Free template by TemplateUX"> --}}
                            <h3>James Woodland</h3>
                            <p class="position mb-5">Designer at Facebook</p>
                        </div>
                        <p>
                        <div class="quote">&ldquo;</div>
                        &ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the
                        skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her
                        own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her
                        way.&rdquo;</p>

                    </blockquote>
                </div>

                <div class="item">
                    <blockquote class="block-testimonial">
                        <div class="author">
                            {{-- <img src="{{ asset('FE_wisata/images/person_3.jpg') }}" alt="Free template by TemplateUX"> --}}
                            <h3>Rob Smith</h3>
                            <p class="position mb-5">Product Designer at Twitter</p>
                        </div>
                        <p>
                        <div class="quote">&ldquo;</div>
                        &ldquo;A small river named Duden flows by their place and supplies it with the necessary
                        regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                        mouth.&rdquo;</p>
                    </blockquote>
                </div>

                <div class="item">
                    <blockquote class="block-testimonial">
                        <div class="author">
                            {{-- <img src="{{ asset('FE_wisata/images/person_1.jpg') }}" alt="Free template by TemplateUX"> --}}
                            <h3>John Doe</h3>
                            <p class="position mb-5">CEO, Founder</p>
                        </div>
                        <p>
                        <div class="quote">&ldquo;</div>
                        &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                        Semantics, a large language ocean.&rdquo;</p>
                    </blockquote>
                </div>

                <div class="item">
                    <blockquote class="block-testimonial">
                        <div class="author">
                            {{-- <img src="{{ asset('FE_wisata/images/person_2.jpg') }}" alt="Free template by TemplateUX"> --}}
                            <h3>James Woodland</h3>
                            <p class="position mb-5">Designer at Facebook</p>
                        </div>
                        <p>
                        <div class="quote">&ldquo;</div>
                        &ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the
                        skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her
                        own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her
                        way.&rdquo;</p>

                    </blockquote>
                </div>

                <div class="item">
                    <blockquote class="block-testimonial">
                        <div class="author">
                            {{-- <img src="{{ asset('FE_wisata/images/person_3.jpg') }}" alt="Free template by TemplateUX"> --}}
                            <h3>Rob Smith</h3>
                            <p class="position mb-5">Product Designer at Twitter</p>
                        </div>
                        <p>
                        <div class="quote">&ldquo;</div>
                        &ldquo;A small river named Duden flows by their place and supplies it with the necessary
                        regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                        mouth.&rdquo;</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 bg-warning">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center mb-3 mb-lg-0 text-lg-start">
                    <h3 class="text-white m-0">Mulailah perjalanan wisata dari sini.</h3>
                </div>
                <div class="col-lg-5 text-center text-lg-end">
                    <a href="{{ route('explore') }}" class="btn btn-outline-white">Jelajah</a>
                </div>
            </div>
        </div>
    </div>
@endsection
