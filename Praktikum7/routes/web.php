<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadController;


// Halaman utama (welcome)
Route::get('/', function () {
    return view('welcome');
});

// Halaman dashboard (hanya bisa diakses jika login & email terverifikasi)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Tempat form upload ditampilkan
    })->name('dashboard');

    // Route GET untuk menampilkan form upload jika akses /upload langsung
    Route::get('/upload', function () {
        return view('dashboard'); // atau bisa buat view khusus form upload
    })->name('upload.form');

    // Route POST untuk menyimpan file upload
    Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');

    // Route untuk profile (default dari Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes (login, register, logout, dll.)
require __DIR__.'/auth.php';
