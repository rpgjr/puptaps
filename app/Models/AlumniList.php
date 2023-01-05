<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniList extends Model
{
    use HasFactory;

    protected $table = 'tbl_alumni_list';
    protected $primaryKey = 'alumni_list_id';

    public $timestamps = false;

    protected $fillable = [
        'stud_number',
        'first_name',
        'last_name',
        'middle_name',
        'suffix',
        'course_id',
        'batch',
    ];
}
