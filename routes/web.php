<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeController;

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

//route CRUD employe
Route::get('/employe', [EmployeController::class, 'index']);
Route::get('/employe/create', [EmployeController::class, 'create']);
Route::post('/employe/store', [EmployeController::class, 'store']);
Route::get('/employe/edit/{employe}', [EmployeController::class, 'show']);
Route::put('/employe/{employe}', [EmployeController::class, 'update']);
Route::delete('/employe/{employe}', [EmployeController::class, 'destroy']);