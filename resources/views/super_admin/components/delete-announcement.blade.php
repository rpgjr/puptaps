{{-- <div class="modal fade fs-7" id="deleteAnnouncement{{$announcement->announcement_id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $announcement->announcement_title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-0">
                <div class="alert alert-danger" role="alert">
                    Do you want to delete this Announcement?
                </div>
            </div>
            <form action="{{ route("superAdmin.deleteAnnouncement") }}" method="post">
            @csrf
                <div class="modal-footer flex-nowrap p-0">
                    <input type="hidden" value="{{$announcement->announcement_id}}" name="announcement_id">
                    <button type="button" class="py-2 btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end text-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="py-2 btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 text-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
 --}}

 <!-- Modal -->
<div class="modal fade" id="deleteAnnouncement{{$announcement->announcement_id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="swal2-icon swal2-warning mb-3" style="display: flex;">
                    <i class="fa-solid fa-exclamation" style="font-size: 72px; font-weight: lighter;"></i>
                </div>
                <h3 class="text-center mt-3 mb-2" style="color: #f8bb86;">Warning!</h3>
                <p class="text-center fs-7 mb-1 mt-2" role="alert">Are you sure you want to delete this post?</p>
            </div>
            <form action="{{ route("superAdmin.deleteAnnouncement") }}" method="post">
                @csrf
                <div class="modal-footer flex-nowrap p-0">
                    <input type="hidden" value="{{$announcement->announcement_id}}" name="announcement_id">
                    <button type="button" class="py-2 btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end text-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="py-2 btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 text-danger">Delete</button>
                </div>
            </form>
            {{-- <div class="modal-footer p-0">
                <button type="button" class="col-6 m-0 p-2 btn btn-link text-decoration-none border-end rounded-0 text-dark" data-bs-dismiss="modal">No</button>
                <button type="submit" class="col-6 m-0 p-2 btn btn-link text-decoration-none rounded-0 text-danger">Yes</button>
            </div> --}}
        </div>
    </div>
</div>
