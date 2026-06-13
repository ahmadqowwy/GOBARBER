<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Booking;
use App\Models\GoBarberShop;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
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
        
        $bookingIds = Booking::whereIn('shop_id', $shopIds)->pluck('booking_id');
        $payments = Payment::with('booking.customer')->whereIn('booking_id', $bookingIds)->get();

        return view('pages.admin.payment.index', compact('payments'));
    }

    public function show(Payment $payment)
    {
        $admin = Auth::user()->admin;
        $shopIds = $this->getAccessibleShopIds($admin);
        
        $payment->load('booking.shop');
        
        if (!in_array($payment->booking->shop_id, $shopIds)) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        return view('pages.admin.payment.show', compact('payment'));
    }
}
