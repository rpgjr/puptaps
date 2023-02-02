@extends('layouts.auth')
@section('page-title', 'Registration')
@section('content')

<section class="mt-4">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-sm-12 col-md-7 col-lg-6 col-xl-5">
                <div class="card-login-title">
                    <div class="row gx-3 gy-0 align-items-center">
                        <div class="col-3 text-end">
                            <a href="{{ route('landingPage') }}">
                                <img src="{{ asset('img/pupLogo.png') }}" style="height: 70px;" class="">
                            </a>
                        </div>
                        <div class="col-9 text-start">
                            <h4 class="">PUPT - Alumni Portal System</h4>
                        </div>
                    </div>
                </div>
                <div class="card-login">
                    <div class="card-body px-4">

                        <form action="{{ route('login') }}" method="post">
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                        @endif
                        @csrf

                        <div class="mb-md-5 mt-4">
                            <div class="mb-5 px-3">
                                <h5>Temporary Password</h5>
                                <p><i class="fa-solid fa-circle-info text-primary"></i> <span class="text-secondary">Please enter the temporary password sent to your Email address.</span></p>
                            </div>
                            <div class="mb-4 px-3">
                                <p class="form-label">Password<span class="text-danger">*</span></p>
                                <div class="input-group">
                                    <input type="text" name="password" id="genpassword" class="form-control @error('password') border border-danger border-3 @enderror">
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                        <i id="eye_icon" class="fa-solid fa-eye" ></i>
                                    </button>
                                </div>
                                <span class="text-danger error-message">@error('password') {{$message}} @enderror</span>
                            </div>
                            <div class="text-center my-0">
                                <button class="btn btn-primary px-5" type="submit">Login</button>
                            </div>
                        </div>
                        <div class="text-center mb-4">
                            <p class="mt-5 mb-3">Already have an account? <a href="{{ route('login') }}" class="text-primary fw-bold">Login here.</a>
                            </p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

