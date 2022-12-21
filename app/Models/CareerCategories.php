<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerCategories extends Model
{
    use HasFactory;
    protected $table = 'tbl_career_categories';
    protected $primaryKey = 'career_category_id';

    protected $fillable = [
        "career_category",
    ];
}
