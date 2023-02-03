@extends('layouts.user')
@section('page-title', 'Homepage')
@section('home-active', 'user-active')
@section('content')


<section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5">
    <div class="container-fluid my-3">
        <div class="row justify-content-center g-0">
            <div class="col-11 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                @if (count($announcements) == 0)
                    <div class="row sub-container-box py-4">
                        <h4 class="mb-3">Announcements</h4>
                        <div class="col-12">
                            <div class="alert alert-warning mb-0 fw-bold" role="alert">
                                There is no announcement posted yet.
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($announcements as $announcement)
                        <div class="row sub-container-box mb-4 py-4 px-5">
                            <div class="col-5">
                                <img src="{{ asset("Uploads/NewsAnnouncements/$announcement->announcement_image") }}" alt="" class="w-100 rounded">
                            </div>
                            <div class="col-7">
                                <h4><i class="fa-solid fa-bullhorn me-2"></i>{{ $announcement->announcement_title }}</h4>
                                <p style="white-space: pre-wrap; text-align: justify; text-justify: inter-word;">{{ $announcement->announcement_text }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="row justify-content-center g-0 mt-4">
            <div class="col-11 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                @if (count($news) == 0)
                    <div class="row sub-container-box py-4">
                        <h4 class="mb-3">Announcements</h4>
                        <div class="col-12">
                            <div class="alert alert-warning mb-0 fw-bold" role="alert">
                                There is no announcement posted yet.
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($news as $new)
                        <div class="row sub-container-box mb-4 py-4 px-5">
                            <div class="col-5">
                                <img src="{{ asset("Uploads/NewsAnnouncements/$new->news_image") }}" alt="" class="w-100 rounded">
                            </div>
                            <div class="col-7">
                                <h4><i class="fa-solid fa-newspaper me-2"></i>{{ $new->news_title }}</h4>
                                <p style="white-space: pre-wrap; text-align: justify; text-justify: inter-word;">{{ $new->news_text }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

@endsection
