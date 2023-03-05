<div>
    <form wire:submit.prevent="saveAnswer">
        @foreach ($categories as $category)
            @if (($currentPage == $category->category_id) && ($currentPage == $category->category_id))

            <div class="row justify-content-center">
                <div class="col-12 form-box-title pb-2">
                    <div class="row g-0">
                        <div class="col-12 mt-1">
                            <div class="progress progress-style">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="{{ $progressBar }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $progressBar }}%">{{ $progressBar }}%</div>
                            </div>
                        </div>
                        <div class="col-12 text-center mt-3">
                            <h5>Page {{ $currentPage }} of {{ $totalPage }} - {{ $category->category_name }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 form-box-content">
                    <div class="row">
                        @if ($currentPage == 1)
                            <div class="col-12 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:click="board_value()" @if($no_board_exam == 'NO_BOARD_EXAM')checked @endif>
                                    <label class="form-check-label">
                                        My course doesn't have a Board Exam
                                    </label>
                                </div>
                            </div>

                            @foreach ($questions as $key => $value)
                            @if (($value->category_id) == ($category->category_id))
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="form-group">
                                        @if (($value->question_type == "text") || ($value->question_type == "date"))
                                            <div>
                                                <label class="form-label">{{ $value->question_text}} <span class="text-danger">*</span></label>
                                                <input type="{{ $value->question_type }}" class="form-control @if ($arrayAnswers[$key]['answer'] == null) @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror @endif" wire:model="arrayAnswers.{{ $key }}.answer" @if ($no_board_exam == 'NO_BOARD_EXAM')disabled @endif>
                                                <span class="text-danger error-message">
                                                    @if ($arrayAnswers[$key]['answer'] == null)
                                                        @error('arrayAnswers.' . $key . '.answer')
                                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                        {{ $message }}
                                                        @enderror
                                                    @endif
                                                </span>
                                            </div>
                                        @elseif ($value->question_type == "select")
                                            <div>
                                                <label class="form-label">{{ $value->question_text }} <span class="text-danger">*</span></label>
                                                <select class="form-select @if ($arrayAnswers[$key]['answer'] == null) @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror @endif" wire:model="arrayAnswers.{{ $key }}.answer" @if ($no_board_exam == 'NO_BOARD_EXAM')disabled @endif>
                                                    <option selected hidden>Please select one...</option>
                                                    <option value="Electronics Engineer Licensure Examination">Electronics Engineer Licensure Examination</option>
                                                    <option value="Licensure Examination for Teachers">Licensure Examination for Teachers</option>
                                                    <option value="Certified Public Accountant Board Exam">Certified Public Accountant Board Exam</option>
                                                    <option value="Professional Mechanical Engineer">Professional Mechanical Engineer</option>
                                                    <option value="N/A">Not Applicable</option>
                                                </select>
                                                <span class="text-danger error-message">
                                                    @if ($arrayAnswers[$key]['answer'] == null)
                                                        @error('arrayAnswers.' . $key . '.answer')
                                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                        {{ $message }}
                                                        @enderror
                                                    @endif
                                                </span>
                                            </div>
                                        @elseif ($value->question_type == "radio")
                                            @if ($value->question_id != 5)
                                                <div>
                                                    <label class="form-label">{{ $value->question_text }} <span class="text-danger">*</span></label>
                                                    <div class="my-0"></div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" name="{{ $value->question_id }}" type="radio" value="Yes" wire:model="arrayAnswers.{{ $key }}.answer" @if ($no_board_exam == 'NO_BOARD_EXAM')disabled @endif>
                                                        <label class="form-check-label">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" name="{{ $value->question_id }}" type="radio" value="No" wire:model="arrayAnswers.{{ $key }}.answer" @if ($no_board_exam == 'NO_BOARD_EXAM')disabled @endif>
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                </div>
                                            @else
                                                <div>
                                                    <label class="form-label">{{ $value->question_text }} <span class="text-danger">*</span></label>
                                                    <div class="my-0"></div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" name="{{ $value->question_id }}" type="radio" value="Yes" wire:model="arrayAnswers.{{ $key }}.answer">
                                                        <label class="form-check-label">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" name="{{ $value->question_id }}" type="radio" value="No" wire:model="arrayAnswers.{{ $key }}.answer">
                                                        <label class="form-check-label">No</label>
                                                    </div>
                                                </div>
                                            @endif
                                            <span class="text-danger error-message">
                                                @if ($arrayAnswers[$key]['answer'] == null)
                                                    @error('arrayAnswers.' . $key . '.answer')
                                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                    {{ $message }}
                                                    @enderror
                                                @endif
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            @endif
                            @endforeach
                        @endif
                        @if ($currentPage == 2)
                            <div class="col-12 mb-2">
                                <div class="col-12 mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" wire:click="unemployed_value()" @if($currently_unemployed == 'CURRENTLY_UNEMPLOYED')checked @endif>
                                        <label class="form-check-label">
                                            Are you currently unemployed?
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @foreach ($questions as $key => $value)
                            @if (($value->category_id) == ($category->category_id))
                                @if ($key == 13)
                                <div class="col-12 mb-3">
                                @else
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                @endif
                                    <div class="form-group">
                                        @if (($value->question_type == "text") || ($value->question_type == "date"))
                                            @if ($key == 11)
                                                <div>
                                                    <label class="form-label">{{ $value->question_text}} <span class="text-danger">*</span></label>
                                                    <input type="{{ $value->question_type }}" class="form-control @if ($arrayAnswers[$key]['answer'] == null || $errors->all()) @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror @endif" wire:model="arrayAnswers.{{ $key }}.answer" @if($currently_unemployed == 'CURRENTLY_UNEMPLOYED')disabled @endif>
                                                    <span class="text-danger error-message">
                                                        @if ($arrayAnswers[$key]['answer'] == null || $errors->all())
                                                            @error('arrayAnswers.' . $key . '.answer')
                                                            <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                            {{ $message }}
                                                            @enderror
                                                        @endif
                                                    </span>
                                                </div>
                                            @else
                                                <div>
                                                    <label class="form-label">{{ $value->question_text}} <span class="text-danger">*</span></label>
                                                    <input type="{{ $value->question_type }}" class="form-control @if ($arrayAnswers[$key]['answer'] == null) @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror @endif" wire:model="arrayAnswers.{{ $key }}.answer" @if($currently_unemployed == 'CURRENTLY_UNEMPLOYED')disabled @endif>
                                                    <span class="text-danger error-message">
                                                        @if ($arrayAnswers[$key]['answer'] == null)
                                                            @error('arrayAnswers.' . $key . '.answer')
                                                            <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                            {{ $message }}
                                                            @enderror
                                                        @endif
                                                    </span>
                                                </div>

                                            @endif
                                        @elseif ($value->question_type == "select")
                                            <div>
                                                <label class="form-label">{{ $value->question_text }} <span class="text-danger">*</span></label>
                                                @if ($value->question_text == "Type of Employment")
                                                    <select class="form-select @if ($arrayAnswers[$key]['answer'] == null) @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror @endif" wire:model="arrayAnswers.{{ $key }}.answer" @if($currently_unemployed == 'CURRENTLY_UNEMPLOYED')disabled @endif>
                                                        <option selected hidden>Please select one...</option>
                                                        <option value="Probitionary">Probitionary</option>
                                                        <option value="Regular">Regular</option>
                                                        <option value="Contractual Basis">Contractual Basis</option>
                                                        <option value="Others">Others</option>
                                                        <option value="Not Applicable">Not Applicable</option>
                                                    </select>
                                                @elseif ($value->question_text == "Monthly Income")
                                                    <select class="form-select @if ($arrayAnswers[$key]['answer'] == null) @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror @endif" wire:model="arrayAnswers.{{ $key }}.answer" @if($currently_unemployed == 'CURRENTLY_UNEMPLOYED')disabled @endif>
                                                        <option selected hidden>Please select one...</option>
                                                        <option value="₱10,000 - ₱15,000">₱10,000 - ₱15,000</option>
                                                        <option value="₱16,000 - ₱20,000">₱16,000 - ₱20,000</option>
                                                        <option value="₱21,000 - ₱25,000">₱21,000 - ₱25,000</option>
                                                        <option value="₱26,000 - ₱30,000">₱26,000 - ₱30,000</option>
                                                        <option value="₱31,000 - ₱35,000">₱31,000 - ₱35,000</option>
                                                        <option value="₱36,000 - ₱40,000">₱36,000 - ₱40,000</option>
                                                        <option value="₱41,000 - ₱45,000">₱41,000 - ₱45,000</option>
                                                        <option value="₱46,000 and above">₱46,000 and above</option>
                                                        <option value="Not Applicable">Not Applicable</option>
                                                    </select>
                                                @endif
                                                <span class="text-danger error-message">
                                                    @if ($arrayAnswers[$key]['answer'] == null)
                                                        @error('arrayAnswers.' . $key . '.answer')
                                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                        {{ $message }}
                                                        @enderror
                                                    @endif
                                                </span>
                                            </div>
                                        @elseif ($value->question_type == "radio")
                                            <div>
                                                <label class="form-label">{{ $value->question_text }} <span class="text-danger">*</span></label>
                                                <div class="my-0"></div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="{{ $value->question_id }}" type="radio" value="Yes" wire:model="arrayAnswers.{{ $key }}.answer" @if($currently_unemployed == 'CURRENTLY_UNEMPLOYED')disabled @endif>
                                                    <label class="form-check-label">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="{{ $value->question_id }}" type="radio" value="No" wire:model="arrayAnswers.{{ $key }}.answer" @if($currently_unemployed == 'CURRENTLY_UNEMPLOYED')disabled @endif>
                                                    <label class="form-check-label">No</label>
                                                </div>
                                            </div>
                                            <span class="text-danger error-message">
                                                @if ($arrayAnswers[$key]['answer'] == null)
                                                    @error('arrayAnswers.' . $key . '.answer')
                                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                    {{ $message }}
                                                    @enderror
                                                @endif
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            @endif
                            @endforeach
                        @endif
                        @if ($currentPage == 3)
                            @if($currently_unemployed != 'CURRENTLY_UNEMPLOYED')
                                <div class="col-12 mb-2">
                                    <div class="col-12 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" wire:click="sameCurrent()">
                                            <label class="form-check-label">
                                                Same as Current Job
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-12 mb-2">
                                    <div class="col-12 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" wire:click="noJobYet()">
                                            <label class="form-check-label">
                                                No job yet.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @foreach ($questions as $key => $value)
                            @if (($value->category_id) == ($category->category_id))
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="form-group">
                                        @if ($key == 18)
                                            <div>
                                                <label class="form-label">{{ $value->question_text}} <span class="text-danger">*</span></label>
                                                <input type="{{ $value->question_type }}" class="form-control @if ($arrayAnswers[$key]['answer'] == null || $errors->get('email') == null) @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror @endif" wire:model="arrayAnswers.{{ $key }}.answer" value="{{ $arrayAnswers[$key]['answer'] }}" @if($no_job_yet == 'NO_JOB_YET') disabled @endif>
                                                <span class="text-danger error-message">
                                                    @if ($arrayAnswers[$key]['answer'] == null || $errors->get('email') == null)
                                                        @error('arrayAnswers.' . $key . '.answer')
                                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                        {{ $message }}
                                                        @enderror
                                                    @endif
                                                </span>
                                            </div>
                                        @else
                                            <div>
                                                <label class="form-label">{{ $value->question_text}} <span class="text-danger">*</span></label>
                                                <input type="{{ $value->question_type }}" class="form-control @if ($arrayAnswers[$key]['answer'] == null) @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror @endif" wire:model="arrayAnswers.{{ $key }}.answer" value="{{ $arrayAnswers[$key]['answer'] }}" @if($no_job_yet == 'NO_JOB_YET') disabled @endif>
                                                <span class="text-danger error-message">
                                                    @if ($arrayAnswers[$key]['answer'] == null)
                                                        @error('arrayAnswers.' . $key . '.answer')
                                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                        {{ $message }}
                                                        @enderror
                                                    @endif
                                                </span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif
                            @endforeach
                        @endif
                        {{-- @foreach ($questions as $key => $value)
                        @if (($value->category_id) == ($category->category_id))
                            @if ($key == 13)
                            <div class="col-12 mb-3">
                            @else
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                            @endif
                                <div class="form-group">
                                    @if (($value->question_type == "text") || ($value->question_type == "date"))
                                        @if ($value->category_id == 3)
                                            <div>
                                                <label class="form-label">{{ $value->question_text}} <span class="text-danger">*</span></label>
                                                <input type="{{ $value->question_type }}" class="form-control @if ($arrayAnswers[$key]['answer'] == null) @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror @endif" wire:model="arrayAnswers.{{ $key }}.answer" value="{{ $arrayAnswers[$key]['answer'] }}">
                                                <span class="text-danger error-message">
                                                    @error('arrayAnswers.' . $key . '.answer')
                                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                    {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        @else
                                            <div>
                                                <label class="form-label">{{ $value->question_text}} <span class="text-danger">*</span></label>
                                                <input type="{{ $value->question_type }}" class="form-control @if ($arrayAnswers[$key]['answer'] == null) @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror @endif" wire:model="arrayAnswers.{{ $key }}.answer">
                                                <span class="text-danger error-message">
                                                    @error('arrayAnswers.' . $key . '.answer')
                                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                    {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        @endif
                                    @elseif ($value->question_type == "select")
                                        <div>
                                            <label class="form-label">{{ $value->question_text }} <span class="text-danger">*</span></label>
                                            @if ($value->question_text == "Type of Employment")
                                                <select class="form-select @if ($arrayAnswers[$key]['answer'] == null) @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror @endif" wire:model="arrayAnswers.{{ $key }}.answer">
                                                    <option selected hidden>Please select one...</option>
                                                    <option value="Probitionary">Probitionary</option>
                                                    <option value="Regular">Regular</option>
                                                    <option value="Contractual Basis">Contractual Basis</option>
                                                    <option value="Others">Others</option>
                                                    <option value="Not Applicable">Not Applicable</option>
                                                </select>
                                            @elseif ($value->question_text == "Monthly Income")
                                                <select class="form-select @if ($arrayAnswers[$key]['answer'] == null) @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror @endif" wire:model="arrayAnswers.{{ $key }}.answer">
                                                    <option selected hidden>Please select one...</option>
                                                    <option value="₱10,000 - ₱15,000">₱10,000 - ₱15,000</option>
                                                    <option value="₱16,000 - ₱20,000">₱16,000 - ₱20,000</option>
                                                    <option value="₱21,000 - ₱25,000">₱21,000 - ₱25,000</option>
                                                    <option value="₱26,000 - ₱30,000">₱26,000 - ₱30,000</option>
                                                    <option value="₱31,000 - ₱35,000">₱31,000 - ₱35,000</option>
                                                    <option value="₱36,000 - ₱40,000">₱36,000 - ₱40,000</option>
                                                    <option value="₱41,000 - ₱45,000">₱41,000 - ₱45,000</option>
                                                    <option value="₱46,000 and above">₱46,000 and above</option>
                                                    <option value="Not Applicable">Not Applicable</option>
                                                </select>
                                            @elseif ($value->question_text == "What licensure exam did you take?")
                                                <select class="form-select @if ($arrayAnswers[$key]['answer'] == null) @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror @endif" wire:model="arrayAnswers.{{ $key }}.answer">
                                                    <option selected hidden>Please select one...</option>
                                                    <option value="Electronics Engineer Licensure Examination">Electronics Engineer Licensure Examination</option>
                                                    <option value="Licensure Examination for Teachers">Licensure Examination for Teachers</option>
                                                    <option value="Certified Public Accountant Board Exam">Certified Public Accountant Board Exam</option>
                                                    <option value="Professional Mechanical Engineer">Professional Mechanical Engineer</option>
                                                    <option value="N/A">Not Applicable</option>
                                                </select>
                                            @endif
                                            <span class="text-danger error-message">
                                                @error('arrayAnswers.' . $key . '.answer')
                                                <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    @elseif ($value->question_type == "radio")
                                        <div>
                                            <label class="form-label">{{ $value->question_text }} <span class="text-danger">*</span></label>
                                            <div class="my-0"></div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="{{ $value->question_id }}" type="radio" value="Yes" wire:model="arrayAnswers.{{ $key }}.answer">
                                                <label class="form-check-label">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="{{ $value->question_id }}" type="radio" value="No" wire:model="arrayAnswers.{{ $key }}.answer">
                                                <label class="form-check-label">No</label>
                                            </div>
                                        </div>
                                        <span class="text-danger error-message">
                                            @error('arrayAnswers.' . $key . '.answer')
                                            <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endif
                        @endforeach --}}
                        <div class="col-12 mt-0">
                            <div class="row">
                                @if ($currentPage == 1)
                                    <div class="col-6 text-start">
                                        <button class="btn btn-secondary px-3 fs-7" wire:click.prevent="previousPage()" disabled><i class="fa-solid fa-caret-left"></i> Back</button>
                                    </div>
                                @endif

                                @if ($currentPage <= $totalPage && $currentPage != 1)
                                    <div class="col-6 text-start">
                                        <button class="btn btn-secondary px-3 fs-7" wire:click.prevent="previousPage()"><i class="fa-solid fa-caret-left"></i> Back</button>
                                    </div>
                                @endif

                                @if ($currentPage < $totalPage && $currentPage != $totalPage)
                                    {{-- @if ($currently_unemployed == 'CURRENTLY_UNEMPLOYED')
                                        <div class="col-6 text-end">
                                            <button class="btn btn-success px-3 fs-7" wire:click.prevent="nextPage()">Submit <i class="fa-solid fa-caret-right"></i></button>
                                        </div>
                                    @else --}}
                                        <div class="col-6 text-end">
                                            <button class="btn btn-primary px-3 fs-7" wire:click.prevent="nextPage()">Next <i class="fa-solid fa-caret-right"></i></button>
                                        </div>
                                    {{-- @endif --}}
                                @endif

                                @if ($currentPage == $totalPage)
                                    <div class="col-6 text-end">
                                        <button class="btn btn-success px-3 fs-7" type="submit">Submit <i class="fa-solid fa-file-export"></i></button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endif
        @endforeach
    </form>
</div>

{{-- <div>
    <form wire:submit.prevent="saveAnswer">
        @foreach ($categories as $category)
            @if (($currentPage == $category->category_id) && ($currentPage == $category->category_id))

            <div class="row justify-content-center">
                <div class="col-12 form-box-title pb-2">
                    <div class="row g-0">
                        <div class="col-12 mt-1">
                            <div class="progress progress-style">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="{{ $progressBar }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $progressBar }}%">{{ $progressBar }}%</div>
                            </div>
                        </div>
                        <div class="col-12 text-center mt-3">
                            <h5>Page {{ $currentPage }} of {{ $totalPage }} - {{ $category->category_name }}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 form-box-content">
                    <div class="row">
                        @if ($currentPage == 1)
                            <div class="col-12 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="NO_BOARD_EXAM" wire:model="no_board_exam">
                                    <label class="form-check-label">
                                        My course doesn't have a Board Exam
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Are you a Board Exam Passer? <span class="text-danger">*</span></label>
                                    <div class="my-0"></div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="board_passer" type="radio" value="Yes" wire:model="board_passer" @if($no_board_exam == "NO_BOARD_EXAM")disabled @endif>
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="board_passer" type="radio" value="No" wire:model="board_passer" @if($no_board_exam == "NO_BOARD_EXAM")disabled @endif>
                                        <label class="form-check-label">No</label>
                                    </div>
                                </div>
                                <span class="text-danger error-message">
                                    @error('board_passer')
                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Is it related to the Program the you've graduated in PUP Taguig? <span class="text-danger">*</span></label>
                                    <div class="my-0"></div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="board_related" type="radio" value="Yes" wire:model="board_related" @if($no_board_exam == "NO_BOARD_EXAM")disabled @endif>
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="board_related" type="radio" value="No" wire:model="board_related" @if($no_board_exam == "NO_BOARD_EXAM")disabled @endif>
                                        <label class="form-check-label">No</label>
                                    </div>
                                </div>
                                <span class="text-danger error-message">
                                    @error('board_related')
                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">What licensure exam did you take? <span class="text-danger">*</span></label>
                                    <select class="form-select @error('board_exam') is-invalid @enderror" wire:model="board_exam" @if($no_board_exam == "NO_BOARD_EXAM")disabled @endif>
                                        <option selected hidden>Please select one...</option>
                                        <option value="Electronics Engineer Licensure Examination">Electronics Engineer Licensure Examination</option>
                                        <option value="Licensure Examination for Teachers">Licensure Examination for Teachers</option>
                                        <option value="Certified Public Accountant Board Exam">Certified Public Accountant Board Exam</option>
                                        <option value="Professional Mechanical Engineer">Professional Mechanical Engineer</option>
                                        <option value="N/A">Not Applicable</option>
                                    </select>
                                </div>
                                <span class="text-danger error-message">
                                    @error('board_exam')
                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">When did you take it? <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control @error('board_date') is-invalid @enderror" wire:model="board_date" @if($no_board_exam == "NO_BOARD_EXAM")disabled @endif>
                                    <span class="text-danger error-message">
                                        @error('board_date')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Did you passed the Civil Service Examination? <span class="text-danger">*</span></label>
                                    <div class="my-0"></div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="civil_passer" type="radio" value="Yes" wire:model="civil_passer">
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="civil_passer" type="radio" value="No" wire:model="civil_passer" >
                                        <label class="form-check-label">No</label>
                                    </div>
                                </div>
                                <span class="text-danger error-message">
                                    @error('civil_passer')
                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        @elseif ($currentPage == 2)
                            <div class="col-12 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="CURRENTLY_UNEMPLOYED" wire:model="currently_unemployed">
                                    <label class="form-check-label">
                                        Currently Unemployed
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Job Position <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('cc_position') is-invalid @enderror" wire:model="cc_position" @if($currently_unemployed == "CURRENTLY_UNEMPLOYED")disabled @endif>
                                    <span class="text-danger error-message">
                                        @error('cc_position')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('cc_company') is-invalid @enderror" wire:model="cc_company" @if($currently_unemployed == "CURRENTLY_UNEMPLOYED")disabled @endif>
                                    <span class="text-danger error-message">
                                        @error('cc_company')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Employment Start Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control @error('cc_date') is-invalid @enderror" wire:model="cc_date" @if($currently_unemployed == "CURRENTLY_UNEMPLOYED")disabled @endif>
                                    <span class="text-danger error-message">
                                        @error('cc_date')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Nature of Work / Job Description <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('cc_description') is-invalid @enderror" wire:model="cc_description" @if($currently_unemployed == "CURRENTLY_UNEMPLOYED")disabled @endif>
                                    <span class="text-danger error-message">
                                        @error('cc_description')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Type of Employment <span class="text-danger">*</span></label>
                                    <select class="form-select @error('cc_type') is-invalid @enderror" wire:model="cc_type" @if($currently_unemployed == "CURRENTLY_UNEMPLOYED")disabled @endif>
                                        <option selected hidden>Please select one...</option>
                                        <option value="Probitionary">Probitionary</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Contractual Basis">Contractual Basis</option>
                                        <option value="Others">Others</option>
                                        <option value="Not Applicable">Not Applicable</option>
                                    </select>
                                    <span class="text-danger error-message">
                                        @error('cc_type')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Type of Employment <span class="text-danger">*</span></label>
                                    <select class="form-select @error('cc_income') is-invalid @enderror" wire:model="cc_income" @if($currently_unemployed == "CURRENTLY_UNEMPLOYED")disabled @endif>
                                        <option selected hidden>Please select one...</option>
                                        <option value="₱10,000 - ₱15,000">₱10,000 - ₱15,000</option>
                                        <option value="₱16,000 - ₱20,000">₱16,000 - ₱20,000</option>
                                        <option value="₱21,000 - ₱25,000">₱21,000 - ₱25,000</option>
                                        <option value="₱26,000 - ₱30,000">₱26,000 - ₱30,000</option>
                                        <option value="₱31,000 - ₱35,000">₱31,000 - ₱35,000</option>
                                        <option value="₱36,000 - ₱40,000">₱36,000 - ₱40,000</option>
                                        <option value="₱41,000 - ₱45,000">₱41,000 - ₱45,000</option>
                                        <option value="₱46,000 and above">₱46,000 and above</option>
                                        <option value="Not Applicable">Not Applicable</option>
                                    </select>
                                    <span class="text-danger error-message">
                                        @error('cc_income')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Company Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('cc_email') is-invalid @enderror" wire:model="cc_email" @if($currently_unemployed == "CURRENTLY_UNEMPLOYED")disabled @endif>
                                    <span class="text-danger error-message">
                                        @error('cc_email')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Company Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('cc_number') is-invalid @enderror" wire:model="cc_number" @if($currently_unemployed == "CURRENTLY_UNEMPLOYED")disabled @endif>
                                    <span class="text-danger error-message">
                                        @error('cc_number')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div>
                                    <label class="form-label">Is your current Job related to the Program you've graduated in PUP Taguig? <span class="text-danger">*</span></label>
                                    <div class="my-0"></div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="cc_related" type="radio" value="Yes" wire:model="cc_related" @if($currently_unemployed == "CURRENTLY_UNEMPLOYED")disabled @endif>
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="cc_related" type="radio" value="No" wire:model="cc_related" @if($currently_unemployed == "CURRENTLY_UNEMPLOYED")disabled @endif>
                                        <label class="form-check-label">No</label>
                                    </div>
                                </div>
                                <span class="text-danger error-message">
                                    @error('cc_related')
                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        @elseif ($currentPage == 3)
                            <div class="col-12 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="SAME_AS_CURRENT" wire:model="same_as_current">
                                    <label class="form-check-label">
                                        Same as Current Job / Career Details
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Job Position <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('ff_position') is-invalid @enderror" wire:model="ff_position">
                                    <span class="text-danger error-message">
                                        @error('ff_position')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('ff_company') is-invalid @enderror" wire:model="ff_company">
                                    <span class="text-danger error-message">
                                        @error('ff_company')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Employment Start Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control @error('ff_date') is-invalid @enderror" wire:model="ff_date">
                                    <span class="text-danger error-message">
                                        @error('ff_date')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Nature of Work / Job Description <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('ff_description') is-invalid @enderror" wire:model="ff_description">
                                    <span class="text-danger error-message">
                                        @error('ff_description')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Company Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('ff_email') is-invalid @enderror" wire:model="ff_email">
                                    <span class="text-danger error-message">
                                        @error('ff_email')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div>
                                    <label class="form-label">Company Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('ff_number') is-invalid @enderror" wire:model="ff_number">
                                    <span class="text-danger error-message">
                                        @error('ff_number')
                                        <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        @endif
                        <div class="col-12 mt-0">
                            <div class="row">
                                @if ($currentPage == 1)
                                    <div class="col-6 text-start">
                                        <a href="#go-to-top" type="button" class="btn btn-secondary px-3 fs-7" wire:click="previousPage()" disabled><i class="fa-solid fa-caret-left"></i> Back</a>
                                    </div>
                                @endif

                                @if ($currentPage <= $totalPage && $currentPage != 1)
                                    <div class="col-6 text-start">
                                        <a href="#go-to-top" type="button" class="btn btn-secondary px-3 fs-7" wire:click="previousPage()"><i class="fa-solid fa-caret-left"></i> Back</a>
                                    </div>
                                @endif

                                @if ($currentPage < $totalPage && $currentPage != $totalPage)
                                    <div class="col-6 text-end">
                                        <a href="#go-to-top" type="button" class="btn btn-primary px-3 fs-7" wire:click="nextPage()">Next <i class="fa-solid fa-caret-right"></i></a>
                                    </div>
                                @endif

                                @if ($currentPage == $totalPage)
                                    <div class="col-6 text-end">
                                        <button class="btn btn-success px-3 fs-7" type="submit">Submit <i class="fa-solid fa-file-export"></i></button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endif
        @endforeach
    </form>
</div> --}}
