@extends('layouts.user')

@section('page-title', 'Profile')

@section('profile-active', 'active')

@section('content')

    <section class="m-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="col-md-12">
                        @if(Session::has('success'))
                        <center><div class="alert alert-success">{{ Session::get('success') }}</div></center>
                        @endif
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <h1>Profile Settings</h1>
                </div>

                @foreach ($users as $user)
                {!! Form::model($user, [ 'method' => 'patch','route' => ['userProfile.updateProfile', $user->alumni_ID], 'enctype' => 'multipart/form-data']) !!}
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div  iv class="row box-profile align-items-center">
                            <div class="col-md-12 my-4">
                                <h3>Information Settings</h3>
                            </div>
                            <div class="col-md-4 my-2">
                                <center>
                                <div class="row">
                                    <div class="col-md-8">
                                        <label class="profilepic" for="uploadProfile">
                                            <img class="profilepic__image" src="/Uploads/Profiles/{{ $user->userProfile }}" />
                                            <div class="profilepic__content">
                                              <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                                              <span class="profilepic__text">Edit Profile</span>
                                            </div>
                                        </label>
                                        <input type="file" class="form-control" name="userProfile" id="uploadProfile" hidden />
                                    </div>
                                    <div class="col-md-8">
                                        <label class="btn btn-primary" for="uploadProfile">Change Profile Picture</label>
                                    </div>
                                </div>
                                </center>
                            </div>
                            <div class="col-md-4 my-2">
                                <label class="form-label">Student Number</label>
                                <input type="text" class="form-control" name="studNumber" value="{{ $user->studNumber }}">
                                <span class="text-danger">@error('studNumber') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-4 my-2">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-3 my-2">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lastName" value="{{ $user->lastName }}">
                                <span class="text-danger">@error('lastName') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-3 my-2">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="firstName" value="{{ $user->firstName }}">
                                <span class="text-danger">@error('firstName') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-3 my-2">
                                <label class="form-label">Middle Name</label>
                                <input type="text" class="form-control" name="middleName" value="{{ $user->middleName }}">
                                <span class="text-danger">@error('middleName') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-3 my-2">
                                <label class="form-label">Suffix</label>
                                <input type="text" class="form-control" name="suffix" value="{{ $user->suffix }}">
                                <span class="text-danger">@error('suffix') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-4 my-2">
                                <label class="form-label">Course</label>
                                <select class="form-select" name="courseID">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->courseID }}"
                                            @if (($course->courseID) == $user->courseID)
                                                selected
                                            @endif
                                            >{{ $course->courseID }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 my-2">
                                <label class="form-label">Batch</label>
                                <select class="form-select" name="batch">
                                    @for ($i = date('Y'); $i >= 1996; $i--)
                                        <option value="{{ $i }}"
                                            @if (($user->batch) == $i)
                                                selected
                                            @endif
                                            >{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-4 my-2">
                                <label class="form-label">Number of Semesters with PUP</label>
                                <select class="form-select" name="semesters">
                                    @for ($i = 1; $i <= 20; $i++)
                                        <option value="{{ $i }}"
                                        @if (($user->semesters) == $i)
                                            selected
                                        @endif
                                        >{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-2 my-2">
                                <label class="form-label">Gender:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="Male"
                                        @if ('Male' == $user->gender)
                                            checked
                                        @endif>
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="Female"
                                        @if ('Female' == $user->gender)
                                            checked
                                        @endif>
                                    <label class="form-check-label">Female</label>
                                </div>
                            </div>
                            <div class="col-md-3 my-2">
                                <label class="form-label">Birthday</label>
                                <input type="date" class="form-control" name="bday" value="{{ $user->bday }}">
                                <span class="text-danger">@error('bday') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-3 my-2">
                                <label class="form-label">Age</label>
                                <input type="text" class="form-control" name="age" value="{{ $user->age }}">
                                <span class="text-danger">@error('age') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-4 my-2">
                                <label class="form-label">Religion</label>
                                <input type="text" class="form-control" name="religion" value="{{ $user->religion }}">
                                <span class="text-danger">@error('religion') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-6 my-2">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" name="number" value="{{ $user->number }}">
                                <span class="text-danger">@error('number') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-6 my-2">
                                <label class="form-label">Civil Status</label>
                                <select class="form-select" name="civilStatus">
                                    <option value="Single"
                                    @if ($user->civilStatus == "Single")
                                        selected
                                    @endif>Single</option>
                                    <option value="Married"
                                    @if ($user->civilStatus == "Married")
                                        selected
                                    @endif>Married</option>
                                    <option value="Divorced"
                                    @if ($user->civilStatus == "Divorced")
                                        selected
                                    @endif>Divorced</option>
                                    <option value="Widowed"
                                    @if ($user->civilStatus == "Widowed")
                                        selected
                                    @endif>Widowed</option>
                                </select>
                            </div>
                            <div class="col-md-12 my-2">
                                <label class="form-label">City Address</label>
                                <input type="text" class="form-control" name="cityAddress" value="{{ $user->cityAddress }}">
                                <span class="text-danger">@error('cityAddress') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-12 my-2">
                                <label class="form-label">Provincial Address</label>
                                <input type="text" class="form-control" placeholder="Provincial Address" name="provincialAddress" value="{{ $user->provincialAddress }}">
                                <span class="text-danger">@error('provincialAddress') {{$message}} @enderror</span>
                            </div>

                            <div class="col-md-12 text-center mt-5 mb-2">
                                <button type="submit" class="btn btn-primary" style="width: 200px">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                @endforeach
            </div>
        </div>
    </section>

    <section class="career-content">

    </section>


@endsection
