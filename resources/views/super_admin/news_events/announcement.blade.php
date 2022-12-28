@extends('layouts.super-admin')
@section('page-title', 'Announcement Settings')
@section('active-announcement-settings', 'active')
@section('page-name', 'News and Events')

@section('content')

<section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5">
    <div class="container-fluid my-3">

        <livewire:components.alert-status-message :message="session()->get('success')" />

        <div class="row justify-content-center g-0">
            <div class="col-11 sub-container-box pt-4 pb-3">
                <div class="row">
                    <div class="col-6">
                        <h3>Announcement Settings</h3>
                    </div>
                    <div class="col-6 text-end">
                        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#addAnnouncementCollapse"><i class="fa-solid fa-plus"></i></button>
                    </div>
                    <div class="col-12">
                        <div class="collapse mt-3" id="addAnnouncementCollapse">
                            <div>
                                <form action="{{ route("superAdmin.postAnnouncement") }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="mb-3 w-50">
                                        <label class="form-label">Announcement Image:</label>
                                        <input type="file" class="form-control @error('announcement_image') border border-danger @enderror" name="announcement_image">
                                        <span class="text-danger error-message">@error('announcement_image') {{$message}} @enderror</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Announcement Title:</label>
                                        <input type="text" class="form-control @error('announcement_title') border border-danger @enderror" name="announcement_title">
                                        <span class="text-danger error-message">@error('announcement_title') {{$message}} @enderror</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Announcement:</label>
                                        <textarea class="form-control @error('announcement_text') border border-danger @enderror" rows="5" name="announcement_text"></textarea>
                                        <span class="text-danger error-message">@error('announcement_text') {{$message}} @enderror</span>
                                    </div>
                                    <div class="mb-2 text-end">
                                        <button class="btn btn-success" type="submit">Add Announcement</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                </div>
            </div>

            <div class="col-11 sub-container-box py-4 mt-4">
                <div class="row gy-4">
                    @if (count($announcements) == 0)
                        <div class="col-12">
                            <div class="alert alert-warning mb-0" role="alert">
                                There is no announcement posted yet.
                            </div>
                        </div>
                    @else
                        @foreach ($announcements as $announcement)
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="rounded w-100" src="{{ asset("Uploads/NewsAnnouncements/" . $announcement->announcement_image) }}" alt="">
                                    </div>
                                    <div class="col-6">
                                        <h4 class="mb-3"><i class="fa-solid fa-bullhorn me-2"></i>{{ $announcement->announcement_title }}</h4>
                                        <p style="white-space: pre-wrap; text-align: justify; text-justify: inter-word;">{{ $announcement->announcement_text }}</p>
                                    </div>
                                    <div class="col-1 text-center">
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAnnouncement{{$announcement->announcement_id}}"><i class="fa-solid fa-trash-can"></i></button>
                                        @include("super_admin.components.delete-announcement")
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
