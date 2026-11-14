<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    //menampilkan form luas segitiga
    public function segitiga()
    {
        $data['judul']  = 'Kalkulator Luas Segitiga';
        $data['alas']   = null;
        $data['tinggi'] = null;
        $data['hasil']  = null;

        return view('segitiga', $data);
    }

    //proses perhitungan luas segitiga
    public function hitungSegitiga(Request $request)
    {
        //validasi input dari form
        $request->validate([
            'alas'   => 'required|numeric|gt:0',
            'tinggi' => 'required|numeric|gt:0',
        ], [
            'alas.required'   => 'Alas wajib diisi.',
            'alas.numeric'    => 'Alas harus berupa angka.',
            'alas.gt'         => 'Alas harus lebih besar dari 0.',
            'tinggi.required' => 'Tinggi wajib diisi.',
            'tinggi.numeric'  => 'Tinggi harus berupa angka.',
            'tinggi.gt'       => 'Tinggi harus lebih besar dari 0.',
        ]);

        //menangkap input dari form
        $data['judul']  = 'Kalkulator Luas Segitiga';
        $data['alas']   = (float) $request->input('alas');
        $data['tinggi'] = (float) $request->input('tinggi');

        //luas segitiga = 1/2 x alas x tinggi
        $data['hasil'] = 0.5 * $data['alas'] * $data['tinggi'];

        //render ke view
        return view('segitiga', $data);
    }
}