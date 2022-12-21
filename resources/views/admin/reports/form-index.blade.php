@extends('layouts.admin')
@section('page-title', 'Form Reports')
@section('active-form-reports', 'active')
@section('page-name', 'Reports')

@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid box-content">

            <livewire:admin.page-title :title="$title"/>

            <div class="row justify-content-center">
                <div class="col-11">
                    <form action="{{ route('adminReports.generateFormReport') }}" method="post">
                    @csrf
                        <div class="row sub-container-box py-4 px-2">
                            <div class="col-4 mb-3">
                                <label class="form-label">Form Name</label>
                                <select class="form-select @error('form') is-invalid @enderror" name="form">
                                    <option value="" hidden selected>Please select one...</option>
                                    @foreach ($forms as $form)
                                        <option value="{{ $form->form_id }}">{{ $form->form_name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-message">@error('form') {{$message}} @enderror</span>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label">Report Type</label>
                                <select class="form-select @error('type') is-invalid @enderror" name="type">
                                    <option value="" hidden selected>Please select one...</option>
                                    <option value="1">Summary Report General</option>
                                    <option value="2">Summary Report - by Course</option>
                                    <option value="3">Summary Report - by Gender</option>
                                    <option value="4">Students Form Status General</option>
                                    <option value="5">Students Form Status - by Course</option>
                                </select>
                                <span class="text-danger error-message">@error('type') {{$message}} @enderror</span>
                            </div>
                            <div class="col-4 mb-3">
                                <label class="form-label">For Batch</label>
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
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


@endsection
