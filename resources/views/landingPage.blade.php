<!DOCTYPE html>
<html lang="en">
<head>

    <!-- CSS -->
    @livewireStyles
    <livewire:components.header />
    <title>Landing Page</title>

</head>
<body>

    <!-- Navbar -->
    <livewire:landing-page.navbar />

    <!-- Start Main Contents -->
    <main>

        <!-- Section: Greetings -->
        <livewire:landing-page.greetings />

        <!-- Section: Features -->
        <livewire:landing-page.features />

        {{-- Section Features --}}
        {{-- <section class="features">
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
        </section> --}}
    </main>
    <!-- End Main Contents -->

    <!-- Footer -->
    <livewire:landing-page.footer />

    <!-- JS -->
    <script src="{{ asset('js/transparent-navbar.js') }}"></script>
    <livewire:components.scripts />
    @livewireScripts

</body>
</html>
