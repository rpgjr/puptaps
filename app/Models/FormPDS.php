<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPDS extends Model
{
    use HasFactory;

    protected $table = 'form_pds';

    protected $primaryKey = 'pds_ID';

    protected $fillable = [
        'alumni_ID',
        'lastName',
        'firstName',
        'middleName',
        'suffix',
        'gender',
        'age',
        'bday',
        'number',
        'email',
        'religion',
        'courseID',
        'batch',
        'cityAddress',
        'provincialAddress',
        'fathersName',
        'fathersNumber',
        'mothersName',
        'mothersNumber',
        'office',
        'position',
        'officeDates',
        'seminar1',
        'seminar1Date',
        'seminar2',
        'seminar2Date',
        'seminar3',
        'seminar3Date',
    ];
}
