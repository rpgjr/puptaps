<!-- Modal -->
<div class="modal fade" id="viewAlumniDetails{{ $alum->alumni_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header align-items-center">
        <h1 class="modal-title fs-5 fw-bold">{{ $alum->stud_number }}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-start mt-3 mb-1 mx-3">
        <div class="row align-items-center g-0 mt-0 p-0">
          <div class="col-2">
            @if ($alum->user_pfp == null)
              <img src="{{ asset('Uploads/Profiles/user-no-profile.png') }}" class="user-profile-picture">
            @else
              <img src="/Uploads/Profiles/{{ $alum->user_pfp }}" class="user-profile-picture">
            @endif
          </div>
          <div class="col-10 text-break">
            <h3 class="fw-bold mb-0">{{ $alum->last_name }}, {{ $alum->first_name }} {{ $alum->middle_name }} {{ $alum->suffix }}</h3>
            {{-- <p class="mt-0 mb-0"><b>Username: </b>{{ $alum->username }}</p> --}}
            <p class="mt-0 mb-0"><b>Email Address: </b>{{ $alum->email }}</p>
            @foreach ($courses as $course)
                @if ($course->course_id == $alum->course_id)
                    <p class="mb-0 mt-0"><b>Course:</b> {{ $course->course_desc }}</p>
                @endif
            @endforeach
            <p class="mb-0 mt-0"><b>Year Graduated: </b>{{ $alum->batch }}</p>
          </div>
          <div class="col-12 mt-2">
            <hr class="mb-2">
          </div>
        </div>

        <div class="row my-1">
          <div class="col-6">
            <p class="my-1"><b>Birthday: </b>{{ date('F d, Y', strtotime($alum->birthday)) }}</p>
          </div>
          <div class="col-6">
            <p class="my-1"><b>Age: </b>{{ $alum->age }}</p>
          </div>
          <div class="col-6">
            <p class="my-1"><b>Sex: </b>{{ $alum->sex }}</p>
          </div>
          <div class="col-6">
            <p class="my-1"><b>Religion: </b>{{ $alum->religion }}</p>
          </div>
          <div class="col-12">
            <p class="my-1"><b>City Address: </b>{{ $alum->city_address }}</p>
          </div>
          <div class="col-12">
            <p class="my-1"><b>Provincial Address: </b>{{ $alum->provincial_address }}</p>
          </div>
          <div class="col-12">
            <p class="my-1"><b>Contact No.: </b>{{ $alum->number }}</p>
          </div>
          <div class="col-12">
            <hr class="my-2">
          </div>
        </div>

        <div class="row my-2">
          <div class="col-12">
              <h4 class="mb-2">Form Status</h4>
          </div>

          <div class="col-12">
            <div class="row">
              <p class="mb-1 col-6 fw-bold">Form</p>
              <p class="mb-1 col-6 text-center fw-bold">Status</p>
            </div>

            <hr class="mt-1 mb-2 fw-bold">
            <div class="row">
              <p class="my-2 col-6 fw-bold">Personal Data Sheet</p>
              <p class="my-2 col-6 text-center">
                  @if ($PDS->contains('alumni_id', $alum->alumni_id))
                    <i class="fa-regular fa-circle-check me-1 text-success"></i><span class="text-success">Completed</span>
                  @else
                    <i class="fa-regular fa-circle-xmark me-1 text-danger"></i><span class="text-danger">No Record</span>
                  @endif
              </p>
            </div>

            <hr class="mt-2 mb-2">
            <div class="row">
              <p class="my-2 col-6 fw-bold">Exit Interview Form</p>
              <p class="my-2 col-6 text-center">
                  @if ($EIF->contains('alumni_id', $alum->alumni_id))
                    <i class="fa-regular fa-circle-check me-1 text-success"></i><span class="text-success">Completed</span>
                  @else
                    <i class="fa-regular fa-circle-xmark me-1 text-danger"></i><span class="text-danger">No Record</span>
                  @endif
              </p>
            </div>

            <hr class="mt-2 mb-2">
            <div class="row">
              <p class="my-2 col-6 fw-bold">Student Affairs and Services Form</p>
              <p class="my-2 col-6 text-center">
                  @if ($SAS->contains('alumni_id', $alum->alumni_id))
                    <i class="fa-regular fa-circle-check me-1 text-success"></i><span class="text-success">Completed</span>
                  @else
                    <i class="fa-regular fa-circle-xmark me-1 text-danger"></i><span class="text-danger">No Record</span>
                  @endif
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


