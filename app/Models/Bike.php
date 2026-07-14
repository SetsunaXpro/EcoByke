<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $fillable = [
        'name',
        'tier',
        'description',
        'battery',
        'range_km',
        'price_per_day',
        'image',
        'status',
    ];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}