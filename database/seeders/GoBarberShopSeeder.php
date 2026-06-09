<?php

namespace Database\Seeders;

use App\Models\GoBarberShop;
use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoBarberShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owner = Owner::first();

        if ($owner) {

            GoBarberShop::create([

                'owner_id' => $owner->owner_id,

                'shop_name' => 'GoBarber Premium',

                'location' => 'Jl. Ahmad Yani No. 10, Jakarta',

                'description' => 'Barber shop modern dengan stylist profesional dan pelayanan terbaik.',

                // URL Foto Barbershop
                'photo' => 'https://images.unsplash.com/photo-1621605815971-fbc98d665033?q=80&w=1200',

                'open_time' => '09:00:00',

                'close_time' => '22:00:00',

            ]);
        }
    }
}
