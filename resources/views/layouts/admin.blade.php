<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Headings --}}
    <livewire:components.header />
    <title>@yield('page-title')</title>
    @livewireStyles
</head>
<body>

    <main>
        <div class="px-0 py-0 container-fluid">
            <div class="row g-0" style="height: 100vh;">
                <div class="col-2">
                    <livewire:admin.admin-sidebar />
                </div>
                <div class="col-10">
                    <div class="row g-0 w-100">
                        <div class="col-12">
                            <livewire:admin.admin-navbar />
                        </div>
                        <div class="col-12">
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
