@extends('layouts.user')
@section('page-title', 'Forms')
@section('form-active', 'active')
@section('content')
    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5">
        <div class="container-fluid">

            <!-- Page Title Text H1 -->
            <livewire:components.page-title :title="$title"/>

            <div class="row justify-content-center">
                <!-- Start: Body -->
                <div class="col-11 col-sm-9 col-md-9 col-lg-9 col-xl-9 container-box">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Form Name</th>
                            <th scope="col" style="width: 200px;">Status</th>
                            <th scope="col" style="width: 200px;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($forms as $form)
                            <tr>
                                <th class="align-middle">{{ $form->form_name }}</th>
                                @if (($form->form_name) == "Personal Data Sheet")
                                    <td class="align-middle">
                                        @if (count($pdsAnswer) > 0)
                                        Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                        @else
                                            Not yet completed <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if (count($pdsAnswer) > 0)
                                            <form action="{{ route('userForm.downloadPDS') }}" method="post" target="__blank">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Print</button>
                                            </form>
                                        @else
                                            <a href="{{ route('userForm.getPDS') }}" type="button" class="btn btn-primary">Answer</a>
                                        @endif
                                    </td>

                                @elseif (($form->form_name) == "Exit Interview Form")
                                    <td class="align-middle">
                                        @if (count($eifAnswer) > 0)
                                        Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                        @else
                                            Not yet completed <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if (count($eifAnswer) > 0)
                                            <form action="{{ route('userForm.downloadEI') }}" method="post" target="__blank">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Print</button>
                                            </form>
                                        @else
                                            <a href="{{ route('userForm.getExiteInterview') }}" type="button" class="btn btn-primary">Answer</a>
                                        @endif
                                    </td>

                                @elseif (($form->form_name) == "Student Affairs and Services Form")
                                    <td class="align-middle">
                                        @if (count($sasAnswer) > 0)
                                        Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                        @else
                                            Not yet completed <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if (count($sasAnswer) > 0)
                                            <form action="{{ route('userForm.downloadSAS') }}" method="post" target="__blank">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Print</button>
                                            </form>
                                        @else
                                            <a href="{{ route('userForm.getSAS') }}" type="button" class="btn btn-primary">Answer</a>
                                        @endif
                                    </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
