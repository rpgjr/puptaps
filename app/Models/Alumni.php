<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $primaryKey = 'alumni_ID';

    protected $table = 'tbl_alumni';

    protected $fillable = [
        'stud_number',
        'last_name',
        'first_name',
        'middle_name',
        'suffix',
        'course_ID',
        'batch',
        'semesters',
        'gender',
        'birthday',
        'age',
        'religion',
        'civil_status',
        'city_address',
        'provincial_address',
        'email',
        'email_verified_at',
        'number',
        'username',
        'password',
        'user_role',
        'user_profile',
    ];
}
