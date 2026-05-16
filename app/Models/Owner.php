<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    protected $primaryKey = 'owner_id';

    protected $fillable = [
        'owner_name',
        'email',
        'phone',
        'admin_id'
    ];

    public function shops()
    {
        return $this->hasMany(GoBarberShop::class, 'owner_id');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}