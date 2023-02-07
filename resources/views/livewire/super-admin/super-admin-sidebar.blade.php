{{-- <div class="container-fluid pt-3 pb-2 px-0 h-100 admin-sidebar position-fixed">
    <div class="row align-items-center">
        <div class="col-12 text-center mt-4">
            <a href="{{ route('superAdmin.getSuperAdminIndex') }}" class="text-decoration-none text-white align-items-center">
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
</div> --}}
<div class="container-fluid pt-3 pb-2 px-0 h-100 admin-sidebar position-fixed">
    <div class="row align-items-center g-0" style="margin-top: 40px;">
        <div class="col-12 text-center">
            <div class="row align-items-center gx-0">
                <div class="col-5 text-center">
                    <a href="{{ route('admin.homepage') }}" class="text-decoration-none text-white align-items-center">
                        <img src="{{ asset('img/pupLogo.png') }}" style="height: 75px;">
                    </a>
                </div>
                <div class="col-7 text-start">
                    <h5 class="color-pup mt-3 fw-bold mb-0">PUPT - APS</h5>
                    <p class="color-pup fw-bold mt-0">SUPER ADMIN</p>
                </div>
            </div>
        </div>
    </div>

    {{-- <hr class="mt-4 mb-2 hr-color opacity-100"> --}}

    <div class="row align-items-center g-0" style="margin-top: 30px;">
        <div class="col-12">
            <div class="w-100 sidebar-buttons">
                <!-- Dashboard -->
                <a type="button" href="{{ route('superAdmin.getSuperAdminIndex') }}" class="fw-bold sidebar-button w-100 text-start @yield('active-homepage') py-2">
                    <i class="fa-solid fa-house me-1"></i>
                    Dashboard
                </a>

                <hr class="mt-2 mb-2 hr-color opacity-100">
                <!-- Start: Career Management -->
                <a type="button" href="" class="sidebar-button w-100 text-start dropdown-toggle py-2" data-bs-toggle="collapse" data-bs-target="#adminManagement" aria-expanded="false">
                    <i class="fa-solid fa-user-tie me-1"></i>
                    Admin Management
                </a>
                <div class="">
                    <div class="collapse show" id="adminManagement">
                        <a type="button" href="{{ route("superAdmin.getAdminManager") }}" class="sidebar-button w-100 text-start py-2 @yield('active-admin-manager')">
                            <span class="ms-4">Admin Manager</span>
                        </a>
                        <a type="button" href="{{ route("superAdmin.getAddNewAdmin") }}" class="sidebar-button w-100 text-start py-2 @yield('active-add-new-admin')">
                            <span class="ms-4">Add New Admin</span>
                        </a>
                    </div>
                </div>
                <!-- End: Career Management -->

                <hr class="mt-2 mb-2 hr-color opacity-100">
                <!-- Start: Reports -->
                <a type="button" href="" class="sidebar-button w-100 text-start dropdown-toggle py-2" data-bs-toggle="collapse" data-bs-target="#adminManagement" aria-expanded="false">
                    <i class="fa-solid fa-user-tie me-1"></i>
                    Alumni Homepage
                </a>
                <div class="">
                    <div class="collapse show" id="adminManagement">
                        <a type="button" href="{{ route("superAdmin.getAnnouncementSettings") }}" class="sidebar-button w-100 text-start py-2 @yield('active-announcement-settings')">
                            <span class="ms-4">Announcements</span>
                        </a>
                        <a type="button" href="{{ route("superAdmin.getNewsSettings") }}" class="sidebar-button w-100 text-start py-2 @yield('active-news-settings')">
                            <span class="ms-4">News</span>
                        </a>
                    </div>
                </div>
                <!-- End: Reports -->

                {{-- <hr class="mt-3 mb-3 hr-color opacity-100">
                <!-- Start: Account Settings -->
                <a type="button" href="{{ route("adminSettings.getAccountSettings") }}" class="sidebar-button w-100 text-start py-2 @yield('active-account-settings')">
                    <i class="fa-solid fa-gear me-1"></i>
                    Account Settings
                </a> --}}
                <!-- End: Account Settings -->

                <!-- Start: Account Settings -->
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <div class="fixed-bottom">
                        <button class="text-center pb-0 mb-3 admin-logout-button">
                            <span class="admin-logout-button">
                                <i class="fa-solid fa-gear me-1"></i>
                                Logout
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
