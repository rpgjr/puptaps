{{-- Modal --}}
<div class="modal fade" id="addCareerImage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="max-width: 50%">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Job Ad</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('userCareer.addImageCareer') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label">Job Ad</label>
                  <input type="file" class="form-control" name="job_ad_image">
                </div>

                <input type="hidden" name="userID" value="{{ Auth::user()->userID }}">
                <input type="hidden" name="approval" value="0">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
</div>
