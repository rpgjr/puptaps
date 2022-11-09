<!-- Landing Page Navbar -->
<nav class="navbar navbar-dark navbar-expand-lg fixed-top">
    <div class="container-fluid navbar-inner">
        <a class="navbar-brand fw-bold" href="{{ route('landingPage') }}">
            <img src="{{ asset('img/pupLogo.png') }}" style="height: 50px">
            <span class="fw-normal d-none d-sm-inline ms-2 pupt-title">PUPTAPS</span>
        </a>

        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ route('login') }}" type="button" class="btn btn-warning btn-md" style="width: 120px">Login <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
            <a href="{{ route('register') }}" type="button" class="btn btn-danger btn-md" style="width: 120px">Register <i class="fa-solid fa-user-plus"></i></a>
        </div>
    </div>
</nav>
