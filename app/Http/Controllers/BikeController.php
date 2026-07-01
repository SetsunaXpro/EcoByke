<?php

namespace App\Http\Controllers;

use App\Models\Bike;

class BikeController extends Controller
{
    public function index()
    {
        $bikes = Bike::all();

        return view('bikes', compact('bikes'));
    }
}