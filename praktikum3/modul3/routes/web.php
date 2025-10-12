<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\controllers\DataController;

//Route::get('/form', [DataController::class, 'form']);
//Route::post('/proses', [DataController::class, 'proses']);

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ArtikelController;
use App\Http\controllers\StudentController;


Route::get('/formdata', [ArtikelController::class, 'formdata']);
Route::post('/output', [ArtikelController::class, 'output']);

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
