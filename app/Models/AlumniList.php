<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniList extends Model
{
    use HasFactory;

    protected $table = 'tbl_alumni_list';

    protected $fillable = [
        'studnumber',
        'firstname',
        'lastname',
        'middlename',
        'suffix',
        'course',
    ];
}
