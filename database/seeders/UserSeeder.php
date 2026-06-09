<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // =========================
        // Admin Utama
        // =========================
        $adminUser = User::create([
            'name' => 'Admin Utama',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('@4b0g0b0g4')
        ]);

        Admin::create([
            'user_id' => $adminUser->id,
            'role' => 'admin'
        ]);


        // =========================
        // User Barber Shop
        // =========================
        $barberUser = User::create([
            'name' => 'Ahmad Qoowy',
            'username' => 'qowwwy',
            'email' => 'qowwy@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        Admin::create([
            'user_id' => $barberUser->id,
            'role' => 'pengguna'
        ]);
    }
}