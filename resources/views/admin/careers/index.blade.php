@extends('layouts.admin')
@section('page-title', 'Admin-Career')
@section('careers-status', 'active')
@section('careers-collapse', 'show')
@section('admin.careerRequest', 'active')

@section('content')

    <div class="container-fluid box-content">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-4">Requests for Job Advertisements</h3>
            </div>

            <div class="col-md-12">
                <table class="table align-middle">
                    <thead>
                      <tr>
                        <th scope="col" style="width: 80%;">Posted By</th>
                        <th scope="col" style="width: 20%;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($careers as $career)
                            @if (($career->approval) == 0)
                                <tr>
                                    <th scope="row">
                                        @foreach ($users as $user)
                                            @if (($user->alumni_id) == ($career->alumni_id))
                                                <p class="mt-3">{{ $user->first_name }} {{ $user->last_name }}</p>
                                            @endif
                                        @endforeach
                                    </th>
                                    <td>
                                        <button type="button" class="btn btn-primary my-1" data-bs-toggle="modal" data-bs-target="#viewCareer{{ $career->career_id }}">View</button>
                                        @include('admin.components.viewCareer')
                                        <button type="button" class="btn btn-success my-1" data-bs-toggle="modal" data-bs-target="#approveCareer{{ $career->career_id }}">Approve</button>
                                        @include('admin.components.approveCareer')
                                        <button type="button" class="btn btn-danger my-1">Delete</button>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
