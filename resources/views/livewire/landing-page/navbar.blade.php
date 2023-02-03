<!-- Landing Page Navbar -->
<nav class="navbar navbar-expand-lg sticky-top landing-navbar py-1">
    <div class="container-fluid navbar-inner">
        <a class="navbar-brand" href="{{ route('landingPage') }}">
            <img src="{{ asset('img/pupLogo.png') }}" style="height: 40px">
            {{-- <p class="d-none d-sm-inline ms-2 pupt-title">PUPT - Alumni Portal System</p> --}}
            <span class="d-none d-sm-inline ms-2 fw-bold fs-6 text-white">PUPT-Alumni Portal System</span>
        </a>

        <div class="btn-login-group">
            <a href="{{ route('login') }}" type="button" class="auth-login-button me-1 ms-0">Login <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
            <a href="{{ route('register') }}" type="button" class="auth-login-button me-0 ms-0">Sign Up <i class="fa-solid fa-user-plus"></i></a>
        </div>
    </div>
</nav>
