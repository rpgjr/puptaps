{{-- <div class="sub-container-box mb-4">
    <table class="table table-borderless align-middle">
        @foreach ($alumni as $alum)
            @if (($alum->alumni_id) == ($career->alumni_id))
                <!-- Start: Getting Job Listing Author -->
                <tr>
                    <td rowspan="2" style="width: 5%;">
                        @if ($alum->user_profile == null)
                            <img src="{{ asset('Uploads/Profiles/user-no-profile.png') }}" class="career-post-profile" data-bs-toggle="dropdown" aria-expanded="false">
                        @else
                            <img src="/Uploads/Profiles/{{ $alum->user_profile }}" class="career-post-profile" data-bs-toggle="dropdown" aria-expanded="false">
                        @endif
                    </td>
                    <th style="width: 95%">{{ $alum->username }}</th>
                </tr>
                <tr>
                    <td>{{ date('F d, Y h:m:a', strtotime($career->created_at)) }}</td>
                </tr>
                <!-- End: Getting Job Listing Author -->
                <!-- Start: Getting Joblisting Data/Images -->
                <tr>
                    <td class="d-sm-none d-md-none d-lg-inline d-xl-inline"><!-- Blank column --></td>
                    <td>
                        <!-- Button trigger modal -->
                        <a type="button" class="w-100" data-bs-toggle="modal" data-bs-target="#careerModalImage{{ $career->career_id }}">
                            <div class="career-post-image-box">
                                <img src="{{ asset('Uploads/Career/' . $career->job_ad_image) }}" alt="" class="career-post-image">
                            </div>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="careerModalImage{{ $career->career_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <img src="{{ asset('Uploads/Career/' . $career->job_ad_image) }}" alt="Job Image" class="career-post-image">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="career-post-image-box">
                            <img src="/Uploads/Career/{{ $career->job_ad_image }}" alt="" class="career-post-image">
                        </div> -->
                    </td>
                </tr>
                <!-- End: Getting Joblisting Data/Images -->
            @endif
        @endforeach
    </table>
</div>
 --}}

<div class="sub-container-box mb-4">
    @foreach ($alumni as $alum)
        @if (($alum->alumni_id) == ($career->alumni_id))
            <div class="row align-items-center text-start m-0">
                <div class="col-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 me-3 me-sm-4 me-md-3 me-lg-3 me-xl-1">
                    @if ($alum->user_profile == null)
                        <img src="{{ asset('Uploads/Profiles/user-no-profile.png') }}" class="career-post-profile">
                    @else
                        <img src="/Uploads/Profiles/{{ $alum->user_profile }}" class="career-post-profile">
                    @endif
                </div>
                <div class="col-9 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <p class="mb-0 fw-bold">{{ $alum->username }}</p>
                    <p class="mb-0 career-date">{{ date('F d, Y h:m:a', strtotime($career->created_at)) }}</p>
                </div>
            </div>
            <div class="row align-items-center text-start m-0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-11 offset-lg-1 col-xl-11 offset-xl-1 mt-2 mt-sm-2 mt-md-2 mt-lg-1 mt-xl-0">
                    <!-- Button trigger modal -->
                    <a type="button" class="w-100" data-bs-toggle="modal" data-bs-target="#careerModalImage{{ $career->career_id }}">
                        <div class="career-post-image-box">
                            <img src="{{ asset('Uploads/Career/' . $career->job_ad_image) }}" alt="" class="career-post-image">
                        </div>
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="careerModalImage{{ $career->career_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content bg-transparent border-0">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-dark fw-bold float-end mb-2 px-3" data-bs-dismiss="modal">x</button>
                                    </div>
                                    <div class="col-12">
                                        <img src="{{ asset('Uploads/Career/' . $career->job_ad_image) }}" alt="Job Image" class="career-img-full">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>

