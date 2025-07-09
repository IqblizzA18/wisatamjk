<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/LogoVisit.png') }}">
    <title>Wisata</title>

    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}"> --}}
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    {{-- <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a>Selamat Datang</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            @yield('content')
        </div>
    </div>
    <!-- /.login-box -->

    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}" defer></script>
</body>

</html>
