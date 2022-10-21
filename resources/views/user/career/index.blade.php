@extends('layouts.user')

@section('page-title', 'Career Dashboard')

@section('career-active', 'active')

@section('content')

    <section class="career-title m-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        @if(Session::has('success'))
                        <center><div class="alert alert-success">{{ Session::get('success') }}</div></center>
                        @endif
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                        @endif
                    </div>
                </div>

                <div class="row mb-5 mt-3">
                    <div class="col-md-12">
                        <h1>Career Dashboard</h1>
                    </div>
                </div>

                <div class="row justify-content-center">
                    {{-- Contents --}}
                    <div class="col-md-9 box-career">
                        <div class="row">
                            <div class="col-md-4 my-1">
                                <form>
                                    @csrf
                                    <div class="input-group mb-3 ">
                                        <input type="text" class="form-control" placeholder="Search for a Category..." name="query" value="{{ $query }}">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-8 my-1">
                                <div class="dropdown float-end">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Add Job Ad
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-md-start">
                                      <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addCareerImage">Add as Image</button></li>
                                      <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addCareerText">Add as Text</button></li>
                                    </ul>
                                    @include('user.components.add_career_image')
                                    @include('user.components.add_career_text')
                                </div>
                            </div>
                        </div>

                        @if (count($careers) == 0)
                            <div class="alert alert-danger" role="alert">
                                There is no available data yet.
                            </div>

                            @else
                            @foreach ($careers as $career)
                                <table class="table table-borderless career-table">
                                    <thead class="align-middle">
                                        @foreach ($alumni as $alum)
                                            @if (($alum->alumni_ID) == ($career->alumni_ID))
                                                <tr>
                                                    <th>
                                                        @if ($alum->user_profile == null)
                                                            <img src="{{ asset('Uploads/Profiles/user-no-profile.png') }}" class="user-profile-button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        @else
                                                            <img src="/Uploads/Profiles/{{ $alum->user_profile }}" class="user-profile-button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        @endif
                                                    </th>
                                                    <th>{{ $alum->first_name }} {{ $alum->last_name }} {{ $alum->suffix }}</th>
                                                    <th>{{ $career->category }}</th>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>{{ date('F d, Y h:m:a', strtotime($career->created_at)) }}</td>
                                            <td class="career-image">
                                                @if (($career->job_ad_image) == null)
                                                @else
                                                    <img src="/Uploads/Career/{{ $career->job_ad_image }}" alt="" style="width: 100%; height: 50%;">
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach
                        @endif

                        {{-- <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" style="width: 20%;">Job Category</th>
                                <th scope="col" style="width: 60%;">Date Posted</th>
                                <th scope="col" style="width: 20%;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if (count($careers) > 0)
                                @foreach ($careers as $career)
                                    @if (($career->approval) == 1)
                                        <tr>
                                            <th scope="row">{{ $career->category }}</th>
                                            <td>{{ $career->created_at }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary my-1" data-bs-toggle="modal" data-bs-target="#viewCareer{{ $career->career_ID }}">View</button>
                                                @include('user.components.view_career')

                                                <button type="button" class="btn btn-success my-1" data-bs-toggle="modal" data-bs-target="#applyCareer{{ $career->career_ID }}"
                                                    @foreach ($applicants as $applicant)
                                                        @if($career->career_ID == $applicant->career_ID) {
                                                            disabled
                                                        }
                                                        @endif
                                                    @endforeach
                                                >Apply</button>
                                                @include('user.components.apply_career')
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="text-center"><b>No data found!</b></td>
                                </tr>
                            @endif

                            </tbody>
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="career-content">

    </section>


@endsection
