@extends('layouts.user')
@section('page-title', 'Alumni Tracer')
@section('tracer-active', 'user-active')
@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid">

            <!-- Page Title Text H1 -->
            <livewire:components.page-title :title="$title"/>

            {{-- <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-9 col-lg-9 col-xl-9 mb-5">
                    <div class="card">
                        <div class="card-header fs-5 fw-bold">
                            Why we need need to answer this form
                            <i class="fa-solid fa-circle-question text-primary"></i>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-justify">The Alumni Tracer helps the institution to gather valuable feedback and insights. Alumni can provide valuable perspective on the quality of education they received, the impact of the institution on their career development, and any areas for improvement. This feedback can be used to inform decision-making and continuously improve the quality of education and support offered to current and future students.</p>
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
            </div> --}}

            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-9 col-lg-9 col-xl-9 container-box pb-3 px-5">
                    @foreach ($users as $user)

                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 text-center text-sm-center text-md-end text-lg-end text-xl-end">
                            @if ($user->user_pfp == null)
                                <img src="{{ asset('Uploads/Profiles/user-no-profile.png') }}" class="user-profile-tracer">
                            @else
                                <img src="/Uploads/Profiles/{{ $user->user_pfp }}" class="user-profile-tracer">
                            @endif
                        </div>

                        <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 text-center text-sm-center text-md-start text-lg-start text-xl-start">
                            <h3 class="mt-3 mb-1">{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }} {{ $user->suffix }}</h3>
                            <p class="mt-1 mb-1"><span class="fw-bold">Email: </span>{{ $user->email }}</p>
                            <p class="mt-1"><span class="fw-bold">Tel. No.: </span>{{ $user->number }}</p>
                        </div>

                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                            <div class="text-center text-md-end">
                                @if (count($tracer_answers) > 0)
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <a href="{{ route('userTracer.getUpdatePage') }}" type="button" class="btn btn-primary px-3 fs-7">Update Form</a>
                                        <button type="button" class="btn btn-secondary fs-7 px-2" data-bs-toggle="collapse" data-bs-target="#whyTracer"><i class="fa-solid fa-circle-question text-light"></i></button>
                                    </div>
                                @else
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <a href="{{ route('userTracer.getAnswerModal') }}" type="button" class="btn btn-primary px-3 fs-7">Answer Form</a>
                                        <button type="button" class="btn btn-secondary fs-7 px-2" data-bs-toggle="collapse" data-bs-target="#whyTracer"><i class="fa-solid fa-circle-question text-light"></i></button>
                                    </div>
                                    {{-- <a href="{{ route('userTracer.getAnswerPage') }}" type="button" class="btn btn-primary px-3 fs-7">Answer Form</a> --}}
                                @endif
                            </div>
                        </div>

                        <div class="col-12 collapse mt-3 mb-0 border border-secondary-subtle rounded pt-3 pb-2" id="whyTracer">
                            <h5 class="fw-bold">Why we need need to answer this form</h5>
                            <p class="text-justify pb-0 px-0 mb-2">The Alumni Tracer helps the institution to gather valuable feedback and insights. Alumni can provide valuable perspective on the quality of education they received, the impact of the institution on their career development, and any areas for improvement. This feedback can be used to inform decision-making and continuously improve the quality of education and support offered to current and future students.</p>
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
                                <p class="mb-1"><b>Course:</b> {{ $course->course_desc }}</p>
                            @endif
                            @endforeach
                            <p class="mb-1"><b>Year Graduated: </b> {{ $user->batch }}</p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-sm-12 col-md-10 col-lg-5 col-xl-5 offset-0 offset-sm-0 offset-md-2 offset-lg-2 offset-xl-2">
                            <h4 class="mb-0 fw-bold">Current Job / Career</h4>
                            @if (count($tracer_answers) > 0)
                                @foreach ($tracer_answers as $answers)
                                    @if ($answers->question_id == 1)
                                        <p class="mb-2 fs-5"><b>{{ $answers->answer }}</b></p>
                                    @endif
                                    @if ($answers->question_id == 2)
                                        <p class="mb-0">At <b>{{ $answers->answer }}</b></p>
                                    @endif
                                    @if ($answers->question_id == 3)
                                        <p>Since <b>{{ date('F d, Y', strtotime($answers->answer)) }}</b></p>
                                    @endif
                                    @if ($answers->question_id == 4)
                                        <p class="mb-0 fw-bold">Job Description: </p>
                                        <p class="text-justify">{{ $answers->answer }}</p>
                                    @endif
                                    @if ($answers->question_id == 7)
                                        <p class="fw-bold mb-0">Company Details: </p>
                                        <p class="mb-0">{{ $answers->answer }}</p>
                                    @endif
                                    @if ($answers->question_id == 8)
                                        <p>{{ $answers->answer }}</p>
                                    @endif
                                @endforeach
                            @else
                                <div class="col-12">
                                    <div class="alert alert-warning mt-5 text-center" role="alert">
                                        No data to display yet.
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="col-12 col-sm-12 col-md-10 col-lg-5 col-xl-5 offset-0 offset-sm-0 offset-md-2 offset-lg-0 offset-xl-0">
                            <h4 class="mb-0 fw-bold">First Job / Career</h4>
                            @if (count($tracer_answers) > 0)
                                @foreach ($tracer_answers as $answers)
                                    @if ($answers->question_id == 10)
                                        <p class="mb-2 fs-5"><b>{{ $answers->answer }}</b></p>
                                    @endif
                                    @if ($answers->question_id == 11)
                                        <p class="mb-0">At <b>{{ $answers->answer }}</b></p>
                                    @endif
                                    @if ($answers->question_id == 12)
                                        <p>Employed on <b>{{ date('F d, Y', strtotime($answers->answer)) }}</b></p>
                                    @endif
                                    @if ($answers->question_id == 13)
                                        <p class="mb-0 fw-bold">Job Description: </p>
                                        <p class="text-justify">{{ $answers->answer }}</p>
                                    @endif
                                    @if ($answers->question_id == 14)
                                        <p class="fw-bold mb-0">Company Details: </p>
                                        <p class="mb-0">{{ $answers->answer }}</p>
                                    @endif
                                    @if ($answers->question_id == 15)
                                        <p>{{ $answers->answer }}</p>
                                    @endif
                                @endforeach
                            @else
                                <div class="col-12">
                                    <div class="alert alert-warning mt-5 text-center" role="alert">
                                        No data to display yet.
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
