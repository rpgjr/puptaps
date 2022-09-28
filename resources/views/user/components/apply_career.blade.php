
<div class="modal fade" id="applyCareer{{ $career->careerID }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Career</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-primary" role="alert">
                    <p>To apply, Please send your CV/Resume to the email address provided by the author.</p>
                    <p>Hit <b>Done</b> if you send your CV/Resume already.</p>
                </div>
            </div>
            <div class="modal-footer">
                <form action="{{ route('userCareer.applyCareer') }}" method="post">
                    @csrf
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    <input type="hidden" name="careerID" value="{{ $career->careerID }}">
                    <input type="hidden" name="alumni_ID" value="{{ Auth::user()->alumni_ID }}">
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Done</button>
                </form>
            </div>
        </div>
    </div>
</div>

