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
                    <div class="row">
                        <div class="col-12">
                            <livewire:reports.form-cards />
                        </div>

                        <div class="col-12">
                            <!--
                                name of form
                                type of report
                                batch
                                course
                                Constrainst - alphabetical / done or not / student number

                            -->
                        </div>

                        <div class="col-12">
                            <!--
                                generate PDF - option to download pdf
                            -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
