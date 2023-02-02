@extends('layouts.auth')
@section('page-title', 'Registration')
@section('content')

{{-- <section>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9">
                <div class="card bg-light auth-card">
                    <div class="card-body p-5">

                        <form action="{{ route('register') }}" method="post">
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                        @endif
                        @csrf

                        <div class="row mb-md-5 mt-md-4 align-items-center">
                            <div class="sm-12 text-center">
                                <a href="{{ route('landingPage') }}" class="pup-logo">
                                    <img src="{{ asset('img/pupLogo.png') }}" style="height: 100px;">
                                </a>
                                <h2 class="mt-3 mb-5">PUPTAPS - Registration</h2>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="row justify-content-center">
                                    <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 alert alert-warning p-3 text-center text-dark" role="alert">
                                        All fields with <span class="text-danger">*</span> are required.
                                    </div>
                                </div>
                            </div>

                        <!-- Personal Information -->
                            <hr class="mb-5">
                            <h4 class="text-center mb-4">Personal Information</h4>
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-4">
                                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old("last_name") }}"/>
                                <span class="text-danger error-message">@error('last_name') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline  mb-4">
                                <label class="form-label">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old("first_name") }}"/>
                                <span class="text-danger error-message">@error('first_name') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline  mb-4">
                                <label class="form-label">Middle Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old("middle_name") }}"/>
                                <span class="text-danger error-message">@error('middle_name') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline  mb-4">
                                <label class="form-label">Extension Name</label>
                                <input type="text" class="form-control" name="suffix"/>
                                <span class="text-danger error-message">@error('suffix') {{$message}} @enderror</span>
                            </div>

                        <!-- Student Information -->
                            <hr class="my-5">
                            <h4 class="text-center mb-4">Student Information</h4>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 form-outline  mb-4">
                                <label class="form-label">Course <span class="text-danger">*</span></label>
                                <select class="form-select @error('course_id') is-invalid @enderror" name="course_id">
                                    <option hidden selected value="{{ old("course_id") }}">
                                        @if (old("course_id") == null)
                                            Please select...
                                        @else
                                            {{old("course_id")}}
                                        @endif
                                    </option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->course_id }}">{{ $course->course_id }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-message">@error('course_id') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 form-outline  mb-4">
                                <label class="form-label">Year Graduated <span class="text-danger">*</span></label>
                                <select class="form-select @error('batch') is-invalid @enderror" name="batch">
                                    <option hidden selected value="{{ old("batch") }}">
                                        @if (old("batch") == null)
                                            Please select...
                                        @else
                                            {{old("batch")}}
                                        @endif
                                    </option>
                                    @for ($i = date('Y'); $i >= 1996; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <span class="text-danger error-message">@error('batch') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline  mb-4">
                                <label class="form-label">Student Number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('stud_number') is-invalid @enderror" name="stud_number" value="{{ old("stud_number") }}"/>
                                <span class="text-danger error-message">@error('stud_number') {{$message}} @enderror</span>
                            </div>
                        <!-- Account Information -->
                            <hr class="my-5">
                            <h4 class="text-center mb-4">Account Information</h4>
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 form-outline  mb-4">
                                <label class="form-label">Personal Email Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old("email") }}"/>
                                <span class="text-danger error-message">@error('email') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline  mb-4">
                                <label class="form-label">Phone number <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old("number") }}"/>
                                <span class="text-danger error-message">@error('number') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline  mb-4">
                                <label class="form-label">Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old("username") }}"/>
                                <span class="text-danger error-message">@error('username') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline  mb-4">
                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                        <i id="eye_icon" class="fa-solid fa-eye" ></i>
                                    </button>
                                </div>
                                <span class="text-danger error-message">@error('password') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline  mb-4">
                                <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password') is-invalid @enderror">
                                    <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
                                        <i id="eye_icon_confirm" class="fa-solid fa-eye" ></i>
                                    </button>
                                </div>
                                <span class="text-danger error-message">@error('password') {{$message}} @enderror</span>
                            </div>

                            <input type="hidden" name="user_role" value="Alumni">

                            <div class="text-center mt-5 mb-0">
                                <button class="btn btn-outline-dark px-5" type="submit">Register</button>
                            </div>
                        </div>

                        <div>
                            <p class="mb-0 mt-5">Already have an account? <a href="{{ route('login') }}" class="text-dark fw-bold">Login here!</a></p>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

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

                        <form action="{{ route('register') }}" method="post">
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                        @endif
                        @csrf

                        <div class="mb-md-5 mt-4">
                            <div class="mb-5 px-3">
                                <h5>Registration</h5>
                                <p><i class="fa-solid fa-circle-info text-primary"></i> <span class="text-secondary">After entering your Email Address and Student Number, an email will be sent to you for your password confirmation.</span></p>
                            </div>
                            <div class="mb-4 px-3">
                                <p class="form-label">Email<span class="text-danger">*</span></p>
                                <input type="text" class="form-control @error('email') border border-danger border-3 @enderror" name="email" value="{{ old("email") }}"/>
                                <span class="text-danger error-message">@error('email') {{$message}} @enderror</span>
                            </div>
                            <div class="mb-4 px-3">
                                <p class="form-label">Student Number<span class="text-danger">*</span></p>
                                <input type="text" class="form-control @error('stud_number') border border-danger border-3 @enderror" name="stud_number" value="{{ old("stud_number") }}"/>
                                <span class="text-danger error-message">@error('stud_number') {{$message}} @enderror</span>
                            </div>
                            <div class="text-center my-0">
                                <button class="btn btn-primary px-5" type="submit" onclick=”genPassword()>Register</button>
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

