<?php

namespace App\Http\Livewire\Forms;

use App\Models\FormPDS as PDS;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FormPds extends Component
{
    public $fathersName;
    public $fathersNumber;
    public $mothersName;
    public $mothersNumber;
    public $office;
    public $position;
    public $officeDates;
    public $seminar1;
    public $seminar1Date;
    public $seminar2;
    public $seminar2Date;
    public $seminar3;
    public $seminar3Date;

    public $dataPrivacy ;
    public $dateSigned;
    public $signature;


    public $totalPage = 5;
    public $currentPage = 1;

    public function mount() {
        $this->currentPage = 1;
    }

    public function render()
    {
        $users = DB::table('tbl_alumni')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
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
                'dataPrivacy' => 'required',
            ]);
        }
        elseif($this->currentPage == 2) {
            $this->validate([
                'fathersName' => 'required',
                'mothersName' => 'required',
            ]);
        }
        elseif($this->currentPage == 3) {
            $this->validate([
                'office' => 'required',
                'position' => 'required',
                'officeDates' => 'required',
            ]);
        }
        elseif($this->currentPage == 4) {
            $this->validate([
                'seminar1' => 'required',
                'seminar1Date' => 'required',
            ]);
        }
        elseif($this->currentPage == 5) {
            $this->validate([
                'dateSigned' => 'required',
                'signature' => 'required',
            ]);
        }

    }

    public function saveAnswer() {

        $this->validateData();

        $values = array(
            'alumni_ID' => Auth::user()->alumni_ID,
            'fathersName' => $this->fathersName,
            'fathersNumber' => $this->fathersNumber,
            'mothersName' => $this->mothersName,
            'mothersNumber' => $this->mothersNumber,
            'office' => $this->office,
            'position' => $this->position,
            'officeDates' => $this->officeDates,
            'seminar1' => $this->seminar1,
            'seminar1Date' => $this->seminar1Date,
            'seminar2' => $this->seminar2,
            'seminar2Date' => $this->seminar2Date,
            'seminar3' => $this->seminar3,
            'seminar3Date' => $this->seminar3Date,

            'dataPrivacy' => $this->dataPrivacy,
            'dateSigned' => $this->dateSigned,
            'signature' => $this->signature,
        );

        PDS::insert($values);
        return redirect(route('userForm.index'));
    }
}
