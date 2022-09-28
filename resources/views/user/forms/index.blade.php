@extends('layouts.user')

@section('page-title', 'Alumni Tracer')
@section('form-active', 'active')

@section('content')

    <div class="container my-3">
        <div class="row my-5">
            <div class="col-md-6">
                <h3>Forms for Graduating Students</h3>
            </div>
        </div>

        <div class="row mx-4 justify-content-center">
            <div class="col-md-9 box-forms">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Form Name</th>
                        <th scope="col" style="width: 200px;">Status</th>
                        <th scope="col" style="width: 200px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="align-middle">Exit Interview</th>
                            <td class="align-middle">
                                @if (count($userExitInterview) > 0)
                                    Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                @else
                                    Not yet completed <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                @endif
                            </td>
                            <td>
                                @if (count($userExitInterview) > 0)
                                    <a href="" type="button" class="btn btn-success">Print</a>
                                @else
                                    <a href="{{ route('userForm.getExiteInterview') }}" type="button" class="btn btn-primary">Answer</a>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">SAS Form</th>
                            <td class="align-middle">
                                @if (count($userSAS) > 0)
                                    Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                @else
                                    Not yet completed <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                @endif
                            </td>
                            <td>
                                @if (count($userSAS) > 0)
                                    <form action="{{ route('userForm.downloadSAS') }}" method="post" target="__blank">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Print</button>
                                    </form>
                                @else
                                    <a href="{{ route('userForm.getSAS') }}" type="button" class="btn btn-primary">Answer</a>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">Personal Data Sheet</th>
                            <td class="align-middle">
                                @if (count($userPDS) > 0)
                                    Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                @else
                                    Not yet completed <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                @endif
                            </td>
                            <td>
                                @if (count($userPDS) > 0)
                                    <form action="{{ route('userForm.downloadPDS') }}" method="post" target="__blank">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Print</button>
                                    </form>
                                @else
                                    <a href="{{ route('userForm.getPDS') }}" type="button" class="btn btn-primary">Answer</a>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
