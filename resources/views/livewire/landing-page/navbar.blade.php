<!-- Landing Page Navbar -->
<nav class="navbar navbar-expand-lg sticky-top landing-navbar py-1" id="navbar">
    <div class="container-fluid navbar-inner animate__animated animate__fadeInLeftBig">
        <a class="navbar-brand animate__animated animate__slideInDown" href="{{ route('landingPage') }}">
            <img src="{{ asset('img/pupLogo.png') }}" style="height: 40px">
            <span class="d-none d-sm-inline ms-2 fw-bold fs-6 text-white ">PUPT-Alumni Portal System</span>
        </a>

        <div class="d-flex">
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
