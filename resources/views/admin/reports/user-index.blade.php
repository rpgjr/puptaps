@extends('layouts.admin')
@section('page-title', 'User Reports')
@section('active-user-reports', 'active')
@section('page-name', 'Reports')

@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid box-content">

            <livewire:admin.page-title :title="$title"/>

            <div class="row justify-content-center">
                <div class="col-11">

                    <form action="{{ route('adminReports.generateUserReport') }}" method="post">
                    <div class="row sub-container-box py-4 px-2">
                    @csrf
                            <div class="col-5 mb-3">
                                <label class="form-label">Report Type</label>
                                <select class="form-select @error('type') is-invalid @enderror" name="type">
                                    <option value="" hidden selected>Please select one...</option>
                                    <option value="1">Summarized Students Information by Demograph</option>
                                    <option value="2">List of Students - by Course</option>
                                    <option value="3">List of Students - by Gender</option>
                                </select>
                                <span class="text-danger error-message">@error('type') {{$message}} @enderror</span>
                            </div>
                            <div class="col-5 mb-3">
                                <label class="form-label">From Batch</label>
                                <select class="form-select @error('batch') is-invalid @enderror" name="batch">
                                    <option value="" hidden selected>Please select one...</option>
                                    @for ($i = date('Y'); $i >= 2022; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <span class="text-danger error-message">@error('batch') {{$message}} @enderror</span>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Generate Report <i class="fa-solid fa-file-lines ms-1"></i></button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
