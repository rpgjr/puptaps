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
    public $temp = 0;
    public $no_board_exam;
    public $currently_unemployed;

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

    public function board_value() {
        if ($this->no_board_exam == "NO_BOARD_EXAM") {
            $this->no_board_exam = '';
            $this->arrayAnswers[0]['answer'] = '';
            $this->arrayAnswers[1]['answer'] = '';
            $this->arrayAnswers[2]['answer'] = '';
            $this->arrayAnswers[3]['answer'] = '';
        }
        else {
            $this->resetErrorBag();
            $this->no_board_exam = "NO_BOARD_EXAM";
            $this->arrayAnswers[0]['answer'] = 'N/A';
            $this->arrayAnswers[1]['answer'] = 'N/A';
            $this->arrayAnswers[2]['answer'] = 'N/A';
            $this->arrayAnswers[3]['answer'] = 'N/A';
        }
    }

    public function unemployed_value() {
        if ($this->currently_unemployed == 'CURRENTLY_UNEMPLOYED') {
            $this->currently_unemployed = '';
            $this->arrayAnswers[5]['answer'] = '';
            $this->arrayAnswers[6]['answer'] = '';
            $this->arrayAnswers[7]['answer'] = '';
            $this->arrayAnswers[8]['answer'] = '';
            $this->arrayAnswers[9]['answer'] = '';
            $this->arrayAnswers[10]['answer'] = '';
            $this->arrayAnswers[11]['answer'] = '';
            $this->arrayAnswers[12]['answer'] = '';
            $this->arrayAnswers[13]['answer'] = '';
        }
        else {
            $this->resetErrorBag();
            $this->currently_unemployed = 'CURRENTLY_UNEMPLOYED';
            $this->arrayAnswers[5]['answer'] = 'UNEMPLOYED';
            $this->arrayAnswers[6]['answer'] = 'UNEMPLOYED';
            $this->arrayAnswers[7]['answer'] = 'UNEMPLOYED';
            $this->arrayAnswers[8]['answer'] = 'UNEMPLOYED';
            $this->arrayAnswers[9]['answer'] = 'UNEMPLOYED';
            $this->arrayAnswers[10]['answer'] = 'UNEMPLOYED';
            $this->arrayAnswers[11]['answer'] = 'UNEMPLOYED';
            $this->arrayAnswers[12]['answer'] = 'UNEMPLOYED';
            $this->arrayAnswers[13]['answer'] = 'UNEMPLOYED';
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
            if ($this->currently_unemployed == 'CURRENTLY_UNEMPLOYED') {
                $this->arrayAnswers[14]['answer'] = 'UNEMPLOYED';
                $this->arrayAnswers[15]['answer'] = 'UNEMPLOYED';
                $this->arrayAnswers[16]['answer'] = 'UNEMPLOYED';
                $this->arrayAnswers[17]['answer'] = 'UNEMPLOYED';
                $this->arrayAnswers[18]['answer'] = 'UNEMPLOYED';
                $this->arrayAnswers[19]['answer'] = 'UNEMPLOYED';
                $this->saveAnswer();
            }
            $this->validate();
        }
        elseif ($this->currentPage == 1) {
            $this->validate([
                'arrayAnswers.0.answer' => 'required',
                'arrayAnswers.1.answer' => 'required',
                'arrayAnswers.2.answer' => 'required',
                'arrayAnswers.3.answer' => 'required',
                'arrayAnswers.4.answer' => 'required',
            ]);
        }
        elseif ($this->currentPage == 2) {
            $this->validate([
                'arrayAnswers.5.answer' => 'required',
                'arrayAnswers.6.answer' => 'required',
                'arrayAnswers.7.answer' => 'required',
                'arrayAnswers.8.answer' => 'required',
                'arrayAnswers.9.answer' => 'required',
                'arrayAnswers.10.answer' => 'required',
                'arrayAnswers.11.answer' => 'required',
                'arrayAnswers.12.answer' => 'required',
                'arrayAnswers.13.answer' => 'required',
            ]);
        }
        $this->currentPage++;
        if($this->currentPage > $this->totalPage) {
            $this->currentPage = $this->totalPage;
        }
    }

    public function saveAnswer() {
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

    public function updateAnswer() {
        $this->validate();
        $getAnswers = TracerAnswers::where('alumni_id', '=', Auth::user()->alumni_id)->get();

        foreach ($getAnswers as $answers) {
            $update = TracerAnswers::where('answer_id', '=', $answers->answer_id)->update([
                'answer' => $this->arrayAnswers[$this->temp]['answer'],
            ]);
            $this->temp++;
        }
        $this->arrayAnswers = [];
        $this->countNull = 1;
        $this->temp = 0;

        return redirect(route("userTracer.getTracerIndex"));
    }
}

// class Answer extends Component
// {
//     public $currentPage;
//     public $totalPage;
//     public $progressBar;
//     public $no_board_exam;
//     public $currently_unemployed;
//     public $same_as_current;
//     public $arrayAnswers = array();

//     public $board_passer;
//     public $board_related;
//     public $board_exam;
//     public $board_date;
//     public $civil_passer;

//     public $cc_position;
//     public $cc_company;
//     public $cc_date;
//     public $cc_description;
//     public $cc_type;
//     public $cc_income;
//     public $cc_email;
//     public $cc_number;
//     public $cc_related;

//     public $ff_position;
//     public $ff_company;
//     public $ff_date;
//     public $ff_description;
//     public $ff_email;
//     public $ff_number;

//     public function pushAnswers() {
//         array_push($this->arrayAnswers, $this->board_passer);
//         array_push($this->arrayAnswers, $this->board_related);
//         array_push($this->arrayAnswers, $this->board_exam);
//         array_push($this->arrayAnswers, $this->board_date);
//         array_push($this->arrayAnswers, $this->civil_passer);

//         array_push($this->arrayAnswers, $this->cc_position);
//         array_push($this->arrayAnswers, $this->cc_company);
//         array_push($this->arrayAnswers, $this->cc_date);
//         array_push($this->arrayAnswers, $this->cc_description);
//         array_push($this->arrayAnswers, $this->cc_type);
//         array_push($this->arrayAnswers, $this->cc_income);
//         array_push($this->arrayAnswers, $this->cc_email);
//         array_push($this->arrayAnswers, $this->cc_number);
//         array_push($this->arrayAnswers, $this->cc_related);

//         array_push($this->arrayAnswers, $this->ff_position);
//         array_push($this->arrayAnswers, $this->ff_company);
//         array_push($this->arrayAnswers, $this->ff_date);
//         array_push($this->arrayAnswers, $this->ff_description);
//         array_push($this->arrayAnswers, $this->ff_email);
//         array_push($this->arrayAnswers, $this->ff_number);
//     }

//     public function render() {
//         $users = Alumni::where("alumni_id", "=", Auth::user()->alumni_id)->get();
//         $categories = TracerCategories::all();
//         $questions = TracerQuestions::all();

//         return view("livewire.tracer.answer",
//         compact([
//             "users",
//             "categories",
//             "questions",
//         ])
//         );
//     }

//     protected $rules = [
//         "board_passer"     => "required",
//         "board_related"    => "required",
//         "board_exam"       => "required",
//         "board_date"       => "required",
//         "civil_passer"     => "required",

//         "cc_position"      => "required",
//         "cc_company"       => "required",
//         "cc_date"          => "required",
//         "cc_description"   => "required",
//         "cc_type"          => "required",
//         "cc_income"        => "required",
//         "cc_email"         => "required|email",
//         "cc_number"        => "required",
//         "cc_related"       => "required",

//         "ff_position"      => "required",
//         "ff_company"       => "required",
//         "ff_date"          => "required",
//         "ff_description"   => "required",
//         "ff_email"         => "required|email",
//         "ff_number"        => "required",
//     ];

//     protected $messages = [
//         "board_passer.required"     => "This is required",
//         "board_related.required"    => "This is required",
//         "board_exam.required"       => "This is required",
//         "board_date.required"       => "This is required",
//         "civil_passer.required"     => "This is required",

//         "cc_position.required"      => "This is required",
//         "cc_company.required"       => "This is required",
//         "cc_date.required"          => "This is required",
//         "cc_description.required"   => "This is required",
//         "cc_type.required"          => "This is required",
//         "cc_income.required"        => "This is required",
//         "cc_email.required"         => "This is required",
//         "cc_email.email"            => "Company email must be a valid email",
//         "cc_number.required"        => "This is required",
//         "cc_related.required"       => "This is required",

//         "ff_position.required"      => "This is required",
//         "ff_company.required"       => "This is required",
//         "ff_date.required"          => "This is required",
//         "ff_description.required"   => "This is required",
//         "ff_email.required"         => "This is required",
//         "ff_email.email"            => "Company email must be a valid email",
//         "ff_number.required"        => "This is required",
//     ];

//     public function validateData() {
//         if ($this->currentPage == 1) {
//             $this->validate([
//                 "board_passer"     => "required",
//                 "board_related"    => "required",
//                 "board_exam"       => "required",
//                 "board_date"       => "required",
//                 "civil_passer"     => "required",
//             ]);
//         }
//         if ($this->currentPage == 2) {
//             $this->validate([
//                 "cc_position"      => "required",
//                 "cc_company"       => "required",
//                 "cc_date"          => "required",
//                 "cc_description"   => "required",
//                 "cc_type"          => "required",
//                 "cc_income"        => "required",
//                 "cc_email"         => "required|email",
//                 "cc_number"        => "required",
//                 "cc_related"       => "required",
//             ]);
//         }
//         if ($this->currentPage == 3) {
//             $this->validate([
//                 "ff_position"      => "required",
//                 "ff_company"       => "required",
//                 "ff_date"          => "required",
//                 "ff_description"   => "required",
//                 "ff_email"         => "required|email",
//                 "ff_number"        => "required",
//             ]);
//         }
//     }

//     public function mount() {
//         $this->currentPage = 1;
//         $this->totalPage = 3;
//         $this->progressBar = 33;
//     }

//     public function previousPage() {
//         $this->resetErrorBag();
//         $this->currentPage--;
//         if($this->currentPage < 1) {
//             $this->currentPage = 1;
//         }
//     }

//     public function nextPage() {
//         $this->resetErrorBag();
//         if ($this->currentPage == 1) {
//             if ($this->no_board_exam == 'NO_BOARD_EXAM') {
//                 $this->board_passer     = "N/A";
//                 $this->board_related    = "N/A";
//                 $this->board_exam       = "N/A";
//                 $this->board_date       = "N/A";
//             }
//             $this->validateData();
//         }
//         if ($this->currentPage == 2) {
//             if ($this->currently_unemployed == "CURRENTLY_UNEMPLOYED") {
//                 $this->cc_position     = "UNEMPLOYED";
//                 $this->cc_company      = "UNEMPLOYED";
//                 $this->cc_date         = "UNEMPLOYED";
//                 $this->cc_description  = "UNEMPLOYED";
//                 $this->cc_type         = "UNEMPLOYED";
//                 $this->cc_income       = "UNEMPLOYED";
//                 $this->cc_email        = "UNEMPLOYED";
//                 $this->cc_number       = "UNEMPLOYED";
//                 $this->cc_related      = "UNEMPLOYED";

//                 $this->ff_position     = "UNEMPLOYED";
//                 $this->ff_company      = "UNEMPLOYED";
//                 $this->ff_date         = "UNEMPLOYED";
//                 $this->ff_description  = "UNEMPLOYED";
//                 $this->ff_email        = "UNEMPLOYED";
//                 $this->ff_number       = "UNEMPLOYED";
//             }
//             $this->validateData();
//         }
//         $this->currentPage++;
//         if($this->currentPage > $this->totalPage) {
//             $this->currentPage = $this->totalPage;
//         }
//     }

//     public function saveAnswer() {
//         if ($this->same_as_current == "SAME_AS_CURRENT") {
//             $this->ff_position      = $this->cc_position;
//             $this->ff_company       = $this->cc_company;
//             $this->ff_date          = $this->cc_date;
//             $this->ff_description   = $this->cc_description;
//             $this->ff_email         = $this->cc_email;
//             $this->ff_number        = $this->cc_number;
//         }
//         $this->validateData();

//         $q_id = 1;
//         $this->pushAnswers();
//         foreach ($this->arrayAnswers as $answers) {
//             $tracer = new TracerAnswers();
//             $tracer->alumni_id      = Auth::user()->alumni_id;
//             $tracer->question_id    = $q_id;
//             $tracer->answer         = $answers;

//             $tracer->save();
//             $q_id += 1;
//         }

//         return redirect(route("userTracer.getTracerIndex"));
//     }
// }

