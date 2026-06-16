<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\GoBarberShop;
use App\Models\Service;
use App\Models\Customer;
use App\Models\Booking;
use App\Models\Payment;
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
            'title' => 'Booking Barber - Pilih Layanan',
            'shop' => GoBarberShop::where('shop_id', $shop_id)->first(),
            'service' => Service::where('shop_id', $shop_id)->get(),
        ];

        return view('booking-barber.layanan', $data);
    }

    public function pilihBarber(Request $request)
    {
        $shop_id = $request->shop_id;
        $data = [
            'title' => 'Booking Barber - Pilih Barber',
            'barbers' => Barber::where('shop_id', $shop_id)->get(),
            'shop' => GoBarberShop::where('shop_id', $shop_id)->first(),
        ];

        return view('booking-barber.barber-pilih', $data);
    }

    public function jadwal(Request $request)
    {
        $data = [
            'title' => 'Booking Barber - Pilih Jadwal'
        ];

        return view('booking-barber.jadwal', $data);
    }

    public function konfirmasi(Request $request)
    {
        $shop = GoBarberShop::where('shop_id', $request->shop_id)->first();
        $service = Service::where('service_id', $request->layanan_id)->first();
        $barber = Barber::where('barber_id', $request->barber_id)->first();
        
        $total = $service ? $service->price : 0;

        $data = [
            'title' => 'Booking Barber - Konfirmasi',
            'shop' => $shop,
            'service' => $service,
            'barber' => $barber,
            'total' => $total
        ];

        return view('booking-barber.konfirmasi', $data);
    }

    public function prosesBooking(Request $request)
    {
        // 1. Cek atau Buat Customer
        $customer = Customer::firstOrCreate(
            ['email' => $request->email],
            [
                'name' => $request->nama,
                'phone' => $request->no_hp
            ]
        );

        // 2. Buat Booking
        $booking = Booking::create([
            'customer_id' => $customer->customer_id,
            'shop_id' => $request->shop_id,
            'service_id' => $request->layanan_id,
            'barber_id' => $request->barber_id,
            'booking_date' => $request->tanggal,
            'time_slot' => $request->jam,
            'status' => 'pending'
        ]);

        // 3. Buat Payment
        $service = Service::where('service_id', $request->layanan_id)->first();
        $amount = $service ? (float) $service->price : 0;
        // Tambahan admin fee 2000
        $total_amount = $amount + 2000;

        Payment::create([
            'booking_id'     => $booking->booking_id,
            'amount'         => $total_amount,
            'payment_method' => $request->pembayaran,
            'payment_status' => 'pending'
        ]);

        return redirect()->route('booking.sukses', ['booking_id' => $booking->booking_id]);
    }

    public function sukses($booking_id)
    {
        $booking = Booking::with(['shop', 'service', 'barber', 'payment'])->where('booking_id', $booking_id)->firstOrFail();

        $data = [
            'title' => 'Booking Berhasil',
            'booking' => $booking
        ];

        return view('booking-barber.sukses', $data);
    }
}