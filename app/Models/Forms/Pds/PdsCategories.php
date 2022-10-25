<?php

namespace App\Models\Forms\Pds;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdsCategories extends Model
{
    use HasFactory;
    protected $table = "form_pds_categories";
    protected $primaryKey = "category_id";
    protected $fillable = [
        "form_id",
        "category_name",
    ];
}
