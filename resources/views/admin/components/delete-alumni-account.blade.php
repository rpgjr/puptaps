<div class="collapse" id="deleteAlumniCollapse{{ $alum->alumni_id }}" tabindex="-1">
  <div class="alert alert-danger mb-4" role="alert">
    <p>Do you want to permanently delete this Alumni Account? The data of this account still remains after deleting.</p>
    <form action="{{ route('adminUserManagement.removeAlumniAccount') }}" method="post">
      @csrf
      <div class="text-center">
          <button type="button" class="px-4 btn btn-secondary me-1" data-bs-toggle="collapse" data-bs-target="#deleteAlumniCollapse{{ $alum->alumni_id }}">No</button>

          <input type="hidden" value="{{ $alum->alumni_id }}" name="alumni_id">
          <button type="submit" class="px-4 btn btn-danger">Yes</button>
      </div>
    </form>
  </div>
  <hr>
</div>

