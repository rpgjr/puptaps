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
            <a class="navbar-brand" href="">
                <img src="{{ asset('img/pupLogo.png') }}" style="height: 50px"> <small> <b>PUP Taguig Alumni Portal </b></small>
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0" >
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
            <div class="d-flex">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button class="btn btn-primary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Login <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login as Alumni</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.getLogin') }}">Login as Admin</a></li>
                    </ul>
                    {{-- <a href="{{ route('login') }}" type="button" class="btn btn-primary" style="width: 120px">Login <i class="fa-solid fa-arrow-right-to-bracket"></i></a> --}}
                    <a href="{{ route('register') }}" type="button" class="btn btn-success" style="width: 120px">Register <i class="fa-solid fa-user-plus"></i></a>
                </div>

            </div>
            </div>
            </div>
        </div>
    </nav>
{{-- End NavBar --}}

    {{-- Greetings Section --}}
    <section class="greetings pt-5 pb-5" id="home">
        <div class="container container-greetings pt-5 pb-5">
            <div class="row">
                <h1 class="mb-4">PUP Taguig <br> Alumni Portal</h1><br>
                {{-- <div class="col-md glassBG"> --}}
                    <h6>Providing the best care and experience for our beloved alumni.<br>Hop in and relish, give opportunities to your co-alumni, and reminisce your life<br>here at PUP Taguig.</h6>
                {{-- </div> --}}
            </div>
        </div>
    </section>

    {{-- Forms Section --}}
    <section class="form-section" id="forms">
        <div class="container d-flex justify-content-center">
            <div class="row feature-design align-items-center">
                <div class="form-description">
                    <h2>Forms</h2>
                    <p>Here at PUP Taguig Alumni Portal, we centralized the forms that you need to answer before and after graduating to our Sintang Paaralan!</p>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-2">
                    <div class="col">
                        <div class="card h-100">
                        <img src="{{asset('img/pds.png')}}" class="card-img-top">
                            <div class="card-body">
                            <button type="button" class="btn btn-primary">Personal Data Sheet</button>
                            </div>
                    </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('img/sas.png')}}" class="card-img-top">
                            <div class="card-body">
                            <button type="button" class="btn btn-primary" btn-sm>Student's Affair and Services Questionnaire</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('img/eif.png')}}" class="card-img-top">
                            <div class="card-body">
                            <button type="button" class="btn btn-primary">Exit Interview Form</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Career Section --}}
    <section class="career-section" id="career">
        <div class="container container-career pt-5 pb-5">
        <div class="container d-flex justify-content-center">
            <div class="row feature-design align-items-center justify-content-center">
                <div class="career-description">
                    <h2>Careers</h2>
                    <p>You and Me can provide Job Advertisment to our kapwa Isko at Iska for them to have better careers</p>
                </div>
                <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active carousel-img">
                            <img src="{{asset('img/career.jpg')}}" class="d-block " alt="...">
                        </div>
                        <div class="carousel-item carousel-img">
                            <img src="{{asset('img/job-offer.jpg')}}" class="d-block" alt="...">
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tracer Section --}}
    <section class="section-tracer" id="tracer">
        <div class="container d-flex justify-content-center">
            <div class="row feature-design align-items-center justify-content-center">
                <div class="tracer-description">
                    <h2>Tracer</h2>
                    <p>You and Me can provide Job Advertisment to our kapwa Isko at Iska for them to have better careers</p>
                </div>
                <div class="col-md-6 align-items-center justify-content-start">
                    <img src="{{asset('img/tracer.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- JS --}}
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>

    {{-- Footer --}}
    <footer class="homepage-footer">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
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
            <p><a>PUP Taguig Facebook Page</a> </p>
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

        <hr class="my-2">
        <div class="row">
            <!-- Grid column -->
            <div class="col">
            <div class="p-2">© PUP Taguig Alumni Portal - [All4One]</div>
            </div>
            <!-- Grid column -->
        </div>
    </div>
    <!-- Grid container -->
    </footer>
    <!-- Footer -->
</body>
</html>
