<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    use HasFactory;
    protected $primaryKey = 'barber_id';

    protected $fillable = [
        'shop_id',
        'barber_name',
        'specialty',
        'photo'
    ];

    public function shop()
    {
        return $this->belongsTo(GoBarberShop::class, 'shop_id');
    }
}