<!-- Modal -->
<div class="modal fade" id="viewAlumniDetails{{ $alum->alumni_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header align-items-center">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $alum->stud_number }}</h1>
        <div>
            {{-- <button class="btn btn-primary me-1">Edit <i class="fa-solid fa-pen-to-square ms-1"></i></button> --}}
            <button type="button" class="btn btn-danger me-1 delete-collapse" data-bs-toggle="collapse" data-bs-target="#deleteAlumniCollapse{{ $alum->alumni_id }}" aria-expanded="false" aria-controls="collapseExample">Delete Account <i class="fa-solid fa-trash-can ms-1"></i></button>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      </div>
      <div class="modal-body text-start mt-3 mb-1 mx-3">
        <div class="mt-0 mb-0">
          @include('admin.components.delete-alumni-account')
        </div>

        <div class="row align-items-center g-0 mt-2">
          <div class="col-2">
            @if ($alum->user_profile == null)
              <img src="{{ asset('Uploads/Profiles/user-no-profile.png') }}" class="user-profile-picture">
            @else
              <img src="/Uploads/Profiles/{{ $alum->user_profile }}" class="user-profile-picture">
            @endif
          </div>
          <div class="col-10">
            <h4 class="fw-bold mb-0">{{ $alum->last_name }}, {{ $alum->first_name }} {{ $alum->middle_name }} {{ $alum->suffix }}</h4>
            <p class="mt-0 mb-0"><b>Username: </b>{{ $alum->username }}</p>
            <p class="mt-0 mb-0"><b>Email Address: </b>{{ $alum->email }}</p>
          </div>
          <div class="col-12 mt-2">
            <hr>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-12">
            @foreach ($courses as $course)
              @if ($course->course_id == $alum->course_id)
                <p><b>Course:</b> {{ $course->course_Desc }}</p>
              @endif
            @endforeach
          </div>
          <div class="col-12 mt-0">
            <p><b>Year Graduated: </b>{{ $alum->batch }}</p>
          </div>
          <div class="12">
            <hr>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-6">
            <p><b>Birthday: </b>{{ date('F d, Y', strtotime($alum->birthday)) }}</p>
          </div>
          <div class="col-6">
            <p><b>Age: </b>{{ $alum->age }}</p>
          </div>
          <div class="col-6">
            <p><b>Gender: </b>{{ $alum->gender }}</p>
          </div>
          <div class="col-6">
            <p><b>Religion: </b>{{ $alum->religion }}</p>
          </div>
          <div class="col-12">
            <p><b>City Address: </b>{{ $alum->city_address }}</p>
          </div>
          <div class="col-12">
            <p><b>Provincial Address: </b>{{ $alum->provincial_address }}</p>
          </div>
          <div class="col-12">
            <p><b>Contact No.: </b>{{ $alum->number }}</p>
          </div>
          <div class="col-12">
            <hr>
          </div>
        </div>

        <div class="row my-3">
          <div class="col-12">
              <h4 class="mb-3">Form Status</h4>
          </div>

          <div class="col-12">
            <div class="row">
              <div class="col-6 fw-bold">Form</div>
              <div class="col-6 text-center fw-bold">Status</div>
            </div>

            <hr class="mt-2 mb-3 fw-bold">
            <div class="row">
              <div class="col-6 fw-bold">Personal Data Sheet</div>
              <div class="col-6 text-center">
                @if (empty(count($PDS)))
                  <i class="fa-regular fa-circle-xmark me-1 text-danger"></i><span class="text-danger">No Record</span>
                @endif
                @foreach ($PDS as $answerPDS)
                  @if ($answerPDS->alumni_id == $alum->alumni_id)
                    <i class="fa-regular fa-circle-check me-1 text-success"></i><span class="text-success">Completed</span>
                    @break
                  @else
                    <i class="fa-regular fa-circle-xmark me-1 text-danger"></i><span class="text-danger">No Record</span>
                    @break
                  @endif
                @endforeach
              </div>
            </div>

            <hr class="mt-3 mb-3">
            <div class="row">
              <div class="col-6 fw-bold">Exit Interview Form</div>
              <div class="col-6 text-center">
                @if (empty(count($EIF)))
                  <i class="fa-regular fa-circle-xmark me-1 text-danger"></i><span class="text-danger">No Record</span>
                @endif
                @foreach ($EIF as $answerEIF)
                  @if ($answerEIF->alumni_id == $alum->alumni_id)
                    <i class="fa-regular fa-circle-check me-1 text-success"></i><span class="text-success">Completed</span>
                    @break
                  @else
                    <i class="fa-regular fa-circle-xmark me-1 text-danger"></i><span class="text-danger">No Record</span>
                    @break
                  @endif
                @endforeach
              </div>
            </div>

            <hr class="mt-3 mb-3">
            <div class="row">
              <div class="col-6 fw-bold">Student Affairs and Services Form</div>
              <div class="col-6 text-center">
                @if (empty(count($SAS)))
                  <i class="fa-regular fa-circle-xmark me-1 text-danger"></i><span class="text-danger">No Record</span>
                @endif
                @foreach ($SAS as $answerSAS)
                  @if ($answerSAS->alumni_id == $alum->alumni_id)
                    <i class="fa-regular fa-circle-check me-1 text-success"></i><span class="text-success">Completed</span>
                    @break
                  @else
                    <i class="fa-regular fa-circle-xmark me-1 text-danger"></i><span class="text-danger">No Record</span>
                    @break
                  @endif
                @endforeach
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


