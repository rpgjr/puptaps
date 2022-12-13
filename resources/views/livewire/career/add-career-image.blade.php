{{-- Modal --}}
<div class="modal fade" id="addCareerImage" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Select Image file to upload</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        @if (Auth::user()->user_role == "Admin")
            <form action="{{ route('adminCareer.addImageCareer') }}" method="post" enctype="multipart/form-data">
        @else
            <form action="{{ route('userCareer.addImageCareer') }}" method="post" enctype="multipart/form-data">
        @endif
        @csrf
            <div class="modal-body text-start">
                <div class="mb-3">
                  <label class="form-label">Job Advertisement</label>
                  <input type="file" class="form-control" name="job_ad_image">
                </div>

                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-select" aria-label="Default select example" name="category">
                        <option value="IT">IT</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Accounting">Accounting</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
</div>
