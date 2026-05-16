<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'admin_id';

    protected $fillable = [
        'user_id',
        'role',
    ];

    /**
     * Relasi ke user
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function owner()
    {
        return $this->hasOne(Owner::class, 'owner_id');
    }
}