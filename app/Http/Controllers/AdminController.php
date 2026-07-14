<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bike;
use App\Models\Booking;

class AdminController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalBikes = Bike::count();
        $totalBookings = Booking::count();

        return view('admin', compact(
            'totalUsers',
            'totalBikes',
            'totalBookings'
        ));
    }
}