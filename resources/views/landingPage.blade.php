<!DOCTYPE html>
<html lang="en">
<head>

    <!-- CSS -->
    @livewireStyles
    <livewire:components.header />
    <title>Landing Page</title>

</head>
<body id="back-to-top" class="landing-bg">

    <!-- Navbar -->
    <livewire:landing-page.navbar />

    <!-- Start Main Contents -->
    <main>

        <!-- Section: Greetings -->
        <livewire:landing-page.greetings />

        <!-- Section: Greetings -->
        <livewire:landing-page.about-pup />

        <!-- Section: Features -->
        <livewire:landing-page.features />

    </main>
    <div class="text-end">
        <a type="button" href="#back-to-top" class="btn btn-danger user-back-to-top"><i class="fa-solid fa-angle-up"></i></a>
    </div>
    <!-- End Main Contents -->

    <!-- Footer -->
    <livewire:landing-page.footer />

    <!-- JS -->
    <script src="{{ asset('js/transparent-navbar.js') }}"></script>
    <livewire:components.scripts />
    @livewireScripts

</body>
</html>
