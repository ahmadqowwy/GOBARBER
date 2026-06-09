<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil admin dengan role pengguna
        $admin = Admin::where('role', 'pengguna')->first();

        // Jika admin ditemukan
        if ($admin) {

            Owner::create([
                'owner_name' => 'Ahmad Qoowy',
                'email' => 'qowwy@gmail.com',
                'phone' => '089676298218',
                'admin_id' => $admin->admin_id,
            ]);

        }
    }
}
