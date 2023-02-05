<div class="sub-container-box mb-3 py-4">
    @foreach ($news as $new)
        <div class="row align-items-center m-0">
            <div class="col-12 mb-1">
                <div class="row justify-content-between">
                    <div class="col-1">
                        <img src="{{ asset('Uploads/Profiles/user-no-profile.png') }}" class="career-post-profile">
                    </div>
                    <div class="col-10 col-sm-10 col-md-11 col-lg-11 col-xl-11">
                        <p class="fs-7 mb-0 fw-bold">Admin News <i class="fa-solid fa-bullhorn me-2"></i></p>
                        <p class="mb-0 career-date">{{ date('F d, Y') }}</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-11 offset-lg-1 col-xl-11 offset-xl-1 mt-2 mb-1">
                <h5 class="mb-1">{{ $new->news_title }}</h5>
                <p style="white-space: pre-wrap; text-align: justify; text-justify: inter-word;" class="m-0">{{ $new->news_text }}</p>
            </div>
        </div>
        <div class="row align-items-center text-start m-0">
            <div class="col-12 col-sm-12 col-md-12 col-lg-11 offset-lg-1 col-xl-11 offset-xl-1 mt-2 mt-sm-2 mt-md-2 mt-lg-1 mt-xl-0">
                <!-- Button trigger modal -->
                <a type="button" class="w-100" data-bs-toggle="modal" data-bs-target="#newsModal{{ $new->news_id }}">
                    <div class="career-post-image-box">
                        <img src="{{ asset('Uploads/NewsAnnouncements/' . $new->news_image) }}" alt="" class="career-post-image">
                    </div>
                </a>

                <!-- Modal -->
                <div class="modal fade" id="newsModal{{ $new->news_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content bg-transparent border-0">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <button type="button" class="btn btn-dark fw-bold mb-2 px-3" data-bs-dismiss="modal" style="position: fixed; top: 0; right: 0;">x</button>
                                </div>
                                <div class="col-12 text-center">
                                    <img src="{{ asset('Uploads/NewsAnnouncements/' . $new->news_image) }}" alt="Job Image" class="career-img-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

