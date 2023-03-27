<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'product_name',
        'product_price',
        'product_image',
        'product_description',
        'product_category',
        'product_quantity',
        'product_discount',
        'remember_token'
    ];
    use HasFactory;
}
