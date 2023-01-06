@extends('layouts.user')
@section('page-title', 'Forms')
@section('form-active', 'active')
@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5">
        <div class="container-fluid form-module-body">

            <!-- Page Title Text H1 -->
            <livewire:components.page-title :title="$title"/>

            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-9 col-lg-9 col-xl-9 container-box">
                    <div class="row align-items-center">
                        <div class="col-4 col-sm-4 col-md-6 col-lg-6 col-xl-8">
                            <p class="fw-bold">Form Name</p>
                        </div>
                        <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <p class="fw-bold text-center">Status</p>
                        </div>
                        <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <p class="fw-bold text-center">Action</p>
                        </div>
                    </div>

                    @foreach ($forms as $form)
                    <!-- PDS -->
                    @if (($form->form_name) == "Personal Data Sheet")
                        <div class="row align-items-center border-top py-3">
                            <div class="col-4 col-sm-4 col-md-6 col-lg-6 col-xl-8">
                                <div class="fw-bold">Personal Data Sheet</div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                                <div class="text-center">
                                    @if (count($pdsAnswer) > 0)
                                        Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                    @else
                                        Undone <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                    @endif
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                                <div class="text-center">
                                    @if (count($pdsAnswer) > 0)
                                        <form action="{{ route('userForm.downloadPDS') }}" method="post" target="__blank">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Print</button>
                                        </form>
                                    @else
                                        <a href="{{ route('userForm.getPDS') }}" type="button" class="btn btn-primary">Answer</a>
                                    @endif
                                </div>
                            </div>
                        </div>

                    <!-- EIF -->
                    @elseif (($form->form_name) == "Exit Interview Form")
                        <div class="row align-items-center border-top py-3">
                            <div class="col-4 col-sm-4 col-md-6 col-lg-6 col-xl-8">
                                <div class="fw-bold">Exit Interview Form</div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                                <div class="text-center">
                                    @if (count($eifAnswer) > 0)
                                        Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                    @else
                                        Undone <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                    @endif
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                                <div class="text-center">
                                    @if (count($eifAnswer) > 0)
                                        <form action="{{ route('userForm.downloadEI') }}" method="post" target="__blank">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Print</button>
                                        </form>
                                    @else
                                        <a href="{{ route('userForm.getExiteInterview') }}" type="button" class="btn btn-primary">Answer</a>
                                    @endif
                                </div>
                            </div>
                        </div>

                    <!-- SAS -->
                    @elseif (($form->form_name) == "Student Affairs and Services Form")
                        <div class="row align-items-center border-top py-3">
                            <div class="col-4 col-sm-4 col-md-6 col-lg-6 col-xl-8">
                                <div class="fw-bold">Student Affairs and Services Form</div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                                <div class="text-center">
                                    @if (count($sasAnswer) > 0)
                                        Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                    @else
                                        Undone <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                    @endif
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                                <div class="text-center">
                                    @if (count($sasAnswer) > 0)
                                        <form action="{{ route('userForm.SAS_TO_PDF') }}" method="post" target="__blank">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Print</button>
                                        </form>
                                    @else
                                        <a href="{{ route('userForm.getSAS') }}" type="button" class="btn btn-primary">Answer</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
