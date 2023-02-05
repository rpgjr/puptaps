<div class="row justify-content-center">
    <div class="col-md-12">
        @if(Session::has('success'))
            {{-- <center><div class="alert alert-success">{{ Session::get('success') }}</div></center> --}}
            <div id="myModal" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    {{-- <div class="modal-header">
                        <h5 class="modal-title">Success!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div> --}}
                    <div class="modal-body">
                        {{-- <div class="wrapper">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                            </svg>
                        </div> --}}
                        <div class="swal2-icon swal2-success swal2-animate-success-icon mb-4" style="display: flex;">
                            <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                            <span class="swal2-success-line-tip"></span>
                            <span class="swal2-success-line-long"></span>
                            <div class="swal2-success-ring"></div>
                            <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                            <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                        </div>
                        <h3 class="text-success text-center mt-4 mb-0">Success!</h3>
                        <p class="text-center fs-7 mb-1 mt-0" role="alert">
                            {{ $message }}
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light text-center w-100 text-primary" data-bs-dismiss="modal">Continue</button>
                    </div>
                    </div>
                </div>
            </div>
        @elseif($errors->any() || Session::has('failed'))
            <div id="myModal" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    {{-- <div class="modal-header">
                        <h5 class="modal-title">Failed!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div> --}}
                    <div class="modal-body">
                        <div class="swal2-icon swal2-error swal2-animate-error-icon mb-3" style="display: flex;">
                            <span class="swal2-x-mark">
                                <span class="swal2-x-mark-line-left"></span>
                                <span class="swal2-x-mark-line-right"></span>
                            </span>
                        </div>
                        <h3 class="text-danger text-center mt-3 mb-0">Error!</h3>
                        <p class="text-center fs-7 mb-1 mt-0" role="alert">
                            @if ($message == null)
                                <span>Fields with (<span class="text-danger">*</span>) are required. It should not be empty.</span>
                            @else
                                {{ $message }}
                            @endif
                        </p>
                        {{-- <div class="alert alert-danger pb-1 mb-1" role="alert">
                            @foreach ($errors->all() as $error)
                                <p class="text-center">{{ $error }}</p>
                            @endforeach
                            @if (Session::has('fail'))
                                <p class="text-center">{{ Session::get('failed') }}</p>
                            @endif
                        </div> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light text-center w-100 text-primary" data-bs-dismiss="modal">Continue</button>
                    </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
