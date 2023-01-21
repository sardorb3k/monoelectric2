<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    use HasFactory;
    protected $table = 'page';
    protected $fillable = [
        'title_en',
        'title_ru',
        'title_tr',
        'slug',
        'status',
        'content_tr',
        'content_ru',
        'content_en',
    ];
}
