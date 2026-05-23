<?php

namespace App\Http\Controllers;

use App\Models\Barber;

class BarberController extends Controller
{
    public function index()
    {
        $barbers = Barber::all();

        return view('detail-toko.data-barber', [
            'barbers' => $barbers
        ]);
    }
}