<?php

namespace Database\Seeders;
use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Buat 1 akun
        User::create([
            'name'=>'Admin Foodiest',
            'email'=>'admin@foodiest.com',
            'password'=>Hash::make('admin123'),
        ]);
    }
}