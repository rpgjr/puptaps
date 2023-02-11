<?php

namespace App\Http\Livewire\Tracer;

use App\Models\Alumni;
use App\Models\Tracer;
use App\Models\Tracer\TracerAnswers;
use App\Models\Tracer\TracerCategories;
use App\Models\Tracer\TracerQuestions;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Answer extends Component
{
    public $answer;
    public $arrayAnswers = [];
    public $totalPage = 3;
    public $currentPage = 1;
    public $progressBar = 0;
    public $countNull = 1;
    public $unemployed;
    public $sameAsCurrent;

    public function render() {
        $this->addNullAnswers();
        $users = Alumni::where("alumni_id", "=", Auth::user()->alumni_id)->get();
        $categories = TracerCategories::all();
        $questions = TracerQuestions::all();

        return view("livewire.tracer.answer",
        compact([
            "users",
            "categories",
            "questions",
        ])
        );
    }

    public function addNullAnswers() {
        $categories = TracerCategories::all();
        $questions = TracerQuestions::all();

        foreach($categories as $category) {
            if($this->currentPage == $category->category_id) {
                if($this->countNull == $this->currentPage) {
                    $this->progressBar = $this->progressBar + 33;
                    foreach($questions as $question) {
                        if($question->category_id == $category->category_id) {
                            array_push($this->arrayAnswers, [
                                "answer" => "",
                            ]);
                        }
                    }
                    $this->countNull++;
                }
            }
        }
    }

    protected $rules = [
        "arrayAnswers.*.answer" => "required|string",
    ];

    protected $messages = [
        "arrayAnswers.*.answer.required" => "This is required.",
        "arrayAnswers.*.answer.string"   => "This is required.",
    ];

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
        $this->addNullAnswers();
        $temp_null = $this->countNull - 1;
        if($temp_null == $this->currentPage) {
            if ($this->arrayAnswers[0]['answer'] == 'N/A' || $this->arrayAnswers[0]['answer'] == 'No') {
                $this->arrayAnswers[3]['answer'] = 'N/A';
            }
            if ($this->unemployed == 'Unemployed') {
                $this->arrayAnswers[5]['answer'] = 'N/A';
                $this->arrayAnswers[6]['answer'] = 'N/A';
                $this->arrayAnswers[7]['answer'] = 'N/A';
                $this->arrayAnswers[8]['answer'] = 'N/A';
                $this->arrayAnswers[9]['answer'] = 'Not Applicable';
                $this->arrayAnswers[10]['answer'] = 'Not Applicable';
                $this->arrayAnswers[11]['answer'] = 'N/A';
                $this->arrayAnswers[12]['answer'] = 'N/A';
                $this->arrayAnswers[13]['answer'] = 'N/A';
                $this->arrayAnswers[14]['answer'] = 'N/A';
                $this->arrayAnswers[15]['answer'] = 'N/A';
                $this->arrayAnswers[16]['answer'] = 'N/A';
                $this->arrayAnswers[17]['answer'] = 'N/A';
                $this->arrayAnswers[18]['answer'] = 'N/A';
                $this->arrayAnswers[19]['answer'] = 'N/A';
                $this->saveAnswer();
            }

            $this->validate();
        }
        $this->currentPage++;
        if($this->currentPage > $this->totalPage) {
            $this->currentPage = $this->totalPage;
        }
    }

    public function sameCurrent() {
        $this->arrayAnswers[14]['answer'] = $this->arrayAnswers[5]['answer'];
        $this->arrayAnswers[15]['answer'] = $this->arrayAnswers[6]['answer'];
        $this->arrayAnswers[16]['answer'] = $this->arrayAnswers[7]['answer'];
        $this->arrayAnswers[17]['answer'] = $this->arrayAnswers[8]['answer'];
        $this->arrayAnswers[18]['answer'] = $this->arrayAnswers[11]['answer'];
        $this->arrayAnswers[19]['answer'] = $this->arrayAnswers[12]['answer'];
    }

    public function saveAnswer() {
        // if ($this->sameAsCurrent == 'same-as-current') {
        //     $this->arrayAnswers[14]['answer'] = $this->arrayAnswers[5]['answer'];
        //     $this->arrayAnswers[15]['answer'] = $this->arrayAnswers[6]['answer'];
        //     $this->arrayAnswers[16]['answer'] = $this->arrayAnswers[7]['answer'];
        //     $this->arrayAnswers[17]['answer'] = $this->arrayAnswers[8]['answer'];
        //     $this->arrayAnswers[18]['answer'] = $this->arrayAnswers[11]['answer'];
        //     $this->arrayAnswers[19]['answer'] = $this->arrayAnswers[12]['answer'];
        // }
        // else {
        //     $this->arrayAnswers[14]['answer'] = '';
        //     $this->arrayAnswers[15]['answer'] = '';
        //     $this->arrayAnswers[16]['answer'] = '';
        //     $this->arrayAnswers[17]['answer'] = '';
        //     $this->arrayAnswers[18]['answer'] = '';
        //     $this->arrayAnswers[19]['answer'] = '';
        // }
        $this->validate();
        $questions = count(TracerQuestions::all());
        $ctr = 1;

        foreach ($this->arrayAnswers as $key => $value) {
            if($ctr > $questions) {
                break;
            }
            $answers = TracerAnswers::insert([
                "alumni_id"     => Auth::user()->alumni_id,
                "question_id"   => $ctr,
                "answer"        => $value["answer"],
            ]);
            $ctr++;
        }
        $this->arrayAnswers = [];
        $this->countNull = 1;

        return redirect(route("userTracer.getTracerIndex"));
    }
}

// protected $rules = [
//     "job_position" => "required",
//     "company_name" => "required",
//     "start_date" => "required",
//     "job_description" => "required",
//     "employment_type" => "required",
//     "income" => "required",
//     "company_email" => "required",
//     "company_number" => "required",
//     "related_to_course" => "required",
//     //"arrayAnswers.*.answer" => "required|string",
// ];

// protected $messages = [
//     "job_position" => "This is required.",
//     "company_name" => "This is required.",
//     "start_date" => "This is required.",
//     "job_description" => "This is required.",
//     "employment_type" => "This is required.",
//     "income" => "This is required.",
//     "company_email" => "This is required.",
//     "company_number" => "This is required.",
//     "related_to_course" => "This is required.",
//     // "arrayAnswers.*.answer.required" => "This is required.",
//     // "arrayAnswers.*.answer.string"   => "This is required.",
// ];
