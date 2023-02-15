@extends('layouts.admin')
@section('page-title', 'Alumni Manager')
@section('active-alumni-manager', 'active')
@section('page-name', 'User Management')

@section('content')

  <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
    <div class="container-fluid">

        <livewire:components.alert-status-message :message="session()->get('success')" />

        <livewire:admin.page-title :title="$title"/>

        <div class="row justify-content-center g-0">
            <div class="col-11">
                <div class="row sub-container-box mb-3 py-3 px-2 justify-content-between">
                    <div class="col-6 d-flex">
                        <form class="" method="post" enctype="multipart/form-data" action="{{ route('adminUserManagement.addAlumniList') }}">
                        @csrf
                            <div class="input-group">
                                <input class="form-control fs-7" type="file" id="formFile" name="excel_file">
                                <button type="submit" class="btn btn-primary fs-7">
                                    <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                </button>
                            </div>

                            @error('excel_file')
                                <p class="text-danger mt-2 mb-0 py-0">{{ $message }}</p>
                            @enderror
                        </form>
                        <div class="ms-2">
                            <a href="{{ route("adminUserManagement.downloadListTemplate") }}" class="btn btn-success fs-7"><span>Template</span><i class="ms-1 fa-solid fa-file-csv"></i></a>
                        </div>
                    </div>
                    <div class="col-4">
                        <form class="g-3">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control fs-7" placeholder="Last Name or Student Number" name="q" value="{{ $q }}">
                                <a href="{{ route('adminUserManagement.getAlumniManager') }}" class="fs-7 btn btn-secondary" type="button" id="button-addon2">
                                    <i class="fa-solid fa-rotate-right me-1"></i></a>
                                <button class="fs-7 btn btn-primary" type="submit" id="button-addon2">
                                <i class="fa-solid fa-magnifying-glass me-1"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="row mb-3 mt-0">
                    <div class="col-12 text-end">
                        <a href="{{ route("adminUserManagement.downloadListTemplate") }}" class="btn btn-success">Download Template<i class="fa-solid fa-file-csv ms-2"></i></a>
                    </div>
                </div> --}}

            <div class="row sub-container-box pb-0 pt-4 px-3">
                <div class="col-12">
                    <table class="table table-striped align-middle table-hover">
                        <thead class="tbl-head">
                            <tr>
                                <th scope="col" class="col-1"></th>
                                <th scope="col" class="col-2">Student Number</th>
                                <th scope="col" class="col-2">Last Name</th>
                                <th scope="col" class="col-1">Course</th>
                                <th scope="col" class="col-1">Batch</th>
                                <th scope="col" class="col-1 text-center">PDS</th>
                                <th scope="col" class="col-1 text-center">EIF</th>
                                <th scope="col" class="col-1 text-center">SAS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($alumni))
                            @foreach ($alumni as $alum)
                                <tr>
                                    <th class="text-center"><button class="fs-7 btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewAlumniDetails{{ $alum->alumni_id }}"><i class="fa-solid fa-eye"></i></button></th>
                                    <th>{{ $alum->stud_number }}</th>
                                    <td>{{ $alum->last_name }}</td>
                                    <td>{{ $alum->course_id }}</td>
                                    <td>{{ $alum->batch }}</td>
                                    <td class="text-center">
                                        @if ($PDS->contains('alumni_id', $alum->alumni_id))
                                            <form action="{{ route("userForm.PDS_to_PDF") }}" method="POST" target="_blank">
                                                @csrf
                                                <input type="hidden" name="alumni_id" value="{{ $alum->alumni_id }}">
                                                <button type="submit" class="fs-7 btn btn-success px-2">PDS <i class="fa-solid fa-file-pdf"></i></button>
                                            </form>
                                        @else
                                            <i class="fa-regular fa-circle-xmark me-1 text-danger"></i><span class="text-danger">PDS</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($EIF->contains('alumni_id', $alum->alumni_id))
                                            <form action="{{ route("userForm.EIF_TO_PDF") }}" method="POST" target="_blank">
                                                @csrf

                                                <input type="hidden" name="alumni_id" value="{{ $alum->alumni_id }}">
                                                <button type="submit" class="fs-7 btn btn-success px-2">EIF <i class="fa-solid fa-file-pdf"></i></button>
                                            </form>
                                        @else
                                            <i class="fa-regular fa-circle-xmark me-1 text-danger"></i><span class="text-danger">EIF</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($SAS->contains('alumni_id', $alum->alumni_id))
                                            <form action="{{ route("userForm.SAS_TO_PDF") }}" method="POST" target="_blank">
                                                @csrf

                                                <input type="hidden" name="alumni_id" value="{{ $alum->alumni_id }}">
                                                <button class="fs-7 btn btn-success px-2">SAS <i class="fa-solid fa-file-pdf"></i></button>
                                            </form>
                                        @else
                                            <i class="fa-regular fa-circle-xmark me-1 text-danger"></i><span class="text-danger">SAS</span>
                                        @endif
                                    </td>
                                </tr>
                              @include('admin.components.view-alumni-details')
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
