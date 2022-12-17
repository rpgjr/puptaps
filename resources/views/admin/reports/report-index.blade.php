@extends('layouts.admin')
@section('page-title', 'Reports Dashboard')
@section('active-reports-index', 'active')
@section('page-name', 'Reports')

@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid box-content">

            <livewire:admin.page-title :title="$title"/>

            <div class="row justify-content-center">
                <div class="col-11">
                    <form action="" method="post">
                    @csrf
                        <div class="row sub-container-box py-4 px-2">
                            <div class="col-5 mb-3">
                                <label class="form-label">Report for</label>
                                <select class="form-select @error('form') is-invalid @enderror" name="form">
                                    <option value="" hidden selected>Please select one...</option>
                                    @foreach ($forms as $form)
                                        <option value="{{ $form->form_id }}">{{ $form->form_name }}</option>
                                    @endforeach
                                    <option value="User">User</option>
                                    <option value="Tracer">Tracer</option>
                                </select>
                                <span class="text-danger error-message">@error('form') {{$message}} @enderror</span>
                            </div>
                            <div class="col-5 mb-3">
                                <label class="form-label">Report Type</label>
                                <select class="form-select @error('form') is-invalid @enderror" name="form">
                                    <option value="" hidden selected>Please select one...</option>
                                    <option value="1">Form Answers Summary</option>
                                    <option value="2">User Form Status</option>
                                    <option value="3">List of Students</option>
                                </select>
                                <span class="text-danger error-message">@error('form') {{$message}} @enderror</span>
                            </div>
                            <div class="col-5 mb-3">
                                <label class="form-label">For Batch</label>
                                <select class="form-select @error('form') is-invalid @enderror" name="form">
                                    <option value="" hidden selected>Please select one...</option>
                                    @for ($i = date('Y'); $i >= 2022; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <span class="text-danger error-message">@error('form') {{$message}} @enderror</span>
                            </div>
                            <div class="col-5 mb-3">
                                <label class="form-label">Sort By</label>
                                <select class="form-select @error('form') is-invalid @enderror" name="form">
                                    <option value="" hidden selected>Please select one...</option>
                                    <option value="Course">Course</option>
                                    <option value="Gender">Gender</option>
                                    <option value="Age">Age</option>
                                </select>
                                <span class="text-danger error-message">@error('form') {{$message}} @enderror</span>
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
