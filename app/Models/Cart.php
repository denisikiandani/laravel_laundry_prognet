<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable = [
        'name',
        'email',
        'quantity',
        'price',
        'image',
        'category',
        'product',
        'total_harga_cart'
    ];
}
