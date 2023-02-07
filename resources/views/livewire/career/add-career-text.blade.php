{{-- Modal --}}
<div class="modal fade" id="addCareerText" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Job Ad</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        @if (Auth::user()->user_role == "Admin")
            <form action="{{ route('adminCareer.addTextCareer') }}" method="post">
        @else
            <form action="{{ route('userCareer.addTextCareer') }}" method="post">
        @endif
        @csrf
            <div class="modal-body text-start">
                <div class="row">
                    <div class="mb-3 col-12">
                        <label class="form-label">Job Name/Job Title</label>
                        <input type="text" class="form-control" name="job_name">
                    </div>
                    <div class="mb-3 col-12">
                        <label class="form-label">Company Name</label>
                        <input type="text" class="form-control" name="company">
                    </div>
                    <div class="mb-3 col-12">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="5" name="description" style="white-space: pre-wrap" id="rte_description" hidden></textarea>
                        <trix-editor input="rte_description" class="trix-content"></trix-editor>
                    </div>
                    <div class="mb-3 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <label class="form-label">Category</label>
                        <select class="form-select" aria-label="Default select example" name="category">
                            @foreach ($careerCategories as $category)
                                <option value="{{ $category->career_category }}">{{ $category->career_category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <label class="form-label">Salary</label>
                        <input type="text" class="form-control" name="salary">
                    </div>
                    <div class="mb-3 col-12">
                        <label class="form-label">Company Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-3 col-12">
                        <label class="form-label">Company Number</label>
                        <input type="text" class="form-control" name="number">
                    </div>
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
