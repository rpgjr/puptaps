@extends('layouts.user')

@section('page-title', 'Career Dashboard')

@section('career-active', 'active')

@section('content')

    <section class="career-title m-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        @if(Session::has('success'))
                        <center><div class="alert alert-success">{{ Session::get('success') }}</div></center>
                        @endif
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <h1>Career Dashboard</h1>
                </div>
                <div class="col-md-6">
                    <div class="dropdown float-end">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Add Job Ad
                        </button>
                        <ul class="dropdown-menu dropdown-menu-md-end">
                          <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addCareerImage">Add as Image</button></li>
                          <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addCareerText">Add as Text</button></li>
                        </ul>
                        @include('user.components.addCareerImage')
                        @include('user.components.addCareerText')
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="career-content">

    </section>


@endsection
