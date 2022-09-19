@extends('layouts.auth')

@section('page-title', 'Login')

@section('content')

    <section class="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 box-login center">

                    <form action="{{ route('login') }}" method="post">
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                    @endif
                    @csrf

                        <h1 class="fw-bold mb-5 text-center">ALUMNI LOGIN</h1>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="username"  value="{{old('username')}}" placeholder="Enter Username">
                            <span class="text-danger">@error('username') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-2">
                            <div class="forgot-pass">
                                <a href # style="text-decoration: none">Forgot Password</a>
                            </div>
                        </div>

                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>

                        <div class="text-center">
                            <p>No account yet? <a href="{{ route('register') }}" style="text-decoration: none">Register here!</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
