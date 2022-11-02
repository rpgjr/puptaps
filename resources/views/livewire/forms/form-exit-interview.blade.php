<div>
    <form wire:submit.prevent="saveAnswer">

        @foreach ($categories as $category)
        {{-- Page 1 --}}
        @if (($currentPage == 1) && ($currentPage == $category->category_id))
        <div class="my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Step {{$currentPage}}/{{$totalPage}} - DATA PRIVACY NOTICE
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

                            @foreach ($questions as $key => $value)
                            @if (($value->category_id) == ($category->category_id))
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Agree" wire:model="arrayAnswers.{{ $key }}.answer">
                                    <label class="form-check-label">Agree</label>
                                </div>
                            <span class="text-danger">@error('arrayAnswers.' . $key . '.answer'){{ $message }}@enderror</span>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Page 2 --}}
        @if (($currentPage == 2) && ($currentPage == $category->category_id))
        <div class="my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Step {{$currentPage}}/{{$totalPage}} - {{ $category->category_name }}
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
                                    <input type="text" class="form-control" value="{{ $user->last_name }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" value="{{ $user->first_name }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Middle Name</label>
                                    <input type="text" class="form-control" value="{{ $user->middle_name }}">
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
                                    <input type="text" class="form-control" value="{{ $user->civil_status }}">
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
                                    <input type="text" class="form-control" value="{{ $user->stud_number }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Course</label>
                                    <select class="form-select">
                                        <option>{{ $user->course_id }}</option>
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
                                    <input type="text" class="form-control" value="{{ $user->city_address }}">
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-12 mb-2">
                        <hr style="border: 2px solid black;">
                    </div>
                    </fieldset>
                    <div class="row">
                        @foreach ($questions as $key => $value)
                        @if (($value->category_id) == ($category->category_id))
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <div>
                                        <label class="form-label">{{ $value->question_text }}</label>
                                        @if ($value->question_type == "text")
                                            <input type="text" class="form-control" wire:model="arrayAnswers.{{ $key }}.answer">
                                            <span class="text-danger">@error('arrayAnswers.' . $key . '.answer'){{ $message }}@enderror</span>
                                        @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Graduation" wire:model="arrayAnswers.{{ $key }}.answer">
                                                <label class="form-check-label">Graduation</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Personal" wire:model="arrayAnswers.{{ $key }}.answer">
                                                <label class="form-check-label">Personal</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Family" wire:model="arrayAnswers.{{ $key }}.answer">
                                                <label class="form-check-label">Family</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Academic" wire:model="arrayAnswers.{{ $key }}.answer">
                                                <label class="form-check-label">Academic</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Financial" wire:model="arrayAnswers.{{ $key }}.answer">
                                                <label class="form-check-label">Financial</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Work-related" wire:model="arrayAnswers.{{ $key }}.answer">
                                                <label class="form-check-label">Work-related</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Others" wire:model="arrayAnswers.{{ $key }}.answer">
                                                <label class="form-check-label">Others</label>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif

        {{-- Page 3 --}}
        @if (($currentPage != 1) && ($currentPage != 2) && ($currentPage != 17) && ($currentPage == $category->category_id))
        <div class="my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Step {{$currentPage}}/{{$totalPage}} - {{ $category->category_name }}
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

                                    @foreach ($questions as $key => $value)
                                    @if (($value->category_id) == ($category->category_id))
                                    <tr>
                                        <td>{{ $value->question_text }}</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="5" wire:model="arrayAnswers.{{ $key }}.answer">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="4" wire:model="arrayAnswers.{{ $key }}.answer">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="3" wire:model="arrayAnswers.{{ $key }}.answer">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="2" wire:model="arrayAnswers.{{ $key }}.answer">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="1" wire:model="arrayAnswers.{{ $key }}.answer">
                                            </div>
                                        </td>
                                        <span class="text-danger">@error('arrayAnswers.' . $key . '.answer'){{ $message }}@enderror</span>
                                    </tr>
                                    @endif
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if (($currentPage == 17) && ($currentPage == $category->category_id))
        <div class="my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Step {{$currentPage}}/{{$totalPage}} - {{ $category->category_name }}
                </div>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-11 my-3">
                            <p>
                                This is to signify that I am willing to be subjected to company calls for placement or employment purposes. This shall also authorize the Polytechnic University of The Philippines – Career Development and Placement Office (PUP-CDPO) to include my name and contact details in the directory of graduates.
                            </p>
                        </div>
                        @foreach ($questions as $key => $value)
                        @if (($value->category_id) == ($category->category_id))
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <div>
                                        <label class="form-label">{{ $value->question_text }}</label>
                                        <input type="{{ $value->question_type }}" class="form-control" wire:model="arrayAnswers.{{ $key }}.answer">
                                        <span class="text-danger">@error('arrayAnswers.' . $key . '.answer'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif


        @endforeach

        {{-- Buttons --}}
        <div class="action-button d-flex justify-content-between mt-4">

            @if ($currentPage == 1)
                <div></div>
            @endif

            @if ($currentPage <= $totalPage && $currentPage != 1)
                <button class="btn btn-secondary" type="button" wire:click="previousPage()" style="width: 15%;">Back</button>
            @endif

            @if ($currentPage < $totalPage && $currentPage != $totalPage)
                <button class="btn btn-primary" type="button" wire:click="nextPage()" style="width: 15%;">Next</button>
            @endif

            @if ($currentPage == $totalPage)
                <button class="btn btn-success" type="submit" style="width: 15%;">Submit</button>
            @endif

        </div>
    </form>
</div>
