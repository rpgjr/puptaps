<?php

namespace App\Http\Livewire\Tracer;

use App\Models\Tracer\TracerAnswers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;

class Update extends Component
{
    public $job_position;
    public $company_name;
    public $start_date;
    public $job_description;
    public $employment_type;
    public $income;
    public $company_email;
    public $company_number;
    public $related_to_course;

    public function render() {
        return view("livewire.tracer.update");
    }

    protected $rules = [
        "job_position" => "required",
        "company_name" => "required",
        "start_date" => "required",
        "job_description" => "required",
        "employment_type" => "required",
        "income" => "required",
        "company_email" => "required",
        "company_number" => "required",
        "related_to_course" => "required",
    ];

    protected $messages = [
        "job_position" => "This is required.",
        "company_name" => "This is required.",
        "start_date" => "This is required.",
        "job_description" => "This is required.",
        "employment_type" => "This is required.",
        "income" => "This is required.",
        "company_email" => "This is required.",
        "company_number" => "This is required.",
        "related_to_course" => "This is required.",
    ];

    public function saveAnswer() {
        $this->validate();

        $id_Q1 = TracerAnswers::where('question_id', 1)->where('alumni_id', '=', Auth::user()->alumni_id)->value('answer_id');
        $id_Q2 = TracerAnswers::where('question_id', 2)->where('alumni_id', '=', Auth::user()->alumni_id)->value('answer_id');
        $id_Q3 = TracerAnswers::where('question_id', 3)->where('alumni_id', '=', Auth::user()->alumni_id)->value('answer_id');
        $id_Q4 = TracerAnswers::where('question_id', 4)->where('alumni_id', '=', Auth::user()->alumni_id)->value('answer_id');
        $id_Q5 = TracerAnswers::where('question_id', 5)->where('alumni_id', '=', Auth::user()->alumni_id)->value('answer_id');
        $id_Q6 = TracerAnswers::where('question_id', 6)->where('alumni_id', '=', Auth::user()->alumni_id)->value('answer_id');
        $id_Q7 = TracerAnswers::where('question_id', 7)->where('alumni_id', '=', Auth::user()->alumni_id)->value('answer_id');
        $id_Q8 = TracerAnswers::where('question_id', 8)->where('alumni_id', '=', Auth::user()->alumni_id)->value('answer_id');
        $id_Q9 = TracerAnswers::where('question_id', 9)->where('alumni_id', '=', Auth::user()->alumni_id)->value('answer_id');

        $update_Q1 = TracerAnswers::find($id_Q1);
        $update_Q2 = TracerAnswers::find($id_Q2);
        $update_Q3 = TracerAnswers::find($id_Q3);
        $update_Q4 = TracerAnswers::find($id_Q4);
        $update_Q5 = TracerAnswers::find($id_Q5);
        $update_Q6 = TracerAnswers::find($id_Q6);
        $update_Q7 = TracerAnswers::find($id_Q7);
        $update_Q8 = TracerAnswers::find($id_Q8);
        $update_Q9 = TracerAnswers::find($id_Q9);

        $update_Q1->update(['answer' => $this->job_position]);
        $update_Q2->update(['answer' => $this->company_name]);
        $update_Q3->update(['answer' => $this->start_date]);
        $update_Q4->update(['answer' => $this->job_description]);
        $update_Q5->update(['answer' => $this->employment_type]);
        $update_Q6->update(['answer' => $this->income]);
        $update_Q7->update(['answer' => $this->company_email]);
        $update_Q8->update(['answer' => $this->company_number]);
        $update_Q9->update(['answer' => $this->related_to_course]);

        return redirect(route("userTracer.getTracerIndex"));
    }
}
