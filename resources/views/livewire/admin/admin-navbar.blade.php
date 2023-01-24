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
            <i class="fa-solid fa-circle-user fs-3"></i>
            <div class="dropdown ms-2 py-0">
                <span class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="admin-logout-button text-white">{{ Auth::user()->username }}</span>
                </span>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
