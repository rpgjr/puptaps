<!DOCTYPE html>
<html lang="en">
<head>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <title>@yield('page-title')</title>
    <link rel="icon" href="{{ asset('img/pupLogo.png') }}" type="image/icon type">
</head>
<body>

{{-- NavBar --}}
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ asset('img/pupLogo.png') }}" style="height: 50px"> <small> <b>PUP Taguig Alumni Portal </b></small>
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0" >
                <li class="nav-item">
                    <a class="nav-link @yield('home-active')" aria-current="page" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('form-active')" aria-current="page" href="#forms">Forms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('job-active')" aria-current="page" href="">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('tracer-active')" aria-current="page" href="">Tracer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('profile-active')" aria-current="page" href="">Profile</a>
                </li>
            </ul>
            <div class="d-flex">
                <div class="dropdown">
                    <button class="dropdown-toggle account-name" type="" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-circle-user"></i> {{ Auth::user()->username }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item @yield('setting-active')" aria-current="page" href="">Account Settings</a></li>
                        <li><a class="dropdown-item" href="#">Feedback</a></li>
                        <li><a class="dropdown-item" href="#">Report a Problem</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
            </div>
        </div>
    </nav>
{{-- End NavBar --}}

    @yield('content')

    {{-- JS --}}
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>


 <!-- Footer -->
<footer class="text-lg-start text-white" style="background-color: #45526e">
    <section class="p-3 pt-0">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-8 text-center text-md-start">
            <div class="p-3">
              © 2022 PUP Taguig Alumni Portal System
            </div>
            </div>

            <div class="col-md-3 col-lg-4 text-center">
            Polytechnic University of the Philippines-Taguig
             </div>
        </div>
    </section>
 </footer>
<!-- Footer -->
</body>
</html>
