<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        @if(Session::has('success'))
            <div class="toast-header">
                <div><i class="fa-regular fa-circle-check me-2 text-success"></i></div>
                <strong class="me-auto">Success</strong>
                <small>2 seconds ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Profile Successfuly updated!
            </div>
        @else
            <div class="toast-header">
                <div><i class="fa-solid fa-xmark text-danger me-2"></i></div>
                <strong class="me-auto">Error</strong>
                <small>2 seconds ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                @foreach ($errors->all() as $error)
                <p class="text-center mb-0">{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
</div>
