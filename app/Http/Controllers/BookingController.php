<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\GoBarberShop;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
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
        $shopIds = $this->getAccessibleShopIds($admin);
        
        $bookings = Booking::with(['customer', 'shop', 'service', 'barber'])
                            ->whereIn('shop_id', $shopIds)->get();

        return view('pages.admin.booking.index', compact('bookings'));
    }

    public function show(Booking $booking)
    {
        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);
        
        if (!in_array($booking->shop_id, $shopIds)) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $booking->load(['customer', 'shop', 'service', 'barber', 'payment']);

        return view('pages.admin.booking.show', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);
        
        if (!in_array($booking->shop_id, $shopIds)) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $request->validate([
            'status' => 'required|string|in:Pending,Confirmed,Completed,Cancelled'
        ]);

        $booking->update([
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Status booking berhasil diupdate.');
    }
}
