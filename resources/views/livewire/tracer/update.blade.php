<div>
    <form wire:submit.prevent="saveAnswer">
        <div class="row justify-content-center">
            <div class="col-12 form-box-content mt-0 pt-4 pb-3">
                <div class="row g-0 align-items-center mb-3">
                    <div class="my-1 col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 text-center text-md-start">
                        <h5 class="mb-0">Update for Current Job / Career Details</h5>
                    </div>
                    <div class="my-1 col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 text-center text-md-end">
                        <button class="btn btn-success px-3 fs-7" type="submit">Submit <i class="fa-solid fa-file-export ms-1"></i></button>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Job Position <span class="text-danger">*</span></label>
                            <span class="text-danger error-message">
                                @error('job_position')
                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                    {{ $message }}
                                @enderror
                            </span>
                            <input type="text" class="form-control @error('job_position') is-invalid @enderror" wire:model.lazy="job_position">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Company Name</label>
                            <span class="text-danger error-message">
                                @error('company_name')
                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                    {{ $message }}
                                @enderror
                            </span>
                            <input type="text" class="form-control @error('company_name') is-invalid @enderror" wire:model.lazy="company_name">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Employment Start Date</label>
                            <span class="text-danger error-message">
                                @error('start_date')
                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                    {{ $message }}
                                @enderror
                            </span>
                            <input type="date" class="form-control @error('start_date') is-invalid @enderror" wire:model.lazy="start_date">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Nature of Work / Job Description</label>
                            <span class="text-danger error-message">
                                @error('job_description')
                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                    {{ $message }}
                                @enderror
                            </span>
                            <input type="text" class="form-control @error('job_description') is-invalid @enderror" wire:model.lazy="job_description">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Type of Employment</label>
                            <span class="text-danger error-message">
                                @error('employment_type')
                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                    {{ $message }}
                                @enderror
                            </span>
                            <select class="form-select @error('employment_type') is-invalid @enderror" wire:model.lazy="employment_type">
                                <option selected hidden>Please select one...</option>
                                <option value="Probitionary">Probitionary</option>
                                <option value="Regular">Regular</option>
                                <option value="Contractual Basis">Contractual Basis</option>
                                <option value="Others">Others</option>
                                <option value="Not Applicable">Not Applicable</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Monthly Income</label>
                            <span class="text-danger error-message">
                                @error('income')
                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                    {{ $message }}
                                @enderror
                            </span>
                            <select class="form-select @error('income') is-invalid @enderror" wire:model.lazy="income">
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
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Company Email</label>
                            <span class="text-danger error-message">
                                @error('company_email')
                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                    {{ $message }}
                                @enderror
                            </span>
                            <input type="text" class="form-control @error('company_email') is-invalid @enderror" wire:model.lazy="company_email">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Company Number</label>
                            <span class="text-danger error-message">
                                @error('company_number')
                                    <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                    {{ $message }}
                                @enderror
                            </span>
                            <input type="text" class="form-control @error('company_number') is-invalid @enderror" wire:model.lazy="company_number">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Is your current Job related to your Course?</label>
                            <span class="text-danger error-message">
                                @error('related_to_course')
                                <i class="fa-solid fa-circle-exclamation ml-5"></i>
                                {{ $message }}
                                @enderror
                            </span>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Yes" wire:model.lazy="related_to_course">
                                <label class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="No" wire:model.lazy="related_to_course">
                                <label class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
