<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//load Model User
use App\Models\User;
//load HASH untuk cek password
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //fungsi untuk login
    public function cek(Request $request)
    {
        //mencari data email di table users
        $data = User::where('email', $request->input('email'))->first();

        //jika datanya ketemu dan password sama
        if ($data && Hash::check((string) $request->input('password'), $data->password)) {
            $request->session()->regenerate();

            //simpan session
            session(['email' => $data->email]);
            session(['logged_in' => true]);

            //masuk ke dashboard
            return redirect('/dashboard');
        }

        //kembali ke login
        return redirect('/')->with('error', 'Email atau password salah!');
    }

    //fungsi untuk logout
    public function logout(Request $request)
    {
        //hapus semua session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        //kembali ke login
        return redirect('/');
    }
}