<?php

namespace App\Http\Livewire\Forms;

use App\Models\Alumni;
use App\Models\FormExitInterview as ModelsFormExitInterview;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormExitInterview extends Component
{
    public $employment_status;
    public $reason = [];

    public $sec1_q1;
    public $sec1_q2;
    public $sec1_q3;
    public $sec1_q4;
    public $sec1_q5;
    public $sec1_q6;
    public $sec1_q7;

    public $sec2_q1;
    public $sec2_q2;
    public $sec2_q3;

    public $sec3_q1;
    public $sec3_q2;
    public $sec3_q3;

    public $sec4_q1;
    public $sec4_q2;
    public $sec4_q3;

    public $sec5_q1;
    public $sec5_q2;
    public $sec5_q3;

    public $sec6_q1;
    public $sec6_q2;
    public $sec6_q3;

    public $sec7_q1;
    public $sec7_q2;
    public $sec7_q3;

    public $sec8_q1;
    public $sec8_q2;
    public $sec8_q3;

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

    public $sec13_q1;
    public $sec13_q2;
    public $sec13_q3;

    public $sec14_q1;
    public $sec14_q2;
    public $sec14_q3;

    public $comment;

    public $data_privacy;
    public $date_signed;
    public $signature;

    public $currentPage = 1;
    public $totalPage = 7;

    public function mount() {
        $this->currentPage = 1;
    }

    public function render()
    {
        $users = Alumni::where('alumni_ID', '=', Auth::user()->alumni_ID)->get();
        view()->share('users', $users);
        return view('livewire.forms.form-exit-interview');
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

    protected $messages = [
        'required' => 'Please answers this field.',
    ];

    public function validateData() {

        if($this->currentPage == 1) {
            $this->validate([
                'data_privacy' => 'required',
            ]);
        }
        elseif($this->currentPage == 2) {
            $this->validate([
                'employment_status' => 'required',
                'reason' => 'required|array|min:1|max:6',
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
            ]);
        }
        elseif($this->currentPage == 4) {
            $this->validate([
                'sec2_q1' => 'required',
                'sec2_q2' => 'required',
                'sec2_q3' => 'required',

                'sec3_q1' => 'required',
                'sec3_q2' => 'required',
                'sec3_q3' => 'required',

                'sec4_q1' => 'required',
                'sec4_q2' => 'required',
                'sec4_q3' => 'required',

                'sec5_q1' => 'required',
                'sec5_q2' => 'required',
                'sec5_q3' => 'required',

                'sec6_q1' => 'required',
                'sec6_q2' => 'required',
                'sec6_q3' => 'required',
            ]);
        }
        elseif($this->currentPage == 5) {
            $this->validate([
                'sec7_q1' => 'required',
                'sec7_q2' => 'required',
                'sec7_q3' => 'required',

                'sec8_q1' => 'required',
                'sec8_q2' => 'required',
                'sec8_q3' => 'required',

                'sec9_q1' => 'required',
                'sec9_q2' => 'required',
                'sec9_q3' => 'required',

                'sec10_q1' => 'required',
                'sec10_q2' => 'required',
                'sec10_q3' => 'required',
            ]);
        }
        elseif($this->currentPage == 6) {
            $this->validate([
                'sec11_q1' => 'required',
                'sec11_q2' => 'required',
                'sec11_q3' => 'required',

                'sec12_q1' => 'required',
                'sec12_q2' => 'required',
                'sec12_q3' => 'required',

                'sec13_q1' => 'required',
                'sec13_q2' => 'required',
                'sec13_q3' => 'required',

                'sec14_q1' => 'required',
                'sec14_q2' => 'required',
                'sec14_q3' => 'required',
            ]);
        }
        elseif($this->currentPage == 7) {
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

            'employment_status' => $this->employment_status,
            'reason' => json_encode($this->reason),

            'sec1_q1' => $this->sec1_q1,
            'sec1_q2' => $this->sec1_q2,
            'sec1_q3' => $this->sec1_q3,
            'sec1_q4' => $this->sec1_q4,
            'sec1_q5' => $this->sec1_q5,
            'sec1_q6' => $this->sec1_q6,
            'sec1_q7' => $this->sec1_q7,

            'sec2_q1' => $this->sec2_q1,
            'sec2_q2' => $this->sec2_q2,
            'sec2_q3' => $this->sec2_q3,

            'sec3_q1' => $this->sec3_q1,
            'sec3_q2' => $this->sec3_q2,
            'sec3_q3' => $this->sec3_q3,

            'sec4_q1' => $this->sec4_q1,
            'sec4_q2' => $this->sec4_q2,
            'sec4_q3' => $this->sec4_q3,

            'sec5_q1' => $this->sec5_q1,
            'sec5_q2' => $this->sec5_q2,
            'sec5_q3' => $this->sec5_q3,

            'sec6_q1' => $this->sec6_q1,
            'sec6_q2' => $this->sec6_q2,
            'sec6_q3' => $this->sec6_q3,

            'sec7_q1' => $this->sec7_q1,
            'sec7_q2' => $this->sec7_q2,
            'sec7_q3' => $this->sec7_q3,

            'sec8_q1' => $this->sec8_q1,
            'sec8_q2' => $this->sec8_q2,
            'sec8_q3' => $this->sec8_q3,

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

            'sec13_q1' => $this->sec13_q1,
            'sec13_q2' => $this->sec13_q2,
            'sec13_q3' => $this->sec13_q3,

            'sec14_q1' => $this->sec14_q1,
            'sec14_q2' => $this->sec14_q2,
            'sec14_q3' => $this->sec14_q3,

            'comment' => $this->comment,

            'data_privacy' => $this->data_privacy,
            'date_signed' => $this->date_signed,
            'signature' => $this->signature,
        );

        ModelsFormExitInterview::insert($values);
        return redirect(route('userForm.index'));
    }
}
