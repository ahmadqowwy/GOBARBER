<x-layout :title="$title">

<div class="container py-5">
    <div class="card p-4 shadow">

        <h2 class="mb-4">Konfirmasi Booking</h2>

        <p><strong>Nama:</strong> {{ request('nama') }}</p>
        <p><strong>No HP:</strong> {{ request('no_hp') }}</p>
        <p><strong>Layanan:</strong> {{ request('layanan_id') }}</p>
        <p><strong>Barber:</strong> {{ request('barber_id') }}</p>
        <p><strong>Tanggal:</strong> {{ request('tanggal') }}</p>
        <p><strong>Jam:</strong> {{ request('jam') }}</p>

        <form action="{{ route('booking.sukses') }}" method="POST">
            @csrf

            <button type="submit" class="btn btn-primary">
                Selesaikan Booking
            </button>
        </form>

    </div>
</div>

</x-layout>