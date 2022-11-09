<div>
    <form wire:submit.prevent="saveAnswer">

        @foreach ($categories as $category)
            @if ($currentPage == $category->category_id)
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
                            @foreach ($questions as $key => $value)
                            @if (($value->category_id) == ($category->category_id))
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        @if (($value->question_type == "text") || ($value->question_type == "date"))
                                            <div>
                                                <label class="form-label">{{ $value->question_text }}</label>
                                                <span class="text-danger">
                                                    @error('arrayAnswers.' . $key . '.answer')
                                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                    {{ $message }}
                                                    @enderror
                                                </span>
                                                <input type="{{ $value->question_type }}" class="form-control" wire:model="arrayAnswers.{{ $key }}.answer">
                                            </div>
                                        @elseif ($value->question_type == "select")
                                            <div>
                                                <label class="form-label">{{ $value->question_text }}</label>
                                                <span class="text-danger">
                                                    @error('arrayAnswers.' . $key . '.answer')
                                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                                    {{ $message }}
                                                    @enderror
                                                </span>
                                                @if ($value->question_text == "Type of Employment")
                                                    <select class="form-select" wire:model="arrayAnswers.{{ $key }}.answer">
                                                        <option selected hidden>Please select one...</option>
                                                        <option value="Probitionary">Probitionary</option>
                                                        <option value="Regular">Regular</option>
                                                        <option value="Contractual Basis">Contractual Basis</option>
                                                        <option value="Others">Others</option>
                                                        <option value="Not Applicable">Not Applicable</option>
                                                    </select>
                                                @elseif ($value->question_text == "Monthly Income")
                                                    <select class="form-select" wire:model="arrayAnswers.{{ $key }}.answer">
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
                                                <span class="text-danger">
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
