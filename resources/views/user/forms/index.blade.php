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

        <div class="row mx-4 box-forms">
            <div class="col-md-12">
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
                                {{-- @if (!$exit->count())
                                    Not yet completed <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                @else
                                    Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                @endif --}}
                            </td>
                            <td>
                                {{-- @if (!$exit->count())
                                    <a href="{{ route('user.exitInterview') }}" type="button" class="btn btn-primary">Answer</a>
                                @else --}}
                                    ---
                                    {{-- <button class="btn btn-success" type="button">Print Form</button> --}}
                                {{-- @endif --}}
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">SAS Form</th>
                            <td class="align-middle">
                                {{-- @if (!$sas->count())
                                    Not yet completed <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                @else
                                    Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                @endif --}}
                            </td>
                            <td>
                                {{-- @if (!$sas->count())
                                    <a href="{{ route('user.sasForm') }}" type="button" class="btn btn-primary">Answer</a>
                                @else --}}
                                    ---
                                    {{-- <button class="btn btn-success" type="button">Print Form</button> --}}
                                {{-- @endif --}}
                            </td>
                        </tr>
                        <tr>
                            <th class="align-middle">Personal Data Sheet</th>
                            <td class="align-middle">
                                @if (!$userPDS->count())
                                    Not yet completed <i class="fa-solid fa-circle-exclamation" style="color: #E74C3C;"></i>
                                @else
                                    Completed <i class="fa-solid fa-circle-check" style="color: #27AE60;"></i>
                                @endif
                            </td>
                            <td>
                                @if (!$userPDS->count())
                                    <a href="{{ route('userForm.getPDS') }}" type="button" class="btn btn-primary">Answer</a>
                                @else
                                    ---
                                    <button class="btn btn-success" type="button">Print Form</button>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
