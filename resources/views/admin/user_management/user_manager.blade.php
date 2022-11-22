@extends('layouts.admin')
@section('page-title', 'Alumni Manager')
@section('active-alumni-manager', 'active')
@section('page-name', 'User Management')

@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid">

            <livewire:admin.page-title :title="$title"/>

            <div class="row justify-content-center g-0">
                <div class="col-11">

                    <div class="row sub-container-box mb-4 pb-1 pt-4 px-2">

                        <div class="col-12 mb-3">
                            <form class="row g-3" method="post" enctype="multipart/form-data" action="{{ route('adminUserManagement.addAlumniList') }}">
                                @csrf
                                <div class="col-12">
                                    <div class="d-flex text-end">
                                        <input class="form-control w-50 me-3" type="file" id="formFile" name="excel_file">
                                        @error('excel_file')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa-solid fa-arrow-up-from-bracket me-1"></i>
                                            <span>Upload</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-6">
                            <div class="row align-items-center justify-content-start">
                                <div class="col-2">
                                    <span>Sort by:</span>
                                </div>
                                <div class="col-5">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected hidden>Batch</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="col-5">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected hidden>Course</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <form class="row g-3">
                                @csrf
                                <div class="input-group mb-3 w-75">
                                    <input type="text" class="form-control" placeholder="Last Name" name="q" value="{{ $q }}">
                                    <button class="btn btn-primary" type="submit" id="button-addon2">
                                        <i class="fa-solid fa-magnifying-glass me-1"></i>
                                        <span>Search</span></button>
                                </div>
                            </form>
                        </div>

                    </div>

                    <div class="row sub-container-box pb-0 pt-4 px-3">
                        <div class="col-12">
                            <table class="table table-striped">
                                <thead class="table-dark">
                                    <tr>
                                    <th scope="col">Student Number</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Batch</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($alumni))
                                    @foreach ($alumni as $alum)
                                        <tr>
                                            {{-- {!! Form::model($alum, [ 'method' => 'delete','route' => ['admin.deleteAlumniList', $alum->studNumber] ]) !!} --}}
                                            <th scope="row">{{ $alum->stud_number }}</th>
                                            <td>{{ $alum->last_name }}</td>
                                            <td>{{ $alum->first_name }}</td>
                                            <td>{{ $alum->course_id }}</td>
                                            <td>{{ $alum->course_id }}</td>
                                            <td>

                                                <!-- Button trigger modal -->
                                                {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAlumni{{$alum->studNumber}}">Delete</button> --}}

                                                <!-- Modal -->
                                                {{-- <div class="modal fade" id="deleteAlumni{{$alum->studNumber}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Alumni</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="alert alert-danger" role="alert">
                                                                Are you sure you want to delete <b>{{$alum->lastname}}, {{$alum->firstname}}?</b>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div> --}}

                                            </td>
                                            {{-- {!! Form::close() !!} --}}
                                        </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8">No Data Found</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center mt-5">
                                {!! $alumni->links() !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
