@extends('layouts.base-admin')

@section('title')
    <title>Manajemen Booking || GoBarberShop</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Booking</h4>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Toko</th>
                                    <th>Service</th>
                                    <th>Tanggal & Waktu</th>
                                    <th>Status</th>
                                    <th>Aksi Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookings as $booking)
                                <tr>
                                    <td>#{{ $booking->booking_id }}</td>
                                    <td>{{ $booking->customer->name ?? '-' }}</td>
                                    <td>{{ $booking->shop->shop_name ?? '-' }}</td>
                                    <td>{{ $booking->service->service_name ?? '-' }}</td>
                                    <td>{{ $booking->booking_date }}<br><small>{{ $booking->time_slot }}</small></td>
                                    <td>
                                        <span class="badge badge-{{ $booking->status == 'Completed' ? 'success' : ($booking->status == 'Cancelled' ? 'danger' : 'warning') }}">
                                            {{ $booking->status }}
                                        </span>
                                    </td>
                                    <td>
                                        <form action="{{ route('booking.update', $booking->booking_id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('PUT')
                                            <select name="status" class="form-control form-control-sm d-inline" style="width: auto;" onchange="this.form.submit()">
                                                <option value="Pending" {{ $booking->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="Confirmed" {{ $booking->status == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                <option value="Completed" {{ $booking->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                                <option value="Cancelled" {{ $booking->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
