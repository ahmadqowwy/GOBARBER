<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoBarberShop extends Model
{
    use HasFactory;
    protected $primaryKey = 'shop_id';

    protected $fillable = [
        'owner_id',
        'shop_name',
        'location',
        'description',
        'open_time',
        'close_time',
        'photo'
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class, 'owner_id');
    }

    public function barbers()
    {
        return $this->hasMany(Barber::class, 'shop_id');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'shop_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'shop_id');
    }
}