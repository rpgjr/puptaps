<?php

namespace App\Http\Livewire\Forms;

use App\Models\FormSAS as ModelsFormSAS;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FormSas extends Component
{
    //
    public $sec1_q1;
    public $sec1_q2;
    public $sec1_q3;
    public $sec1_q4;
    public $sec1_q5;
    public $sec1_q6;
    public $sec1_q7;
    public $sec1_q8;
    public $sec1_q9;
    public $sec1_q10;
    public $sec1_q11;
    public $sec1_q12;
    public $sec1_q13;
    public $sec1_q14;
    public $sec1_q15;
    public $sec1_q16;
    public $sec1_q17;
    public $sec1_q18;
    public $sec1_q19;
    public $sec1_q20;
    public $sec1_q21;
    public $sec1_q22;

    //
    public $sec2_q1;
    public $sec2_q2;
    public $sec2_q3;
    public $sec2_q4;

    public $sec3_q1;
    public $sec3_q2;
    public $sec3_q3;
    public $sec3_q4;
    public $sec3_q5;
    public $sec3_q6;

    public $sec4_q1;
    public $sec4_q2;
    public $sec4_q3;
    public $sec4_q4;

    public $sec5_q1;
    public $sec5_q2;
    public $sec5_q3;
    public $sec5_q4;
    public $sec5_q5;
    public $sec5_q6;

    public $sec6_q1;
    public $sec6_q2;
    public $sec6_q3;
    public $sec6_q4;
    public $sec6_q5;

    //
    public $sec7_q1;
    public $sec7_q2;
    public $sec7_q3;
    public $sec7_q4;
    public $sec7_q5;

    public $sec8_q1;
    public $sec8_q2;
    public $sec8_q3;
    public $sec8_q4;
    public $sec8_q5;

    public $sec9_q1;
    public $sec9_q2;
    public $sec9_q3;

    public $sec10_q1;
    public $sec10_q2;
    public $sec10_q3;

    public $sec11_q1;
    public $sec11_q2;
    public $sec11_q3;

    public $sec12_q1;
    public $sec12_q2;
    public $sec12_q3;
    public $sec12_q4;
    public $sec12_q5;
    public $sec12_q6;
    public $sec12_q7;
    public $sec12_q8;

    public $dataPrivacy;
    public $dateSigned;
    public $signature;

    public $currentPage = 1;
    public $totalPage = 6;

    public function mount() {
        $this->currentPage = 1;
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

    public function render()
    {
        $users = DB::table('tbl_alumni')->where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        view()->share('users', $users);
        return view('livewire.forms.form-sas');
    }

    public function validateData() {
        if($this->currentPage == 1) {
            $this->validate([
                'dataPrivacy' => 'required',
            ]);
        }
        elseif($this->currentPage == 3) {
            $this->validate([
                'sec1_q1' => 'required',
                'sec1_q2' => 'required',
                'sec1_q3' => 'required',
                'sec1_q4' => 'required',
                'sec1_q5' => 'required',
                'sec1_q6' => 'required',
                'sec1_q7' => 'required',
                'sec1_q8' => 'required',
                'sec1_q9' => 'required',
                'sec1_q10' => 'required',
                'sec1_q11' => 'required',
                'sec1_q12' => 'required',
                'sec1_q13' => 'required',
                'sec1_q14' => 'required',
                'sec1_q15' => 'required',
                'sec1_q16' => 'required',
                'sec1_q17' => 'required',
                'sec1_q18' => 'required',
                'sec1_q19' => 'required',
                'sec1_q20' => 'required',
                'sec1_q21' => 'required',
                'sec1_q22' => 'required',
            ]);
        }
        elseif($this->currentPage == 4) {
            $this->validate([
                'sec2_q1' => 'required',
                'sec2_q2' => 'required',
                'sec2_q3' => 'required',
                'sec2_q4' => 'required',

                'sec3_q1' => 'required',
                'sec3_q2' => 'required',
                'sec3_q3' => 'required',
                'sec3_q4' => 'required',
                'sec3_q5' => 'required',
                'sec3_q6' => 'required',

                'sec4_q1' => 'required',
                'sec4_q2' => 'required',
                'sec4_q3' => 'required',
                'sec4_q4' => 'required',

                'sec5_q1' => 'required',
                'sec5_q2' => 'required',
                'sec5_q3' => 'required',
                'sec5_q4' => 'required',
                'sec5_q5' => 'required',
                'sec5_q6' => 'required',

                'sec6_q1' => 'required',
                'sec6_q2' => 'required',
                'sec6_q3' => 'required',
                'sec6_q4' => 'required',
                'sec6_q5' => 'required',
            ]);
        }
        elseif($this->currentPage == 5) {
            $this->validate([
                'sec7_q1' => 'required',
                'sec7_q2' => 'required',
                'sec7_q3' => 'required',
                'sec7_q4' => 'required',
                'sec7_q5' => 'required',

                'sec8_q1' => 'required',
                'sec8_q2' => 'required',
                'sec8_q3' => 'required',
                'sec8_q4' => 'required',
                'sec8_q5' => 'required',

                'sec9_q1' => 'required',
                'sec9_q2' => 'required',
                'sec9_q3' => 'required',

                'sec10_q1' => 'required',
                'sec10_q2' => 'required',
                'sec10_q3' => 'required',

                'sec11_q1' => 'required',
                'sec11_q2' => 'required',
                'sec11_q3' => 'required',

                'sec12_q1' => 'required',
                'sec12_q2' => 'required',
                'sec12_q3' => 'required',
                'sec12_q4' => 'required',
                'sec12_q5' => 'required',
                'sec12_q6' => 'required',
                'sec12_q7' => 'required',
                'sec12_q8' => 'required',
            ]);
        }
        elseif($this->currentPage == 6) {
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

            'sec1_q1' => $this->sec1_q1,
            'sec1_q2' => $this->sec1_q2,
            'sec1_q3' => $this->sec1_q3,
            'sec1_q4' => $this->sec1_q4,
            'sec1_q5' => $this->sec1_q5,
            'sec1_q6' => $this->sec1_q6,
            'sec1_q7' => $this->sec1_q7,
            'sec1_q8' => $this->sec1_q8,
            'sec1_q9' => $this->sec1_q9,
            'sec1_q10' => $this->sec1_q10,
            'sec1_q11' => $this->sec1_q11,
            'sec1_q12' => $this->sec1_q12,
            'sec1_q13' => $this->sec1_q13,
            'sec1_q14' => $this->sec1_q14,
            'sec1_q15' => $this->sec1_q15,
            'sec1_q16' => $this->sec1_q16,
            'sec1_q17' => $this->sec1_q17,
            'sec1_q18' => $this->sec1_q18,
            'sec1_q19' => $this->sec1_q19,
            'sec1_q20' => $this->sec1_q20,
            'sec1_q21' => $this->sec1_q21,
            'sec1_q22' => $this->sec1_q22,

            //
            'sec2_q1' => $this->sec2_q1,
            'sec2_q2' => $this->sec2_q2,
            'sec2_q3' => $this->sec2_q3,
            'sec2_q4' => $this->sec2_q4,

            'sec3_q1' => $this->sec3_q1,
            'sec3_q2' => $this->sec3_q2,
            'sec3_q3' => $this->sec3_q3,
            'sec3_q4' => $this->sec3_q4,
            'sec3_q5' => $this->sec3_q5,
            'sec3_q6' => $this->sec3_q6,

            'sec4_q1' => $this->sec4_q1,
            'sec4_q2' => $this->sec4_q2,
            'sec4_q3' => $this->sec4_q3,
            'sec4_q4' => $this->sec4_q4,

            'sec5_q1' => $this->sec5_q1,
            'sec5_q2' => $this->sec5_q2,
            'sec5_q3' => $this->sec5_q3,
            'sec5_q4' => $this->sec5_q4,
            'sec5_q5' => $this->sec5_q5,
            'sec5_q6' => $this->sec5_q6,

            'sec6_q1' => $this->sec6_q1,
            'sec6_q2' => $this->sec6_q2,
            'sec6_q3' => $this->sec6_q3,
            'sec6_q4' => $this->sec6_q4,
            'sec6_q5' => $this->sec6_q5,

            //
            'sec7_q1' => $this->sec7_q1,
            'sec7_q2' => $this->sec7_q2,
            'sec7_q3' => $this->sec7_q3,
            'sec7_q4' => $this->sec7_q4,
            'sec7_q5' => $this->sec7_q5,

            'sec8_q1' => $this->sec8_q1,
            'sec8_q2' => $this->sec8_q2,
            'sec8_q3' => $this->sec8_q3,
            'sec8_q4' => $this->sec8_q4,
            'sec8_q5' => $this->sec8_q5,

            'sec9_q1' => $this->sec9_q1,
            'sec9_q2' => $this->sec9_q2,
            'sec9_q3' => $this->sec9_q3,

            'sec10_q1' => $this->sec10_q1,
            'sec10_q2' => $this->sec10_q2,
            'sec10_q3' => $this->sec10_q3,

            'sec11_q1' => $this->sec11_q1,
            'sec11_q2' => $this->sec11_q2,
            'sec11_q3' => $this->sec11_q3,

            'sec12_q1' => $this->sec12_q1,
            'sec12_q2' => $this->sec12_q2,
            'sec12_q3' => $this->sec12_q3,
            'sec12_q4' => $this->sec12_q4,
            'sec12_q5' => $this->sec12_q5,
            'sec12_q6' => $this->sec12_q6,
            'sec12_q7' => $this->sec12_q7,
            'sec12_q8' => $this->sec12_q8,

            'dataPrivacy' => $this->dataPrivacy,
            'dateSigned' => $this->dateSigned,
            'signature' => $this->signature,
        );

        ModelsFormSAS::insert($values);
        return redirect(route('userForm.index'));
    }
}
