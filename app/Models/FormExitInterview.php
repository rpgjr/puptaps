<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormExitInterview extends Model
{
    use HasFactory;

    protected $table = 'form_exit_interview';
    protected $primaryKey = 'exit_ID';
    protected $fillable = [
        'alumni_id',

        'employment_status',
        'reason',

        'sec1_q1',
        'sec1_q2',
        'sec1_q3',
        'sec1_q4',
        'sec1_q5',
        'sec1_q6',
        'sec1_q7',

        'sec2_q1',
        'sec2_q2',
        'sec2_q3',

        'sec3_q1',
        'sec3_q2',
        'sec3_q3',

        'sec4_q1',
        'sec4_q2',
        'sec4_q3',

        'sec5_q1',
        'sec5_q2',
        'sec5_q3',

        'sec6_q1',
        'sec6_q2',
        'sec6_q3',

        'sec7_q1',
        'sec7_q2',
        'sec7_q3',

        'sec8_q1',
        'sec8_q2',
        'sec8_q3',

        'sec9_q1',
        'sec9_q2',
        'sec9_q3',

        'sec10_q1',
        'sec10_q2',
        'sec10_q3',

        'sec11_q1',
        'sec11_q2',
        'sec11_q3',

        'sec12_q1',
        'sec12_q2',
        'sec12_q3',

        'sec13_q1',
        'sec13_q2',
        'sec13_q3',

        'sec14_q1',
        'sec14_q2',
        'sec14_q3',

        'comment',

        'data_privacy',
        'date_signed',
        'signature',
    ];
}
