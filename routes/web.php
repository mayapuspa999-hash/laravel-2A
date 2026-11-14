<?php

use Illuminate\Support\Facades\Route;

// import controller web dan taruh di routes dengan nama alias Web
use App\Http\Controllers\Web;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;

Route::get('/', function () {

    // return view("wellcome);
    return 'Halo Nama Ku adalah Laravel, Salam Kenal';
});

// route baru
Route::get('/about', function () { 
    //return view('welcome'); 
    return "<h2>Ini adalah halaman About</h2>"; 
    }); 

// route ke controller web ke fungsi home
Route::get('/web', [Web::class, 'home']);

//route daftar mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

//route kalkulator luas segitiga
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitungSegitiga']);