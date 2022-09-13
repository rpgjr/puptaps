@extends('layouts.admin')

@section('page-title', 'Admin Dashboard')

@section('content')

    <div class="container-dashboard-content">
        <div class="header">
            <h3>Statistics Summary</h3>
        </div>

        <div class="container form-status">
            <div class="row d-flex justify-content-center" id="flex-forms">
                <div class="col border rounded">
                    <p>Exit Form Status</p>
                </div>
                <div class="col border rounded">
                    <p>SAS Form Status</p>
                </div>
                <div class="col border rounded">
                    <p>PDS Status</p>
                </div>
                <div class="col border rounded">
                    <p>Alumni Tracer Status</p>
                </div>
            </div>
        </div>

        <div class="container-status">
            <div class="row d-flex justify-content-center px-3" id="flex-forms">
                <div class="col career-status border rounded">
                    <p>Career Overview</p>
                </div>
                <div class="col user-status border rounded">
                    <p>Registerd Alumni Status</p>
                </div>
            </div>
        </div>
    </div>

@endsection
