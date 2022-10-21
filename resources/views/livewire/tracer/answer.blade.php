<div>
    <form wire:submit.prevent="saveAnswer">

        @if ($currentPage == 1)
        <div class="my-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <span class="align-middle fs-5">Page 1/2 - Current Job / Career Details</span>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Employment Start Date</label>
                                <input type="date" class="form-control" wire:model="current_employment">
                                <span class="text-danger">@error('current_employment'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Nature of Work / Job Description</label>
                                <input type="text" class="form-control" wire:model="current_job_description">
                                <span class="text-danger">@error('current_job_description'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Job Position</label>
                                <input type="text" class="form-control" wire:model="current_job_position">
                                <span class="text-danger">@error('current_job_position'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Type of Employment</label>
                                <select class="form-select" wire:model="current_employment_status">
                                    <option hidden selected>Please Select...</option>
                                    <option value="Probitionary">Probitionary</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Contractual Basis">Contractual Basis</option>
                                    <option value="Others">Others</option>
                                    <option value="Not Applicable">Not Applicable</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Monthly Income</label>
                                <select class="form-select" wire:model="current_monthly_income">
                                    <option hidden selected>Please Select...</option>
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
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Company Email</label>
                                <input type="text" class="form-control" wire:model="current_company_email">
                                <span class="text-danger">@error('current_company_email'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Company Number</label>
                                <input type="text" class="form-control" wire:model="current_company_number">
                                <span class="text-danger">@error('current_company_number'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Is your Current Job related to your Course</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" wire:model="relation_to_course" value="Yes">
                                    <label class="form-check-label">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" wire:model="relation_to_course" value="No">
                                    <label class="form-check-label">
                                        No
                                    </label>
                                </div>
                                <span class="text-danger">@error('relation_to_course'){{ $message }}@enderror</span>
                            </div>
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
                    <span class="align-middle fs-5">Page 2/2 - First Job / Career Details</span>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Employment Start Date</label>
                                <input type="date" class="form-control" wire:model="first_employment">
                                <span class="text-danger">@error('first_employment'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Nature of Work / Job Description</label>
                                <input type="text" class="form-control" wire:model="first_job_description">
                                <span class="text-danger">@error('first_job_description'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Job Position</label>
                                <input type="text" class="form-control" wire:model="first_job_position">
                                <span class="text-danger">@error('first_job_position'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Company Email</label>
                                <input type="text" class="form-control" wire:model="first_company_email">
                                <span class="text-danger">@error('first_company_email'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Company Number</label>
                                <input type="text" class="form-control" wire:model="first_company_number">
                                <span class="text-danger">@error('first_company_number'){{ $message }}@enderror</span>
                            </div>
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

            @if ($currentPage == 2)
                <button class="btn btn-secondary" type="button" wire:click="previousPage()" style="width: 15%;">Back</button>
            @endif

            @if ($currentPage == 1)
                <button class="btn btn-primary" type="button" wire:click="nextPage()" style="width: 15%;">Next</button>
            @endif

            @if ($currentPage == 2)
                <button class="btn btn-success" type="submit" style="width: 15%;">Submit</button>
            @endif

        </div>
    </form>
</div>
