<div class="row justify-content-center">
    <div class="col-md-12">
        @if(Session::has('success'))
            {{-- <center><div class="alert alert-success">{{ Session::get('success') }}</div></center> --}}
            <div id="myModal" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.<span class="badge">By <a href="https://webdevrahul007.w3spaces.com/"></a>Rahul jangid</span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
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
