<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDS_answers extends Model
{
    use HasFactory;
    protected $table = 'form_pds_answers';
    protected $fillable = [
        'alumni_ID',
        'pds_question_ID',
        'pds_answer',
    ];
}
