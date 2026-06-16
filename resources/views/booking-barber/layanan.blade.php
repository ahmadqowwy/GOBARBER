<x-layout title="Booking Barber">

    <style>
        .booking-bg {
            background-color: #0f172a;
            color: #fff;
            min-height: 100vh;
            padding-top: 100px;
        }

        /* CARD LAYANAN */
        .service-option {
            display: block;
            margin-bottom: 15px;
            cursor: pointer;
        }

        .service-option input {
            display: none;
        }

        .service-card {
            background-color: #1e293b;
            border: 1px solid #334155;
            border-radius: 14px;
            padding: 18px 20px;
            transition: .3s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .service-card:hover {
            border-color: #3b82f6;
            background-color: #253349;
        }

        .service-option input:checked+.service-card {
            border-color: #3b82f6;
            background-color: #253349;
            box-shadow: 0 0 0 2px #3b82f6;
        }

        /* SIDEBAR */
        .step-panel {
            background-color: #1e293b;
            border-radius: 18px;
            padding: 30px;
        }

        .step-item {
            display: flex;
            align-items: center;
            margin-bottom: 18px;
            color: #64748b;
        }

        .step-item.active {
            color: #3b82f6;
            font-weight: 600;
        }

        .step-num {
            width: 32px;
            height: 32px;
            min-width: 32px;
            border-radius: 50%;
            border: 2px solid currentColor;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 12px;
            font-size: 14px;
        }

        .step-item.active .step-num {
            background-color: #3b82f6;
            border-color: #3b82f6;
            color: white;
        }

        /* TABLET */
        @media (max-width: 991px) {

            .booking-bg {
                padding-top: 85px;
            }

            .step-panel {
                position: static !important;
                margin-top: 20px;
                padding: 20px;
            }

            .service-card {
                padding: 15px;
            }

            .service-card h6 {
                font-size: 15px;
            }

            .service-card small {
                font-size: 12px;
            }

            .service-card span {
                font-size: 14px;
                white-space: nowrap;
            }
        }

        /* MOBILE */
        @media (max-width: 576px) {

            .booking-bg {
                padding-top: 75px;
            }

            .container {
                padding-left: 15px;
                padding-right: 15px;
            }

            .service-card {
                flex-direction: column;
                align-items: flex-start;
            }

            .service-card span {
                margin-top: 10px;
                font-size: 16px;
            }

            h3 {
                font-size: 22px;
            }
        }
    </style>

    <section class="booking-bg px-5">
        <div class="container">

            <div class="row g-4">

                <!-- KOLOM KIRI -->
                <div class="col-lg-8">

                    <h3 class="fw-bold mb-4">
                        Pilih Layanan {{ $shop->shop_name }}
                    </h3>

                    <form id="bookingForm" action="{{ route('booking.barber-pilih') }}" method="POST">

                        @csrf
                        <input type="hidden" name="shop_id" value="{{ $shop->shop_id }}">

                        @foreach ($service as $data)
                            <label class="service-option">

                                <input type="radio" name="layanan_id" value="{{ $data->service_id }}" required>

                                <div class="service-card">

                                    <div>
                                        <h6 class="mb-1 fw-bold">
                                            {{ $data->service_name }}
                                        </h6>

                                        <small class="text-secondary">
                                            {{ $data->description }}
                                        </small>
                                    </div>

                                    <span class="fw-bold text-info">
                                        Rp {{ $data->price }}
                                    </span>

                                </div>

                            </label>
                        @endforeach

                        <!-- TOMBOL MOBILE -->
                        <button type="submit" class="btn btn-primary w-100 py-3 rounded-3 fw-bold mt-3 d-lg-none">

                            Selanjutnya
                            <i class="bi bi-arrow-right ms-2"></i>

                        </button>

                    </form>

                </div>

                <!-- KOLOM KANAN -->
                <div class="col-lg-4">

                    <div class="step-panel position-sticky d-none d-lg-block" style="top: 100px;">

                        <h5 class="fw-bold mb-4">
                            Langkah Reservasi
                        </h5>

                        <div class="step-item active">
                            <div class="step-num">1</div>
                            <span>Pilih Layanan</span>
                        </div>

                        <div class="step-item">
                            <div class="step-num">2</div>
                            <span>Pilih Barber</span>
                        </div>

                        <div class="step-item">
                            <div class="step-num">3</div>
                            <span>Pilih Jadwal</span>
                        </div>

                        <div class="step-item">
                            <div class="step-num">4</div>
                            <span>Konfirmasi</span>
                        </div>

                        <hr class="border-secondary my-4">

                        <p class="text-secondary small">
                            Pilih salah satu layanan yang Anda inginkan,
                            lalu klik tombol selanjutnya untuk melanjutkan proses booking.
                        </p>

                        <button type="submit" form="bookingForm"
                            class="btn btn-primary w-100 py-3 rounded-3 fw-bold shadow">
                            Selanjutnya
                            <i class="bi bi-arrow-right ms-2"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>
    </section>

</x-layout>
