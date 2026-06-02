<x-layout :title="$title">

@php
$layanan = [
    1 => 'Hair Cut',
    2 => 'Shaving',
    3 => 'Hair Wash',
    4 => 'Hair Coloring',
    5 => 'Creambath & Massage'
];

$harga = [
    1 => 50000,
    2 => 35000,
    3 => 30000,
    4 => 150000,
    5 => 85000
];

$barber = [
    1 => 'Alex Johnson',
    2 => 'Budi Santoso',
    3 => 'Rizky Pratama',
    4 => 'Dimas Arya'
];

$total = $harga[request('layanan_id')] ?? 0;
@endphp

<style>
.booking-bg{
    background:#0f172a;
    min-height:100vh;
    color:white;
}

.confirm-card{
    background:#1e293b;
    border-radius:20px;
    padding:35px;
    box-shadow:0 10px 30px rgba(0,0,0,.3);
}

.booking-item{
    display:flex;
    justify-content:space-between;
    padding:14px 0;
    border-bottom:1px solid #334155;
}

.booking-item:last-child{
    border-bottom:none;
}

.label{ color:#94a3b8; }
.value{ font-weight:600; color:white; }

.booking-title{
    text-align:center;
    margin-bottom:30px;
}

.icon-success{
    width:80px;
    height:80px;
    border-radius:50%;
    background:#22c55e;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:0 auto 20px;
    font-size:35px;
}

.payment-box{
    background:#0f172a;
    border:1px solid #334155;
    border-radius:12px;
    padding:20px;
    margin-top:20px;
}

.total-price{
    font-size:24px;
    font-weight:bold;
    color:#3b82f6;
}
</style>

<section class="booking-bg py-5">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-7">

<div class="confirm-card">

    <div class="icon-success">
        <i class="bi bi-calendar-check"></i>
    </div>

    <div class="booking-title">
        <h2 class="fw-bold">Konfirmasi Booking</h2>
        <p class="text-secondary mb-0">Periksa kembali data booking Anda</p>
    </div>

    <div class="booking-item">
        <span class="label">Nama</span>
        <span class="value">{{ request('nama') }}</span>
    </div>

    <div class="booking-item">
        <span class="label">No HP</span>
        <span class="value">{{ request('no_hp') }}</span>
    </div>

    <div class="booking-item">
        <span class="label">Layanan</span>
        <span class="value">{{ $layanan[request('layanan_id')] ?? '-' }}</span>
    </div>

    <div class="booking-item">
        <span class="label">Barber</span>
        <span class="value">{{ $barber[request('barber_id')] ?? '-' }}</span>
    </div>

    <div class="booking-item">
        <span class="label">Tanggal</span>
        <span class="value">{{ request('tanggal') }}</span>
    </div>

    <div class="booking-item">
        <span class="label">Jam</span>
        <span class="value">{{ request('jam') }}</span>
    </div>

    <hr class="my-4">

    <h5 class="mb-3">Metode Pembayaran</h5>

    <div class="form-check mb-2">
        <input class="form-check-input" type="radio" name="pembayaran" value="Cash" checked>
        <label class="form-check-label">Cash di Tempat</label>
    </div>

    <div class="form-check mb-2">
        <input class="form-check-input" type="radio" name="pembayaran" value="QRIS">
        <label class="form-check-label">QRIS</label>
    </div>

    <div class="form-check mb-3">
        <input class="form-check-input" type="radio" name="pembayaran" value="Transfer Bank">
        <label class="form-check-label">Transfer Bank</label>
    </div>

    <div class="payment-box">

        <h5 class="mb-3">Detail Pembayaran</h5>

        <div class="booking-item">
            <span>{{ $layanan[request('layanan_id')] ?? '-' }}</span>
            <span>Rp {{ number_format($total,0,',','.') }}</span>
        </div>

        <div class="booking-item">
            <span>Biaya Admin</span>
            <span>Rp 2.000</span>
        </div>

        <div class="booking-item">
            <strong>Total Pembayaran</strong>
            <span class="total-price">
                Rp {{ number_format($total + 2000,0,',','.') }}
            </span>
        </div>

    </div>

    <form action="{{ route('booking.sukses') }}" method="POST" class="mt-4">
        @csrf

        <input type="hidden" name="pembayaran" id="pembayaranHidden" value="Cash">

        <button type="submit" class="btn btn-primary w-100 py-3 fw-bold">
            <i class="bi bi-check-circle me-2"></i>
            Selesaikan Booking
        </button>
    </form>

</div>

</div>
</div>
</div>
</section>

<script>
document.querySelectorAll('input[name="pembayaran"]').forEach(function(item){
    item.addEventListener('change', function(){
        document.getElementById('pembayaranHidden').value = this.value;
    });
});
</script>

</x-layout>