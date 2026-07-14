<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bike;
use App\Models\Booking;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        // Statistics
        $totalUsers = User::count();
        $totalBikes = Bike::count();
        $totalBookings = Booking::count();

        // New users today
        $newUsers = User::whereDate(
            'created_at',
            Carbon::today()
        )->count();

        // Recent users
        $recentUsers = User::latest()
            ->take(10)
            ->get();

        // Available bikes
        $availableBikes = Bike::where(
            'status',
            'available'
        )->get();

        // Pending bookings
        $pendingBookings = Booking::with(['user', 'bike'])
            ->where('status', 'pending')
            ->latest()
            ->get();
        
        return view('admin', compact(
            'totalUsers',
            'totalBikes',
            'totalBookings',
            'newUsers',
            'recentUsers',
            'availableBikes',
            'pendingBookings'
        ));
    }
}