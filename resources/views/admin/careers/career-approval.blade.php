@extends('layouts.admin')
@section('page-title', 'Careers')
@section('active-career-approval', 'active')
@section('page-name', 'Careers Management')

@section('content')

    <section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5 mb-5">
        <div class="container-fluid box-content">

            <livewire:admin.page-title :title="$title"/>

            <div class="row justify-content-center g-0">
                <div class="col-11">
                    <div class="row">
                        <div class="col-md-12 sub-container-box pt-4 px-4">
                            <table class="table align-middle">
                                <thead class="table-dark">
                                  <tr>
                                    <th scope="col">Posted By</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Category</th>
                                    <th scope="col" class="text-center">Action</th>
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
                                                <td>{{ $career->created_at }}</td>
                                                <td>{{ $career->category }}</td>
                                                <td class="text-center">
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
            </div>
        </div>
    </section>
@endsection
