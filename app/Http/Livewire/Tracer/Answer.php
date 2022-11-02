<?php

namespace App\Http\Livewire\Tracer;

use App\Models\Tracer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Answer extends Component
{
    public $current_employment;
    public $current_job_description;
    public $current_job_position;
    public $current_employment_status;
    public $current_monthly_income;
    public $current_company_email;
    public $current_company_number;
    public $relation_to_course;

    public $first_employment;
    public $first_job_description;
    public $first_job_position;
    public $first_company_email;
    public $first_company_number;

    public $currentPage = 1;
    public $totalPage = 2;

    public function mount() {
        $this->currentPage = 1;
    }

    public function render()
    {
        return view('livewire.tracer.answer');
    }

    public function previousPage() {
        $this->resetErrorBag();
        $this->currentPage--;
        if($this->currentPage < 1) {
            $this->currentPage = 1;
        }
    }

    public function nextPage() {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentPage++;
        if($this->currentPage > $this->totalPage) {
            $this->currentPage = $this->totalPage;
        }
    }


    public function validateData() {
        if($this->currentPage == 1) {
            $this->validate([
                'current_employment'            =>  'required',
                'current_job_description'       =>  'required',
                'current_job_position'          =>  'required',
                'current_employment_status'     =>  'required',
                'current_monthly_income'        =>  'required',
                'current_company_email'         =>  'required',
                'current_company_number'        =>  'required',
                'relation_to_course'            =>  'required',
            ]);
        }

        elseif($this->currentPage == 2) {
            $this->validate([
                'first_employment'             =>  'required',
                'first_job_description'         =>  'required',
                'first_job_position'            =>  'required',
                'first_company_email'           =>  'required',
                'first_company_number'          =>  'required',
            ]);
        }
    }

    public function saveAnswer() {
        $this->validateData();

        $values = array(
            'alumni_id' => Auth::user()->alumni_id,

            'current_employment'            =>  $this->current_employment,
            'current_job_description'       =>  $this->current_job_description,
            'current_job_position'          =>  $this->current_job_position,
            'current_employment_status'     =>  $this->current_employment_status,
            'current_monthly_income'        =>  $this->current_monthly_income,
            'current_company_email'         =>  $this->current_company_email,
            'current_company_number'        =>  $this->current_company_number,
            'relation_to_course'            =>  $this->relation_to_course,

            'first_employment'             =>  $this->first_employment,
            'first_job_description'         =>  $this->first_job_description,
            'first_job_position'            =>  $this->first_job_position,
            'first_company_email'           =>  $this->first_company_email,
            'first_company_number'          =>  $this->first_company_number,
        );

        Tracer::insert($values);
        return redirect(route('userTracer.getTracerIndex'));
    }
}
