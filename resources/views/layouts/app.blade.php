<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Admin Visit Mojokerto')</title>
    <link rel="icon" href="{{ asset('images/LogoVisit.png') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- AdminLTE -->
    <link href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css" rel="stylesheet" />

    @stack('styles')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('admin.profile.show') }}" class="dropdown-item">
                            <i class="fas fa-user mr-2"></i> Profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="dropdown-item"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                            </a>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="{{ asset('images/LogoVisit.png') }}" alt="Logo" class="brand-image elevation-3"
                    style="object-fit: contain; opacity: .9;" />
                <span class="brand-text font-weight-light">Visit Mojokerto</span>
            </a>

            @include('layouts.navigation')
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper pt-4">
            <section class="content">
                <div class="container-fluid">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                        </div>
                    @endif

                    @if (session('message'))
                        <div class="alert alert-{{ session('alert-type', 'info') }} alert-dismissible fade show">
                            <strong>{{ session('message') }}</strong>
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                        </div>
                    @endif

                    @yield('content')
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">Admin Visit Mojokerto</div>
            <strong>&copy; {{ date('Y') }} Admin Visit Mojokerto.</strong>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    @stack('scripts')
</body>

</html>
