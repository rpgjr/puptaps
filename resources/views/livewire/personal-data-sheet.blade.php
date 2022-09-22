<div>
    <form wire:submit.prevent="answerPDS">

        {{-- Step 1 --}}
        @if ($currentStep == 1)
        <div class="step-one my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Step 1/3 - Personal Information
                    <input type="hidden" value="{{ Auth::user()->alumni_ID }}" wire:model="alumni_ID">
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" wire:model="email">
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" wire:model="lastName">
                                <span class="text-danger">@error('lastName'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" wire:model="firstName">
                                <span class="text-danger">@error('firstName'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Middle Name</label>
                                <input type="text" class="form-control" wire:model="middleName">
                                <span class="text-danger">@error('middleName'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Suffix</label>
                                <input type="text" class="form-control" wire:model="suffix">
                            </div>
                        </div>
                    </div>
                    {{-- ================================= --}}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Gender</label>
                                <select class="form-select" aria-label="Default select example" wire:model="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" wire:model="bday">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Age</label>
                                <input type="text" class="form-control" wire:model="age">
                                <span class="text-danger">@error('age'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Religion</label>
                                <input type="text" class="form-control" wire:model="religion">
                                <span class="text-danger">@error('religion'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Course</label>
                                <select class="form-select" aria-label="Default select example" wire:model="courseID">
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->courseID }}">{{ $course->courseID }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Year Graduated</label>
                                <select class="form-select" aria-label="Default select example" wire:model="batch">
                                    @for ($i = date('Y'); $i >= 1996; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- =========================== --}}
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">City Address</label>
                                <input type="text" class="form-control" wire:model="cityAddress">
                                <span class="text-danger">@error('cityAddress'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Provincial Address</label>
                                <input type="text" class="form-control" wire:model="provincialAddress">
                                <span class="text-danger">@error('provincialAddress'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <div class="form-group">
                                <label class="form-label">Telephone/Mobile No.</label>
                                <input type="text" class="form-control" wire:model="number">
                                <span class="text-danger">@error('number'){{ $message }}@enderror</span>
                            </div>
                        </div>
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

        @if ($currentStep == 2)
        {{-- Step 2 --}}
        <div class="step-two my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Step 2/3 - Work Experience/s
                </div>

                <div class="card-body">
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

        @if ($currentStep == 3)
        {{-- Step 3 --}}
        <div class="step-two my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Step 3/3 - Trainings/Seminars Attended
                </div>

                <div class="card-body">
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

        {{-- Buttons --}}
        <div class="action-button d-flex justify-content-between">

            @if ($currentStep == 1)
                <div></div>
            @endif

            @if ($currentStep == 2 || $currentStep == 3)
                <button class="btn btn-secondary" type="button" wire:click="decreaseStep()" style="width: 15%;">Back</button>
            @endif

            @if ($currentStep == 1 || $currentStep == 2)
                <button class="btn btn-primary" type="button" wire:click="increaseStep()" style="width: 15%;">Next</button>
            @endif

            @if ($currentStep == 3)
                <button class="btn btn-success" type="submit" style="width: 15%;">Submit</button>
            @endif

        </div>

    </form>
</div>
