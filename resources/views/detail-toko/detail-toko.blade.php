<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght=300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        html {
            scroll-behavior: smooth;
        }

        * {
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', sans-serif;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            background: linear-gradient(to bottom, rgba(11, 15, 26, 0.7) 0%, #0b0f1a 20%, #0b0f1a 100%),
                url("{{ asset('assets/images/foto4.jpg') }}") !important;
            background-size: 100% auto !important;
            background-repeat: no-repeat !important;
            background-position: top center !important;
            color: #ffffff !important;
            margin: 0;
            padding: 0;
        }

        /* ======================================================== */
        /* CYBER BLUE NEON RIPPLE EFFECT (EFEK KLIK BIRU KEREN)     */
        /* ======================================================== */
        .btn-booking-main,
        .tab-btn,
        .fg-btn-fav,
        .fg-btn-cart,
        .service-card,
        .fg-product-card,
        .barber-card {
            position: relative;
            overflow: hidden;
            transition: transform 0.4s cubic-bezier(0.25, 1, 0.5, 1),
                box-shadow 0.4s cubic-bezier(0.25, 1, 0.5, 1);
        }

        /* Efek Membal Pegas Saat Ditekan */
        .btn-booking-main:active,
        .tab-btn:active,
        .fg-btn-fav:active,
        .fg-btn-cart:active {
            transform: scale(0.92) !important;
            transition: transform 0.1s cubic-bezier(0.25, 1, 0.5, 1) !important;
        }

        .service-card:active,
        .fg-product-card:active,
        .barber-card:active {
            transform: scale(0.98) !important;
            transition: transform 0.1s cubic-bezier(0.25, 1, 0.5, 1) !important;
        }

        /* Animasi Riak Gelombang Biru Neon */
        .aesthetic-ripple {
            position: absolute;
            border-radius: 50%;
            transform: scale(0);
            background: radial-gradient(circle, rgba(0, 210, 255, 0.5) 0%, rgba(37, 99, 235, 0.2) 70%, transparent 100%);
            animation: cyber-blue-ripple 0.6s cubic-bezier(0.1, 0.8, 0.3, 1);
            pointer-events: none;
        }

        @keyframes cyber-blue-ripple {
            0% {
                transform: scale(0);
                opacity: 1;
                box-shadow: 0 0 10px rgba(0, 210, 255, 0.5), inset 0 0 10px rgba(0, 210, 255, 0.3);
            }

            50% {
                box-shadow: 0 0 25px rgba(37, 99, 235, 0.8), inset 0 0 15px rgba(37, 99, 235, 0.4);
            }

            100% {
                transform: scale(3.5);
                opacity: 0;
                box-shadow: 0 0 40px rgba(37, 99, 235, 0), inset 0 0 20px rgba(37, 99, 235, 0);
            }
        }

        /* 1. HERO SECTION BANNER */
        .hero-banner {
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            padding: 0 10%;
        }

        .profile-container {
            display: flex;
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 210, 255, 0.3);
            /* List border agak kebiruan biar senada */
            box-shadow: 0 0 25px rgba(37, 99, 235, 0.15);
            border-radius: 24px;
            padding: 32px;
            max-width: 900px;
            width: 100%;
            gap: 32px;
            align-items: center;
            margin: 120px auto 20px auto;
        }

        .profile-logo-box {
            background-color: #000000;
            width: 220px;
            height: 220px;
            border-radius: 16px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            border: 1px solid #1e293b;
            flex-shrink: 0;
        }

        .profile-logo-box img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .logo-text-sub {
            font-size: 11px;
            color: #94a3b8;
            font-weight: 700;
            letter-spacing: 1px;
            margin-top: 8px;
            text-align: center;
        }

        .info-content {
            flex: 1;
        }

        .shop-name {
            font-size: 28px;
            font-weight: 800;
            margin: 0 0 4px 0;
            letter-spacing: -0.5px;
        }

        .shop-tagline {
            color: #94a3b8;
            font-size: 13px;
            font-weight: 600;
            margin: 0 0 16px 0;
        }

        .info-grid {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 24px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            color: #cbd5e1;
            font-size: 12.5px;
            line-height: 1.4;
        }

        .info-item i {
            color: #00d2ff;
            margin-top: 3px;
            font-size: 14px;
            width: 16px;
            text-align: center;
        }

        .rating-badge {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #f59e0b;
            font-weight: 700;
        }

        .btn-booking-main {
            background-color: #2563eb;
            color: #ffffff;
            border: none;
            padding: 12px 28px;
            border-radius: 9999px;
            font-weight: 700;
            font-size: 13px;
            cursor: pointer;
            box-shadow: 0 4px 14px rgba(37, 99, 235, 0.4);
        }

        .btn-booking-main:hover {
            background-color: #1d4ed8;
            box-shadow: 0 0 20px rgba(0, 210, 255, 0.6);
        }

        /* 2. FLOATING & STICKY NAVIGATION TAB MENU */
        .tab-menu-section {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin: 50px auto;
            position: sticky;
            top: 24px;
            z-index: 999;
            background: rgba(11, 15, 26, 0.8);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            padding: 10px 24px;
            border-radius: 9999px;
            max-width: fit-content;
            border: 1px solid rgba(0, 210, 255, 0.2);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6), 0 0 15px rgba(37, 99, 235, 0.3);
        }

        .tab-btn {
            background-color: transparent;
            color: #94a3b8;
            border: 1px solid transparent;
            padding: 10px 28px;
            border-radius: 9999px;
            font-size: 14px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            text-decoration: none;
        }

        .tab-btn:hover {
            color: #ffffff;
        }

        .tab-btn.active {
            background-color: #2563eb !important;
            color: #ffffff !important;
            box-shadow: 0 0 15px rgba(0, 210, 255, 0.6);
            transform: scale(1.05);
        }

        /* SPACING UNTUK ANCHOR SCROLL */
        .section-target {
            scroll-margin-top: 120px;
            padding-bottom: 80px;
            opacity: 0.95;
        }

        /* TITLE GLOBAL SECTION */
        .section-header-text {
            max-width: 900px;
            margin: 0 auto 32px auto;
            padding: 0 20px;
        }

        .section-header-text h2 {
            font-size: 32px;
            font-weight: 800;
            margin: 0;
            color: #ffffff;
        }

        .section-header-text p {
            color: #00d2ff;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 4px 0 0 0;
        }

        /* 3. LAYANAN LIST CONTAINER */
        .services-list-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .service-card {
            background-color: #ffffff;
            color: #0f172a;
            border-radius: 16px;
            padding: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .service-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 210, 255, 0.2);
        }

        .service-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .service-img {
            width: 100px;
            height: 75px;
            border-radius: 10px;
            object-fit: cover;
        }

        .service-detail h3 {
            margin: 0 0 4px 0;
            font-size: 15px;
            font-weight: 700;
            color: #0f172a;
        }

        .service-detail p {
            margin: 0;
            color: #64748b;
            font-size: 12px;
            line-height: 1.4;
            max-width: 500px;
        }

        .service-right {
            text-align: right;
            padding-right: 10px;
            flex-shrink: 0;
        }

        .service-price {
            display: block;
            font-weight: 800;
            color: #0f172a;
            font-size: 14px;
            margin-bottom: 2px;
        }

        .service-duration {
            font-size: 11px;
            color: #94a3b8;
            font-weight: 500;
        }

        /* 4. SHOP/PRODUCT SECTION (GRID ASIMETRIS FIGMA) */
        .figma-shop-section {
            max-width: 950px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 32px;
        }

        .shop-left-side {
            display: flex;
            flex-direction: column;
        }

        .figma-shop-header {
            margin-bottom: 28px;
        }

        .figma-shop-header h2 {
            font-size: 42px;
            font-weight: 800;
            margin: 0 0 14px 0;
            color: #ffffff;
            font-family: serif;
        }

        .figma-shop-header h3 {
            font-size: 14px;
            font-weight: 700;
            color: #00d2ff;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 0 0 10px 0;
        }

        .figma-shop-header p {
            font-size: 11px;
            color: #94a3b8;
            line-height: 1.6;
            margin: 0;
            max-width: 440px;
        }

        .figma-left-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .shop-right-side {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding-top: 15px;
        }

        /* CARD PRODUK STYLE */
        .fg-product-card {
            background-color: #0d093a;
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.25);
            cursor: pointer;
        }

        .fg-product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(13, 9, 58, 0.6), 0 0 15px rgba(0, 210, 255, 0.2);
        }

        .fg-img-box {
            width: 100%;
            aspect-ratio: 1 / 1;
            overflow: hidden;
            background-color: #12104a;
        }

        .fg-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .fg-img-box-large {
            width: 100%;
            height: 310px;
            overflow: hidden;
        }

        .fg-img-box-large img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .fg-info-box {
            padding: 16px;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .fg-name {
            font-size: 14px;
            font-weight: 700;
            color: #ffffff;
            margin: 0 0 6px 0;
        }

        .fg-price {
            font-size: 12px;
            color: #94a3b8;
            margin: 0;
            font-weight: 500;
        }

        .fg-btn-group {
            position: absolute;
            bottom: 14px;
            right: 16px;
            display: flex;
            align-items: center;
            border-radius: 4px;
            overflow: hidden;
            z-index: 10;
        }

        .fg-btn-fav {
            background-color: #ffffff;
            color: #0d093a;
            border: none;
            width: 28px;
            height: 26px;
            font-size: 11px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fg-btn-fav:hover {
            background-color: #e2e8f0;
        }

        .fg-btn-cart {
            background-color: #2563eb;
            color: #ffffff;
            border: none;
            width: 28px;
            height: 26px;
            font-size: 11px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fg-btn-cart:hover {
            background-color: #1d4ed8;
            box-shadow: 0 0 10px rgba(0, 210, 255, 0.7);
        }

        @media (max-width: 768px) {
            .figma-shop-section {
                grid-template-columns: 1fr;
            }

            .shop-right-side {
                padding-top: 0;
            }
        }

        /* 5. BARBER SECTION */
        .barber-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 50px 20px 40px 20px;
        }

        .barber-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 24px;
        }

        .barber-card {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            height: 340px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            background-color: #0e1420;
            cursor: pointer;
        }

        .barber-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .barber-card:hover img {
            transform: scale(1.04);
        }

        .barber-info-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, #0b0f1a 0%, rgba(11, 15, 26, 0) 100%);
            padding: 24px 20px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .barber-name {
            font-size: 18px;
            font-weight: 700;
            margin: 0;
            color: #ffffff;
        }

        .barber-role {
            font-size: 12px;
            color: #00d2ff;
            margin: 4px 0 0 0;
            font-weight: 600;
        }
    </style>

    <div class="hero-banner">
        <div class="profile-container">
            <div class="profile-logo-box">
                @if ($shop->photo)
                    <img src="{{ $shop->photo }}" alt="Foto Barber" class="service-img">
                @else
                    <span class="text-muted">Tidak ada foto</span>
                @endif
                {{-- <img src="{{ asset('assets/images/foto1.jpg') }}" alt="Gamoen Logo"> --}}
                <div style="font-size: 20px; font-weight: 800; color: #fff; margin-top: 10px; letter-spacing: 0.5px;">
                    {{ $shop->shop_name }}</div>
                <div class="logo-text-sub">.CO BARBERSHOP </div>
            </div>

            <div class="info-content">
                <h1 class="shop-name">{{ $shop->shop_name }}</h1>
                <div class="shop-tagline">Hair Avenue</div>

                <div class="info-grid">
                    <div class="info-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>{{ $shop->location }}</span>
                    </div>
                    <div class="info-item">
                        <i class="fa-regular fa-clock"></i>
                        <span>{{ $shop->open_time }} - {{ $shop->close_time }}</span>
                    </div>
                    <div class="info-item">
                        <i class="fa-solid fa-phone"></i>
                        <span>+0813-3093-1823</span>
                    </div>
                    <div class="info-item">
                        <i class="fa-solid fa-star"></i>
                        <div class="rating-badge">4.7 <span
                                style="color: #64748b; font-weight: 400; font-size: 11px;">(1000)</span></div>
                    </div>
                </div>

                <p style="color: #94a3b8; font-size: 11.5px; line-height: 1.5; margin: 0 0 20px 0; max-width: 550px;">
                    Hair Avenue provides expert haircuts, styling, along with services like facials, cleanups, skincare
                    and makeup to keep you looking your best.
                </p>
                <a href="{{ route('booking.barber', $shop->shop_id) }}">
                    <button class="btn btn-danger w-100 py-3 fw-bold rounded-3 shadow-lg">
                        Booking Sekarang
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="tab-menu-section">
        <a href="#sec-layanan" class="tab-btn active" id="btn-layanan">
            <i class="fa-solid fa-scissors"></i> Layanan
        </a>
        <a href="#sec-produk" class="tab-btn" id="btn-produk">
            <i class="fa-solid fa-box"></i> Produk
        </a>
        <a href="#sec-barber" class="tab-btn" id="btn-barber">
            <i class="fa-solid fa-user-tie"></i> Barber
        </a>
    </div>

    <div id="sec-layanan" class="section-target">
        <div class="section-header-text">
            <h2>Our Services</h2>
            <p>Premium Treatments & Grooming</p>
        </div>

        <div class="services-list-container">
            @foreach ($service as $serviceShop)
                <div class="service-card">
                    <div class="service-left">
                        {{-- <img src="{{ asset('assets/images/foto1.jpg') }}" class="service-img" alt="Hair Cut"> --}}
                        @if ($serviceShop->photo)
                            <img src="{{ $serviceShop->photo }}" alt="Foto Barber" class="service-img">
                        @else
                            <span class="text-muted">Tidak ada foto</span>
                        @endif
                        <div class="service-detail">
                            <h3>{{ $serviceShop->service_name }}</h3>
                            <p>{{ $serviceShop->description }}</p>
                        </div>
                    </div>
                    <div class="service-right">
                        <span class="service-price">IDR {{ $serviceShop->price }}</span>
                        <span class="service-duration">{{ $serviceShop->duration }} Menit</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <div id="sec-produk" class="section-target" style="padding-top: 40px;">
        <div class="figma-shop-section">

            <div class="shop-left-side">
                <div class="figma-shop-header">
                    <h2>Shop</h2>
                    <h3>STYLING & CARE PRODUCTS</h3>
                    <p>HIGH HOLD WITH MATTE FINISH FORMING CREAM: A hair styling cream that effortlessly molds hair into
                        the style you want.</p>
                </div>

                <div class="figma-left-grid">
                    @forelse ($produk as $item)
                        <div class="fg-product-card">
                            <div class="fg-img-box">
                                @if ($item->photo)
                                    <img src="{{ $item->photo }}" alt="Foto Produk" class="service-img">
                                @else
                                    <span class="text-muted">Tidak ada foto</span>
                                @endif
                            </div>
                            <div class="fg-info-box">
                                <h4 class="fg-name">{{ $item->name_product }}</h4>
                                <p class="fg-price">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                                <div class="fg-btn-group">
                                    <button class="fg-btn-fav"><i class="fa-regular fa-heart"></i></button>
                                    <button class="fg-btn-cart"><i class="fa-solid fa-cart-shopping"></i></button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-4">
                            <h2>Produk tidak tersedia.</h2>
                        </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>


    <div id="sec-barber" class="section-target">
        <div class="barber-container">
            <div class="section-header-text">
                <h2>Our Barber</h2>
                <p>Professional Hair Stylist</p>
            </div>

            <div class="barber-grid">
                @foreach ($barberman as $data)
                    <div class="barber-card">
                        @if ($data->photo)
                            <img src="{{ $data->photo }}" alt="Foto Barberman">
                        @else
                            <span class="text-muted">Tidak ada foto</span>
                        @endif
                        <div class="barber-info-overlay">
                            <h3 class="barber-name">{{ $data->barber_name }}</h3>
                            <p class="barber-role">{{ $data->specialty }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <script></script>
    @include('detail-toko.toko-footer')

</x-layout>
