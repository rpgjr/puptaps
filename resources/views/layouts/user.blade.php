<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/career.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tracer.css') }}">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <title>@yield('page-title')</title>
    <link rel="icon" href="{{ asset('img/pupLogo.png') }}" type="image/icon type">
    @livewireStyles
</head>
<body>

{{-- NavBar --}}
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('user.homepage') }}">
                <img src="{{ asset('img/pupLogo.png') }}" style="height: 50px">
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0" >
                <li class="nav-item">
                    <a class="nav-link @yield('home-active')" aria-current="page" href="{{ route('user.homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('career-active')" aria-current="page" href="{{ route('userCareer.index') }}">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('form-active')" aria-current="page" href="{{ route('userForm.index') }}">Forms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('tracer-active')" aria-current="page" href="{{ route('userTracer.getTracerIndex') }}">Tracer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('profile-active')" aria-current="page" href="{{ route('userProfile.index') }}">Profile</a>
                </li>
            </ul>
            <div class="d-flex">
                <div class="dropdown">
                    @foreach ($users as $user)
                    @if ($user->user_profile == null)
                        <img src="{{ asset('Uploads/Profiles/user-no-profile.png') }}" class="user-profile-button" data-bs-toggle="dropdown" aria-expanded="false">
                    @else
                        <img src="/Uploads/Profiles/{{ $user->user_profile }}" class="user-profile-button" data-bs-toggle="dropdown" aria-expanded="false">
                    @endif
                    @endforeach
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item @yield('setting-active')" aria-current="page" href="">Account Settings</a></li>
                        <li><a class="dropdown-item" href="#">Feedback</a></li>
                        <li><a class="dropdown-item" href="#">Report a Problem</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            {{-- <a class="dropdown-item" href="{{ route('logout') }}">Logout</a> --}}
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
    @livewireScripts
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/profilePicture.js') }}"></script>

</body>
</html>
