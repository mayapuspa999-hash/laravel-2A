<?php 

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use App\Http\Controllers\DashboardController;

//route ke controller Dashboard
Route::get('/dashboard', [DashboardController::class, 'home']);
Route::get('/gallery', [DashboardController::class, 'gallery']);
Route::get('/about', [DashboardController::class, 'about']);

class Web extends Controller { 
    public function home() {
         return "<h1>Ini adalah Controllers Web</h1>"; 
    } 
}