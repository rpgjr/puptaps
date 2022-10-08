<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

    <title>@yield('page-title')</title>
    <link rel="icon" href="{{ asset('img/pupLogo.png') }}" type="image/icon type">
</head>
{{--  style="
    background: url({{ asset('img/pupBG.jpg') }}) no-repeat center center fixed;
    background-size: cover;
    height: 100%;" --}}
<body>

{{-- NavBar --}}
<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ route('landingPage') }}">
            <img src="{{ asset('img/pupLogo.png') }}" style="height: 50px"> <small>PUP Taguig Alumni Portal</small>
        </a>
    </div>
</nav>
{{-- End NavBar --}}

    @yield('content')

    {{-- JS --}}
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
