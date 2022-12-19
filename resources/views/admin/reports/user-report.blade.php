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
                    <div class="row py-2 px-1">
                        <div class="col-12">
                            <div class="buttons-reports d-flex justify-content-end">
                                <form action="{{ route('adminReports.USER_REPORT_PDF') }}" method="post" target="__blank">
                                @csrf
                                    <input type="hidden" name="type" value="{{ $type }}">
                                    <input type="hidden" name="batch" value="{{ $batch }}">
                                    <input type="hidden" name="action" value="I">
                                    <button type="submit" class="btn btn-primary me-2">View Report in PDF</button>
                                </form>
                                <form action="{{ route('adminReports.DOWNLOAD_USER_REPORT_PDF') }}" method="post" target="__blank">
                                    @csrf
                                        <input type="hidden" name="type" value="{{ $type }}">
                                        <input type="hidden" name="batch" value="{{ $batch }}">
                                        <input type="hidden" name="action" value="D">
                                        <button type="submit" class="btn btn-success me-2">Download Report in PDF</button>
                                    </form>
                                <a href="{{ route('adminReports.getUserReports') }}" class="btn btn-secondary">Return to Menu</a>
                            </div>
                        </div>
                    </div>

                    @include('admin.components.user-reports-list')
                </div>
            </div>
        </div>
    </section>

@endsection
