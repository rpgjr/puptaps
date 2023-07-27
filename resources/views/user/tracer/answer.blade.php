@extends('layouts.user')
@section('page-title', 'Alumni Tracer')
@section('tracer-active', 'user-active')

@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid my-3">

            <div class="row justify-content-center g-0">
                <div class="col-11 col-sm-9 col-md-9 col-lg-9 col-xl-9 animate__animated animate__fadeInUp">
                    <livewire:tracer.answer />
                </div>
            </div>
        </div>
    </section>

@endsection
