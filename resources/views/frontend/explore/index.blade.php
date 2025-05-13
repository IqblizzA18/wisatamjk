@extends('frontend.layout')

@section('content')
    <div class="hero overlay">
        <div class="img-bg rellax">
            <img src="{{ asset('FE_wisata/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
        </div>
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
            <form action="#" method="GET" class="mb-5">
                <div class="row g-3 align-items-end mb-4">
                    <!-- Input Judul Wisata -->
                    <div class="col-lg-6">
                        <label for="judul" class="form-label fw-semibold">Judul Wisata</label>
                        <input type="text" name="judul" id="judul" class="form-control shadow-sm rounded-3"
                            placeholder="Cari berdasarkan judul wisata...">
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
                            @foreach (['Alam', 'Non Alam', 'Budaya', 'Sejarah'] as $jenis)
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="jenis[]"
                                        value="{{ $jenis }}" id="jenis_{{ $jenis }}">
                                    <label class="form-check-label"
                                        for="jenis_{{ $jenis }}">{{ $jenis }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Filter Rating Bintang -->
                    <div class="col-md-4">
                        <div class="bg-warning text-white px-3 py-2 rounded-top fw-bold">⭐ Rating</div>
                        <div class="border border-top-0 rounded-bottom p-3 shadow-sm bg-light">
                            @for ($i = 1; $i <= 5; $i++)
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" name="rating[]"
                                        value="{{ $i }}" id="rating_{{ $i }}">
                                    <label class="form-check-label" for="rating_{{ $i }}">
                                        {{ str_repeat('⭐', $i) }} & Up
                                    </label>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <!-- Filter Urutkan -->
                    <div class="col-md-4">
                        <div class="bg-warning text-white px-3 py-2 rounded-top fw-bold">📌 Urutkan</div>
                        <div class="border border-top-0 rounded-bottom p-3 shadow-sm bg-light">
                            <select name="sort" class="form-select shadow-sm rounded">
                                <option value="">🔁 Semua</option>
                                <option value="terbaru">🆕 Terbaru</option>
                                <option value="terpopuler">🔥 Terpopuler</option>
                                <option value="a-z">🔤 A-Z</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>


            <div class="row align-items-stretch">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ asset('FE_wisata/images/gal_1.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
                            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ asset('FE_wisata/images/gal_2.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
                            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ asset('FE_wisata/images/gal_3.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
                            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ asset('FE_wisata/images/gal_4.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
                            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ asset('FE_wisata/images/gal_1.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
                            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ asset('FE_wisata/images/gal_2.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
                            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="media-entry">
                        <a href="index.html">
                            <img src="{{ asset('FE_wisata/images/gal_3.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
                            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="media-entry">
                        <a href="index.html">
                <img src="{{ asset('FE_wisata/images/gal_4.jpg') }}" alt="Image" class="img-fluid">
                        </a>
                        <div class="bg-white m-body">
                            <span class="date">May 14, 2020</span>
                            <h3><a href="index.html">Far far away, behind the word mountains</a></h3>
                            <p>Vokalia and Consonantia, there live the blind texts. Separated they live.</p>
                            <a href="single.html" class="more d-flex align-items-center float-start">
                                <span class="label">Read More</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>



                <nav class="mt-5" aria-label="Page navigation example" data-aos="fade-up" data-aos-delay="100">
                    <ul class="custom-pagination pagination">
                        <li class="page-item prev"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item next"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
