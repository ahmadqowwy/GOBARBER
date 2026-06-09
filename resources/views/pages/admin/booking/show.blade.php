@extends('layouts.base-admin')

@section('title')
    <title>Detail Booking || GoBarberShop</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Booking #{{ $booking->booking_id }}</h4>
                    
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>Customer:</strong> {{ $booking->customer->name ?? '-' }} ({{ $booking->customer->phone ?? '-' }})</li>
                        <li class="list-group-item"><strong>Toko:</strong> {{ $booking->shop->shop_name ?? '-' }}</li>
                        <li class="list-group-item"><strong>Service:</strong> {{ $booking->service->service_name ?? '-' }}</li>
                        <li class="list-group-item"><strong>Barberman:</strong> {{ $booking->barber->barber_name ?? '-' }}</li>
                        <li class="list-group-item"><strong>Jadwal:</strong> {{ $booking->booking_date }} Pukul {{ $booking->time_slot }}</li>
                        <li class="list-group-item">
                            <strong>Status:</strong> 
                            <span class="badge badge-{{ $booking->status == 'Completed' ? 'success' : ($booking->status == 'Cancelled' ? 'danger' : 'warning') }}">
                                {{ $booking->status }}
                            </span>
                        </li>
                    </ul>

                    @if($booking->payment)
                    <h5 class="mt-4">Info Pembayaran</h5>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>Amount:</strong> Rp {{ number_format($booking->payment->amount, 0, ',', '.') }}</li>
                        <li class="list-group-item"><strong>Method:</strong> {{ $booking->payment->payment_method }}</li>
                        <li class="list-group-item">
                            <strong>Payment Status:</strong> 
                            <span class="badge badge-{{ $booking->payment->payment_status == 'Paid' ? 'success' : 'warning' }}">
                                {{ $booking->payment->payment_status }}
                            </span>
                        </li>
                    </ul>
                    @else
                    <div class="alert alert-warning">Belum ada pembayaran untuk booking ini.</div>
                    @endif

                    <a href="{{ route('booking.index') }}" class="btn btn-light mt-3">Kembali ke Daftar Booking</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
