@extends('layouts.admin')
@section('page-title', 'Tracer Reports')
@section('active-tracer-reports', 'active')
@section('page-name', 'Reports')

@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid box-content">

            <livewire:admin.page-title :title="$title"/>

            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row sub-container-box py-4 px-2">
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
