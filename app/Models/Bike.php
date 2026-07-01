<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $fillable = [
        'name',
        'description',
        'battery',
        'range_km',
        'price_per_day',
        'image',
        'status',
    ];
}