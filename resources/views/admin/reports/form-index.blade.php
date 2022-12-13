@extends('layouts.admin')
@section('page-title', 'Form Reports')
@section('active-form-reports', 'active')
@section('page-name', 'Reports')

@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid box-content">

            <livewire:admin.page-title :title="$title"/>
            <!--
                1. Form Name
                2. Report Type
                3. Batch
                4. Sort by
                5. Button
            -->

            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row sub-container-box py-4 px-2">
                        <div class="col-3">
                            <label class="form-label">Form Name</label>
                            <select class="form-select @error('form') is-invalid @enderror" name="form">
                                <option value="" hidden selected>Please select one...</option>
                                @foreach ($forms as $form)
                                    <option value="{{ $form->form_id }}">{{ $form->form_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger error-message">@error('form') {{$message}} @enderror</span>
                        </div>
                        <div class="col-3">
                            <label class="form-label">Report Type</label>
                            <select class="form-select @error('form') is-invalid @enderror" name="form">
                                <option value="" hidden selected>Please select one...</option>
                                @foreach ($forms as $form)
                                    <option value="{{ $form->form_id }}">{{ $form->form_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger error-message">@error('form') {{$message}} @enderror</span>
                        </div>
                        <div class="col-3">
                            <label class="form-label">For Batch</label>
                            <select class="form-select @error('form') is-invalid @enderror" name="form">
                                <option value="" hidden selected>Please select one...</option>
                                @for ($i = date('Y'); $i >= 2022; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            <span class="text-danger error-message">@error('form') {{$message}} @enderror</span>
                        </div>
                        <div class="col-3">
                            <label class="form-label">Sort By</label>
                            <select class="form-select @error('form') is-invalid @enderror" name="form">
                                <option value="" hidden selected>Please select one...</option>
                                @foreach ($forms as $form)
                                    <option value="{{ $form->form_id }}">{{ $form->form_name }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger error-message">@error('form') {{$message}} @enderror</span>
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">Generate Report <i class="fa-solid fa-file-lines ms-1"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
