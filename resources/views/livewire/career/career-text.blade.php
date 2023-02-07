<div class="sub-container-box mb-3 py-4">
    @if ($career->alumni_id != Null)
        @foreach ($alumni as $alum)
            @if (($alum->alumni_id) == ($career->alumni_id))
                <div class="row align-items-center text-start m-0">
                    <div class="col-12">
                        <div class="row justify-content-between">
                            <div class="col-1">
                                @if ($alum->user_pfp == null)
                                    <img src="{{ asset('Uploads/Profiles/user-no-profile.png') }}" class="career-post-profile">
                                @else
                                    <img src="/Uploads/Profiles/{{ $alum->user_pfp }}" class="career-post-profile">
                                @endif
                            </div>
                            <div class="col-10 col-sm-10 col-md-11 col-lg-11 col-xl-11 d-flex align-items-center justify-content-between">
                                <div class="">
                                    @foreach ($username as $user_name)
                                        @if ($user_name->alumni_id == $alum->alumni_id)
                                            <p class="fs-7 mb-0 fw-bold">{{ $user_name->username }}</p>
                                        @endif
                                    @endforeach
                                    <p class="mb-0 career-date">{{ date('F d, Y', strtotime($career->created_at)) }}</p>
                                </div>
                                <div>
                                    @if (Auth::user()->alumni_id == $career->alumni_id || Auth::user()->user_role == "Admin")
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteCareer{{ $career->career_id }}">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                        <livewire:career.delete-career-post :career_id="$career->career_id"/>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center text-start m-0 pt-2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-11 offset-lg-1 col-xl-11 offset-xl-1 mt-2 mt-sm-2 mt-md-2 mt-lg-1 mt-xl-0">
                        <h4 class="mb-0 mt-2 fw-bold">{{ $career->job_name }}</h4>
                        <p class="fs-6 mb-1 mt-0">{{ $career->company }}</p>

                        <hr class="mb-3 mt-3">

                        <h5 class="fw-bold mb-2">Job Details</h5>
                        <p class="mb-1" style="white-space: pre-wrap;">{{ $career->description }}</p>
                        <p class="fw-bold mb-0">
                            Salary:
                            <span class="fw-normal">{{ $career->salary }}</span>
                        </p>

                        <hr class="mb-3 mt-3">

                        <h5 class="fw-bold mb-2">Company Details</h5>
                        <p class="fw-bold mb-1">
                            Email:
                            <span class="fw-normal">{{ $career->email }}</span>
                        </p>
                        <p class="fw-bold">
                            Contact Number:
                            <span class="fw-normal">{{ $career->number }}</span>
                        </p>
                    </div>
                </div>
            @endif
        @endforeach

    @else
        @foreach ($admin as $admins)
            @if ($admins->admin_id == $career->admin_id)
                <div class="row align-items-center text-start m-0">
                    <div class="col-12">
                        <div class="row justify-content-between">
                            <div class="col-1">
                                <img src="{{ asset('Uploads/Profiles/user-no-profile.png') }}" class="career-post-profile">
                            </div>
                            <div class="col-10 col-sm-10 col-md-11 col-lg-11 col-xl-11 d-flex align-items-center justify-content-between">
                                <div class="">
                                    @foreach ($username as $user_name)
                                        @if ($user_name->admin_id == $admins->admin_id)
                                            <p class="mb-0 fw-bold">{{ $user_name->username }}</p>
                                        @endif
                                    @endforeach
                                    <p class="mb-0 career-date">{{ date('F d, Y', strtotime($career->created_at)) }}</p>
                                </div>
                                <div>
                                    @if (Auth::user()->alumni_id == $career->alumni_id || Auth::user()->user_role == "Admin")
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteCareer{{ $career->career_id }}">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                        <livewire:career.delete-career-post :career_id="$career->career_id"/>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center text-start m-0 pt-2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-11 offset-lg-1 col-xl-11 offset-xl-1 mt-2 mt-sm-2 mt-md-2 mt-lg-1 mt-xl-0">
                        <h4 class="mb-0 mt-2 fw-bold">{{ $career->job_name }}</h4>
                        <p class="fs-6 mb-1 mt-0">{{ $career->company }}</p>

                        <hr class="mb-3 mt-3">

                        <h5 class="fw-bold mb-2">Job Details</h5>
                        <div hidden>{{ $text = $career->description }}</div>
                        <div class="fs-7 mb-1" style="white-space: pre-wrap; text-align: justify; text-justify: inter-word;">@php echo $text @endphp</div>
                        <p class="fw-bold mb-0">
                            Salary:
                            <span class="fw-normal">{{ $career->salary }}</span>
                        </p>

                        <hr class="mb-3 mt-3">

                        <h5 class="fw-bold mb-2">Company Details</h5>
                        <p class="fw-bold mb-1">
                            Email:
                            <span class="fw-normal">{{ $career->email }}</span>
                        </p>
                        <p class="fw-bold">
                            Contact Number:
                            <span class="fw-normal">{{ $career->number }}</span>
                        </p>
                    </div>
                </div>
            @endif
        @endforeach
    @endif
</div>
