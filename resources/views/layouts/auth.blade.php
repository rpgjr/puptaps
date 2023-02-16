<!DOCTYPE html>
<html lang="en">
<head>

    <livewire:components.header />
    @livewireStyles
    <title>@yield('page-title')</title>
</head>
    <body class="auth-body"
        style="
            background: url({{ asset('img/pup-rooms.jpg') }}) no-repeat center center fixed;
            background-size: cover;
            height: 100%;"
    >
        @yield('content')

        {{-- JS --}}
        <livewire:components.scripts />
        @livewireScripts
    </body>
</html>
