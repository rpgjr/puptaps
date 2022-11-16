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
            <div class="row align-items-center text-start m-0 pt-2">
                <div class="col-12 col-sm-12 col-md-12 col-lg-11 offset-lg-1 col-xl-11 offset-xl-1 mt-2 mt-sm-2 mt-md-2 mt-lg-1 mt-xl-0">
                    <h4 class="mb-0 mt-2 fw-bold">{{ $career->job_name }}</h4>
                    <p class="fs-6 mb-1">{{ $career->company }}</p>

                    <hr class="mb-3 mt-3">

                    <h5 class="fw-bold mb-3">Job Details</h5>
                    <p class="" style="white-space: pre-wrap;"> {{ $career->description }}</p>
                    <p class="fw-bold mb-0">
                        Salary:
                        <span class="fw-normal">{{ $career->salary }}</span>
                    </p>

                    <hr class="mb-3 mt-3">

                    <h5 class="fw-bold mb-3">Company Details</h5>
                    <p class="fw-bold">
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
</div>
