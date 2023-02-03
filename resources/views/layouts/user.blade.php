<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Headings --}}
    <livewire:components.header />
    <title>@yield('page-title')</title>
    @livewireStyles
</head>
<body id="go-to-top" class="user-body">
    {{-- NavBar --}}
    <livewire:components.user-navbar :users="$users"/>


    @yield('content')
    <div class="text-end">
        <a type="button" href="#go-to-top" class="btn btn-danger user-back-to-top"><i class="fa-solid fa-angle-up"></i></a>
    </div>

    <livewire:components.footer />

    {{-- JS --}}
    <livewire:components.scripts />
    @livewireScripts

</body>
</html>
