<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\GoBarberShop;
use App\Models\Owner;
use App\Models\Barber;
use App\Models\Service;
use App\Models\Booking;
use App\Models\Customer;
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

        $services_count = 0;
        $barbers_count = 0;
        $bookings_count = 0;
        $customers_count = 0;

        // Jika role bukan admin utama (pengguna / owner)
        if ($admin && $admin->role == 'pengguna') {

            // mengambil data owner
            $owner = Owner::where('admin_id', $admin->admin_id)->first();

            // Jika owner ditemukan
            if ($owner) {

                // Ambil shop
                $shop = GoBarberShop::where('owner_id', $owner->owner_id)->first();

                if ($shop) {
                    $services_count = Service::where('shop_id', $shop->shop_id)->count();
                    $barbers_count = Barber::where('shop_id', $shop->shop_id)->count();
                    $bookings_count = Booking::where('shop_id', $shop->shop_id)->count();
                    $customers_count = Booking::where('shop_id', $shop->shop_id)->distinct('customer_id')->count('customer_id');
                }
            }
        } else if ($admin && $admin->role == 'admin') {
            // Jika role adalah admin utama
            $services_count = Service::count();
            $barbers_count = Barber::count();
            $bookings_count = Booking::count();
            $customers_count = Customer::count();
        }

        $data = [
            'admin' => $admin,
            'owner' => $owner,
            'shop' => $shop,
            'services_count' => $services_count,
            'barbers_count' => $barbers_count,
            'bookings_count' => $bookings_count,
            'customers_count' => $customers_count,
        ];

        return view('pages.admin.dashboard', $data);
    }
}
