<x-layout :title="$title">
    <style>
        body {
            background: #0B0F1A;
            font-family: 'Poppins', sans-serif;
        }

        .search-section {
            padding: 120px 40px 60px 40px;
            min-height: 100vh;
        }

        .section-title {
            color: white;
            font-size: 28px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: #4DA3FF;
            border-radius: 10px;
        }

        .card-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        .card-custom {
            background: #161B2E;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            transition: 0.4s ease;
            position: relative;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: white;
        }

        .card-custom:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(77, 163, 255, 0.45);
            color: white;
        }

        .card-custom img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: 0.4s ease;
        }

        .card-custom:hover img {
            transform: scale(1.05);
        }

        .card-content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-content h4 {
            font-weight: 700;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .card-content p {
            color: #b0b0b0;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .badge-type {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #4DA3FF;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            z-index: 2;
        }

        .btn-detail {
            margin-top: auto;
            background: rgba(77, 163, 255, 0.1);
            color: #4DA3FF;
            border: 1px solid #4DA3FF;
            padding: 8px 15px;
            border-radius: 30px;
            text-align: center;
            font-weight: 600;
            transition: 0.3s;
        }

        .card-custom:hover .btn-detail {
            background: #4DA3FF;
            color: white;
        }

        .no-result {
            text-align: center;
            padding: 50px 0;
            color: #b0b0b0;
        }

        .no-result i {
            font-size: 50px;
            margin-bottom: 20px;
            color: #4DA3FF;
        }
    </style>

    <section class="search-section">
        <div class="container">
            <h2 class="text-white mb-5 fw-bold">Hasil Pencarian untuk: <span
                    class="text-primary">"{{ $keyword }}"</span></h2>

            @if ($shops->isEmpty() && $services->isEmpty() && $barbers->isEmpty())
                <div class="no-result">
                    <i class="bi bi-search"></i>
                    <h3>Tidak ada hasil yang ditemukan</h3>
                    <p>Silakan coba dengan kata kunci lain.</p>
                </div>
            @else
                <!-- BARBERSHOP -->
                @if ($shops->isNotEmpty())
                    <h3 class="section-title">Barbershop</h3>
                    <div class="card-wrapper">
                        @foreach ($shops as $shop)
                            <a href="{{ route('detail.shop', $shop->shop_id) }}" class="card-custom">
                                <span class="badge-type">Barbershop</span>
                                @if ($shop->photo)
                                    <img src="{{ $shop->photo }}" alt="Foto Barber">
                                @else
                                    <div class="d-flex justify-content-center align-items-center bg-secondary"
                                        style="height: 200px;">
                                        <span class="text-white">Tidak ada foto</span>
                                    </div>
                                @endif
                                <div class="card-content">
                                    <h4>{{ $shop->shop_name }}</h4>
                                    <p><i class="bi bi-geo-alt me-2"></i>{{ $shop->location }}</p>
                                    <div class="btn-detail">Lihat Detail</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif

                <!-- LAYANAN -->
                @if ($services->isNotEmpty())
                    <h3 class="section-title">Layanan</h3>
                    <div class="card-wrapper">
                        @foreach ($services as $service)
                            <a href="{{ route('detail.shop', $service->shop_id) }}" class="card-custom">
                                <span class="badge-type bg-success">Layanan</span>
                                @if ($service->photo)
                                    <img src="{{ $service->photo }}" alt="Foto Layanan">
                                @else
                                    <div class="d-flex justify-content-center align-items-center bg-secondary"
                                        style="height: 200px;">
                                        <i class="bi bi-scissors text-white fs-1"></i>
                                    </div>
                                @endif
                                <div class="card-content">
                                    <h4>{{ $service->service_name }}</h4>
                                    <p class="mb-1"><i
                                            class="bi bi-shop me-2"></i>{{ $service->shop->shop_name ?? 'Barbershop' }}
                                    </p>
                                    <p class="text-warning fw-bold mb-3">Rp
                                        {{ number_format((float) $service->price, 0, ',', '.') }}</p>
                                    <div class="btn-detail border-success text-success">Lihat Barbershop</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif

                <!-- BARBER -->
                @if ($barbers->isNotEmpty())
                    <h3 class="section-title">Kapster / Barber</h3>
                    <div class="card-wrapper">
                        @foreach ($barbers as $barber)
                            <a href="{{ route('detail.shop', $barber->shop_id) }}" class="card-custom">
                                <span class="badge-type bg-warning text-dark">Kapster</span>
                                @if ($barber->photo)
                                    <img src="{{ asset($barber->photo) }}" alt="Foto Barber"
                                        style="object-position: top;">
                                @else
                                    <div class="d-flex justify-content-center align-items-center bg-secondary"
                                        style="height: 200px;">
                                        <i class="bi bi-person text-white fs-1"></i>
                                    </div>
                                @endif
                                <div class="card-content">
                                    <h4>{{ $barber->barber_name }}</h4>
                                    <p><i class="bi bi-shop me-2"></i>{{ $barber->shop->shop_name ?? 'Barbershop' }}
                                    </p>
                                    <div class="btn-detail border-warning text-warning">Lihat Barbershop</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif

            @endif
        </div>
    </section>
</x-layout>
