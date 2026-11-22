<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

//route daftar mahasiswa (latihan sebelumnya)
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

//route kalkulator luas segitiga (latihan sebelumnya)
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitungSegitiga']);

//route ke controller Dashboard
Route::get('/dashboard', [DashboardController::class, 'home']);
Route::get('/gallery', [DashboardController::class, 'gallery']);
Route::get('/about', [DashboardController::class, 'about']);