<!DOCTYPE html>
<html lang="en">
<head>

    <livewire:components.header />
    @livewireStyles
    <title>@yield('page-title')</title>
</head>
    <body class="auth-body"
        style="
            background: url({{ asset('img/pup-rooms.jpg') }}) no-repeat center center fixed;
            background-size: cover;
            height: 100%;"
    >
        {{-- <nav class="navbar auth-navbar">
            <div class="container-fluid">
                <a class="text-white text-decoration-none" href="{{ route("landingPage") }}">
                    <img src="{{ asset('img/pupLogo.png') }}" style="height: 40px;">
                    <span class="ms-2 fw-bold">PUPT-Alumni Portal System</span>
                </a>
            </div>
        </nav> --}}

        @yield('content')

        {{-- JS --}}
        <livewire:components.scripts />
        @livewireScripts
    </body>
</html>
