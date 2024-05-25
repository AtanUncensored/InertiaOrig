<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('movies', function () {
        return Inertia('Movies');
    });

    Route::get('app', function() {
        return Inertia('AndroidApp');
    });

    Route::get('emailUs', function() {
        return Inertia('EmailUs');
    });

    // Route::get('/movies', [MovieController::class, 'index'])->middleware(['auth', 'verified'])->name('movies');

    Route::resource('/movies', MovieController::class); 

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
