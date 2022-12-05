<!-- Modal -->
<div class="modal fade" id="deleteCareer{{ $career_id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Delete</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="deletePost">
                <div class="modal-body">
                    <div class="alert alert-danger text-start" role="alert">
                        Are you sure you want to delete your post? {{ $career_id }}
                    </div>
                </div>
                <div class="modal-footer p-0">
                    <button type="button" class="col-6 m-0 p-2 btn btn-link text-decoration-none border-end rounded-0 text-dark" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="col-6 m-0 p-2 btn btn-link text-decoration-none rounded-0 text-danger">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
