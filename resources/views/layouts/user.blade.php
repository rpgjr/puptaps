<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Headings --}}
    <livewire:components.header />
    <title>@yield('page-title')</title>
    @livewireStyles
</head>
<body id="go-to-top">
    {{-- NavBar --}}
    <livewire:components.user-navbar :users="$users"/>


    @yield('content')

    <livewire:components.footer />

    {{-- JS --}}
    <livewire:components.scripts />
    @livewireScripts

</body>
</html>
