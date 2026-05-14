<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Barbershop;
use App\Models\Service;
use App\Models\Barber;

class BarbershopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shop = Barbershop::create([
            'shop_name' => 'GoBarber Premium',
            'location' => 'Banyuwangi',
            'description' => 'Barbershop modern terbaik',
            'image' => 'foto1.jpg'
        ]);

        Service::create([
            'shop_id' => $shop->id,
            'service_name' => 'Hair Cut',
            'price' => 50000,
            'duration' => '45 Menit'
        ]);

        Service::create([
            'shop_id' => $shop->id,
            'service_name' => 'Hair Coloring',
            'price' => 120000,
            'duration' => '90 Menit'
        ]);

        Barber::create([
            'shop_id' => $shop->id,
            'barber_name' => 'Ahmad Barber',
            'specialty' => 'Fade Cut',
            'image' => 'barber1.jpg'
        ]);
    }
}