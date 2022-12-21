{{-- View --}}
@if (($career->job_ad_image) == null)
    <div class="modal fade" id="viewCareer{{ $career->career_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Career</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><b>Job Name:</b> {{ $career->job_name }}</p>
                    <p><b>Copany Name:</b> {{ $career->company }}</p>
                    <p><b>Salary:</b> {{ $career->salary }}</p>
                    <p><b>Description:</b> {{ $career->description }}</p>
                    <p><b>Category:</b> {{ $career->category }}</p>
                    <p><b>Email:</b> {{ $career->email }}</p>
                    <p><b>Number:</b> {{ $career->number }}</p>
                    @foreach ($users as $user)
                        @if (($user->alumni_id) == ($career->alumni_id))
                            <p><b>Posted by:</b> {{ $user->first_name }} {{ $user->last_name }}</p>
                        @endif
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
{{-- ============================================================================= --}}
@else
    <div class="modal fade" id="viewCareer{{ $career->career_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Career</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="/Uploads/Career/{{ $career->job_ad_image }}" alt="" style="width: 100%; height: 50%;">
                    @foreach ($users as $user)
                        @if (($user->alumni_id) == ($career->alumni_id))
                            <p class="mt-3"><b>Posted by:</b> {{ $user->first_name }} {{ $user->last_name }}</p>
                        @endif
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endif

