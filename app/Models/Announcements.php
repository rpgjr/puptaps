<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tbl_announcement';
    protected $primaryKey = 'announcement_id';

    protected $fillable = [
        'announcement_image',
        'announcement_title',
        'announcement_text',
        'created_at',
    ];
}
