<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name_en',
        'productcode',
        'quantitybox',
        'grossweight',
        'volume',
        'category_id',
        'color_id',
        'image',
    ];
}
