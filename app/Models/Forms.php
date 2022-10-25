<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;
    protected $table = "tbl_forms";
    protected $primaryKey = "form_id";
    protected $fillable = [
        "form_name",
        "form_status",
    ];
}
