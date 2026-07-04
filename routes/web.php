<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;
use App\Models\Bike;

Route::get('/bike/{bike}', function (Bike $bike) {
    return view('bike-detail', compact('bike'));
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/bike-detail', function () {
    return view('bike-detail');
});

Route::get('/bikes', [BikeController::class, 'index']);

Route::get('/customer-dashboard', function () {
    return view('customer-dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
