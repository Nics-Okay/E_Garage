<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

// MAIN ROUTES
Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/signin', [MainController::class, 'signin'])->name('signin');
Route::get('/signup', [MainController::class, 'signup'])->name('signup');

// DRIVER ROUTES
Route::get('/driver/home', [MainController::class, 'driverHome'])->name('driver.home');
Route::get('/driver/jobs', [MainController::class, 'driverJobs'])->name('driver.driverJobs');
Route::get('/driver/jobs/current', [MainController::class, 'driverCurrent'])->name('driver.current');
Route::get('/driver/jobs/current/update', [MainController::class, 'driverUpdate'])->name('driver.update');
Route::get('/driver/profile', [MainController::class, 'driverProfile'])->name('driver.profile');
Route::get('/driver/jobs/completed', [MainController::class, 'driverCompleted'])->name('driver.completed');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
