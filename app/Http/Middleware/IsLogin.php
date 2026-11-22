<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsLogin
{
    public function handle(Request $request, Closure $next)
    {
        //cek apakah ada session logged_in
        if (!session('logged_in')) {
            //jika tidak ada maka kembali ke halaman login
            return redirect('/');
        }

        $response = $next($request);

        //agar halaman tidak bisa dibuka lewat tombol back setelah logout
        $response->headers->set('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', 'Sat, 01 Jan 2000 00:00:00 GMT');

        return $response;
    }
}