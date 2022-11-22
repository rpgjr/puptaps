<div class="container-fluid text-white bg-dark pt-3 pb-2 px-2 h-100">
    <div class="row align-items-center">
        <div class="col-12 text-center mt-4">
            <a href="{{ route('admin.homepage') }}" class="text-decoration-none text-white align-items-center">
                <img src="{{ asset('img/pupLogo.png') }}" style="height: 50px;">
                <p class="mt-2 fs-4 fw-bold">PUPTAPS</p>
            </a>
        </div>
        <div class="col-12 mt-4">
            {{-- <div class="w-100">
                <!-- Dashboard -->
                <a type="button" href="{{ route('admin.homepage') }}" class="btn btn-dark w-100 text-start @yield('active-homepage')">
                    <i class="fa-solid fa-house me-1"></i>
                    Dashboard
                </a>

                <hr class="my-1">
                <!-- Start: User Manager -->
                <a type="button" href="" class="btn btn-dark w-100 text-start dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#userManager" aria-expanded="false">
                    <i class="fa-solid fa-user-group me-1"></i>
                    User Management
                </a>
                <div class="mt-1">
                    <div class="collapse show ms-4" id="userManager">
                        <a type="button" href="" class="btn btn-dark w-100 text-start">
                            <i class="fa-solid fa-user-graduate me-1"></i>
                            Alumni Manager
                        </a>
                        <a type="button" href="" class="btn btn-dark w-100 text-start">
                            <i class="fa-solid fa-user-tie me-1"></i>
                            Admin Manager
                        </a>
                    </div>
                </div>
                <!-- End: User Manager -->

                <hr class="my-1">
                <!-- Start: Career Management -->
                <a type="button" href="" class="btn btn-dark w-100 text-start dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#careerManagement" aria-expanded="false">
                    <i class="fa-solid fa-briefcase me-1"></i>
                    Careers Management
                </a>
                <div class="mt-1">
                    <div class="collapse show ms-4" id="careerManagement">
                        <a type="button" href="" class="btn btn-dark w-100 text-start">
                            <i class="fa-solid fa-gauge me-1"></i>
                            Career Dashboard
                        </a>
                        <a type="button" href="" class="btn btn-dark w-100 text-start">
                            <i class="fa-solid fa-circle-check me-1"></i>
                            Posting Approval
                        </a>
                    </div>
                </div>
                <!-- End: Career Management -->

                <hr class="my-1">
                <!-- Start: Reports -->
                <a type="button" href="" class="btn btn-dark w-100 text-start dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#reportsManager" aria-expanded="false">
                    <i class="fa-solid fa-chart-pie me-1"></i>
                    Reports
                </a>
                <div class="mt-1">
                    <div class="collapse show ms-4" id="reportsManager">
                        <a type="button" href="" class="btn btn-dark w-100 text-start">
                            <i class="fa-solid fa-file-lines me-1"></i>
                            Form Reports
                        </a>
                        <a type="button" href="" class="btn btn-dark w-100 text-start">
                            <i class="fa-solid fa-business-time me-1"></i>
                            Tracer Reports
                        </a>
                        <a type="button" href="" class="btn btn-dark w-100 text-start">
                            <i class="fa-solid fa-clipboard-user me-1"></i>
                            User Reports
                        </a>
                    </div>
                </div>
                <!-- End: Reports -->

                <hr class="my-1">
                <!-- Start: News and Events -->
                <a type="button" href="" class="btn btn-dark w-100 text-start ">
                    <i class="fa-solid fa-bullhorn me-1"></i>
                    News and Events
                </a>
                <!-- End: New and Events -->
            </div> --}}
            <div class="w-100">
                <!-- Dashboard -->
                <a type="button" href="{{ route('admin.homepage') }}" class="btn btn-sm btn-dark w-100 text-start @yield('active-homepage') py-2">
                    <i class="fa-solid fa-house me-1"></i>
                    Dashboard
                </a>

                <hr class="my-1">
                <!-- Start: User Manager -->
                <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start dropdown-toggle py-2" data-bs-toggle="collapse" data-bs-target="#userManager" aria-expanded="false">
                    <i class="fa-solid fa-user-group me-1"></i>
                    User Management
                </a>
                <div class="mt-1">
                    <div class="collapse show ms-4" id="userManager">
                        <a type="button" href="{{ route('adminUserManagement.getAlumniManager') }}" class="btn btn-sm btn-dark w-100 text-start py-2 @yield('active-alumni-manager')">
                            <i class="fa-solid fa-user-graduate me-1"></i>
                            Alumni Manager
                        </a>
                        <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start py-2">
                            <i class="fa-solid fa-user-tie me-1"></i>
                            Admin Manager
                        </a>
                    </div>
                </div>
                <!-- End: User Manager -->

                <hr class="my-1">
                <!-- Start: Career Management -->
                <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start dropdown-toggle py-2" data-bs-toggle="collapse" data-bs-target="#careerManagement" aria-expanded="false">
                    <i class="fa-solid fa-briefcase me-1"></i>
                    Careers Management
                </a>
                <div class="mt-1">
                    <div class="collapse show ms-4" id="careerManagement">
                        <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start py-2">
                            <i class="fa-solid fa-gauge me-1"></i>
                            Career Dashboard
                        </a>
                        <a type="button" href="{{ route('adminCareer.getCareerRequest') }}" class="btn btn-sm btn-dark w-100 text-start py-2 @yield('active-career-approval')">
                            <i class="fa-solid fa-circle-check me-1"></i>
                            Posting Approval
                        </a>
                    </div>
                </div>
                <!-- End: Career Management -->

                <hr class="my-1">
                <!-- Start: Reports -->
                <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start dropdown-toggle py-2" data-bs-toggle="collapse" data-bs-target="#reportsManager" aria-expanded="false">
                    <i class="fa-solid fa-chart-pie me-1"></i>
                    Reports
                </a>
                <div class="mt-1">
                    <div class="collapse show ms-4" id="reportsManager">
                        <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start py-2">
                            <i class="fa-solid fa-file-lines me-1"></i>
                            Form Reports
                        </a>
                        <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start py-2">
                            <i class="fa-solid fa-business-time me-1"></i>
                            Tracer Reports
                        </a>
                        <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start py-2">
                            <i class="fa-solid fa-clipboard-user me-1"></i>
                            User Reports
                        </a>
                    </div>
                </div>
                <!-- End: Reports -->

                <hr class="my-1">
                <!-- Start: News and Events -->
                <a type="button" href="" class="btn btn-sm btn-dark w-100 text-start py-2">
                    <i class="fa-solid fa-bullhorn me-1"></i>
                    News and Events
                </a>
                <!-- End: New and Events -->
            </div>
        </div>
    </div>
</div>
