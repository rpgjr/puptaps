<div>
    <form wire:submit.prevent="updateAnswer">
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
                        @if ($currentPage == 2)
                            <div class="col-12 mb-3">
                                <button class="btn btn-light fs-7" type="button" wire:click="currentlyUnemployed()">Currently Unemployed</button>
                            </div>
                        @endif
                        @if ($currentPage == 3)
                            <div class="col-12 mb-3">
                                <button class="btn btn-light fs-7" type="button" wire:click="sameCurrent()">Same as Current Job</button>
                            </div>
                        @endif
                        @foreach ($questions as $key => $value)
                        @if (($value->category_id) == ($category->category_id))
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div class="form-group">
                                    @if (($value->question_type == "text") || ($value->question_type == "date"))
                                    @if ($value->category_id == 3)
                                        <div>
                                            <label class="form-label">{{ $value->question_text}} <span class="text-danger">*</span></label>
                                            <span class="text-danger error-message">
                                                @error('arrayAnswers.' . $key . '.answer')
                                                <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                {{ $message }}
                                                @enderror
                                            </span>
                                            <input type="{{ $value->question_type }}" class="form-control @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror" wire:model="arrayAnswers.{{ $key }}.answer" value="{{ $arrayAnswers[$key]['answer'] }}">
                                        </div>
                                    @else
                                        <div>
                                            <label class="form-label">{{ $value->question_text}} <span class="text-danger">*</span></label>
                                            <span class="text-danger error-message">
                                                @error('arrayAnswers.' . $key . '.answer')
                                                <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                {{ $message }}
                                                @enderror
                                            </span>
                                            <input type="{{ $value->question_type }}" class="form-control @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror" wire:model="arrayAnswers.{{ $key }}.answer">
                                        </div>
                                    @endif
                                    @elseif ($value->question_type == "select")
                                        <div>
                                            <label class="form-label">{{ $value->question_text }} <span class="text-danger">*</span></label>
                                            <span class="text-danger error-message">
                                                @error('arrayAnswers.' . $key . '.answer')
                                                <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                {{ $message }}
                                                @enderror
                                            </span>
                                            @if ($value->question_text == "Type of Employment")
                                                <select class="form-select @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror" wire:model="arrayAnswers.{{ $key }}.answer">
                                                    <option selected hidden>Please select one...</option>
                                                    <option value="Probitionary">Probitionary</option>
                                                    <option value="Regular">Regular</option>
                                                    <option value="Contractual Basis">Contractual Basis</option>
                                                    <option value="Others">Others</option>
                                                    <option value="Not Applicable">Not Applicable</option>
                                                </select>
                                            @elseif ($value->question_text == "Monthly Income")
                                                <select class="form-select @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror" wire:model="arrayAnswers.{{ $key }}.answer">
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
                                                <select class="form-select @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror" wire:model="arrayAnswers.{{ $key }}.answer">
                                                    <option selected hidden>Please select one...</option>
                                                    <option value="Electronics Engineer Licensure Examination">Electronics Engineer Licensure Examination</option>
                                                    <option value="Licensure Examination for Teachers">Licensure Examination for Teachers</option>
                                                    <option value="Certified Public Accountant Board Exam">Certified Public Accountant Board Exam</option>
                                                    <option value="Professional Mechanical Engineer">Professional Mechanical Engineer</option>
                                                    <option value="Not Applicable">Not Applicable</option>
                                                </select>
                                            @endif
                                        </div>
                                    @elseif ($value->question_type == "radio")
                                        <div>
                                            <label class="form-label">{{ $value->question_text }} <span class="text-danger">*</span></label>
                                            <span class="text-danger error-message">
                                                @error('arrayAnswers.' . $key . '.answer')
                                                <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                {{ $message }}
                                                @enderror
                                            </span>
                                            <div class="my-0"></div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="Yes" wire:model="arrayAnswers.{{ $key }}.answer">
                                                <label class="form-check-label">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="No" wire:model="arrayAnswers.{{ $key }}.answer">
                                                <label class="form-check-label">No</label>
                                            </div>
                                            @if ($value->category_id == 1)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" value="N/A" wire:model="arrayAnswers.{{ $key }}.answer">
                                                    <label class="form-check-label">N/A</label>
                                                </div>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif
                        @endforeach
                        <div class="col-12 mt-0">
                            <div class="row">
                                @if ($currentPage == 1)
                                    <div class="col-6 text-start">
                                        <button href="#go-to-top" class="btn btn-secondary px-3 fs-7" type="button" wire:click="previousPage()" disabled><i class="fa-solid fa-caret-left"></i> Back</button>
                                    </div>
                                @endif

                                @if ($currentPage <= $totalPage && $currentPage != 1)
                                    <div class="col-6 text-start">
                                        <a href="#go-to-top" class="btn btn-secondary px-3 fs-7" type="button" wire:click="previousPage()"><i class="fa-solid fa-caret-left"></i> Back</a>
                                    </div>
                                @endif

                                @if ($currentPage < $totalPage && $currentPage != $totalPage)
                                    <div class="col-6 text-end">
                                        <a href="#go-to-top" class="btn btn-primary px-3 fs-7" type="button" wire:click="nextPage()">Next <i class="fa-solid fa-caret-right"></i></a>
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
</div>
