<?php

namespace App\Models\Forms\Pds;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdsQuestions extends Model
{
    use HasFactory;
    protected $table = "form_pds_questions";
    protected $primaryKey = "question_id";
    protected $fillable = [
        "category_id",
        "question_text",
    ];
}
