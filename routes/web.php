<?php

use App\Http\Controllers\CVController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CVController::class, 'index'])->name('home');
Route::get('/#', function () {
    echo 'hello';
})->name('dashboard');


Route::get('/cv/create', [CVController::class, 'create'])->name('cv.create');
Route::post('/cv/store', [CVController::class, 'store'])->name('cv.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
