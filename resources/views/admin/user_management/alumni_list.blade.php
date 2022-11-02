@extends('layouts.admin')

@section('page-title', 'Admin')
@section('alumni-list-status', 'active')
@section('monitor-collapse', 'show')
@section('user-status', 'active')

@section('content')

    <div class="container-fluid box-content">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-5">List of Alumni</h3>

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <form class="row g-3" method="post" enctype="multipart/form-data" action="{{ route('adminUserManagement.addAlumniList') }}">
                            @csrf
                            <div class="col-auto">
                                <input class="form-control" type="file" id="formFile" name="excel_file">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Upload</button>
                            </div>
                            @error('excel_file')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </form>
                    </div>

                    <div class="col-md-6 mb-2">
                        <form class="row g-3">
                            @csrf
                            <div class="input-group mb-3 w-50">
                                <input type="text" class="form-control" placeholder="Last Name" name="q" value="{{ $q }}">
                                <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-12 my-2">
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col">Student Number</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Middle Name</th>
                                <th scope="col">Suffix</th>
                                <th scope="col">Course</th>
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
                                        <td>{{ $alum->middle_name }}</td>
                                        <td>{{ $alum->suffix }}</td>
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
                        <div class="d-flex justify-content-center">
                            {!! $alumni->links() !!}
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

@endsection
