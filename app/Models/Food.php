<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'food_image',
        'food_type',
        'food_category',
        'quantity',
        'old_price',
        'new_price'
    ];
}
