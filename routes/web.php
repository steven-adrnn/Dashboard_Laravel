<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Group for authenticated and verified users
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/create', [DashboardController::class, 'create'])->name('dashboard.create'); // Route for the add book form
    Route::post('/dashboard', [DashboardController::class, 'store'])->name('dashboard.store'); // Route for storing the new book
    Route::get('/dashboard/edit/{id}', [DashboardController::class, 'edit'])->name('dashboard.edit'); // Route for editing a book
    Route::put('/dashboard/{id}', [DashboardController::class, 'update'])->name('dashboard.update'); // Route for updating the book
    Route::delete('/dashboard/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy'); // Route for deleting a book
});

// Group for profile management
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
