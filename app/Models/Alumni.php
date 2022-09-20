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
        'studNumber',
        'lastName',
        'firstName',
        'middleName',
        'suffix',
        'courseID',
        'batch',
        'gender',
        'bday',
        'age',
        'religion',
        'cityAddress',
        'provincialAddress',
        'email',
        'email_verified_at',
        'number',
        'username',
        'password',
        'user_role',
    ];
}
