<?php

namespace App\Models\Forms\Sas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SasAnswers extends Model
{
    use HasFactory;
    protected $table = "form_sas_answers";
    protected $primaryKey = "answer_id";
    protected $fillable = [
        "alumni_id",
        "question_id",
        "answer",
    ];
}
