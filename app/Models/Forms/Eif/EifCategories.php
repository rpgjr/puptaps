<?php

namespace App\Models\Forms\Eif;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EifCategories extends Model
{
    use HasFactory;
    protected $table = "form_eif_categories";
    protected $primaryKey = "category_id";
    protected $fillable = [
        "form_id",
        "category_name",
    ];
}
