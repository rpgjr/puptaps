<?php

namespace App\Models\Tracer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TracerCategories extends Model
{
    use HasFactory;
    protected $table = "tbl_tracer_categories";
    protected $primaryKey = "category_id";
    protected $fillable = [
        "category_name",
    ];
}
