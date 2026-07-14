<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'bike_id',
        'start_date',
        'end_date',
        'total_price',
        'status',
    ];

    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}