<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDS_questions extends Model
{
    use HasFactory;
    protected $table = 'form_pds_questions';
    protected $primaryKey = 'pds_question_ID';
    protected $fillable = [
        'pds_question',
    ];
}
