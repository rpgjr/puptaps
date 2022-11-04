<?php

namespace App\Models\Tracer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TracerQuestions extends Model
{
    use HasFactory;
    protected $table = "tbl_tracer_questions";
    protected $primaryKey = "question_id";
    protected $fillable = [
        "category_id",
        "question_text",
        "question_type",
    ];
}
