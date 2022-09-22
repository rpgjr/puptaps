@extends('layouts.user')

@section('page-title', 'Alumni Tracer')
@section('form-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row my-5">
            <div class="col-md-6">
                <h3>Personal Data Sheet</h3>
            </div>
        </div>

        <div class="row mx-4 justify-content-center">
            <div class="col-md-9 box-forms">
                @livewire('personal-data-sheet')
            </div>
        </div>
    </div>

@endsection
