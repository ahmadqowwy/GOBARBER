<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\GoBarberShop;
use App\Models\Service;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'barber_shop' => GoBarberShop::all()
        ];

        return view('home', $data);
    }

    public function menu()
    {
        $data = [
            'title' => 'Menu',
            'barber_shop' => GoBarberShop::all()
        ];

        return view('blog', $data);
    }

    public function detailShop($shop_id)
    {
        $data = [
            'title' => 'Detail Toko ',
            'shop' => GoBarberShop::where('shop_id', $shop_id)->first(),
            'service' => Service::where('shop_id', $shop_id)->get(),
            'barberman' => Barber::where('shop_id', $shop_id)->get()
        ];

        return view('detail-toko.detail-toko', $data);
    }

    public function layanan($shop_id)
    {
        $data = [
            'title' => 'Booking Barber',
            'shop' => GoBarberShop::where('shop_id', $shop_id)->first(),
            'service' => Service::where('shop_id', $shop_id)->get(),
        ];

        return view('booking-barber.layanan', $data);
    }
}