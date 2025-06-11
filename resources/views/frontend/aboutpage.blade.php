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

                    <h1 class="heading" data-aos="fade-up">Tentang Kami</h1>
                    <p class="mb-5" data-aos="fade-up"> VisitMojokerto dirancang untuk menjangkau beragam kalangan dengan
                        kebutuhan informasi yang berbeda. Platform ini tidak hanya menjadi alat bantu wisata, tetapi juga
                        menjadi sarana peningkatan wawasan
                        dan kebanggaan terhadap daerah sendiri.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-2">
        <div class="container">

            {{-- Row 1 --}}
            <div class="row align-items-center justify-content-between mb-5">
                <!-- Kolom Kiri -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div>
                        <h2 class="heading-content mb-3 fw-bold" data-aos="fade-up" data-aos-delay="100">Apa itu
                            VisitMojokerto?</h2>
                        <p data-aos="fade-up" data-aos-delay="200">
                            VisitMojokerto adalah portal informasi wisata berbasis website yang dirancang untuk menjadi
                            jendela utama dalam mengeksplorasi keindahan, budaya, dan sejarah Kota Mojokerto. Website ini
                            hadir sebagai solusi atas kebutuhan akan informasi yang lengkap, akurat, dan mudah diakses bagi
                            wisatawan maupun masyarakat lokal.
                        </p>
                        <p data-aos="fade-up" data-aos-delay="300">
                            Dengan sistem rekomendasi cerdas dan tampilan ramah pengguna, VisitMojokerto menyajikan konten
                            visual dan informatif yang membantu pengunjung menemukan tempat wisata terbaik sesuai minat
                            mereka.
                        </p>
                        <p data-aos="fade-up" data-aos-delay="400">
                            Kami juga berupaya menjadi penghubung antara destinasi lokal dengan masyarakat luas, termasuk
                            pelaku UMKM, pengelola tempat wisata, dan pemerintah daerah, guna mendorong sinergi dalam
                            pengembangan pariwisata berkelanjutan.
                        </p>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <img src="{{ asset('images/about_1.jpg') }}" alt="Tentang VisitMojokerto" class="img-fluid rounded"
                        data-aos="fade-left" data-aos-delay="200">
                </div>
            </div>

            {{-- Row 2 --}}
            <div class="row align-items-start justify-content-between">
                <!-- Kolom Kiri -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div>
                        <h2 class="heading-content mb-3 fw-bold" data-aos="fade-up" data-aos-delay="100">Siapa Pengguna
                            Kami?</h2>
                        <p data-aos="fade-up" data-aos-delay="200">
                            Website ini melayani dua kategori utama pengguna:
                        </p>
                        <div data-aos="fade-up" data-aos-delay="300">
                            <h3 class="comment-list">Wisatawan (Tourist)</h3>
                            <p>
                                Pengunjung dari luar daerah yang ingin mengeksplorasi berbagai destinasi liburan, budaya,
                                sejarah,
                                maupun kuliner di Kota Mojokerto.
                            </p>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="400">
                            <h3 class="comment-list">Penduduk Lokal (Local Residents)</h3>
                            <p>
                                Masyarakat Mojokerto yang mencari referensi tempat rekreasi, acara lokal, atau ingin
                                mengenal lebih jauh
                                kekayaan wisata kotanya sendiri.
                            </p>
                        </div>
                    </div>
                </div>


                <!-- Kolom Kanan -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div>
                        <h2 class="heading-content mb-3 fw-bold" data-aos="fade-up" data-aos-delay="100">Mengapa Kami Ada?
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="200">
                            Sektor pariwisata memiliki potensi besar dalam mendukung pertumbuhan ekonomi dan membuka
                            lapangan kerja, namun sayangnya banyak destinasi wisata yang belum dikenal luas karena minimnya
                            media promosi yang efektif. VisitMojokerto hadir untuk menjawab tantangan tersebut dengan
                            menyediakan informasi yang:
                        </p>
                        <ul data-aos="fade-up" data-aos-delay="300">
                            <li>Akurat dan terkini</li>
                            <li>Berbasis minat pengguna</li>
                            <li>Mudah diakses secara digital</li>
                            <li>Terintegrasi dengan sistem rekomendasi</li>
                        </ul>
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
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-1">
                                <span class="icon">
                                    <img src="{{ asset('images/svg/06.svg') }}" alt="Image" class="img-fluid">
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
                                    <img src="{{ asset('images/svg/05.svg') }}" alt="Image" class="img-fluid">
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
                                    <img src="{{ asset('images/svg/09.svg') }}" alt="Image" class="img-fluid">
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
