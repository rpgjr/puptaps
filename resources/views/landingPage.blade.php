<!DOCTYPE html>
<html lang="en">
<head>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">

    <title>Landing Page</title>
    <link rel="icon" href="{{ asset('img/pupLogo.png') }}" type="image/icon type">
</head>
<body>

{{-- NavBar --}}
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ route('landingPage') }}">
                <img src="{{ asset('img/pupLogo.png') }}" style="height: 50px"> <small>PUP Taguig Alumni Portal</small>
            </a>

            <div class="d-flex">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button class="btn btn-primary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Login <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login as Alumni</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.getLogin') }}">Login as Admin</a></li>
                    </ul>
                    <a href="{{ route('register') }}" type="button" class="btn btn-success" style="width: 120px">Register <i class="fa-solid fa-user-plus"></i></a>
                </div>
            </div>
        </div>
    </nav>
    {{-- <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="">
                <img src="{{ asset('img/pupLogo.png') }}" style="height: 50px"> <small>PUP Taguig Alumni Portal</small>
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0" >
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#forms">Forms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#career">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#tracer">Tracer</a>
                </li>
            </ul>
            <div class="mx-auto d-flex">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button class="btn btn-primary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Login <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login as Alumni</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.getLogin') }}">Login as Admin</a></li>
                    </ul>
                    <a href="{{ route('register') }}" type="button" class="btn btn-success" style="width: 120px">Register <i class="fa-solid fa-user-plus"></i></a>
                </div>
            </div>
            </div>
            </div>
        </div>
    </nav> --}}
{{-- End NavBar --}}

    {{-- Greetings Section --}}
    <section class="py-5" id="home"
    style="
        background: url({{ asset('img/pup-bg.png') }}) no-repeat center center fixed;
        background-size: cover;
        height: 100%;
        color: #000000;
    ">
        <div class="container container-greetings py-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="welcome-title mb-5">PUP Taguig Alumni Portal</h1>

                    <p class="mb-4">Providing the best care and experience for our beloved alumni. Hop in and relish, give opportunities to your co-alumni, and reminisce your life here at PUP Taguig.</p>

                    <div class="buttons">
                        <button type="button" class="btn btn-info">Learn More</button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container container-box">
            <div class="row justify-content-center align-items-center gap-5">
                <div class="col-md-3 my-2">
                    <div class="card">
                        <img src="{{ asset('img/forms.jpg') }}" class="card-img-top" alt="..." style="border-bottom: 1px solid #D5D8DC;">
                        <div class="card-body">
                            <h3 class="fw-bold">Forms</h3>
                            <p class="card-text">Here at PUP Taguig Alumni Portal, we centralized the forms that you need to answer before and after graduating to our Sintang Paaralan!</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 my-2">
                    <div class="card">
                        <img src="{{ asset('img/1.jpg') }}" class="card-img-top" alt="..." style="border-bottom: 1px solid #D5D8DC;">
                        <div class="card-body">
                            <h3 class="fw-bold">Tracer</h3>
                            <p class="card-text">You can update you information in the Tracer tab for us to check your current employment status. It will possitively help our university in assisting you in your career.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 my-2">
                    <div class="card">
                        <img src="{{ asset('img/career.jpg') }}" class="card-img-top" alt="..." style="border-bottom: 1px solid #D5D8DC;">
                        <div class="card-body">
                            <h3 class="fw-bold">Career</h3>
                            <p class="card-text">You and Me can provide Job Advertisment to our kapwa Isko at Iska for them to have better careers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="homepage-footer p-4">
        <!-- Grid container -->
        <div class="container">
            <!--Grid row-->
            <div class="row">
                <div class="col">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact Us</h6>
                <p><a>PUP Taguig No.</a></p>
                </div>
                <!-- Grid column -->
                <div class="col">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                    Stay Connected
                </h6>
                <p><a href="">PUP Taguig Facebook Page</a> </p>
                <p><a>Alumni Portal Facebook Page</a></p>
                <p><a>CSC Facebook Page</a></p>
                </div>
                <!-- Grid column -->
                <div class="col">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Need help?</h6>
                    <p><a>FAQs</a></p>
                    <p><a>Report a Problem</a></p>
                </div>
                <!-- Grid column -->
            </div>
            <!--Grid row-->

            <hr>
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-12">
                    <div class="">© PUP Taguig Alumni Portal - [All4One]</div>
                </div>
                <!-- Grid column -->
            </div>
        </div>
        <!-- Grid container -->
    </footer>
    <!-- Footer -->


    {{-- JS --}}
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
