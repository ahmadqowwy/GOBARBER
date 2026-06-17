<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $primaryKey = 'produk_id';

    protected $fillable = [
        'shop_id',
        'name_product',
        'price',
        'description',
        'photo',
    ];

    public function shop()
    {
        return $this->belongsTo(GoBarberShop::class, 'shop_id', 'shop_id');
    }
}
