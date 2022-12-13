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
              <div class="row sub-container-box mb-4 py-3 px-2 justify-content-end">
                <div class="col-6">
                  <form class="g-3">
                    @csrf
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Last Name" name="q" value="{{ $q }}">
                      <a href="{{ route('adminUserManagement.getAlumniManager') }}" class="btn btn-secondary" type="button" id="button-addon2">
                        <i class="fa-solid fa-rotate-right me-1"></i>
                      <span>Reset</span></a>
                      <button class="btn btn-primary" type="submit" id="button-addon2">
                      <i class="fa-solid fa-magnifying-glass me-1"></i>
                      <span>Search</span></button>
                    </div>
                  </form>
                </div>
              </div>

            <div class="row sub-container-box pb-0 pt-4 px-3">
                <div class="col-12">
                    <table class="table table-striped align-middle table-hover">
                        <thead class="table-dark">
                            <tr>
                            <th scope="col" class="col-3">Student Number</th>
                            <th scope="col" class="col-4">Last Name</th>
                            <th scope="col" class="col-3">Course</th>
                            <th scope="col" class="col-2">Batch</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($alumni))
                            @foreach ($alumni as $alum)
                              <tr data-bs-toggle="modal" data-bs-target="#viewAlumniDetails{{ $alum->alumni_id }}">
                                  <th class="py-3">{{ $alum->stud_number }}</th>
                                  <td class="py-3">{{ $alum->last_name }}</td>
                                  <td class="py-3">{{ $alum->course_id }}</td>
                                  <td class="py-3">{{ $alum->batch }}</td>
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
