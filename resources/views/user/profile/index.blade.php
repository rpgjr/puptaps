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
                                            <img class="profilepic__image" src="/Uploads/Profiles/{{ $user->user_profile }}" id="uploadPreview"/>
                                            <div class="profilepic__content">
                                              <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                                              <span class="profilepic__text">Edit Profile</span>
                                            </div>
                                        </label>
                                        <input type="file" class="form-control" name="user_profile" id="uploadProfile" onchange="PreviewImage();" hidden />
                                    </div>
                                    <div class="col-md-8">
                                        <label class="btn btn-primary" for="uploadProfile">Change Profile Picture</label>
                                    </div>
                                </div>
                                </center>
                                <script type="text/javascript">
                                    function PreviewImage() {
                                        var oFReader = new FileReader();
                                        oFReader.readAsDataURL(document.getElementById("uploadProfile").files[0]);

                                        oFReader.onload = function (oFREvent) {
                                            document.getElementById("uploadPreview").src = oFREvent.target.result;
                                        };
                                    };
                                </script>
                            </div>
                            <div class="col-md-4 my-2">
                                <label class="form-label">Student Number</label>
                                <input type="text" class="form-control" name="stud_number" value="{{ $user->stud_number }}">
                                <span class="text-danger">@error('stud_number') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-4 my-2">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-3 my-2">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
                                <span class="text-danger">@error('last_name') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-3 my-2">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">
                                <span class="text-danger">@error('first_name') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-3 my-2">
                                <label class="form-label">Middle Name</label>
                                <input type="text" class="form-control" name="middle_name" value="{{ $user->middle_name }}">
                                <span class="text-danger">@error('middle_name') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-3 my-2">
                                <label class="form-label">Suffix</label>
                                <input type="text" class="form-control" name="suffix" value="{{ $user->suffix }}">
                                <span class="text-danger">@error('suffix') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-4 my-2">
                                <label class="form-label">Course</label>
                                <select class="form-select" name="course_ID">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->course_ID }}"
                                            @if (($course->course_ID) == $user->course_ID)
                                                selected
                                            @endif
                                            >{{ $course->course_ID }}</option>
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
                                <input type="date" class="form-control" name="birthday" value="{{ $user->birthday }}">
                                <span class="text-danger">@error('birthday') {{$message}} @enderror</span>
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
                                <select class="form-select" name="civil_status">
                                    <option value="Single"
                                    @if ($user->civil_status == "Single")
                                        selected
                                    @endif>Single</option>
                                    <option value="Married"
                                    @if ($user->civil_status == "Married")
                                        selected
                                    @endif>Married</option>
                                    <option value="Divorced"
                                    @if ($user->civil_status == "Divorced")
                                        selected
                                    @endif>Divorced</option>
                                    <option value="Widowed"
                                    @if ($user->civil_status == "Widowed")
                                        selected
                                    @endif>Widowed</option>
                                </select>
                            </div>
                            <div class="col-md-12 my-2">
                                <label class="form-label">City Address</label>
                                <input type="text" class="form-control" name="city_address" value="{{ $user->city_address }}">
                                <span class="text-danger">@error('city_address') {{$message}} @enderror</span>
                            </div>
                            <div class="col-md-12 my-2">
                                <label class="form-label">Provincial Address</label>
                                <input type="text" class="form-control" placeholder="Provincial Address" name="provincial_address" value="{{ $user->provincial_address }}">
                                <span class="text-danger">@error('provincial_address') {{$message}} @enderror</span>
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



@endsection
