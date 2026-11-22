<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//tambahkan DB dan function HASH untuk enkripsi
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        //sisipkan data di table users
        DB::table('users')->insert([
            'nama' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('123456'),
            'foto' => '',
            'role' => 'admin',
        ]);
    }
}