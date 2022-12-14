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
                <fieldset disabled>
                    <div class="alert alert-warning text-center" role="alert">
                        If you want to update your personal information, you can go to the <a href="{{ route("userProfile.index") }}" class="text-dark text-decoration-none"><b>Profiles tab.</b></a>
                    </div>
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
                                <label class="form-label">sex</label>
                                <select class="form-select">
                                    <option>{{ $user->sex }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Age</label>
                                <input type="text" class="form-control" value="{{ $user->age }}">
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
                                    <select class="form-select @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror" wire:model="arrayAnswers.{{ $key }}.answer">
                                        <option selected hidden value="">Please select one..</option>
                                        <option value="Less than 1">Less than 1</option>
                                        <option value="2 - 4">2 - 4</option>
                                        <option value="5 - 7">5 - 7</option>
                                        <option value="8 or more">8 or more</option>
                                    </select>
                                    <span class="text-danger error-message">@error('arrayAnswers.' . $key . '.answer'){{ $message }}@enderror</span>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Pages 3 to 14 --}}
        @elseif (($currentPage != 1) && ($currentPage != 2) && ($currentPage != 15) && ($currentPage == $category->category_id))
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
                    <div class="card text-center mb-3">
                        <div class="card-body d-block d-sm-block d-md-block d-lg-flex d-xl-flex justify-content-evenly align-items-center">
                            <p class="my-0 py-0 me-2">Scale: </p>
                            <p class="my-0 py-0 mx-3 fw-bold">1 - Very Satisfactory</p>
                            <p class="my-0 py-0 mx-3 fw-bold">2 - Satisfactory</p>
                            <p class="my-0 py-0 mx-3 fw-bold">3 - Unsatisfactory</p>
                            <p class="my-0 py-0 mx-3 fw-bold">4 - Very Unsatisfactory</p>
                        </div>
                    </div>
                    <table class="table">
                        <thead class="thead-sticky table-dark">
                            <tr>
                                <th scope="col" style="width: 550px">Questions</th>
                                <th scope="col" style="width: 50px">1</th>
                                <th scope="col" style="width: 50px">2</th>
                                <th scope="col" style="width: 50px">3</th>
                                <th scope="col" style="width: 50px">4</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $key => $value)
                            @if (($value->category_id) == ($category->category_id))
                            <tr>
                                <td>
                                    {{ $value->question_text }}
                                    <span class="text-danger error-message">@error('arrayAnswers.' . $key . '.answer'){{ $message }}@enderror</span>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="1" wire:model="arrayAnswers.{{ $key }}.answer">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="2" wire:model="arrayAnswers.{{ $key }}.answer">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="3" wire:model="arrayAnswers.{{ $key }}.answer">
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="4" wire:model="arrayAnswers.{{ $key }}.answer">
                                    </div>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Page 15 --}}
        @elseif (($currentPage == 15) && ($currentPage == $category->category_id))
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
                    @foreach ($questions as $key => $value)
                    @if (($value->category_id) == ($category->category_id))
                        <div class="col-md-12 mb-3">
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
