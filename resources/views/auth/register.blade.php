@extends('layouts.auth')
@section('page-title', 'Registration')
@section('content')

<section>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9">
                <div class="card bg-light" style="border-radius: 1rem;">
                    <div class="card-body p-5">

                        <form action="{{ route('register') }}" method="post">
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                        @endif
                        @csrf

                        <div class="row mb-md-5 mt-md-4 align-items-center justify-content-center">
                            <div class="sm-12 text-center">
                                <a href="{{ route('landingPage') }}" class="pup-logo">
                                    <img src="{{ asset('img/pupLogo.png') }}" style="height: 100px;">
                                </a>
                                <h2 class="mt-3 mb-5">PUPTAPS - Registration</h2>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 alert alert-warning p-3 text-center text-dark" role="alert">
                                All fields with <span class="text-danger">*</span> are required.
                            </div>

                        <!-- Personal Information -->
                            <hr class="mb-5">
                            <h4 class="text-center mb-4">Personal Information</h4>
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline form-white mb-4">
                                <label class="form-label" >Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control" name="last_name"/>
                                <span class="text-danger error-message">@error('last_name') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline form-white mb-4">
                                <label class="form-label">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control" name="first_name"/>
                                <span class="text-danger error-message">@error('first_name') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline form-white mb-4">
                                <label class="form-label">Middle Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control" name="middle_name"/>
                                <span class="text-danger error-message">@error('middle_name') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline form-white mb-4">
                                <label class="form-label">Extension Name</label>
                                <input type="text" class="form-control form-control" name="suffix"/>
                                <span class="text-danger error-message">@error('suffix') {{$message}} @enderror</span>
                            </div>

                        <!-- Student Information -->
                            <hr class="my-5">
                            <h4 class="text-center mb-4">Student Information</h4>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 form-outline form-white mb-4">
                                <label class="form-label">Course <span class="text-danger">*</span></label>
                                <select class="form-select" name="course_id">
                                    <option hidden selected value="">Please select...</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->course_id }}">{{ $course->course_id }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-message">@error('course_id') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 form-outline form-white mb-4">
                                <label class="form-label">Year Graduated <span class="text-danger">*</span></label>
                                <select class="form-select" name="batch">
                                    <option hidden selected value="">Please select...</option>
                                    @for ($i = date('Y'); $i >= 1996; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <span class="text-danger error-message">@error('batch') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline form-white mb-4">
                                <label class="form-label">Student Number</label>
                                <input type="text" class="form-control form-control" name="stud_number"/>
                                <span class="text-danger error-message">@error('stud_number') {{$message}} @enderror</span>
                            </div>
                        <!-- Account Information -->
                            <hr class="my-5">
                            <h4 class="text-center mb-4">Account Information</h4>
                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline form-white mb-4">
                                <label class="form-label">Email Address</label>
                                <input type="text" class="form-control form-control" name="email"/>
                                <span class="text-danger error-message">@error('email') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline form-white mb-4">
                                <label class="form-label">Phone number</label>
                                <input type="text" class="form-control form-control" name="number"/>
                                <span class="text-danger error-message">@error('number') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline form-white mb-4">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control">
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                        <i id="eye_icon" class="fa-solid fa-eye" ></i>
                                    </button>
                                </div>
                                <span class="text-danger error-message">@error('password') {{$message}} @enderror</span>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 form-outline form-white mb-4">
                                <label class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                    <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
                                        <i id="eye_icon_confirm" class="fa-solid fa-eye" ></i>
                                    </button>
                                </div>
                                <span class="text-danger error-message">@error('password') {{$message}} @enderror</span>
                            </div>

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
</section>

@endsection

