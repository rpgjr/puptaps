<!DOCTYPE html>
<html lang="en">
<head>

    <!-- CSS -->
    @livewireStyles
    <livewire:components.header />
    <link rel="stylesheet" href="{{ asset('slick/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick/slick-theme.css') }}">
    <title>Landing Page</title>

</head>
<body id="back-to-top" class="landing-bg">

    <!-- Navbar -->
    <livewire:landing-page.navbar />

    <!-- Start Main Contents -->
    <main>

        <!-- Section: Greetings -->
        <livewire:landing-page.greetings />

        <!-- Section: Features -->
        <livewire:landing-page.features />

        <!-- Section: Greetings -->
        {{-- <livewire:landing-page.about-pup /> --}}

        <div class="text-end">
            <a type="button" href="#back-to-top" class="btn btn-danger user-back-to-top"><i class="fa-solid fa-angle-up"></i></a>
        </div>
    </main>
    <!-- End Main Contents -->

    <!-- Footer -->
    <livewire:landing-page.footer />

    <!-- JS -->
    <livewire:components.scripts />
    {{-- Slick-Carousel JS --}}
    <script src="{{ asset('slick/slick/slick.min.js') }}"></script>
    <script src="{{ asset('js/landing-features-slick.js') }}"></script>
    <script src="{{ asset('js/landing-greetings-slick.js') }}"></script>
    @livewireScripts

</body>
</html>
