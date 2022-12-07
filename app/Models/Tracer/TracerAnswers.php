<?php

namespace App\Models\Tracer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TracerAnswers extends Model
{
    use HasFactory;
    protected $table = "tbl_tracer_answers";
    protected $primaryKey = "answer_id";
    protected $fillable = [
        "alumni_id",
        "question_id",
        "answer",
    ];
    public $timestamps  = false;
}
