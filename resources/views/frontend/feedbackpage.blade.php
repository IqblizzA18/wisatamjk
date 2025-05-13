@extends('frontend.layout')

@section('content')
    <div class="hero overlay">
        <div class="img-bg rellax">
            <img src="{{ asset('FE_wisata/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-start">
                <div class="col-lg-5">
                    <h1 class="heading" data-aos="fade-up">Saran & Masukan</h1>
                    <p class="mb-5" data-aos="fade-up">VisitMojokerto hadir untuk memberikan pengalaman wisata yang lebih
                        baik. Sampaikan saran dan masukan Anda untuk membantu kami meningkatkan layanan dan destinasi wisata
                        di Kota Mojokerto.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="0">
                    <h2 class="heading mb-5">Berikan Masukan & Saran</h2>
                </div>
            </div>
            <div class="row">
                <!-- Peta di sebelah kiri -->
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31647.551320447532!2d112.41863126153487!3d-7.471445970909537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780e3c80e50d83%3A0x3027a76e352bd40!2sKota%20Mojokerto%2C%20Mergelo%2C%20Kota%20Mojokerto%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1746873166614!5m2!1sid!2sid"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Formulir Masukan di sebelah kanan -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <form action="#" method="POST" class="mb-5">
                        <div class="row g-3">
                            <!-- Input Nama -->
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" placeholder="Nama Anda" required>
                            </div>

                            <!-- Input Email -->
                            <div class="col-12 mb-3">
                                <input type="email" class="form-control" placeholder="Email Anda" required>
                            </div>

                            <!-- Input Subjek -->
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" placeholder="Subjek" required>
                            </div>

                            <!-- Input Pesan -->
                            <div class="col-12 mb-3">
                                <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Pesan Anda" required></textarea>
                            </div>

                            <!-- Tombol Kirim -->
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary shadow-sm rounded-3">
                                    Kirim
                                </button>
                            </div>
                        </div>
                    </form>
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
    <div class="section">
        <div class="container">
            <div class="row justify-content-between align-items-stretch">
                <!-- align-items-stretch untuk menyamakan tinggi kolom -->
                <div class="heading-content text-center mb-4" data-aos="fade-up">
                    <h2 class="heading">Pertanyaan yang Sering Diajukan</h2>
                    <p>Temukan jawabannya dengan mudah, dan jika Anda membutuhkan informasi lebih lanjut, tim kami selalu
                        siap membantu Anda kapan saja!</p>
                </div>

                <!-- Left Accordion -->
                <!-- Accordion Kiri -->
                <div class="col-lg-6 mb-lg-0">
                    <div class="custom-accordion" id="accordion_1">
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Kenapa Harus ke Mojokerto?
                                </button>
                            </h2>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    Mojokerto bukan hanya kota sejarah—ia adalah pintu gerbang ke kejayaan Majapahit. Setiap
                                    sudutnya menawarkan pengalaman autentik dan memikat.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Bingung Mulai dari Mana?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    Tenang, kamu bisa mulai dari situs Majapahit, lalu lanjut ke air terjun, dan akhiri
                                    dengan kuliner khas Mojokerto. Kami bantu rancang rutenya.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Rekomendasi Sesuai Selera
                                </button>
                            </h2>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    Sistem pintar kami menyarankan destinasi berdasarkan minatmu. Alam? Sejarah? Kuliner?
                                    Semua bisa kamu sesuaikan sendiri.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Accordion -->
                <!-- Accordion Kanan -->
                <div class="col-lg-6 mt-lg-0">
                    <div class="custom-accordion" id="accordion_2">
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Butuh Teman Jelajah?
                                </button>
                            </h2>
                            <div id="collapseFour" class="collapse show" aria-labelledby="headingFour"
                                data-bs-parent="#accordion_2">
                                <div class="accordion-body">
                                    Nikmati pengalaman liburan bareng komunitas lokal atau traveler lain yang punya minat
                                    sama. Seru dan lebih hemat!
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Siap Liburan? Yuk Mulai!
                                </button>
                            </h2>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordion_2">
                                <div class="accordion-body">
                                    Cukup pilih tanggal dan minatmu, kami bantu atur semuanya. Petualanganmu di Mojokerto
                                    tinggal satu klik lagi!
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Promo & Diskon Spesial
                                </button>
                            </h2>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordion_2">
                                <div class="accordion-body">
                                    Dapatkan penawaran menarik untuk paket wisata Mojokerto. Terbatas hanya untuk pendaftar
                                    awal—buruan daftar!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
