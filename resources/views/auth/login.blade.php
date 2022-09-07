@extends('layouts.auth')

@section('page-title', 'Login')

@section('content')

<form class="d-grid gap-2" action="{{ route('login') }}" method="post">
    @if(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if(Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif
    @csrf

    <section class="form my-4 mx-5">
        <div class="box-login w-75">
            <div class="row g-0">
                <div class="col-lg-5">
                    <img src="{{ asset('img/pup-aps.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7">
                    <h1>ALUMNI LOGIN</h1>
                    <div class="form-padding">
                        <div class="col-mt-1 mb-2">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username"  value="{{old('username')}}" placeholder="Enter Username" >
                            <div id="emailHelp" class="form-text">We'll never share your credentials with anyone else.</div>
                            <span class="text-danger">@error('username') {{$message}} @enderror</span>
                        </div>

                        <div class="col-mt-1 mb-2">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>

                        <div class="col-mt-1 mb-2">
                            <div class="forgot-pass">
                                <a href # style="text-decoration: none">Forgot Password</a>
                            </div>
                        </div>

                        <div class="form-row d-flex justify-content-center mt-1 mb-2">
                            <button type="submit" class="button" style="width: 450px">Login</button>
                        </div>

                        <div class="form-row d-flex justify-content-center col-mt-1 mb-2">
                            <p>No account yet? <a href="{{ route('register') }}" style="text-decoration: none">Register here!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
@endsection
