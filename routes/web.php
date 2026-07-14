<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BikeController;
use App\Models\Bike;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;

Route::get('/customer-dashboard', [BookingController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::post('/bike/{bike}/book',
    [BookingController::class, 'store'])
    ->name('booking.store')
    ->middleware('auth');

Route::get('/bike/{bike}', [BikeController::class, 'show'])
    ->middleware('auth');

Route::get('/bike/{bike}', function (Bike $bike) {
    return view('bike-detail', compact('bike'));
});

Route::get('/', function () {
    $bikes = Bike::take(3)->get();

    return view('welcome', compact('bikes'));
});
Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {

    if (auth()->user()->role !== 'admin') {
        abort(403);
    }

    return view('admin');

})->middleware('auth');
Route::get('/bike-detail', function () {
    return view('bike-detail');
});

Route::patch(
'/booking/{booking}/accept',
[BookingController::class,'accept']
)
->middleware('auth')
->name('booking.accept');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth');

Route::get('/bikes', [BikeController::class, 'index']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
