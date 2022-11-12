@extends('layouts.auth')
@section('page-title', 'Login')
@section('content')

    <section>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white auth-card">
                        <div class="card-body p-5">

                            <form action="{{ route('login') }}" method="post">
                            @if(Session::has('fail'))
                                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                            @endif
                            @csrf

                            <div class="mb-md-5 mt-md-4">
                                <div class="text-center">
                                    <a href="{{ route('landingPage') }}" class="pup-logo">
                                        <img src="{{ asset('img/pupLogo.png') }}" style="height: 100px;">
                                    </a>
                                    <h2 class="mt-3 mb-5">PUPTAPS - Login</h2>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" >Email</label>
                                    <input type="text" class="form-control @error('email') border border-danger border-3 @enderror" name="email" value="{{ old("email") }}"/>
                                    <span class="text-danger error-message">@error('email') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="password" class="form-control @error('password') border border-danger border-3 @enderror">
                                        <button class="btn btn-outline-secondary text-white" type="button" id="togglePassword">
                                            <i id="eye_icon" class="fa-solid fa-eye" ></i>
                                        </button>
                                    </div>
                                    <span class="text-danger error-message">@error('password') {{$message}} @enderror</span>
                                </div>
                                <p class="small mb-5 pb-lg-2">
                                    <a class="text-white fw-bold" href="#!">Forgot password?</a>
                                </p>
                                <div class="text-center my-0">
                                    <button class="btn btn-outline-light px-5" type="submit">Login</button>
                                </div>
                            </div>
                            <div>
                                <p class="mb-0 mt-5">No account yet? <a href="{{ route('register') }}" class="text-white fw-bold">Register here!</a>
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
