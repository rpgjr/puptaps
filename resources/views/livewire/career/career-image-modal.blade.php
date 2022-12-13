<div class="sub-container-box mb-4 py-4">
    @if ($career->alumni_id != Null)
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
                    <div class="col-8 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                        <p class="mb-0 fw-bold">{{ $alum->username }}</p>
                        <p class="mb-0 career-date">{{ date('F d, Y h:m:a', strtotime($career->created_at)) }}</p>
                    </div>
                    <div class="col-1 text-end ms-0 ms-sm-0 ms-md-0 ms-lg-3 ms-xl-5">
                        @if (Auth::user()->alumni_id == $career->alumni_id || Auth::user()->user_role == "Admin")
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteCareer{{ $career->career_id }}">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                            <livewire:career.delete-career-post :career_id="$career->career_id"/>
                        @endif
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
    @else
        @foreach ($admin as $admins)
            @if ($admins->admin_id == $career->admin_id)
                <div class="row align-items-center text-start m-0">
                    <div class="col-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 me-3 me-sm-4 me-md-3 me-lg-3 me-xl-1">
                        <img src="{{ asset('Uploads/Profiles/user-no-profile.png') }}" class="career-post-profile">
                    </div>
                    <div class="col-8 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                        <p class="mb-0 fw-bold">{{ $admins->username }}</p>
                        <p class="mb-0 career-date">{{ date('F d, Y h:m:a', strtotime($career->created_at)) }}</p>
                    </div>
                    <div class="col-1 text-end ms-0 ms-sm-0 ms-md-0 ms-lg-3 ms-xl-5">
                        @if (Auth::user()->alumni_id == $career->alumni_id || Auth::user()->user_role == "Admin")
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteCareer{{ $career->career_id }}">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                            <livewire:career.delete-career-post :career_id="$career->career_id"/>
                        @endif
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
    @endif
    {{-- @foreach ($alumni as $alum)
        @if (($alum->alumni_id) == ($career->alumni_id))
            <div class="row align-items-center text-start m-0">
                <div class="col-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 me-3 me-sm-4 me-md-3 me-lg-3 me-xl-1">
                    @if ($alum->user_profile == null)
                        <img src="{{ asset('Uploads/Profiles/user-no-profile.png') }}" class="career-post-profile">
                    @else
                        <img src="/Uploads/Profiles/{{ $alum->user_profile }}" class="career-post-profile">
                    @endif
                </div>
                <div class="col-8 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                    <p class="mb-0 fw-bold">{{ $alum->username }}</p>
                    <p class="mb-0 career-date">{{ date('F d, Y h:m:a', strtotime($career->created_at)) }}</p>
                </div>
                <div class="col-1 text-end ms-0 ms-sm-0 ms-md-0 ms-lg-3 ms-xl-5">
                    @if (Auth::user()->alumni_id == $career->alumni_id || Auth::user()->user_role == "Admin")
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteCareer{{ $career->career_id }}">
                            <i class="fa-regular fa-trash-can"></i>
                        </button>
                        <livewire:career.delete-career-post :career_id="$career->career_id"/>
                    @endif
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
    @endforeach --}}
</div>

