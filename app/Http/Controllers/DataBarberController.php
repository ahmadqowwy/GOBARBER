<?php

namespace App\Http\Controllers;

use App\Models\GoBarberShop;
use App\Models\Owner;
use Illuminate\Http\Request;

class DataBarberController extends Controller
{
    public function getOwner($owner_id)
    {
        $data = [
            'owner' => Owner::findOrFail($owner_id),
            'gobarbershop' => GoBarberShop::where('owner_id', $owner_id)->first()
        ];
        return view('pages.admin.data-barber.owner.index', $data);
    }
    public function getBarberShop()
    {
        $data = [
            'gobarbershop' => GoBarberShop::all()
        ];
        return view('pages.admin.data-barber.shop.index', $data);
    }
}
