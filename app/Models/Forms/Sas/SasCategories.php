<?php

namespace App\Models\Forms\Sas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SasCategories extends Model
{
    use HasFactory;
    protected $table = "form_sas_categories";
    protected $primaryKey = "category_id";
    protected $fillable = [
        "form_id",
        "category_name",
    ];
}
