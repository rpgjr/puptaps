<div>
    <form wire:submit.prevent="saveAnswer">
        @foreach ($categories as $category)
            {{-- Page 1 --}}
            @if (($currentPage == 1) && ($currentPage == $category->category_id))
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
                    <livewire:forms.data-privacy />

                    @foreach ($questions as $key => $value)
                    @if (($value->category_id) == ($category->category_id))
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Agree" wire:model="arrayAnswers.{{ $key }}.answer" />
                            <label class="form-check-label">Agree</label>
                        </div>
                    <span class="text-danger error-message">@error('arrayAnswers.' . $key . '.answer'){{ $message }}@enderror</span>
                    @endif
                    @endforeach
                </div>
            </div>

            {{-- Page 2 --}}
            @elseif (($currentPage == 2) && ($currentPage == $category->category_id))
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
                    <div class="alert alert-warning text-center" role="alert">
                        If you want to update your personal information, you can go to the <a href="{{ route("userProfile.index") }}" class="text-dark text-decoration-none"><b>Profiles tab.</b></a>
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
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" value="{{ $user->birthday }}">
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
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Provincial Address</label>
                                    <input type="text" class="form-control" value="{{ $user->provincial_address }}">
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
                        @foreach ($questions as $key => $value)
                        @if (($value->category_id) == ($category->category_id))
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <div>
                                        <label class="form-label">{{ $value->question_text }}</label>
                                        <input type="text" class="form-control @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror" wire:model="arrayAnswers.{{ $key }}.answer" placeholder="{{ $value->question_placeholder }}">
                                        <span class="text-danger error-message">@error('arrayAnswers.' . $key . '.answer'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Page 3 --}}
            @elseif (($currentPage != 1) && ($currentPage != 2) && ($currentPage != 5) && ($currentPage == $category->category_id))
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
                        @foreach ($questions as $key => $value)
                        @if (($value->category_id) == ($category->category_id))
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <div>
                                        <label class="form-label">{{ $value->question_text }}</label>
                                        <input type="text" class="form-control @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror" wire:model="arrayAnswers.{{ $key }}.answer" placeholder="{{ $value->question_placeholder }}">
                                        <span class="text-danger error-message">@error('arrayAnswers.' . $key . '.answer'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @break

            {{-- Page 5 --}}
            @elseif (($currentPage == 5) && ($currentPage == $category->category_id))
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
                    <div class="row justify-content-center">
                        <div class="col-11 my-3">
                            <p>
                                This is to signify that I am willing to be subjected to company calls for placement or employment purposes. This shall also authorize the Polytechnic University of The Philippines – Career Development and Placement Office (PUP-CDPO) to include my name and contact details in the directory of graduates.
                            </p>
                        </div>
                        @foreach ($questions as $key => $value)
                        @if (($value->category_id) == ($category->category_id))
                            <div class="col-12 mb-3">
                                <div class="form-group">
                                    <div>
                                        <label class="form-label">{{ $value->question_text }}</label>
                                        <input type="{{ $value->question_type }}" class="form-control @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror" wire:model="arrayAnswers.{{ $key }}.answer" placeholder="{{ $value->question_placeholder }}">
                                        <span class="text-danger error-message">@error('arrayAnswers.' . $key . '.answer'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        @endforeach

        {{-- Buttons --}}
        <div class="row form-box-buttons d-flex justify-content-between">
            @if ($currentPage == 1)
                <div class="col-6"></div>
            @endif

            @if ($currentPage <= $totalPage && $currentPage != 1)
                <div class="col-6 text-start">
                    <a href="#go-to-top" class="btn btn-secondary px-4" type="button" wire:click="previousPage()">Back</a>
                </div>
            @endif

            @if ($currentPage < $totalPage && $currentPage != $totalPage)
                <div class="col-6 text-end">
                    <a href="#go-to-top" class="btn btn-primary px-4" type="button" wire:click="nextPage()">Next</a>
                </div>
            @endif

            @if ($currentPage == $totalPage)
                <div class="col-6 text-end">
                    <button class="btn btn-success px-4" type="submit">Submit</button>
                </div>
            @endif
        </div>
    </form>
</div>
