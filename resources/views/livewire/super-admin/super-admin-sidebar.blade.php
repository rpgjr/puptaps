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
                <!-- Start: User Manager -->
                <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start dropdown-toggle py-2" data-bs-toggle="collapse" data-bs-target="#userManager" aria-expanded="false">
                    <i class="fa-solid fa-user-tie me-1"></i>
                    Admin Management
                </a>
                <div class="mt-1">
                    <div class="collapse show ms-4" id="userManager">
                        <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start py-2 @yield('active-alumni-list')">
                            <i class="fa-solid fa-user-pen me-1"></i>
                            Admin Manager
                        </a>
                        <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start py-2 @yield('active-alumni-manager')">
                            <i class="fa-solid fa-user-plus me-1"></i>
                            Add new Admin
                        </a>
                    </div>
                </div>
                <!-- End: User Manager -->

                <hr class="my-1">
                <!-- Start: Account Settings -->
                <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start py-2 @yield('active-account-settings')">
                    <i class="fa-solid fa-newspaper me-1"></i>
                    News and Events
                </a>
                <!-- End: Account Settings -->
            </div>
        </div>
    </div>
</div>
