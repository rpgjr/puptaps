@extends('layouts.admin')
@section('page-title', 'Form Reports')
@section('active-form-reports', 'active')
@section('page-name', 'Reports')

@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid box-content">

            <div class="row mb-3 justify-content-center">
                <div class="col-11 px-0">
                    <div class="row justify-content-between px-0">
                        <div class="col-4">
                            <div class="h-100 card bg-primary-subtle" style="background: #AED6F1; color:">
                                <div class="card-body d-flex align-items-center">
                                    <div>
                                        <h4 class="card-title mb-1">No. of Alumni: 200</h4>
                                        <p class="card-text">as of {{ date('F d, Y') }}</p>
                                    </div>
                                    <div>
                                        <i class="fa-solid fa-graduation-cap text-primary" style="font-size: 100px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="background: #F5B7B1;">
                                <div class="card-header">Responses</div>
                                <div class="card-body">
                                    <h5 class="card-title">Primary card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="background: #F9E79F;">
                                <div class="card-header">Board Passers</div>
                                <div class="card-body">
                                    <h5 class="card-title">Primary card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-11">
                    <form action="{{ route('adminReports.generateFormReport') }}" method="post">
                    @csrf
                        <div class="row sub-container-box py-4 px-2">
                            <h3 class="mb-4">Form Reports</h3>
                            <div class="col-6 mb-3">
                                <label class="form-label">Forms</label>
                                <select class="form-select @error('form') is-invalid @enderror" name="form">
                                    <option value="" hidden selected>Please select one...</option>
                                    @foreach ($forms as $form)
                                        <option value="{{ $form->form_id }}">{{ $form->form_name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-message">@error('form') {{$message}} @enderror</span>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label">Report Type</label>
                                <select class="form-select @error('type') is-invalid @enderror" name="type">
                                    <option value="" hidden selected>Please select one...</option>
                                    <option value="1">Summary Report</option>
                                    <option value="2">Status Report</option>
                                </select>
                                <span class="text-danger error-message">@error('type') {{$message}} @enderror</span>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label">From (Batch)</label>
                                <select class="form-select @error('fromBatch') is-invalid @enderror" name="fromBatch">
                                    <option value="" hidden selected>Please select one...</option>
                                    @for ($i = date('Y'); $i >= 2022; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <span class="text-danger error-message">@error('fromBatch') {{$message}} @enderror</span>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label">To (Batch)</label>
                                <select class="form-select @error('toBatch') is-invalid @enderror" name="toBatch">
                                    <option value="" hidden selected>Please select one...</option>
                                    @for ($i = date('Y'); $i >= 2022; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                <span class="text-danger error-message">@error('toBatch') {{$message}} @enderror</span>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label">Categorized by</label>
                                <select class="form-select @error('type') is-invalid @enderror" name="type">
                                    <option value="" hidden selected>Please select one...</option>
                                    <option value="1">Course/Program</option>
                                    <option value="2">Sex</option>
                                </select>
                                <span class="text-danger error-message">@error('type') {{$message}} @enderror</span>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary fs-7">Generate Report <i class="fa-solid fa-file-lines ms-1"></i></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


@endsection
