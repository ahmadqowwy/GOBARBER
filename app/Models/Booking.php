<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $primaryKey = 'booking_id';

    protected $fillable = [
        'customer_id',
        'shop_id',
        'service_id',
        'barber_id',
        'booking_date',
        'time_slot',
        'status'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function shop()
    {
        return $this->belongsTo(GoBarberShop::class, 'shop_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function barber()
    {
        return $this->belongsTo(Barber::class, 'barber_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'booking_id');
    }

    public function review()
    {
        return $this->hasOne(Review::class, 'booking_id');
    }
}