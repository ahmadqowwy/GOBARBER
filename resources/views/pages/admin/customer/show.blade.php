@extends('layouts.base-admin')

@section('title')
    <title>Detail Customer || GoBarberShop</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Customer: {{ $customer->name }}</h4>
                    <p>Email: {{ $customer->email }} | Phone: {{ $customer->phone }}</p>
                    
                    <h5 class="mt-4">Riwayat Booking</h5>
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Toko</th>
                                    <th>Layanan</th>
                                    <th>Barber</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookings as $booking)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $booking->shop->shop_name ?? '-' }}</td>
                                    <td>{{ $booking->service->service_name ?? '-' }}</td>
                                    <td>{{ $booking->barber->barber_name ?? '-' }}</td>
                                    <td>{{ $booking->booking_date }}</td>
                                    <td>{{ $booking->time_slot }}</td>
                                    <td>
                                        <span class="badge badge-{{ $booking->status == 'Completed' ? 'success' : ($booking->status == 'Cancelled' ? 'danger' : 'warning') }}">
                                            {{ $booking->status }}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <a href="{{ route('customer.index') }}" class="btn btn-light mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
@endsection
