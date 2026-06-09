<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Booking;
use App\Models\GoBarberShop;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    private function getAccessibleShopIds($admin)
    {
        if ($admin->role == 'admin') {
            return GoBarberShop::pluck('shop_id')->toArray();
        } else {
            $owner = Owner::where('admin_id', $admin->admin_id)->first();
            if ($owner) {
                return GoBarberShop::where('owner_id', $owner->owner_id)->pluck('shop_id')->toArray();
            }
            return [];
        }
    }

    public function index()
    {
        $admin = Auth::user()->admin;
        
        if ($admin->role == 'admin') {
            $customers = Customer::all();
        } else {
            $shopIds = $this->getAccessibleShopIds($admin);
            $customerIds = Booking::whereIn('shop_id', $shopIds)->pluck('customer_id')->unique();
            $customers = Customer::whereIn('customer_id', $customerIds)->get();
        }

        return view('pages.admin.customer.index', compact('customers'));
    }

    public function show(Customer $customer)
    {
        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);
        
        // Cek jika pengguna punya akses ke customer ini
        if ($admin->role != 'admin') {
            $hasBooking = Booking::where('customer_id', $customer->customer_id)
                                 ->whereIn('shop_id', $shopIds)->exists();
            if (!$hasBooking) {
                return redirect()->back()->with('error', 'Unauthorized action.');
            }
        }

        $bookings = Booking::where('customer_id', $customer->customer_id)->with(['shop', 'service', 'barber'])->get();

        return view('pages.admin.customer.show', compact('customer', 'bookings'));
    }
}
