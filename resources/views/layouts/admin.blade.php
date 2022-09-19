<!DOCTYPE html>
<html lang="en">
<head>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <title>@yield('page-title')</title>
    <link rel="icon" href="{{ asset('img/pupLogo.png') }}" type="image/icon type">
</head>
<body>

{{-- NavBar --}}
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ asset('img/pupLogo.png') }}" style="height: 50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="">Admin</a>
                </li>
            </ul>
            <div class="d-flex">
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Session::get('adminID') }} <i class="fa-solid fa-circle-user"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Account Settings</a></li>
                        <li><a class="dropdown-item" href="#">Feedback</a></li>
                        <li><a class="dropdown-item" href="#">Report a Problem</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="">Logout</a></li>
                    </ul>
                </div>
            </div>
            </div>
            </div>
        </div>
    </nav>
{{-- End NavBar --}}

    <div class="container-fluid">
        <div class="row my-5 mx-3">
        {{-- Sidebar --}}
            <div class="col-md-3">
                <div class="box-sidebar">
                {{-- User-Management --}}
                    <a class="nav-link px-3 @yield('user-status')" data-bs-toggle="collapse" href="#user-management">
                        <i class="fa-solid fa-user-gear"></i>
                        <span>User Management</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                <i class="fa-solid fa-caret-down"></i>
                            </span>
                        </span>
                    </a>
                    <div class="collapse @yield('monitor-collapse')" id="user-management">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="" class="nav-link px-3 @yield('user-monitor-status')">
                                    <span class="me-2">
                                        <i class="fa-solid fa-address-book"></i>
                                    </span>
                                    <span>Monitor Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link px-3 @yield('')">
                                    <span class="me-2">
                                        <i class="fa-solid fa-user-tie"></i>
                                    </span>
                                    <span>Search Alumni</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link px-3 @yield('alumni-list-status')">
                                    <span class="me-2">
                                        <i class="fa-solid fa-file-circle-plus"></i>
                                    </span>
                                    <span>Upload List of Alumni</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link px-3 @yield('manage-admin-status')">
                                    <span class="me-2">
                                        <i class="fa-solid fa-user-tie"></i>
                                    </span>
                                    <span>Manage Administrators</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                {{-- Reports --}}
                    <hr>
                    <a class="nav-link px-3 @yield('reports-status')" data-bs-toggle="collapse" href="#reports">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                        <span>Reports</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                <i class="fa-solid fa-caret-down"></i>
                            </span>
                        </span>
                    </a>
                    <div class="collapse @yield('reports-collapse')" id="reports">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="" class="nav-link px-3 @yield('')">
                                    <span class="me-2">
                                        <i class="fa-solid fa-clipboard-user"></i>
                                    </span>
                                    <span>User Reports</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link px-3 @yield('')">
                                    <span class="me-2">
                                        <i class="fa-solid fa-user-graduate"></i>
                                    </span>
                                    <span>Alumni Reports</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link px-3 @yield('')">
                                    <span class="me-2">
                                        <i class="fa-solid fa-chart-pie"></i>
                                    </span>
                                    <span>Form Reports</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                {{-- Career --}}
                    <hr>
                    <a class="nav-link px-3 @yield('careers-status')" data-bs-toggle="collapse" href="#careers">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Careers</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                <i class="fa-solid fa-caret-down"></i>
                            </span>
                        </span>
                    </a>
                    <div class="collapse @yield('careers-collapse')" id="careers">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="" class="nav-link px-3 @yield('manage-career-status')">
                                    <span class="me-2">
                                        <i class="fa-solid fa-pencil"></i>
                                    </span>
                                    <span>Manage Careers</span>
                                </a>
                            </li>
                            <li>
                                {{-- @include('career.add-modal') --}}
                                <a class="nav-link px-3 @yield('')" data-bs-toggle="modal" data-bs-target="#addCareer">
                                    <span class="me-2">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </span>
                                    <span>Add Job Advertisement</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link px-3 @yield('admin.careerRequest')">
                                    <span class="me-2">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    <span>Career Requests</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link px-3 @yield('admin.careerApplicants')">
                                    <span class="me-2">
                                        <i class="fa-solid fa-list"></i>
                                    </span>
                                    <span>List of Job Applicants</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                {{-- Forms --}}
                    <hr>
                    <a class="nav-link px-3 @yield('forms-status')" data-bs-toggle="collapse" href="#forms">
                        <i class="fa-solid fa-file"></i>
                        <span>Forms</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                <i class="fa-solid fa-caret-down"></i>
                            </span>
                        </span>
                    </a>
                    <div class="collapse @yield('forms-collapse')" id="forms">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="" class="nav-link px-3 @yield('monitor-forms-status')">
                                    <span class="me-2">
                                        <i class="fa-solid fa-eye"></i>
                                    </span>
                                    <span>Monitor Forms</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link px-3 @yield('')" data-bs-toggle="modal" data-bs-target="#addCareer">
                                    <span class="me-2">
                                        <i class="fa-solid fa-envelope"></i>
                                    </span>
                                    <span>Send Notification</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                {{-- News and Events --}}
                    <hr>
                    <a class="nav-link px-3 @yield('news-status')" data-bs-toggle="collapse" href="#news">
                        <i class="fa-solid fa-newspaper"></i>
                        <span>News and Events</span>
                        <span class="ms-auto">
                            <span class="right-icon">
                                <i class="fa-solid fa-caret-down"></i>
                            </span>
                        </span>
                    </a>
                    <div class="collapse @yield('news-collapse')" id="news">
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="" class="nav-link px-3 @yield('')">
                                    <span class="me-2">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </span>
                                    <span>Update News and Events</span>
                                </a>
                            </li>
                            <li>
                                <a href="" class="nav-link px-3 @yield('')">
                                    <span class="me-2">
                                        <i class="fa-solid fa-square-plus"></i>
                                    </span>
                                    <span>Add News and Events</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        {{-- End of Sidebar --}}

            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>

    {{-- JS --}}
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
