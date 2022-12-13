<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'admin_id';
    protected $table = 'tbl_admin';
    // public $timestamps = true;

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'suffix',
        'email',
        'username',
        'password',
        'user_role',
    ];
}
