<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Headings --}}
    <livewire:components.header />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>@yield('page-title')</title>
    @livewireStyles
</head>
<body class="admin-body">
    <main>
        <div class="px-0 py-0 container-fluid">
            <div class="row g-0" style="height: 100vh;">
                <div class="col-0 col-sm-0 col-md-0 col-lg-0 col-xl-2 d-none d-sm-none d-md-none d-lg-none d-xl-block">
                    <livewire:super-admin.super-admin-sidebar />
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10">
                    <div class="row g-0 w-100">
                        <div class="col-12">
                            <livewire:super-admin.super-admin-navbar />
                        </div>
                        <div class="col-12" style="margin-top: 30px;">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    {{-- JS --}}
    <livewire:components.scripts />
    @livewireScripts

</body>
</html>
