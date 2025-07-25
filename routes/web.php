<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RideController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ride', [RideController::class, 'index'])->name('ride.index');
Route::post('/ride', [RideController::class, 'store'])->name('ride.store');

