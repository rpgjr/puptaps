<div class="modal fade fs-7" id="deleteNews{{$new->news_id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $new->news_title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-0">
                <div class="alert alert-danger" role="alert">
                    Do you want to delete this News?
                </div>
            </div>

            <form action="{{ route("superAdmin.deleteNews") }}" method="post">
            @csrf
                <div class="modal-footer flex-nowrap p-0">
                    <input type="hidden" value="{{$new->news_id}}" name="news_id">
                    <button type="button" class="py-2 btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end text-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="py-2 btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 text-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

