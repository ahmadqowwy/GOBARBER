<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\GoBarberShop;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // mengambil data admin berdasarkan user login
        $admin = Admin::where('user_id', Auth::id())->first();

        // Default data
        $owner = null;
        $shop = null;

        // Jika role bukan admin utama
        if ($admin && $admin->role == 'pengguna') {

            // mengambil data owner
            $owner = Owner::where('admin_id', $admin->admin_id)->first();

            // Jika owner ditemukan
            if ($owner) {

                // Ambil shop
                $shop = GoBarberShop::where('owner_id', $owner->owner_id)->first();
            }
        }

        $data = [
            'admin' => $admin,
            'owner' => $owner,
            'shop' => $shop,
        ];

        return view('pages.admin.dashboard', $data);
    }


}
