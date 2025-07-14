<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Visit Mojokerto')</title>

    <link rel="icon" type="image/png" href="{{ asset('images/LogoVisit.png') }}" />

    <meta name="description"
        content="Portal wisata resmi Kota Mojokerto. Temukan tempat wisata, kuliner, dan budaya terbaik di sini." />
    <meta name="keywords" content="wisata, Mojokerto, tempat wisata, liburan, budaya Mojokerto" />

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Brygada+1918:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@400;700&display=swap"
        rel="stylesheet" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <!-- Tiny Slider -->
    <link href="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.4/dist/tiny-slider.css" rel="stylesheet" />

    <!-- Vite CSS & JS -->
    @vite(['resources/css/style.css', 'resources/js/custom.js'])
</head>

<body>

    <!-- Mobile Menu -->
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <!-- Navigation -->
    <nav class="site-nav pt-3">
        <div class="container">
            <div class="site-navigation">
                <div class="row">
                    <div class="col-8 col-lg-3">
                        <a href="{{ route('home') }}" class="logo m-0 float-start">Wisata Mojokerto</a>
                    </div>
                    <div class="col-lg-6 d-none d-lg-inline-block text-center nav-center-wrap">
                        <ul class="js-clone-nav text-center site-menu p-0 m-0 list-unstyled">
                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a
                                    href="{{ route('home') }}">Beranda</a></li>
                            <li class="{{ request()->is('about') ? 'active' : '' }}"><a
                                    href="{{ route('about') }}">Tentang</a></li>
                            <li class="{{ request()->is('explore') || request()->is('explore/*') ? 'active' : '' }}"><a
                                    href="{{ route('explore') }}">Jelajah</a></li>
                            <li class="{{ request()->is('feedback') ? 'active' : '' }}"><a
                                    href="{{ route('feedback') }}">Saran</a></li>
                        </ul>
                    </div>
                    <div class="col-4 col-lg-3 text-lg-end">
                        <ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu list-unstyled">
                            <li class="cta-button"><a href="{{ route('login') }}">Admin</a></li>
                        </ul>

                        <a href="#"
                            class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                            data-toggle="collapse" data-target="#main-navbar">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>VisitMojokerto<span class="text-primary">.</span></h3>
                        <p>Website ini hadir sebagai solusi untuk mempermudah wisatawan dalam menemukan informasi wisata
                            yang akurat, relevan, dan sesuai dengan kebutuhan mereka.</p>
                    </div>
                </div>

                <div class="col-lg-2 ms-auto">
                    <div class="widget">
                        <h3>Menu<span class="text-primary">.</span></h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Tentang kami</a></li>
                            <li><a href="#">Jelajah wisata</a></li>
                            <li><a href="#">Rekomendasi</a></li>
                            <li><a href="#">Kotak saran</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="widget">
                        <h3>Alamat<span class="text-primary">.</span></h3>
                        <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                        <ul class="list-unstyled links">
                            <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                            <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="media-entry">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31647.551320447532!2d112.41863126153487!3d-7.471445970909537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780e3c80e50d83%3A0x3027a76e352bd40!2sKota%20Mojokerto!5e0!3m2!1sid!2sid!4v1746873166614!5m2!1sid!2sid"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> VisitMojokerto. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tiny-slider@2.9.4/dist/min/tiny-slider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/rellax@1.12.1/rellax.min.js"></script>

</body>

</html>
