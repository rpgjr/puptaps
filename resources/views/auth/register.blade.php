@extends('layouts.auth')

@section('page-title', 'Registration')

@section('content')

<form class="d-grid gap-2" action="{{ route('register') }}" method="post">
    @if(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif
    @csrf
    
    <section class="form my-4 mx-5">
        <div class="box-register">
            <div class="col-lg-12">
                <div class="alumni-registration-form">
                    <h1>ALUMNI REGISTRATION FORM</h1>
                </div>

                <div class="row align-items-center w-100 p-3">
                    <div class="col-md-4 my-2">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="lastName" value="{{old('lastName')}}">
                        <span class="text-danger">@error('lastName') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-4 my-2">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="firstName" value="{{old('firstName')}}">
                        <span class="text-danger">@error('firstName') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-4 my-2">
                        <label class="form-label">Middle Name</label>
                        <input type="text" class="form-control" placeholder="Middle Name" name="middleName" value="{{old('middleName')}}">
                        <span class="text-danger">@error('middleName') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-4 my-2">
                        <label class="form-label">Course</label>
                        <select class="form-select" name="courseID">
                            @foreach ($courses as $course)
                                <option value="{{ $course->courseID }}">{{ $course->courseID }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 my-2">
                    <label class="form-label">Batch</label>
                        <select class="form-select" name="batch">
                            @for ($i = date('Y'); $i >= 1996; $i--)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="col-md-4 my-2">
                        <label class="form-label">Student Number</label>
                        <input type="text" class="form-control" placeholder="Student Number" name="studNumber" value="{{old('studNumber')}}">
                        <span class="text-danger">@error('studNumber') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-3 my-2">
                        <label class="form-label">Gender:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="Male">
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="Female">
                            <label class="form-check-label">Female</label>
                        </div>
                    </div>

                    <div class="col-md-3 my-2">
                        <label class="form-label">Birthday</label>
                        <input type="date" class="form-control" placeholder="Last Name" name="bday" value="{{old('bday')}}">
                        <span class="text-danger">@error('bday') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-3 my-2">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" placeholder="Age" name="age" value="{{old('age')}}">
                        <span class="text-danger">@error('age') {{$message}} @enderror</span>
                    </div>

                                            
                    <div class="col-md-3 my-2">
                        <label class="form-label">Religion</label>
                        <input type="text" class="form-control" placeholder="Religion" name="religion" value="{{old('religion')}}">
                        <span class="text-danger">@error('religion') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-6 my-2">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-6 my-2">
                        <label class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="Mobile Number" name="number" value="{{old('number')}}">
                        <span class="text-danger">@error('number') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-12 my-2">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Address" name="cityAddress" value="{{old('cityAddress')}}">
                        <span class="text-danger">@error('cityAddress') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-4 my-2">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username" value="{{old('username')}}">
                        <span class="text-danger">@error('username') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-4 my-2">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="********" name="password">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-4 my-2">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="********" name="password_confirmation">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>

                    <div class="col-md-12 d-flex justify-content-center mt-4 mb-2">
                        <button type="submit" class="button" style="width: 200px">Register</button>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center mt-3">
                        <p>Already have an account? <a href="{{ route('login') }}">Login here!</a></p>
                    </div>
                </div>

            </div> 
        </div>
    </section>
</form>

@endsection
