{{-- Approve --}}

<div class="modal fade" id="approveCareer{{ $career->career_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Approve Career</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning" role="alert">
                    Do you want to approve this Job Advertisement posted by:
                    @foreach ($users as $user)
                        @if (($user->alumni_id) == ($career->alumni_id))
                            <b>{{ $user->first_name }} {{ $user->last_name }}</b>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                {!! Form::model($career, [ 'method' => 'patch','route' => ['adminCareer.approveCareer', $career->career_id] ]) !!}
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Approve</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

