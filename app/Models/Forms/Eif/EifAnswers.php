<?php

namespace App\Models\Forms\Eif;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EifAnswers extends Model
{
    use HasFactory;
    protected $table = "form_eif_answers";
    protected $primaryKey = "answer_id";
    protected $fillable = [
        "alumni_id",
        "question_id",
        "answer",
    ];
}
