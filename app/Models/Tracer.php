<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracer extends Model
{
    use HasFactory;

    protected $table = 'tbl_tracer';
    protected $primaryKey = 'tracer_ID';

    protected $fillable = [
        'alumni_ID',

        'current_employement',
        'current_job_description',
        'current_job_position',
        'current_employment_status',
        'current_monthly_income',
        'current_company_email',
        'current_company_number',
        'relation_to_course',

        'first_employement',
        'first_job_description',
        'first_job_position',
        'first_company_email',
        'first_company_number',
    ];

}
