<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/Bookings', function () {
    return view('Bookings');
})->middleware(['auth', 'verified'])->name('Bookings');

Route::get('/BookRoom', function () {
    return view('BookRoom');
})->middleware(['auth', 'verified'])->name('BookRoom');

Route::get('/Guest', function () {
    return view('Guest');
})->middleware(['auth', 'verified'])->name('Guest');

Route::get('/Payment', function () {
    return view('Payment');
})->middleware(['auth', 'verified'])->name('Payment');

Route::get('/Room', function () {
    return view('Room');
})->middleware(['auth', 'verified'])->name('Room');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
