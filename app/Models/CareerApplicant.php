<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerApplicant extends Model
{
    use HasFactory;

    protected $table = 'tbl_career_applicants';
    protected $primaryKey = 'applicantID';
    protected $fillable = [
        'alumni_ID',
        'careerID',
    ];
}
