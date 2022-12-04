<div>
    <form wire:submit.prevent="saveAnswer">
        @foreach ($categories as $category)
            @if (($currentPage == $category->category_id) && ($currentPage == $category->category_id))

            <div class="row justify-content-center">

                <div class="col-12 form-box-title pb-2">
                    <div class="row g-0">
                        <div class="col-12 text-center">
                            <h5>Current Job / Career Details</h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 form-box-content">
                    <div class="row">
                        @foreach ($questions as $key => $value)
                        @if (($value->category_id) == ($category->category_id))
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div class="form-group">
                                    @if (($value->question_type == "text") || ($value->question_type == "date"))
                                        <div>
                                            <label class="form-label">{{ $value->question_text }}</label>
                                            <span class="text-danger error-message">
                                                @error('arrayAnswers.' . $key . '.answer')
                                                <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                {{ $message }}
                                                @enderror
                                            </span>
                                            <input type="{{ $value->question_type }}" class="form-control @error('arrayAnswers.' . $key . '.answer') is-invalid @enderror" wire:model="arrayAnswers.{{ $key }}.answer">
                                        </div>
                                    @elseif ($value->question_type == "select")
                                        <div>
                                            <label class="form-label">{{ $value->question_text }}</label>
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
                                            @endif
                                        </div>
                                    @elseif ($value->question_type == "radio")
                                        <div>
                                            <label class="form-label">{{ $value->question_text }}</label>
                                            <span class="text-danger error-message">
                                                @error('arrayAnswers.' . $key . '.answer')
                                                <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                {{ $message }}
                                                @enderror
                                            </span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Yes" wire:model="arrayAnswers.{{ $key }}.answer">
                                                <label class="form-check-label">Yes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="No" wire:model="arrayAnswers.{{ $key }}.answer">
                                                <label class="form-check-label">No</label>
                                            </div>
                                        </div>
                                    @endif
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
