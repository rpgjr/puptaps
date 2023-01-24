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
