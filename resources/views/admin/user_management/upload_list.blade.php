@extends('layouts.admin')
@section('page-title', 'Alumni List')
@section('active-alumni-list', 'active')
@section('page-name', 'User Management')

@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid">

            <livewire:admin.page-title :title="$title"/>

            <div class="row justify-content-center g-0">
                <div class="col-11">

                    <div class="row sub-container-box mb-4 py-3 px-2">
                        <div class="col-6">
                            <form class="row g-3" method="post" enctype="multipart/form-data" action="{{ route('adminUserManagement.addAlumniList') }}">
                                @csrf
                                <div class="col-9">
                                    <input class="form-control" type="file" id="formFile" name="excel_file">
                                    @error('excel_file')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa-solid fa-arrow-up-from-bracket me-1"></i>
                                        <span>Upload</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-6">
                            <form class="row g-3">
                                @csrf
                                <div class="input-group">
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($alumni))
                                    @foreach ($alumni as $alum)
                                        <tr>
                                            <th scope="row">{{ $alum->stud_number }}</th>
                                            <td>{{ $alum->last_name }}</td>
                                            <td>{{ $alum->first_name }}</td>
                                            <td>{{ $alum->course_id }}</td>
                                            <td>{{ $alum->batch }}</td>
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
