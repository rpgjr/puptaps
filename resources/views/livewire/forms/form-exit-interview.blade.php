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
                    Page 2/7 - Personal Information
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
                                <label class="form-label">Age</label>
                                <input type="text" class="form-control" value="{{ $user->age }}">
                            </div>
                        </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Civil Status</label>
                                    <input type="text" class="form-control" value="{{ $user->civilStatus }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Telephone/Mobile No.</label>
                                <input type="text" class="form-control" value="{{ $user->number }}">
                            </div>
                        </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Student Number</label>
                                    <input type="text" class="form-control" value="{{ $user->studNumber }}">
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
                            @endforeach
                        </div>
                        <div class="col-md-12 mb-2">
                        <hr style="border: 2px solid black;">
                    </div>
                    </fieldset>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <label class="form-label">If employed (Position, Company/Company Address, Telephone Number)
                                If not employed (Put N/A)</label>
                            <input type="text" class="form-control" wire:model="employment_status">
                            <span class="text-danger">@error('employment_status'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <label class="form-label">Reason/s for leaving PUP (Put a check on the box of your choice/s)</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Graduation" wire:model="reason">
                                <label class="form-check-label">Graduation</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Personal" wire:model="reason">
                                <label class="form-check-label">Personal</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Family" wire:model="reason">
                                <label class="form-check-label">Family</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Academic" wire:model="reason">
                                <label class="form-check-label">Academic</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Financial" wire:model="reason">
                                <label class="form-check-label">Financial</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Work-related" wire:model="reason">
                                <label class="form-check-label">Work-related</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Others" wire:model="reason">
                                <label class="form-check-label">Others</label>
                            </div>
                            <span class="text-danger">@error('reason'){{ $message }}@enderror</span>
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
                    Page 3/7
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning pb-0" role="alert">
                                <p>Please rate the following items by selecting your choice number on the box provided:</p>
                                <ul style="list-style-type:none; display:flex; justify-content: space-around;" >
                                    <li class="fw-bold">5 - Outstanding</li>
                                    <li class="fw-bold">4 - Very Satisfactory</li>
                                    <li class="fw-bold">3 - Satisfactory</li>
                                    <li class="fw-bold">2 - Fair</li>
                                    <li class="fw-bold">1 - Poor</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 550px">Questions</th>
                                        <th scope="col" style="width: 50px">5</th>
                                        <th scope="col" style="width: 50px">4</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            Academic Standard
                                            <span class="text-danger">@error('sec1_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="5" wire:model="sec1_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q1"></td>
                                        </div>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            School Activities
                                            <span class="text-danger">@error('sec1_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec1_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            Faculty/Teacher
                                            <span class="text-danger">@error('sec1_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec1_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q3"></td>
                                        </div>
                                    </tr>
                                    {{-- Q4 --}}
                                    <tr>
                                        <td>
                                            Classmates
                                            <span class="text-danger">@error('sec1_q4')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec1_q4"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q4"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q4"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q4"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q4"></td>
                                        </div>
                                    </tr>
                                    {{-- Q5 --}}
                                    <tr>
                                        <td>
                                            Facilities
                                            <span class="text-danger">@error('sec1_q5')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec1_q5"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q5"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q5"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q5"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q5"></td>
                                        </div>
                                    </tr>
                                    {{-- Q6 --}}
                                    <tr>
                                        <td>
                                            Course Taken
                                            <span class="text-danger">@error('sec1_q6')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec1_q6"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q6"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q6"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q6"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q6"></td>
                                        </div>
                                    </tr>
                                    {{-- Q7 --}}
                                    <tr>
                                        <td>
                                            Student Organization/s
                                            <span class="text-danger">@error('sec1_q7')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec1_q7"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q7"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q7"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q7"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q7"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
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
                    Page 4/7
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning pb-0" role="alert">
                                <p>Please rate the following items by selecting your choice number on the box provided:</p>
                                <ul style="list-style-type:none; display:flex; justify-content: space-around;" >
                                    <li class="fw-bold">5 - Outstanding</li>
                                    <li class="fw-bold">4 - Very Satisfactory</li>
                                    <li class="fw-bold">3 - Satisfactory</li>
                                    <li class="fw-bold">2 - Fair</li>
                                    <li class="fw-bold">1 - Poor</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Section 2 --}}
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Director's Office</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 550px">Questions</th>
                                        <th scope="col" style="width: 50px">5</th>
                                        <th scope="col" style="width: 50px">4</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            Quality of Service
                                            <span class="text-danger">@error('sec2_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="5" wire:model="sec2_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec2_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec2_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec2_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec2_q1"></td>
                                        </div>
                                    </tr>
                                    <tr>

                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            Timeliness of Service
                                            <span class="text-danger">@error('sec2_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec2_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec2_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec2_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec2_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec2_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            Courtesy of Staff
                                            <span class="text-danger">@error('sec2_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec2_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec2_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec2_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec2_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec2_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 3 --}}
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Office of the Head of Academic Programs</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 550px">Questions</th>
                                        <th scope="col" style="width: 50px">5</th>
                                        <th scope="col" style="width: 50px">4</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            Quality of Service
                                            <span class="text-danger">@error('sec3_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="5" wire:model="sec3_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec3_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec3_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec3_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec3_q1"></td>
                                        </div>
                                    </tr>
                                    <tr>

                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            Timeliness of Service
                                            <span class="text-danger">@error('sec3_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec3_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec3_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec3_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec3_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec3_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            Courtesy of Staff
                                            <span class="text-danger">@error('sec3_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec3_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec3_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec3_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec3_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec3_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 4 --}}
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Administrative Office</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 550px">Questions</th>
                                        <th scope="col" style="width: 50px">5</th>
                                        <th scope="col" style="width: 50px">4</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            Quality of Service
                                            <span class="text-danger">@error('sec4_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="5" wire:model="sec4_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec4_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec4_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec4_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec4_q1"></td>
                                        </div>
                                    </tr>
                                    <tr>

                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            Timeliness of Service
                                            <span class="text-danger">@error('sec4_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec4_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec4_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec4_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec4_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec4_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            Courtesy of Staff
                                            <span class="text-danger">@error('sec4_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec4_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec4_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec4_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec4_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec4_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 5 --}}
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Accounting/Cashier’s Office</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 550px">Questions</th>
                                        <th scope="col" style="width: 50px">5</th>
                                        <th scope="col" style="width: 50px">4</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            Quality of Service
                                            <span class="text-danger">@error('sec5_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="5" wire:model="sec5_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec5_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec5_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec5_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec5_q1"></td>
                                        </div>
                                    </tr>
                                    <tr>

                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            Timeliness of Service
                                            <span class="text-danger">@error('sec5_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec5_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec5_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec5_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec5_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec5_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            Courtesy of Staff
                                            <span class="text-danger">@error('sec5_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec5_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec5_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec5_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec5_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec5_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 6 --}}
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Office of Student Services/Scholarship</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 550px">Questions</th>
                                        <th scope="col" style="width: 50px">5</th>
                                        <th scope="col" style="width: 50px">4</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            Quality of Service
                                            <span class="text-danger">@error('sec6_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="5" wire:model="sec6_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec6_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec6_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec6_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec6_q1"></td>
                                        </div>
                                    </tr>
                                    <tr>

                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            Timeliness of Service
                                            <span class="text-danger">@error('sec6_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec6_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec6_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec6_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec6_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec6_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            Courtesy of Staff
                                            <span class="text-danger">@error('sec6_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec6_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec6_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec6_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec6_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec6_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
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
                    Page 5/7
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning pb-0" role="alert">
                                <p>Please rate the following items by selecting your choice number on the box provided:</p>
                                <ul style="list-style-type:none; display:flex; justify-content: space-around;" >
                                    <li class="fw-bold">5 - Outstanding</li>
                                    <li class="fw-bold">4 - Very Satisfactory</li>
                                    <li class="fw-bold">3 - Satisfactory</li>
                                    <li class="fw-bold">2 - Fair</li>
                                    <li class="fw-bold">1 - Poor</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Section 7 --}}
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Admission/Registration Office</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 550px">Questions</th>
                                        <th scope="col" style="width: 50px">5</th>
                                        <th scope="col" style="width: 50px">4</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            Quality of Service
                                            <span class="text-danger">@error('sec7_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="5" wire:model="sec7_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec7_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec7_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec7_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec7_q1"></td>
                                        </div>
                                    </tr>
                                    <tr>

                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            Timeliness of Service
                                            <span class="text-danger">@error('sec7_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec7_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec7_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec7_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec7_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec7_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            Courtesy of Staff
                                            <span class="text-danger">@error('sec7_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec7_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec7_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec7_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec7_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec7_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 8 --}}
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Guidance and Counseling Office</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 550px">Questions</th>
                                        <th scope="col" style="width: 50px">5</th>
                                        <th scope="col" style="width: 50px">4</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            Quality of Service
                                            <span class="text-danger">@error('sec8_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="5" wire:model="sec8_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec8_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec8_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec8_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec8_q1"></td>
                                        </div>
                                    </tr>
                                    <tr>

                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            Timeliness of Service
                                            <span class="text-danger">@error('sec8_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec8_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec8_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec8_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec8_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec8_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            Courtesy of Staff
                                            <span class="text-danger">@error('sec8_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec8_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec8_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec8_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec8_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec8_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 9 --}}
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Library Services</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 550px">Questions</th>
                                        <th scope="col" style="width: 50px">5</th>
                                        <th scope="col" style="width: 50px">4</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            Quality of Service
                                            <span class="text-danger">@error('sec9_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="5" wire:model="sec9_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec9_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec9_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec9_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec9_q1"></td>
                                        </div>
                                    </tr>
                                    <tr>

                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            Timeliness of Service
                                            <span class="text-danger">@error('sec9_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec9_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec9_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec9_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec9_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec9_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            Courtesy of Staff
                                            <span class="text-danger">@error('sec9_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec9_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec9_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec9_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec9_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec9_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 10 --}}
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Medical Services</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 550px">Questions</th>
                                        <th scope="col" style="width: 50px">5</th>
                                        <th scope="col" style="width: 50px">4</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            Quality of Service
                                            <span class="text-danger">@error('sec10_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="5" wire:model="sec10_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec10_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec10_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec10_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec10_q1"></td>
                                        </div>
                                    </tr>
                                    <tr>

                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            Timeliness of Service
                                            <span class="text-danger">@error('sec10_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec10_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec10_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec10_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec10_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec10_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            Courtesy of Staff
                                            <span class="text-danger">@error('sec10_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec10_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec10_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec10_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec10_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec10_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if ($currentPage == 6)
        {{-- Page 6 --}}
        <div class="my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Page 6/7
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning pb-0" role="alert">
                                <p>Please rate the following items by selecting your choice number on the box provided:</p>
                                <ul style="list-style-type:none; display:flex; justify-content: space-around;" >
                                    <li class="fw-bold">5 - Outstanding</li>
                                    <li class="fw-bold">4 - Very Satisfactory</li>
                                    <li class="fw-bold">3 - Satisfactory</li>
                                    <li class="fw-bold">2 - Fair</li>
                                    <li class="fw-bold">1 - Poor</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Section 11 --}}
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Dental Services</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 550px">Questions</th>
                                        <th scope="col" style="width: 50px">5</th>
                                        <th scope="col" style="width: 50px">4</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            Quality of Service
                                            <span class="text-danger">@error('sec11_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="5" wire:model="sec11_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec11_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec11_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec11_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec11_q1"></td>
                                        </div>
                                    </tr>
                                    <tr>

                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            Timeliness of Service
                                            <span class="text-danger">@error('sec11_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec11_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec11_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec11_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec11_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec11_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            Courtesy of Staff
                                            <span class="text-danger">@error('sec11_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec11_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec11_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec11_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec11_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec11_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 12 --}}
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Security Office</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 550px">Questions</th>
                                        <th scope="col" style="width: 50px">5</th>
                                        <th scope="col" style="width: 50px">4</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            Quality of Service
                                            <span class="text-danger">@error('sec12_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="5" wire:model="sec12_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec12_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec12_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec12_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec12_q1"></td>
                                        </div>
                                    </tr>
                                    <tr>

                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            Timeliness of Service
                                            <span class="text-danger">@error('sec12_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec12_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec12_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec12_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec12_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec12_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            Courtesy of Staff
                                            <span class="text-danger">@error('sec12_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec12_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec12_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec12_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec12_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec12_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 13 --}}
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Janitorial Services</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 550px">Questions</th>
                                        <th scope="col" style="width: 50px">5</th>
                                        <th scope="col" style="width: 50px">4</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            Quality of Service
                                            <span class="text-danger">@error('sec13_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="5" wire:model="sec13_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec13_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec13_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec13_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec13_q1"></td>
                                        </div>
                                    </tr>
                                    <tr>

                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            Timeliness of Service
                                            <span class="text-danger">@error('sec13_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec13_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec13_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec13_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec13_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec13_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            Courtesy of Staff
                                            <span class="text-danger">@error('sec13_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec13_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec13_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec13_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec13_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec13_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 14 --}}
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Overall evaluation</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 550px">Questions</th>
                                        <th scope="col" style="width: 50px">5</th>
                                        <th scope="col" style="width: 50px">4</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            PUP Taguig Systems and Procedures
                                            <span class="text-danger">@error('sec14_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="5" wire:model="sec14_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec14_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec14_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec14_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec14_q1"></td>
                                        </div>
                                    </tr>
                                    <tr>

                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            PUP Taguig Programs/Courses
                                            <span class="text-danger">@error('sec14_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec14_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec14_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec14_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec14_q2"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec14_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            PUP Taguig Services
                                            <span class="text-danger">@error('sec14_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                        <td><input class="form-check-input" type="radio" value="5" wire:model="sec14_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="4" wire:model="sec14_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="3" wire:model="sec14_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="2" wire:model="sec14_q3"></td>
                                        <td><input class="form-check-input" type="radio" value="1" wire:model="sec14_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label class="form-label">Give your comments/suggestions/recommendations for the improvement of PUP Taguig.</label>
                            <textarea class="form-control" rows="3" wire:model="comment"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif


        @if ($currentPage == 7)
        {{-- Page 7 --}}
        <div class="step-two my-3">
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

            @if ($currentPage == 2 || $currentPage == 3 || $currentPage == 4 || $currentPage == 5 || $currentPage == 6 || $currentPage == 7)
                <button class="btn btn-secondary" type="button" wire:click="previousPage()" style="width: 15%;">Back</button>
            @endif

            @if ($currentPage == 1 || $currentPage == 2 || $currentPage == 3 || $currentPage == 4 || $currentPage == 5 || $currentPage == 6)
                <button class="btn btn-primary" type="button" wire:click="nextPage()" style="width: 15%;">Next</button>
            @endif

            @if ($currentPage == 7)
                <button class="btn btn-success" type="submit" style="width: 15%;">Submit</button>
            @endif

        </div>
    </form>
</div>
