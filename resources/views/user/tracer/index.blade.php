@extends('layouts.user')
@section('page-title', 'Alumni Tracer')
@section('tracer-active', 'active')
@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5">
        <div class="container-fluid">

            <!-- Page Title Text H1 -->
            <livewire:components.page-title :title="$title"/>

            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-9 col-lg-9 col-xl-9 mb-5">
                    <div class="card">
                        <div class="card-header fs-5 fw-bold">
                            Why we need need to answer this form
                            <i class="fa-solid fa-circle-question text-primary"></i>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-justify">Mula sayo... para sa bayan. Ang iyong aral, diwa, adhikaing taglay pup aming gabay PAARALAAAAAAAAANG DAKILAAAAAAAA.</p>
                            <div class="text-center mt-4">
                                @if (count($tracer_answers) > 0)
                                    <a href="{{ route('userTracer.getUpdatePage') }}" type="button" class="btn btn-primary px-4 py-2">Update Tracer Form</a>
                                @else
                                    <a href="{{ route('userTracer.getAnswerPage') }}" type="button" class="btn btn-primary px-4 py-2">Answer Tracer Form</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-9 col-lg-9 col-xl-9 container-box pb-3 px-5">
                    @foreach ($users as $user)

                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 text-center text-sm-center text-md-end text-lg-end text-xl-end">
                            @if ($user->user_profile == null)
                                <img src="{{ asset('Uploads/Profiles/user-no-profile.png') }}" class="user-profile-tracer">
                            @else
                                <img src="/Uploads/Profiles/{{ $user->user_profile }}" class="user-profile-tracer">
                            @endif
                        </div>

                        <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 text-center text-sm-center text-md-start text-lg-start text-xl-start">
                            <h3 class="mt-3">{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }} {{ $user->suffix }}</h3>
                            <p>{{ $user->email }}</p>
                        </div>

                        <div class="col-12 mt-0 mb-2">
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 offset-0 offset-sm-0 offset-md-2 offset-lg-2 offset-xl-2">
                            <h4 class="fw-bold">Polytechnic University of the Philippines - Taguig Branch</h4>
                            @foreach ($courses as $course)
                            @if (($user->course_id) == ($course->course_id))
                                <p class="mb-1"><b>Course:</b> {{ $course->course_Desc }}</p>
                            @endif
                            @endforeach
                            <p class="mb-1"><b>Year Graduated: </b> {{ $user->batch }}</p>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-12 col-sm-12 col-md-10 col-lg-5 col-xl-5 offset-0 offset-sm-0 offset-md-2 offset-lg-2 offset-xl-2">
                            <h4 class="mb-2 fw-bold">Current Job / Career</h4>
                            @if (count($tracer_answers) > 0)
                                @foreach ($tracer_answers as $answers)
                                    @if ($answers->question_id == 1)
                                        <p class="mb-1 fs-5"><b>{{ $answers->answer }}</b></p>
                                    @endif
                                    @if ($answers->question_id == 2)
                                        <p class="mb-1">At <b>{{ $answers->answer }}</b></p>
                                    @endif
                                    @if ($answers->question_id == 3)
                                        <p>Since <b>{{ date('F d, Y', strtotime($answers->answer)) }}</b></p>
                                    @endif
                                    @if ($answers->question_id == 4)
                                        <p class="mb-1 fw-bold">Job Description: </p>
                                        <p class="text-justify">{{ $answers->answer }}</p>
                                    @endif
                                    @if ($answers->question_id == 7)
                                        <p class="fw-bold mb-1">Company Details: </p>
                                        <p class="mb-1">{{ $answers->answer }}</p>
                                    @endif
                                    @if ($answers->question_id == 8)
                                        <p>{{ $answers->answer }}</p>
                                    @endif
                                @endforeach
                            @else
                                <div class="col-12">
                                    <div class="alert alert-warning mt-5 text-center" role="alert">
                                        No data to display. Please answer the form.
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="col-12 col-sm-12 col-md-10 col-lg-5 col-xl-5 offset-0 offset-sm-0 offset-md-2 offset-lg-0 offset-xl-0">
                            <h4 class="mb-2 fw-bold">First Job / Career</h4>
                            @if (count($tracer_answers) > 0)
                                @foreach ($tracer_answers as $answers)
                                    @if ($answers->question_id == 10)
                                        <p class="mb-1 fs-5"><b>{{ $answers->answer }}</b></p>
                                    @endif
                                    @if ($answers->question_id == 11)
                                        <p class="mb-1">At <b>{{ $answers->answer }}</b></p>
                                    @endif
                                    @if ($answers->question_id == 12)
                                        <p>Employed on <b>{{ date('F d, Y', strtotime($answers->answer)) }}</b></p>
                                    @endif
                                    @if ($answers->question_id == 13)
                                        <p class="mb-1 fw-bold">Job Description: </p>
                                        <p class="text-justify">{{ $answers->answer }}</p>
                                    @endif
                                    @if ($answers->question_id == 14)
                                        <p class="fw-bold mb-1">Company Details: </p>
                                        <p class="mb-1">{{ $answers->answer }}</p>
                                    @endif
                                    @if ($answers->question_id == 15)
                                        <p>{{ $answers->answer }}</p>
                                    @endif
                                @endforeach
                            @else
                                <div class="col-12">
                                    <div class="alert alert-warning mt-5 text-center" role="alert">
                                        No data to display. Please answer the form.
                                    </div>
                                </div>
                            @endif
                        </div>


                        <div class="col-12 mt-0 mb-2">
                            <hr>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
