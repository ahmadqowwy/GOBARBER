<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $primaryKey = 'service_id';

    protected $fillable = [
        'shop_id',
        'service_name',
        'price',
        'duration',
        'photo'
    ];

    public function shop()
    {
        return $this->belongsTo(GoBarberShop::class, 'shop_id');
    }
}