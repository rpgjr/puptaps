<div class="row justify-content-center">
    <div class="col-md-12">
        @if(Session::has('success'))
        <center><div class="alert alert-success">{{ Session::get('success') }}</div></center>
        @elseif($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <p class="text-center mb-0">{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
</div>
