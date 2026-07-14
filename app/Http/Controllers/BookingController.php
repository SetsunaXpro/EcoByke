<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request, Bike $bike)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after:start_date',
        ]);

        $days = \Carbon\Carbon::parse($request->start_date)
            ->diffInDays(\Carbon\Carbon::parse($request->end_date)) + 1;

        Booking::create([
            'user_id' => auth()->id(),
            'bike_id' => $bike->id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_price' => $days * $bike->price_per_day,
            'status' => 'pending',
        ]);

        return redirect('/customer-dashboard')
            ->with('success', 'Bike booked successfully!');
    }
    
        public function index()
    {
        $bookings = Booking::with('bike')
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('customer-dashboard', compact('bookings'));
    }
        public function accept(Booking $booking)
    {
        if(auth()->user()->role != 'admin'){
            abort(403);
        }

        $booking->update([
            'status'=>'accepted'
        ]);

        $booking->bike->update([
            'status'=>'booked'
        ]);

        return back();
    }
}