<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'adminID';
    protected $table = 'tbl_admin';

    protected $fillable = [
        'username',
        'email',
        'password',
        'accessType',
    ];
}
