<div>
    <form wire:submit.prevent="saveAnswer">

        @if ($currentPage == 1)
        {{-- Page 1 --}}
        <div class="my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    DATA PRIVACY NOTICE
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                We respect and value your rights as a data subject under the Data Privacy Act (DPA). PUP is committed to protecting the personal data you provide in accordance with the requirements under the DPA and its IRR. In this regard, PUP implements reasonable and appropriate security measure to maintain the confidentiality, integrity, and availability of your personal data. For more detailed Privacy Statement, you may visit <a href="https://www.pup.edu.ph/privacy/" target="_blank">this link.</a>
                            </p>

                            <p>
                                I understand and agree that by filling out this form, I am allowing this institution to collect, process, use, share, and disclose my personal information and also to store it as long as necessary for the fulfillment of the stated purpose and in accordance with applicable laws including the Data Privacy Act of 2012 and its Implementing Rules and Regulations. The purpose and extent of collection use, sharing, disclosure, and storage of my personal information was explained to me.
                            </p>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Agree" wire:model="dataPrivacy">
                                <label class="form-check-label">Agree</label>
                            </div>
                            <span class="text-danger">@error('dataPrivacy'){{ $message }}@enderror</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Page 2 --}}
        @if ($currentPage == 2)
        <div class="my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Step 1/3 - Personal Information
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="alert alert-warning pb-0" role="alert">
                                <p><b>*</b> If you want to update those fields that are grayed out, you need to Go to <b>Profile</b> to change it.</p>
                                <p><b>*</b> Put <b>N/A</b> if Fields are Not Applicable to you.</p>
                            </div>
                        </div>
                    </div>

                    <fieldset disabled>
                        <div class="row">
                            @foreach ($users as $user)

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" value="{{ $user->lastName }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" value="{{ $user->firstName }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" value="{{ $user->middleName }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Suffix</label>
                                    <input type="text" class="form-control" value="{{ $user->suffix }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <select class="form-select">
                                        <option>{{ $user->gender }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" value="{{ $user->bday }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Age</label>
                                    <input type="text" class="form-control" value="{{ $user->age }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Religion</label>
                                    <input type="text" class="form-control" value="{{ $user->religion }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Course</label>
                                    <select class="form-select">
                                        <option>{{ $user->courseID }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Year Graduated</label>
                                    <select class="form-select">
                                        <option>{{ $user->batch }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">City Address</label>
                                    <input type="text" class="form-control" value="{{ $user->cityAddress }}">
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Provincial Address</label>
                                    <input type="text" class="form-control" value="{{ $user->provincialAddress }}">
                                </div>
                            </div>
                            <div class="col-md-8 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Telephone/Mobile No.</label>
                                    <input type="text" class="form-control" value="{{ $user->number }}">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </fieldset>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Father's Name</label>
                                <input type="text" class="form-control" wire:model="fathersName">
                                <span class="text-danger">@error('fathersName'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Father's Telephone/Mobile No.</label>
                                <input type="text" class="form-control" wire:model="fathersNumber">
                                <span class="text-danger">@error('fathersNumber'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Mother's Name</label>
                                <input type="text" class="form-control" wire:model="mothersName">
                                <span class="text-danger">@error('mothersName'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Mother's Telephone/Mobile No.</label>
                                <input type="text" class="form-control" wire:model="mothersNumber">
                                <span class="text-danger">@error('mothersNumber'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if ($currentPage == 3)
        {{-- Page 3 --}}
        <div class="my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Step 2/3 - Work Experience/s
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="alert alert-warning pb-0" role="alert">
                                <p><b>*</b> Put <b>N/A</b> if Fields are Not Applicable to you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Department/Agency/Office</label>
                                <input type="text" class="form-control" wire:model="office">
                                <span class="text-danger">@error('office'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Position/Title</label>
                                <input type="text" class="form-control" wire:model="position">
                                <span class="text-danger">@error('position'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Inclusive Date</label>
                                <input type="text" class="form-control" wire:model="officeDates">
                                <span class="text-danger">@error('officeDates'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if ($currentPage == 4)
        {{-- Page 4 --}}
        <div class="my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Step 3/3 - Trainings/Seminars Attended
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="alert alert-warning pb-0" role="alert">
                                <p><b>*</b> Put <b>N/A</b> if Fields are Not Applicable to you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Title of Training/Seminar/Workshop</label>
                                <input type="text" class="form-control" wire:model="seminar1">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Inclusive Date</label>
                                <input type="text" class="form-control" wire:model="seminar1Date">
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <hr style="border: 2px solid black;">
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Title of Training/Seminar/Workshop</label>
                                <input type="text" class="form-control" wire:model="seminar2">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Inclusive Date</label>
                                <input type="text" class="form-control" wire:model="seminar2Date">
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <hr style="border: 2px solid black;">
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Title of Training/Seminar/Workshop</label>
                                <input type="text" class="form-control" wire:model="seminar3">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Inclusive Date</label>
                                <input type="text" class="form-control" wire:model="seminar3Date">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if ($currentPage == 5)
        {{-- Page 5 --}}
        <div class="my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    WAIVER
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                This is to signify that I am willing to be subjected to company calls for placement or employment purposes. This shall also authorize the Polytechnic University of The Philippines – Career Development and Placement Office (PUP-CDPO) to include my name and contact details in the directory of graduates.
                            </p>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" wire:model="dateSigned">
                                </div>
                            </div>
                            <span class="text-danger">@error('dateSigned'){{ $message }}@enderror</span>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Signature (PRINTED NAME)</label>
                                    <input type="text" class="form-control" wire:model="signature" style="text-transform:uppercase">
                                </div>
                            </div>
                            <span class="text-danger">@error('signature'){{ $message }}@enderror</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Buttons --}}
        <div class="action-button d-flex justify-content-between mt-4">

            @if ($currentPage == 1)
                <div></div>
            @endif

            @if ($currentPage == 2 || $currentPage == 3 || $currentPage == 4 || $currentPage == 5)
                <button class="btn btn-secondary" type="button" wire:click="previousPage()" style="width: 15%;">Back</button>
            @endif

            @if ($currentPage == 1 || $currentPage == 2 || $currentPage == 3 || $currentPage == 4)
                <button class="btn btn-primary" type="button" wire:click="nextPage()" style="width: 15%;">Next</button>
            @endif

            @if ($currentPage == 5)
                <button class="btn btn-success" type="submit" style="width: 15%;">Submit</button>
            @endif

        </div>

    </form>
</div>
