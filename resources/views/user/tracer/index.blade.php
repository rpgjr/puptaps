@extends('layouts.user')

@section('page-title', 'Alumni Tracer')
@section('tracer-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row my-5">
            <div class="col-md-6">
                <h3>Tracer Form</h3>
            </div>
        </div>

        <div class="row box-tracer justify-content-center align-items-center">

            <div class="col-md-6">
                <h4>Alumni Personal Information</h4>
            </div>

            <div class="col-md-6">
                @if (count($tracer_answers) > 0)
                    <a href="" type="button" class="btn btn-primary">Update Tracer Form</a>
                @else
                    <a href="{{ route('userTracer.getAnswerPage') }}" type="button" class="btn btn-primary">Answer Tracer Form</a>
                @endif
            </div>

            <div class="col-md-12 my-3">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="alert alert-warning pb-0" role="alert">
                            <p><b>*</b> If you want to update those fields that are grayed out, you need to Go to <b>Profile</b> to change it.</p>
                        </div>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" style="width: 30%;">Question</th>
                            <th scope="col" style="width: 70%;">Your Answer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">Name</th>
                                <td>{{ $user->last_name }}, {{ $user->first_name }} {{ $user->suffix }}  {{ $user->middle_name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Course</th>
                                <td>{{ $user->course_ID }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Year Graduated</th>
                                <td>{{ $user->batch }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>



            @if (count($tracer_answers) > 0)
            @foreach ($tracer_answers as $answer)
                <div class="col-md-12">
                    <h4>Current Job / Career Details</h4>
                </div>

                <div class="col-md-12">
                    <table class="table table-striped mb-5">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="width: 30%;">Question</th>
                                <th scope="col" style="width: 70%;">Your Answer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">Employment Start Date</th>
                                    <td>{{ date('F d, Y', strtotime($answer->current_employment)) }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nature of Work / Job Description</th>
                                    <td>{{ $answer->current_job_description }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Job Position</th>
                                    <td>{{ $answer->current_job_position }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Type of Employment</th>
                                    <td>{{ $answer->current_employment_status }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Monthly Income</th>
                                    <td>{{ $answer->current_monthly_income }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Company Email</th>
                                    <td>{{ $answer->current_company_email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Company Number</th>
                                    <td>{{ $answer->current_company_number }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Is current Job related to Course?</th>
                                    <td>{{ $answer->relation_to_course }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="col-md-12">
                    <h4>First Job / Career Details</h4>
                </div>

                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="width: 30%;">Question</th>
                                <th scope="col" style="width: 70%;">Your Answer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">Employment Start Date</th>
                                    <td>{{ date('F d, Y', strtotime($answer->first_employment)) }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nature of Work / Job Description</th>
                                    <td>{{ $answer->first_job_description }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Job Position</th>
                                    <td>{{ $answer->first_job_position }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Company Email</th>
                                    <td>{{ $answer->first_company_email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Company Number</th>
                                    <td>{{ $answer->first_company_number }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
            @else
                <div class="alert alert-danger" role="alert">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    You didn't have any records yet.
                </div>
            @endif
        </div>
    </div>

@endsection
