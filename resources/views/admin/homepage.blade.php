@extends('layouts.admin')
@section('page-title', 'Admin Dashboard')
@section('active-homepage', 'active')
@section('page-name', 'Dashboard')
@section('content')

    <div class="container-fluid">
        <div class="row mx-1">
            <div class="col-12 mt-5">
                <h3>Statistics Summary</h3>
            </div>

            <!-- Start: Cards -->
            <div class="col-12">
                <div class="row mt-3">
                    <div class="col-4">
                        <div class="bg-primary text-white rounded px-3 pt-4 pb-3">
                            <h4>Registered Alumni (2023)</h4>
                            <hr>
                            <p>Card Text</p>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="bg-warning text-dark rounded px-3 pt-4 pb-3">
                            <h4>Tracer Answers</h4>
                            <hr>
                            <p>Card Text</p>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="bg-danger text-white rounded px-3 pt-4 pb-3">
                            <h4>Batch 2023 - Forms</h4>
                            <hr>
                            <p>Card Text</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: Cards -->
        </div>
    </div>

@endsection
