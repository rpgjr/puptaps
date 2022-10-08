<?php

namespace App\Http\Livewire\Forms;

use App\Models\Alumni;
use App\Models\FormPDS as PDS;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormPds extends Component
{
    public $fathers_name;
    public $fathers_number;
    public $mothers_name;
    public $mothers_number;
    public $office;
    public $position;
    public $office_dates;
    public $seminar_1;
    public $seminar_1_Date;
    public $seminar_2;
    public $seminar_2_Date;
    public $seminar_3;
    public $seminar_3_Date;

    public $data_privacy ;
    public $date_signed;
    public $signature;


    public $totalPage = 5;
    public $currentPage = 1;

    public function mount() {
        $this->currentPage = 1;
    }

    public function render()
    {
        $users = Alumni::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        view()->share('users', $users);
        return view('livewire.forms.form-pds');
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
                'data_privacy' => 'required',
            ]);
        }
        elseif($this->currentPage == 2) {
            $this->validate([
                'fathers_name' => 'required',
                'mothers_name' => 'required',
            ]);
        }
        elseif($this->currentPage == 3) {
            $this->validate([
                'office' => 'required',
                'position' => 'required',
                'office_dates' => 'required',
            ]);
        }
        elseif($this->currentPage == 4) {
            $this->validate([
                'seminar_1' => 'required',
                'seminar_1_Date' => 'required',
            ]);
        }
        elseif($this->currentPage == 5) {
            $this->validate([
                'date_signed' => 'required',
                'signature' => 'required',
            ]);
        }

    }

    public function saveAnswer() {

        $this->validateData();

        $values = array(
            'alumni_ID' => Auth::user()->alumni_ID,
            'fathers_name' => $this->fathers_name,
            'fathers_number' => $this->fathers_number,
            'mothers_name' => $this->mothers_name,
            'mothers_number' => $this->mothers_number,
            'office' => $this->office,
            'position' => $this->position,
            'office_dates' => $this->office_dates,
            'seminar_1' => $this->seminar_1,
            'seminar_1_Date' => $this->seminar_1_Date,
            'seminar_2' => $this->seminar_2,
            'seminar_2_Date' => $this->seminar_2_Date,
            'seminar_3' => $this->seminar_3,
            'seminar_3_Date' => $this->seminar_3_Date,

            'data_privacy' => $this->data_privacy,
            'date_signed' => $this->date_signed,
            'signature' => $this->signature,
        );

        PDS::insert($values);
        return redirect(route('userForm.index'));
    }
}
