@extends('layouts.base-admin')

@section('title')
    <title>Daftar Payment || GoBarberShop</title>
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Payment</h4>
                    <p class="card-description">Daftar pembayaran yang masuk.</p>
                    
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable">
                            <thead>
                                <tr>
                                    <th>ID Payment</th>
                                    <th>Booking ID</th>
                                    <th>Customer</th>
                                    <th>Jumlah (Rp)</th>
                                    <th>Metode</th>
                                    <th>Status Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($payments as $payment)
                                <tr>
                                    <td>#{{ $payment->payment_id }}</td>
                                    <td><a href="{{ route('booking.show', $payment->booking_id) }}">#{{ $payment->booking_id }}</a></td>
                                    <td>{{ $payment->booking->customer->name ?? '-' }}</td>
                                    <td>Rp {{ number_format($payment->amount, 0, ',', '.') }}</td>
                                    <td>{{ $payment->payment_method }}</td>
                                    <td>
                                        <span class="badge badge-{{ $payment->payment_status == 'Paid' ? 'success' : 'warning' }}">
                                            {{ $payment->payment_status }}
                                        </span>
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
