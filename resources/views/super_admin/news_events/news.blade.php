@extends('layouts.super-admin')
@section('page-title', 'News Settings')
@section('active-news-settings', 'active')
@section('page-name', 'News and Events')

@section('content')

<section class="mt-4 mt-sm-4 mt-md-4 mt-lg-5 mt-xl-5">
    <div class="container-fluid my-3">

        <livewire:components.alert-status-message :message="session()->get('success')" />

        <div class="row justify-content-center g-0">
            <div class="col-11 sub-container-box pt-4 pb-3">
                <div class="row">
                    <div class="col-6">
                        <h3>News Settings</h3>
                    </div>
                    <div class="col-6 text-end">
                        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#addAnnouncementCollapse"><i class="fa-solid fa-plus"></i></button>
                    </div>
                    <div class="col-12">
                        <div class="collapse mt-3" id="addAnnouncementCollapse">
                            <div>
                                <form action="{{ route("superAdmin.postNews") }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="mb-3 w-50">
                                        <label class="form-label">News Image:</label>
                                        <input type="file" class="form-control @error('news_image') border border-danger @enderror" name="news_image">
                                        <span class="text-danger error-message">@error('news_image') {{$message}} @enderror</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">News Title:</label>
                                        <input type="text" class="form-control @error('news_title') border border-danger @enderror" name="news_title">
                                        <span class="text-danger error-message">@error('news_title') {{$message}} @enderror</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">News:</label>
                                        <textarea class="form-control @error('news_text') border border-danger @enderror" rows="5" name="news_text" id="rte_news" hidden></textarea>
                                        <span class="text-danger error-message">@error('news_text') {{$message}} @enderror</span>
                                        <trix-editor input="rte_news" class="fs-7 trix-content"></trix-editor>
                                    </div>
                                    <div class="mb-2 text-end">
                                        <button class="btn btn-success" type="submit">Add News</button>
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
                    @if (count($news) == 0)
                        <div class="col-12">
                            <div class="alert alert-warning mb-0" role="alert">
                                There is no news posted yet.
                            </div>
                        </div>
                    @else
                        @foreach ($news as $new)
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-5">
                                        <img class="rounded w-100" src="{{ asset("Uploads/NewsAnnouncements/" . $new->news_image) }}" alt="">
                                    </div>
                                    <div class="col-6">
                                        <h4 class="mb-3"><i class="fa-solid fa-newspaper me-2"></i>{{ $new->news_title }}</h4>
                                        <div hidden>{{ $text = $new->news_text }}</div>
                                        <div class="fs-7" style="white-space: pre-wrap; text-align: justify; text-justify: inter-word;">@php echo $text @endphp</div>
                                    </div>
                                    <div class="col-1 text-center">
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteNews{{$new->news_id}}"><i class="fa-solid fa-trash-can"></i></button>
                                        @include("super_admin.components.delete-news")
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
