@extends('layouts.admin')
@section('page-title', 'Admin Dashboard')
@section('active-homepage', 'active')
@section('page-name', 'Dashboard')
@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid box-content">

            <livewire:admin.page-title :title="$title"/>

            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row">
                        <div class="col-12">
                            <livewire:admin.admin-cards :totalRegisteredUser="$totalRegisteredUser" :totalRegisteredUserGender="$totalRegisteredUserGender" :totalStudents="$totalStudents" :listOfNewAccounts="$listOfNewAccounts" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
