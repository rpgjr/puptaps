<div class="row justify-content-center">
    <div class="col-md-12">
        @if(Session::has('success'))
            <div id="myModal" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Success!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-success mb-0" role="alert">
                                Thank you for posting. Kindly wait for the admins to approve your post.
                            </div>
                        </div>
                        <div class="modal-footer p-0">
                            <button type="button" class="col-12 m-0 p-2 btn btn-link text-decoration-none rounded-0" data-bs-dismiss="modal">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        @elseif($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <p class="text-center mb-0">{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
</div>
