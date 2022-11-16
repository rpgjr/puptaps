<div class="container-fluid bg-dark text-white">
    <div class="row py-2 align-items-center">
        <div class="col-6">
            <h5 class="mt-2">@yield('page-name')</h5>
        </div>
        <div class="col-6 text-end">
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-outline-light px-4">
                    <i class="fa-solid fa-right-from-bracket me-1"></i>
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
