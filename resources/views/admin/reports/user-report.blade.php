@extends('layouts.admin')
@section('page-title', 'User Reports')
@section('active-user-reports', 'active')
@section('page-name', 'Reports')

@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid box-content">

            <livewire:admin.page-title :title="$title"/>

            <div class="row justify-content-center">
                <div class="col-11 sub-container-box pt-4">
                    <table class="table table-striped align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="width: 20%;">
                                    <div class="dropdown">
                                        <span>Student No.</span>
                                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col" style="width: 30%;">Full Name</th>
                                <th scope="col" style="width: 10%;">Gender</th>
                                <th scope="col" style="width: 10%;">Course</th>
                                <th scope="col" style="width: 30%;" class="text-center">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumni as $student)
                                <tr>
                                    <th scope="row">{{ $student->stud_number }}</th>
                                    <td class="text-uppercase">{{ $student->last_name }}, {{ $student->first_name }} {{ $student->suffix }} {{ $student->middle_name }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->course_id }}</td>
                                    <td>{{ $student->city_address }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


@endsection
