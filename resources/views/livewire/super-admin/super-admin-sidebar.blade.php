<div class="container-fluid text-white bg-dark pt-3 pb-2 px-2 h-100">
    <div class="row align-items-center">
        <div class="col-12 text-center mt-4">
            <a href="{{ route('admin.homepage') }}" class="text-decoration-none text-white align-items-center">
                <img src="{{ asset('img/pupLogo.png') }}" style="height: 50px;">
                <p class="mt-2 mb-0 fs-4 fw-bold">PUPTAPS</p>
                <p class="mt-0 fw-bold">SUPER ADMIN</p>
            </a>
        </div>
        <div class="col-12 mt-4">
            <div class="w-100">
                <!-- Dashboard -->
                <a type="button" href="{{ route("superAdmin.getSuperAdminIndex") }}" class="btn btn-sm btn-dark w-100 text-start @yield('active-homepage') py-2">
                    <i class="fa-solid fa-house me-1"></i>
                    Dashboard
                </a>

                <hr class="my-1">
                <!-- Start: Admin Manager -->
                <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start dropdown-toggle py-2" data-bs-toggle="collapse" data-bs-target="#adminManager" aria-expanded="false">
                    <i class="fa-solid fa-user-tie me-1"></i>
                    Admin Management
                </a>
                <div class="mt-1">
                    <div class="collapse show ms-4" id="adminManager">
                        <a type="button" href="{{ route("superAdmin.getAdminManager") }}" class="btn btn-sm btn-dark w-100 text-start py-2 @yield('active-admin-manager')">
                            <i class="fa-solid fa-user-pen me-1"></i>
                            Admin Manager
                        </a>
                        <a type="button" href="{{ route("superAdmin.getAddNewAdmin") }}" class="btn btn-sm btn-dark w-100 text-start py-2 @yield('active-add-new-admin')">
                            <i class="fa-solid fa-user-plus me-1"></i>
                            Add new Admin
                        </a>
                    </div>
                </div>
                <!-- End: Admin Manager -->

                <hr class="my-1">
                <!-- Start: News and Events -->
                <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start dropdown-toggle py-2" data-bs-toggle="collapse" data-bs-target="#userHomepage" aria-expanded="false">
                    <i class="fa-solid fa-house-user me-1"></i>
                    User Homepage
                </a>
                <div class="mt-1">
                    <div class="collapse show ms-4" id="userHomepage">
                        <a type="button" href="{{ route("superAdmin.getAnnouncementSettings") }}" class="btn btn-sm btn-dark w-100 text-start py-2 @yield('active-announcement-settings')">
                            <i class="fa-solid fa-bullhorn me-1"></i>
                            Announcements
                        </a>
                        <a type="button" href="{{ route("superAdmin.getNewsSettings") }}" class="btn btn-sm btn-dark w-100 text-start py-2 @yield('active-news-settings')">
                            <i class="fa-solid fa-newspaper me-1"></i>
                            News
                        </a>
                    </div>
                </div>
                <!-- End: News and Events -->
            </div>
        </div>
    </div>
</div>
