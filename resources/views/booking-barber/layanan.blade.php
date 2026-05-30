<x-layout title="Booking Barber">

    <style>
        .booking-bg {
            background-color: #0f172a;
            color: #fff;
            min-height: 100vh;
        }

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
            transition: 0.3s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .service-card:hover {
            border-color: #3b82f6;
            background-color: #253349;
        }

        .service-option input:checked + .service-card {
            border-color: #3b82f6;
            background-color: #253349;
            box-shadow: 0 0 0 2px #3b82f6;
        }

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
            font-weight: bold;
        }

        .step-num {
            width: 32px;
            height: 32px;
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
            color: #fff;
        }
    </style>

    <section class="booking-bg py-5">
        <div class="container">
            <div class="row g-4">

                <!-- KOLOM KIRI -->
                <div class="col-lg-8">
                    <h3 class="fw-bold mb-4">Pilih Layanan</h3>

                    <form
                        id="bookingForm"
                        action="{{ route('booking.jadwal') }}"
                        method="POST"
                    >
                        @csrf

                        <!-- Hair Cut -->
                        <label class="service-option">
                            <input
                                type="radio"
                                name="layanan_id"
                                value="1"
                                required
                            >

                            <div class="service-card">
                                <div>
                                    <h6 class="mb-1">Hair Cut</h6>

                                    <small class="text-secondary">
                                        Potong rambut standar dengan styling
                                    </small>
                                </div>

                                <span class="fw-bold text-info">
                                    Rp 50.000
                                </span>
                            </div>
                        </label>

                        <!-- Shaving -->
                        <label class="service-option">
                            <input
                                type="radio"
                                name="layanan_id"
                                value="2"
                            >

                            <div class="service-card">
                                <div>
                                    <h6 class="mb-1">Shaving</h6>

                                    <small class="text-secondary">
                                        Cukur jenggot bersih & handuk hangat
                                    </small>
                                </div>

                                <span class="fw-bold text-info">
                                    Rp 35.000
                                </span>
                            </div>
                        </label>

                        <!-- Hair Wash -->
                        <label class="service-option">
                            <input
                                type="radio"
                                name="layanan_id"
                                value="3"
                            >

                            <div class="service-card">
                                <div>
                                    <h6 class="mb-1">Hair Wash</h6>

                                    <small class="text-secondary">
                                        Keramas dan pijat kepala ringan
                                    </small>
                                </div>

                                <span class="fw-bold text-info">
                                    Rp 30.000
                                </span>
                            </div>
                        </label>

                        <!-- Hair Coloring -->
                        <label class="service-option">
                            <input
                                type="radio"
                                name="layanan_id"
                                value="4"
                            >

                            <div class="service-card">
                                <div>
                                    <h6 class="mb-1">Hair Coloring</h6>

                                    <small class="text-secondary">
                                        Pewarnaan rambut premium
                                    </small>
                                </div>

                                <span class="fw-bold text-info">
                                    Rp 150.000
                                </span>
                            </div>
                        </label>

                        <!-- Creambath -->
                        <label class="service-option">
                            <input
                                type="radio"
                                name="layanan_id"
                                value="5"
                            >

                            <div class="service-card">
                                <div>
                                    <h6 class="mb-1">
                                        Creambath & Massage
                                    </h6>

                                    <small class="text-secondary">
                                        Perawatan rambut dan relaksasi tubuh
                                    </small>
                                </div>

                                <span class="fw-bold text-info">
                                    Rp 85.000
                                </span>
                            </div>
                        </label>

                        <!-- Tombol Mobile -->
                        <button
                            type="submit"
                            class="btn btn-primary w-100 py-3 rounded-3 fw-bold mt-3 d-lg-none"
                        >
                            Selanjutnya
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>

                    </form>
                </div>

                <!-- KOLOM KANAN -->
                <div class="col-lg-4">
                    <div
                        class="step-panel position-sticky"
                        style="top: 20px;"
                    >

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
                            lalu klik tombol selanjutnya untuk melanjutkan
                            proses booking.
                        </p>

                        <!-- Tombol Desktop -->
                        <button
                            type="submit"
                            form="bookingForm"
                            class="btn btn-primary w-100 py-3 rounded-3 fw-bold shadow-lg"
                        >
                            Selanjutnya
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>

                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layout>