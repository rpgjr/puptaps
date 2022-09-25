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
                    Page 2/6 - Personal Information
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
                                    <label class="form-label">Number of Semesters with PUP</label>
                                    <select class="form-select">
                                        <option>{{ $user->semesters }}</option>
                                    </select>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        @endif

        @if ($currentPage == 3)
        {{-- Page 3 --}}
        <div class="my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Page 3/6
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning pb-0" role="alert">
                                <p>
                                    <b>ASSESSMENT OF THE STUDENTS AFFAIRS AND SERVICES (SAS) PROGRAM, PROJECTS AND ACTIVITIES OF THE POLYTECHNIC UNIVERSITY OF THE PHILIPPINES TAGUIG BRANCH.
                                    </b>
                                    Please assess the Student Affairs and Services (SAS) Program, projects and activities of the Polytechnic University of the Philippines Taguig Branch using the scales below:
                                </p>
                                <ul style="list-style-type:none; display:flex; justify-content: space-around;" >
                                    <li class="fw-bold">1 - Very Satisfactory </li>
                                    <li class="fw-bold">2 - Satisfactory</li>
                                    <li class="fw-bold">3 - Unsatisfactory</li>
                                    <li class="fw-bold">4 - Very Unsatisfactory</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Student Affairs and Services (SAS) Program</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 500px">Questions</th>
                                        <th scope="col" style="width: 50px">1</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            1. Clarity of objectives of the SAS program, projects and activities.
                                            <span class="text-danger">@error('sec1_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q1"></td>
                                        </div>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            2. Relevance of the SAS Program to students’ welfare and development.
                                            <span class="text-danger">@error('sec1_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            3. Consistency of the SAS Program with the PUP mission and vision.
                                            <span class="text-danger">@error('sec1_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q3"></td>
                                        </div>
                                    </tr>
                                    {{-- Q4 --}}
                                    <tr>
                                        <td>
                                            4. Consistency of the SAS Program with the College goals and curricular program objectives.
                                            <span class="text-danger">@error('sec1_q4')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q4"></td>
                                        </div>
                                    </tr>
                                    {{-- Q5 --}}
                                    <tr>
                                        <td>
                                            5. Dissemination of the SAS Program, projects and activities.
                                            <span class="text-danger">@error('sec1_q5')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q5"></td>
                                        </div>
                                    </tr>
                                    {{-- Q6 --}}
                                    <tr>
                                        <td>
                                            6. Qualification of heads and administrative support staff of SAS offices.
                                            <span class="text-danger">@error('sec1_q6')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q6"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q6"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q6"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q6"></td>
                                        </div>
                                    </tr>
                                    {{-- Q7 --}}
                                    <tr>
                                        <td>
                                            7. Management and supervision of SAS program.
                                            <span class="text-danger">@error('sec1_q7')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q7"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q7"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q7"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q7"></td>
                                        </div>
                                    </tr>
                                    {{-- Q8 --}}
                                    <tr>
                                        <td>
                                            8. Implementation of the SAS program.
                                            <span class="text-danger">@error('sec1_q8')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q8"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q8"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q8"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q8"></td>
                                        </div>
                                    </tr>
                                    {{-- Q9 --}}
                                    <tr>
                                        <td>
                                            9. Responsiveness of the SAS program to students’ welfare and development.
                                            <span class="text-danger">@error('sec1_q9')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q9"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q9"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q9"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q9"></td>
                                        </div>
                                    </tr>
                                    {{-- Q10 --}}
                                    <tr>
                                        <td>
                                            10. Adequacy of administrative support personnel for SAS.
                                            <span class="text-danger">@error('sec1_q10')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q10"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q10"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q10"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q10"></td>
                                        </div>
                                    </tr>
                                    {{-- Q11 --}}
                                    <tr>
                                        <td>
                                            11. Proximity of SAS offices.
                                            <span class="text-danger">@error('sec1_q11')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q11"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q11"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q11"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q11"></td>
                                        </div>
                                    </tr>
                                    {{-- Q12 --}}
                                    <tr>
                                        <td>
                                            12. Promptness of student services and transactions.
                                            <span class="text-danger">@error('sec1_q12')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q12"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q12"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q12"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q12"></td>
                                        </div>
                                    </tr>
                                    {{-- Q13 --}}
                                    <tr>
                                        <td>
                                            13. Courtesy of administrative support personnel.
                                            <span class="text-danger">@error('sec1_q13')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q13"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q13"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q13"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q13"></td>
                                        </div>
                                    </tr>
                                    {{-- Q14 --}}
                                    <tr>
                                        <td>
                                            14. Adequacy of physical facilities for SAS program, projects and activities.
                                            <span class="text-danger">@error('sec1_q14')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q14"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q14"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q14"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q14"></td>
                                        </div>
                                    </tr>
                                    {{-- Q15 --}}
                                    <tr>
                                        <td>
                                            15. Adequacy of equipment and materials for SAS.
                                            <span class="text-danger">@error('sec1_q15')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q15"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q15"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q15"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q15"></td>
                                        </div>
                                    </tr>
                                    {{-- Q16 --}}
                                    <tr>
                                        <td>
                                            16. Efficiency of student services and transactions.
                                            <span class="text-danger">@error('sec1_q16')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q16"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q16"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q16"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q16"></td>
                                        </div>
                                    </tr>
                                    {{-- Q17 --}}
                                    <tr>
                                        <td>
                                            17. Transparency and accountability in spending the budget for SAS.
                                            <span class="text-danger">@error('sec1_q17')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q17"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q17"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q17"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q17"></td>
                                        </div>
                                    </tr>
                                    {{-- Q18 --}}
                                    <tr>
                                        <td>
                                            18. Monitoring of SAS program, projects and activities.
                                            <span class="text-danger">@error('sec1_q18')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q18"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q18"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q18"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q18"></td>
                                        </div>
                                    </tr>
                                    {{-- Q19 --}}
                                    <tr>
                                        <td>
                                            19. Evaluation of the SAS program, projects and activities.
                                            <span class="text-danger">@error('sec1_q19')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q19"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q19"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q19"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q19"></td>
                                        </div>
                                    </tr>
                                    {{-- Q20 --}}
                                    <tr>
                                        <td>
                                            20. Conduct research on SAS program, projects and activities.
                                            <span class="text-danger">@error('sec1_q20')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q20"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q20"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q20"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q20"></td>
                                        </div>
                                    </tr>
                                    {{-- Q21 --}}
                                    <tr>
                                        <td>
                                            21. Dissemination and utilization of research results and outputs.
                                            <span class="text-danger">@error('sec1_q21')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q21"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q21"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q21"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q21"></td>
                                        </div>
                                    </tr>
                                    {{-- Q22 --}}
                                    <tr>
                                        <td>
                                            22. Rewards and incentives for excellence in SAS.
                                            <span class="text-danger">@error('sec1_q22')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec1_q22"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec1_q22"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec1_q22"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec1_q22"></td>
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
                    Page 4/6
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning pb-0" role="alert">
                                <p>
                                    <b>ASSESSMENT OF THE STUDENTS AFFAIRS AND SERVICES (SAS) PROGRAM, PROJECTS AND ACTIVITIES OF THE POLYTECHNIC UNIVERSITY OF THE PHILIPPINES TAGUIG BRANCH.
                                    </b>
                                    Please assess the Student Affairs and Services (SAS) Program, projects and activities of the Polytechnic University of the Philippines Taguig Branch using the scales below:
                                </p>
                                <ul style="list-style-type:none; display:flex; justify-content: space-around;" >
                                    <li class="fw-bold">1 - Very Satisfactory </li>
                                    <li class="fw-bold">2 - Satisfactory</li>
                                    <li class="fw-bold">3 - Unsatisfactory</li>
                                    <li class="fw-bold">4 - Very Unsatisfactory</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Section 2 --}}
                        <div class="col-md-12">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Admission Services</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 500px">Questions</th>
                                        <th scope="col" style="width: 50px">1</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            23. Dissemination of policy on student recruitment, selection, admission and retention.
                                            <span class="text-danger">@error('sec2_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec2_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec2_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec2_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec2_q1"></td>
                                        </div>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            24. System of student recruitment, selection and admission.
                                            <span class="text-danger">@error('sec2_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec2_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec2_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec2_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec2_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            25. Implementation of the policy on student retention.
                                            <span class="text-danger">@error('sec2_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec2_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec2_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec2_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec2_q3"></td>
                                        </div>
                                    </tr>
                                    {{-- Q4 --}}
                                    <tr>
                                        <td>
                                            26. Processing of students’ entrance and requirements.
                                            <span class="text-danger">@error('sec2_q4')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec2_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec2_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec2_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec2_q4"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 3 --}}
                        <div class="col-md-12">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Information and Orientation Services</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 500px">Questions</th>
                                        <th scope="col" style="width: 50px">1</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            27. Availability of informational materials on the University’s mission and vision.
                                            <span class="text-danger">@error('sec3_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec3_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec3_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec3_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec3_q1"></td>
                                        </div>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            28. Availability of informational materials on College goals and program objectives.
                                            <span class="text-danger">@error('sec3_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec3_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec3_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec3_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec3_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            29. Accessibility of informational materials on academic rules and regulations, student conduct and discipline.
                                            <span class="text-danger">@error('sec3_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec3_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec3_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec3_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec3_q3"></td>
                                        </div>
                                    </tr>
                                    {{-- Q4 --}}
                                    <tr>
                                        <td>
                                            30. Orientation of new students.
                                            <span class="text-danger">@error('sec3_q4')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec3_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec3_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec3_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec3_q4"></td>
                                        </div>
                                    </tr>
                                    {{-- Q5 --}}
                                    <tr>
                                        <td>
                                            31. Orientation of returning and continuing students.
                                            <span class="text-danger">@error('sec3_q5')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec3_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec3_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec3_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec3_q5"></td>
                                        </div>
                                    </tr>
                                    {{-- Q6 --}}
                                    <tr>
                                        <td>
                                            32. Availability of educational, career and social reading materials.
                                            <span class="text-danger">@error('sec3_q6')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec3_q6"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec3_q6"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec3_q6"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec3_q6"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 4 --}}
                        <div class="col-md-12">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Scholarship and Financial Assistance</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 500px">Questions</th>
                                        <th scope="col" style="width: 50px">1</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            33. Accessibility of informational materials about scholarships, study grants and other schemes of financial aides.
                                            <span class="text-danger">@error('sec4_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec4_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec4_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec4_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec4_q1"></td>
                                        </div>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            34. Implementation of the policy on scholarship, study grants and other schemes of financial aide.
                                            <span class="text-danger">@error('sec4_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec4_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec4_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec4_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec4_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            35. Monitoring of the performance of recipients of scholarship, study grants and other schemes of financial aides.
                                            <span class="text-danger">@error('sec4_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec4_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec4_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec4_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec4_q3"></td>
                                        </div>
                                    </tr>
                                    {{-- Q4 --}}
                                    <tr>
                                        <td>
                                            36. Generation of funds for scholarship, study grants and other financial aides.
                                            <span class="text-danger">@error('sec4_q4')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec4_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec4_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec4_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec4_q4"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 5 --}}
                        <div class="col-md-12">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Health Services</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 500px">Questions</th>
                                        <th scope="col" style="width: 50px">1</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            37. Dissemination of health services program, projects and activities.
                                            <span class="text-danger">@error('sec5_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec5_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec5_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec5_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec5_q1"></td>
                                        </div>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            38. Adequacy of medical services.
                                            <span class="text-danger">@error('sec5_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec5_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec5_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec5_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec5_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            39. Adequacy of dental services.
                                            <span class="text-danger">@error('sec5_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec5_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec5_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec5_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec5_q3"></td>
                                        </div>
                                    </tr>
                                    {{-- Q4 --}}
                                    <tr>
                                        <td>
                                            40. Competence of medical and dental personnel.
                                            <span class="text-danger">@error('sec5_q4')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec5_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec5_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec5_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec5_q4"></td>
                                        </div>
                                    </tr>
                                    {{-- Q5 --}}
                                    <tr>
                                        <td>
                                            41. Adequacy of medical and dental facilities, equipment and supplies.
                                            <span class="text-danger">@error('sec5_q5')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec5_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec5_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec5_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec5_q5"></td>
                                        </div>
                                    </tr>
                                    {{-- Q6 --}}
                                    <tr>
                                        <td>
                                            42.  Promptness of medical and dental services.
                                            <span class="text-danger">@error('sec5_q6')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec5_q6"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec5_q6"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec5_q6"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec5_q6"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 6 --}}
                        <div class="col-md-12">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Guidance and Counseling Services</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 500px">Questions</th>
                                        <th scope="col" style="width: 50px">1</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            43. Appraisal system for student’s attributes, adaptability, and competence.
                                            <span class="text-danger">@error('sec6_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec6_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec6_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec6_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec6_q1"></td>
                                        </div>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            44.  Availability of counseling services.
                                            <span class="text-danger">@error('sec6_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec6_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec6_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec6_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec6_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            45.  Maintenance of confidential records by the guidance counselors.
                                            <span class="text-danger">@error('sec6_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec6_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec6_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec6_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec6_q3"></td>
                                        </div>
                                    </tr>
                                    {{-- Q4 --}}
                                    <tr>
                                        <td>
                                            46.  Availability of counseling rooms.
                                            <span class="text-danger">@error('sec6_q4')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec6_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec6_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec6_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec6_q4"></td>
                                        </div>
                                    </tr>
                                    {{-- Q5 --}}
                                    <tr>
                                        <td>
                                            47.  Monitoring of the effectiveness of guidance and placement activities.
                                            <span class="text-danger">@error('sec6_q5')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec6_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec6_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec6_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec6_q5"></td>
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
                    Page 5/6
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning pb-0" role="alert">
                                <p>
                                    <b>ASSESSMENT OF THE STUDENTS AFFAIRS AND SERVICES (SAS) PROGRAM, PROJECTS AND ACTIVITIES OF THE POLYTECHNIC UNIVERSITY OF THE PHILIPPINES TAGUIG BRANCH.
                                    </b>
                                    Please assess the Student Affairs and Services (SAS) Program, projects and activities of the Polytechnic University of the Philippines Taguig Branch using the scales below:
                                </p>
                                <ul style="list-style-type:none; display:flex; justify-content: space-around;" >
                                    <li class="fw-bold">1 - Very Satisfactory </li>
                                    <li class="fw-bold">2 - Satisfactory</li>
                                    <li class="fw-bold">3 - Unsatisfactory</li>
                                    <li class="fw-bold">4 - Very Unsatisfactory</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        {{-- Section 7 --}}
                        <div class="col-md-12">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Food Services</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 500px">Questions</th>
                                        <th scope="col" style="width: 50px">1</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            48. Management of safety and sanitary conditions of canteen and food outlets.
                                            <span class="text-danger">@error('sec7_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec7_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec7_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec7_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec7_q1"></td>
                                        </div>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            49.  Coordination of the food safety of food services outside the school premises with the local government.
                                            <span class="text-danger">@error('sec7_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec7_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec7_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec7_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec7_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            50.  Nutrition of meals served in the canteen and food outlets.
                                            <span class="text-danger">@error('sec7_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec7_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec7_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec7_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec7_q3"></td>
                                        </div>
                                    </tr>
                                    {{-- Q4 --}}
                                    <tr>
                                        <td>
                                            51.  Affordability and reasonableness of prices of the meals in the canteen and food outlets.
                                            <span class="text-danger">@error('sec7_q4')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec7_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec7_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec7_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec7_q4"></td>
                                        </div>
                                    </tr>
                                    {{-- Q5 --}}
                                    <tr>
                                        <td>
                                            52.  Personal hygiene of canteen and food outlets personnel.
                                            <span class="text-danger">@error('sec7_q5')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec7_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec7_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec7_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec7_q5"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 8 --}}
                        <div class="col-md-12">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Career and Placement Services</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 500px">Questions</th>
                                        <th scope="col" style="width: 50px">1</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            53.  Availability of informational materials about career and employment opportunities.
                                            <span class="text-danger">@error('sec8_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec8_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec8_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec8_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec8_q1"></td>
                                        </div>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            54.  Appraisal of students for career and job placement.
                                            <span class="text-danger">@error('sec8_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec8_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec8_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec8_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec8_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            55.  Provision for career seminar and job placement services.
                                            <span class="text-danger">@error('sec8_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec8_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec8_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec8_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec8_q3"></td>
                                        </div>
                                    </tr>
                                    {{-- Q4 --}}
                                    <tr>
                                        <td>
                                            56.  Linkages and networks for possible career and job placement.
                                            <span class="text-danger">@error('sec8_q4')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec8_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec8_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec8_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec8_q4"></td>
                                        </div>
                                    </tr>
                                    {{-- Q5 --}}
                                    <tr>
                                        <td>
                                            57.  Monitoring of student placement provided.
                                            <span class="text-danger">@error('sec8_q5')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec8_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec8_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec8_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec8_q5"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 9 --}}
                        <div class="col-md-12">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Safety and Security Services</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 500px">Questions</th>
                                        <th scope="col" style="width: 50px">1</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            58.  Competence of security personnel.
                                            <span class="text-danger">@error('sec9_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec9_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec9_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec9_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec9_q1"></td>
                                        </div>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            59.  Care of safety and security of students and students’ belongings.
                                            <span class="text-danger">@error('sec9_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec9_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec9_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec9_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec9_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            60.  Maintenance of safety and security of school environment, buildings and facilities.
                                            <span class="text-danger">@error('sec9_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec9_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec9_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec9_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec9_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 10 --}}
                        <div class="col-md-12">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Student Discipline</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 500px">Questions</th>
                                        <th scope="col" style="width: 50px">1</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            61.  Dissemination of gender sensitive rules and regulations.
                                            <span class="text-danger">@error('sec10_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec10_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec10_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec10_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec10_q1"></td>
                                        </div>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            62.  Definition of appropriate student conduct.
                                            <span class="text-danger">@error('sec10_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec10_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec10_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec10_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec10_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            63.  Sanctions for student misconduct.
                                            <span class="text-danger">@error('sec10_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec10_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec10_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec10_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec10_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 11 --}}
                        <div class="col-md-12">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Services for Students with Special Needs</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 500px">Questions</th>
                                        <th scope="col" style="width: 50px">1</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            64.  Accommodation of students with disabilities and learners with special needs.
                                            <span class="text-danger">@error('sec11_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec11_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec11_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec11_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec11_q1"></td>
                                        </div>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            65.  Provision of facilities for students with disabilities.
                                            <span class="text-danger">@error('sec11_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec11_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec11_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec11_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec11_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            66.  Provision of life skills training like conflict management and counseling.
                                            <span class="text-danger">@error('sec11_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec11_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec11_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec11_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec11_q3"></td>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Section 12 --}}
                        <div class="col-md-12">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th colspan="6"><h4 class="fw-bold">Student Organization and Activities</h4></th>
                                    </tr>
                                    <tr>
                                        <th scope="col" style="width: 500px">Questions</th>
                                        <th scope="col" style="width: 50px">1</th>
                                        <th scope="col" style="width: 50px">2</th>
                                        <th scope="col" style="width: 50px">3</th>
                                        <th scope="col" style="width: 50px">4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Q1 --}}
                                    <tr>
                                        <td>
                                            67.  System of accreditation and recognition of student organizations.
                                            <span class="text-danger">@error('sec12_q1')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec12_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec12_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec12_q1"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec12_q1"></td>
                                        </div>
                                    </tr>
                                    {{-- Q2 --}}
                                    <tr>
                                        <td>
                                            68.  Dissemination of requirements and procedure for accreditation of student groups.
                                            <span class="text-danger">@error('sec12_q2')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec12_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec12_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec12_q2"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec12_q2"></td>
                                        </div>
                                    </tr>
                                    {{-- Q3 --}}
                                    <tr>
                                        <td>
                                            69.  Provision of office space and other school support for accredited student groups.
                                            <span class="text-danger">@error('sec12_q3')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec12_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec12_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec12_q3"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec12_q3"></td>
                                        </div>
                                    </tr>
                                    {{-- Q4 --}}
                                    <tr>
                                        <td>
                                            70.  Mechanism for student organizations to coordinate with school administration.
                                            <span class="text-danger">@error('sec12_q4')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec12_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec12_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec12_q4"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec12_q4"></td>
                                        </div>
                                    </tr>
                                    {{-- Q5 --}}
                                    <tr>
                                        <td>
                                            71.  Provision of leadership trainings.
                                            <span class="text-danger">@error('sec12_q5')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec12_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec12_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec12_q5"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec12_q5"></td>
                                        </div>
                                    </tr>
                                    {{-- Q6 --}}
                                    <tr>
                                        <td>
                                            72.  Opportunity to interact with other student organizations from other schools.
                                            <span class="text-danger">@error('sec12_q6')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec12_q6"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec12_q6"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec12_q6"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec12_q6"></td>
                                        </div>
                                    </tr>
                                    {{-- Q7 --}}
                                    <tr>
                                        <td>
                                            73.  Recognition of the students the right to govern themselves.
                                            <span class="text-danger">@error('sec12_q7')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec12_q7"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec12_q7"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec12_q7"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec12_q7"></td>
                                        </div>
                                    </tr>
                                    {{-- Q8 --}}
                                    <tr>
                                        <td>
                                            74.  Opportunity to represent students in student council and board of regents.
                                            <span class="text-danger">@error('sec12_q8')*{{ $message }}@enderror</span>
                                        </td>
                                        <div class="form-check form-check-inline">
                                            <td><input class="form-check-input" type="radio" value="1" wire:model="sec12_q8"></td>
                                            <td><input class="form-check-input" type="radio" value="2" wire:model="sec12_q8"></td>
                                            <td><input class="form-check-input" type="radio" value="3" wire:model="sec12_q8"></td>
                                            <td><input class="form-check-input" type="radio" value="4" wire:model="sec12_q8"></td>
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

            @if ($currentPage == 2 || $currentPage == 3 || $currentPage == 4 || $currentPage == 5 || $currentPage == 6)
                <button class="btn btn-secondary" type="button" wire:click="previousPage()" style="width: 15%;">Back</button>
            @endif

            @if ($currentPage == 1 || $currentPage == 2 || $currentPage == 3 || $currentPage == 4 || $currentPage == 5)
                <button class="btn btn-primary" type="button" wire:click="nextPage()" style="width: 15%;">Next</button>
            @endif

            @if ($currentPage == 6)
                <button class="btn btn-success" type="submit" style="width: 15%;">Submit</button>
            @endif

        </div>
    </form>
</div>
