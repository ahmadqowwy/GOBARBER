@extends('layouts.base-admin')

@section('title')
    <title>Dashboard Admin || GoBarberShop</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">

                        @if ($admin->role == 'admin')
                            {{-- Jika yang login adalah Admin Utama --}}
                            <h3 class="font-weight-bold">

                                Welcome Admin Utama 👋

                            </h3>

                            <h6 class="font-weight-normal mb-0">

                                Selamat datang di panel administrator GoBarberShop.

                                <span class="text-primary">
                                    Kelola seluruh sistem dengan mudah.
                                </span>

                            </h6>
                        @else
                            {{-- jika yang login adalah Owner Barber --}}
                            <h3 class="font-weight-bold">

                                Welcome {{ $owner->owner_name }} 👋

                            </h3>

                            <h6 class="font-weight-normal mb-0">

                                Barber Shop:

                                <span class="text-primary font-weight-bold">

                                    {{ $shop->shop_name }}

                                </span>

                            </h6>
                        @endif

                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <div class="d-flex align-items-center text-muted font-weight-normal">

                                    <i class="mdi mdi-calendar-clock mr-2"></i>

                                    <span id="datetime"></span>

                                </div>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                    <a class="dropdown-item" href="#">January - March</a>
                                    <a class="dropdown-item" href="#">March - June</a>
                                    <a class="dropdown-item" href="#">June - August</a>
                                    <a class="dropdown-item" href="#">August - November</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="{{ asset('assets/skydash/images/dashboard/people.svg') }}" alt="people">
                        <div class="weather-info">
                            <div class="d-flex">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Total Services</p>
                                <p class="fs-30 mb-2">{{ $services_count }}</p>
                                <p>Layanan yang tersedia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Total Barbers</p>
                                <p class="fs-30 mb-2">{{ $barbers_count }}</p>
                                <p>Barberman aktif</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Total Bookings</p>
                                <p class="fs-30 mb-2">{{ $bookings_count }}</p>
                                <p>Seluruh reservasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">Total Customers</p>
                                <p class="fs-30 mb-2">{{ $customers_count }}</p>
                                <p>Pelanggan terdaftar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script>
        function updateDateTime() {

            const now = new Date();

            // Format tanggal Indonesia
            const options = {
                weekday: 'long',
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            };

            const date = now.toLocaleDateString('id-ID', options);

            // Format jam realtime
            const time = now.toLocaleTimeString('id-ID');

            document.getElementById('datetime').innerHTML =
                `${date} | ${time}`;
        }

        // Pertama kali load
        updateDateTime();

        // Update setiap detik
        setInterval(updateDateTime, 1000);
    </script>
@endsection
