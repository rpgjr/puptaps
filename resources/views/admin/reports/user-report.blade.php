@extends('layouts.admin')
@section('page-title', 'User Reports')
@section('active-user-reports', 'active')
@section('page-name', 'Reports')

@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid box-content">

            <livewire:admin.page-title :title="$title"/>

            <div class="row justify-content-center text-end mb-3">
                <div class="col-11">
                    <button class="btn btn-danger">Donwload as PDF <i class="fa-solid fa-file-pdf ms-1"></i></button>
                    <button class="btn btn-success">Donwload as CSV <i class="fa-solid fa-file-csv ms-1"></i></button>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#showFilter">
                        Filter <i class="fa-solid fa-filter ms-1"></i>
                    </button>
                </div>
            </div>

            <div class="row justify-content-center mb-3 collapse mt-2" id="showFilter">
                <div class="col-11 sub-container-box pt-3 mb-0 pb-2">
                    <form>
                        @csrf
                        <div class="row">
                            <div class="col-6 mb-3">
                                <label class="form-label">Gender</label>
                                <select class="form-select" name="gender">
                                    <option value="">All</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label">Course</label>
                                <select class="form-select" name="course_id">
                                    <option value="">All</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->course_id }}">{{ $course->course_id }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-6 mb-3">
                                <label class="form-label">Batch From:</label>
                                <select class="form-select @error('batch_from') is-invalid @enderror" name="batch_from">
                                    @for ($i = 2022; $i <= date('Y'); $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label">Batch To:</label>
                                <select class="form-select @error('batch_to') is-invalid @enderror" name="batch_to">
                                    @for ($i = 2022; $i <= date('Y'); $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="col-12 mb-2 text-end">
                                <button class="btn btn-primary" type="submit">
                                    Filter
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row justify-content-center mt-3">
                @if (count($alumni) == 0)
                    <div class="col-11 sub-container-box pt-4">
                        <div class="alert alert-danger" role="alert">
                            There is no avalable data for your query.
                        </div>
                    </div>
                @else
                    <div class="col-11 sub-container-box pt-4">
                        <table class="table table-striped align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col" style="width: 20%;">Student No.</th>
                                    <th scope="col" style="width: 30%;">Full Name</th>
                                    <th scope="col" style="width: 10%;">Gender</th>
                                    <th scope="col" style="width: 10%;">Course</th>
                                    <th scope="col" style="width: 10%;">Batch</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumni as $student)
                                    <tr>
                                        <th scope="row">{{ $student->stud_number }}</th>
                                        <td class="text-uppercase">{{ $student->last_name }}, {{ $student->first_name }} {{ $student->suffix }} {{ $student->middle_name }}</td>
                                        <td>{{ $student->gender }}</td>
                                        <td>{{ $student->course_id }}</td>
                                        <td>{{ $student->batch }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-5">
                            {!! $alumni->links() !!}
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>


@endsection
