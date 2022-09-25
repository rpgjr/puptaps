<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSAS extends Model
{
    use HasFactory;

    protected $table = 'form_sas';
    protected $primaryKey = 'sas_ID';
    protected $fillable = [
        'alumni_ID',

        'sec1_q1',
        'sec1_q2',
        'sec1_q3',
        'sec1_q4',
        'sec1_q5',
        'sec1_q6',
        'sec1_q7',
        'sec1_q8',
        'sec1_q9',
        'sec1_q10',
        'sec1_q11',
        'sec1_q12',
        'sec1_q13',
        'sec1_q14',
        'sec1_q15',
        'sec1_q16',
        'sec1_q17',
        'sec1_q18',
        'sec1_q19',
        'sec1_q20',
        'sec1_q21',
        'sec1_q22',

        'sec2_q1',
        'sec2_q2',
        'sec2_q3',
        'sec2_q4',

        'sec3_q1',
        'sec3_q2',
        'sec3_q3',
        'sec3_q4',
        'sec3_q5',
        'sec3_q6',

        'sec4_q1',
        'sec4_q2',
        'sec4_q3',
        'sec4_q4',

        'sec5_q1',
        'sec5_q2',
        'sec5_q3',
        'sec5_q4',
        'sec5_q5',
        'sec5_q6',

        'sec6_q1',
        'sec6_q2',
        'sec6_q3',
        'sec6_q4',
        'sec6_q5',

        'sec7_q1',
        'sec7_q2',
        'sec7_q3',
        'sec7_q4',
        'sec7_q5',

        'sec8_q1',
        'sec8_q2',
        'sec8_q3',
        'sec8_q4',
        'sec8_q5',

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
        'sec12_q4',
        'sec12_q5',
        'sec12_q6',
        'sec12_q7',
        'sec12_q8',

        'dataPrivacy',
        'dateSigned',
        'signature',
    ];
}
