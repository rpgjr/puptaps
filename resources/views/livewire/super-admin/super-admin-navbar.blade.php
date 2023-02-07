<div class="container-fluid admin-navbar fixed-top">
    <div class="row py-2 align-items-center">
        <div class="col-8">
            <button type="button" class="btn btn-md btn-outline-light d-inline d-sm-inline d-md-inline d-lg-inline d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#showSidebar">
                <i class="fa-solid fa-bars"></i>
            </button>
            {{-- <span class="fs-5 ms-2 ms-sm-2 ms-md-2 ms-lg-2 ms-xl-0">@yield('page-name')</span> --}}
            <span class="fs-5 fw-bold ms-2 ms-sm-2 ms-md-2 ms-lg-2 ms-xl-0">Hello {{ Auth::user()->username }}!</span>
        </div>
        <div class="col-4 text-end">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-sm btn-outline-light px-3">
                    <i class="fa-solid fa-right-from-bracket me-1"></i>
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
