<?php

namespace App\Models\Forms\Eif;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EifQuestions extends Model
{
    use HasFactory;
    protected $table = "form_eif_questions";
    protected $primaryKey = "question_id";
    protected $fillable = [
        "category_id",
        "question_text",
        "question_type",
    ];
}
