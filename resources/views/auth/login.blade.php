@extends('layouts.auth')
@section('page-title', 'Login')
@section('content')

    <section class="mt-4">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-sm-12 col-md-8 col-lg-7 col-xl-8">
                    {{-- <div class="card">
                        <div class="card-body px-4">

                            <form action="{{ route('login') }}" method="post">
                            @if(Session::has('fail'))
                                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                            @endif
                            @csrf

                            <div class="mb-md-5 mt-3">
                                <div class="text-center">
                                    <a href="{{ route('landingPage') }}">
                                        <img src="{{ asset('img/pupLogo.png') }}" style="height: 100px;">
                                    </a>
                                    <h4 class="mt-3 mb-4">PUPT - Alumni Portal System</h4>
                                </div>
                                <div class="mb-4">
                                    <p class="form-label" >Email<span class="text-danger">*</span></p>
                                    <input type="text" class="form-control @error('email') border border-danger border-3 @enderror" name="email" value="{{ old("email") }}"/>
                                    <span class="text-danger error-message">@error('email') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-4">
                                    <p class="form-label">Password<span class="text-danger">*</span></p>
                                    <div class="input-group">
                                        <input type="password" name="password" id="password" class="form-control @error('password') border border-danger border-3 @enderror">
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
                            <div>
                                <p class="mt-5 mb-3">Don't have an account yet? <a href="{{ route('register') }}" class="text-primary fw-bold">Create here.</a>
                                </p>
                            </div>
                            <div>
                                <p class="mt-3">Forgot your password? <a href="{{ route('register') }}" class="text-primary fw-bold">Reset here.</a>
                                </p>
                            </div>

                            </form>
                        </div>
                    </div> --}}

                    <div class="login-box">
                        <div class="row g-0">
                            <div class="d-none d-sm-none d-md-none d-lg-none d-xl-block col-0 col-sm-0 col-md-0 col-lg-0 col-xl-5 h-100">
                                <img src="{{ asset("img/pillar-login.jpg") }}" class="w-100 rounded-start" alt="">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-7 border border-secondary bg-light login-box-border">
                                <form action="{{ route('login') }}" method="post">
                                    @if(Session::has('fail'))
                                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                    @endif
                                    @csrf

                                    <div class="mt-5 px-4">

                                        <h4 class="mb-3 text-center">Login</h4>

                                        <div class="mb-4">
                                            <p class="form-label my-0" >Email<span class="text-danger">*</span></p>
                                            <input type="text" class="form-control @error('email') border border-danger border-3 @enderror" name="email" value="{{ old("email") }}"/>
                                            <span class="text-danger error-message">@error('email') {{$message}} @enderror</span>
                                        </div>
                                        <div class="mb-4">
                                            <p class="form-label my-0">Password<span class="text-danger">*</span></p>
                                            <div class="input-group">
                                                <input type="password" name="password" id="password" class="form-control @error('password') border border-danger border-3 @enderror">
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

                                    <div class="px-3 mt-5">
                                        <p class="mb-3">Don't have an account yet? <a href="{{ route('register') }}" class="text-primary fw-bold">Create here.</a>
                                        </p>
                                    </div>
                                    <div class="px-3">
                                        <p class="mt-3">Forgot your password? <a href="{{ route('register') }}" class="text-primary fw-bold">Reset here.</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
