<!-- Landing Page Navbar -->
<nav class="navbar navbar-expand-lg sticky-top landing-navbar py-1">
    <div class="container-fluid navbar-inner animate__animated animate__fadeInLeftBig">
        <a class="navbar-brand animate__animated animate__slideInDown" href="{{ route('landingPage') }}">
            <img src="{{ asset('img/pupLogo.png') }}" style="height: 40px">
            {{-- <img src="{{ asset('img/puptaps-bilog.png') }}" style="height: 40px"> --}}
            {{-- <p class="d-none d-sm-inline ms-2 pupt-title">PUPT - Alumni Portal System</p> --}}
            <span class="d-none d-sm-inline ms-2 fw-bold fs-6 text-white ">PUPT-Alumni Portal System</span>
        </a>

        <div class="d-flex">
            {{-- <a href="{{ route('login') }}" type="button" class="auth-login-button me-1 ms-0 animate__animated animate__zoomIn animate__delay-.5s">Login <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
            <a href="{{ route('register') }}" type="button" class="auth-login-button me-0 ms-0 animate__animated animate__zoomIn animate__delay-1s">Sign Up <i class="fa-solid fa-user-plus"></i></a> --}}
            <a href="{{ route('login') }}" type="button" class="text-decoration-none cssbuttons-io-button fs-7 me-1 animate__animated animate__zoomIn animate__delay-1s"> <span class="fs-7">Login</span>
                <div class="icon"><i class="fa-solid fa-arrow-right-to-bracket fs-7 text-light"></i>
                </div>
            </a>
            <a href="{{ route('register') }}" type="button" class="text-decoration-none cssbuttons-io-button fs-7 animate__animated animate__zoomIn animate__delay-2s"> <span class="fs-7">Sign Up</span>
                <div class="icon"><i class="fa-solid fa-user-plus fs-7 text-light"></i>
                </div>
            </a>
        </div>
    </div>
</nav>
