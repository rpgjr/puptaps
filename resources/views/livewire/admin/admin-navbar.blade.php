<div class="container-fluid admin-navbar fixed-top">
    <div class="row py-2 align-items-center">
        <div class="col-4">
            <button type="button" class="btn btn-md btn-outline-light d-inline d-sm-inline d-md-inline d-lg-inline d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#showSidebar">
                <i class="fa-solid fa-bars"></i>
            </button>
            <!-- <span class="fs-5 ms-2 ms-sm-2 ms-md-2 ms-lg-2 ms-xl-0">@yield('page-name')</span> -->
            <span class="fs-5 fw-bold ms-2 ms-sm-2 ms-md-2 ms-lg-2 ms-xl-0">Hello {{ Auth::user()->username }}!</span>
        </div>
        <div class="col-8 d-flex justify-content-end align-items-center">
            <i class="fa-solid fa-circle-user fs-3 me-2"></i>
            <div class="dropdown ms-0 admin-logout-dropdown">
                <span class="dropdown-toggle fs-7" type="button" data-bs-toggle="dropdown">{{ $admin_name }}</span>
                <ul class="dropdown-menu">
                    <li><a class="fs-7 dropdown-item" href="#">Action</a></li>
                    <li><a class="fs-7 dropdown-item" href="#">Another action</a></li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                            <li><button class="fs-7 dropdown-item" href="#">Logout</button></li>
                        </div>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</div>
