<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Models\Bike;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $bikes = Bike::take(3)->get();
    return view('welcome', compact('bikes'));
});

Route::get('/bikes', [BikeController::class, 'index']);

Route::get('/bike/{bike}', [BikeController::class, 'show'])
    ->middleware('auth');

Route::post('/bike/{bike}/book', [BookingController::class, 'store'])
    ->middleware('auth')
    ->name('booking.store');

Route::get('/customer-dashboard', [BookingController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::patch('/booking/{booking}/accept', [BookingController::class, 'accept'])
    ->middleware('auth')
    ->name('booking.accept');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth')
    ->name('admin');

Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';