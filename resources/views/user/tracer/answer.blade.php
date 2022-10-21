@extends('layouts.user')

@section('page-title', 'Alumni Tracer')
@section('tracer-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row my-5">
            <div class="col-md-6">
                <h3>Alumni Tracer</h3>
            </div>
        </div>

        <div class="row mx-4 justify-content-center">
            <div class="col-md-10 box-tracer">
                @livewire('tracer.answer')
            </div>
        </div>
    </div>

@endsection
