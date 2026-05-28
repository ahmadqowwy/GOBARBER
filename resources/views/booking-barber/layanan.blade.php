<x-layout :title="$title">
    <style>
        /* Background Deep Blue sesuai gambar */
        .booking-bg {
            background-color: #0f172a;
            color: #fff;
            min-height: 100vh;
        }

        /* Kartu Layanan */
        .service-card {
            background-color: #1e293b;
            border: 1px solid #334155;
            border-radius: 12px;
            padding: 15px 20px;
            margin-bottom: 12px;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Efek Hover */
        .service-card:hover {
            border-color: #3b82f6;
            background-color: #253349;
        }

        /* CSS Magic: Jika Radio Button dipilih, ubah warna border */
        .service-radio:checked + .service-card {
            border-color: #3b82f6;
            background-color: #253349;
            box-shadow: 0 0 0 1px #3b82f6;
        }

        /* Styling Panel Kanan */
        .step-panel {
            background-color: #1e293b;
            border-radius: 16px;
            padding: 30px;
        }

        /* Custom Step Indicator */
        .step-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: #64748b; /* Abu abu */
        }
        .step-item.active {
            color: #3b82f6; /* Biru */
            font-weight: bold;
        }
        .step-num {
            width: 30px;
            height: 30px;
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

    <section class="p-0 m-0 booking-bg">
        <div class="container py-5">
            <div class="row g-4">
                <!-- KOLOM KIRI: DAFTAR LAYANAN -->
                <div class="col-lg-8">
                    <h4 class="fw-bold mb-4">Pilih Layanan</h4>

                    <!-- FORM MENUJU LANGKAH SELANJUTNYA -->
                    <form action="{{ route('booking.jadwal') }}" method="POST">
                        @csrf
                        <!-- Keamanan wajib Laravel -->

                        <!-- Layanan 1 -->
                        <label class="w-100">
                            <input
                                type="radio"
                                name="layanan_id"
                                value="1"
                                class="d-none service-radio"
                                required
                            />
                            <div class="service-card">
                                <div>
                                    <h6 class="mb-1">Hair Cut</h6>
                                    <small class="text-secondary"
                                        >Potong rambut standar dengan
                                        styling</small
                                    >
                                </div>
                                <span class="fw-bold text-info">Rp 50.000</span>
                            </div>
                        </label>

                        <!-- Layanan 2 -->
                        <label class="w-100">
                            <input
                                type="radio"
                                name="layanan_id"
                                value="2"
                                class="d-none service-radio"
                            />
                            <div class="service-card">
                                <div>
                                    <h6 class="mb-1">Shaving</h6>
                                    <small class="text-secondary"
                                        >Cukur jenggot bersih & handuk
                                        hangat</small
                                    >
                                </div>
                                <span class="fw-bold text-info">Rp 35.000</span>
                            </div>
                        </label>

                        <!-- Layanan 3 -->
                        <label class="w-100">
                            <input
                                type="radio"
                                name="layanan_id"
                                value="3"
                                class="d-none service-radio"
                            />
                            <div class="service-card">
                                <div>
                                    <h6 class="mb-1">Hair Wash</h6>
                                    <small class="text-secondary"
                                        >Keramas dan pijat kepala ringan</small
                                    >
                                </div>
                                <span class="fw-bold text-info">Rp 30.000</span>
                            </div>
                        </label>

                        <!-- Layanan 4 -->
                        <label class="w-100">
                            <input
                                type="radio"
                                name="layanan_id"
                                value="4"
                                class="d-none service-radio"
                            />
                            <div class="service-card">
                                <div>
                                    <h6 class="mb-1">Hair Coloring</h6>
                                    <small class="text-secondary"
                                        >Pewarnaan rambut premium</small
                                    >
                                </div>
                                <span class="fw-bold text-info"
                                    >Rp 150.000</span
                                >
                            </div>
                        </label>

                        <!-- Layanan 5 -->
                        <label class="w-100">
                            <input
                                type="radio"
                                name="layanan_id"
                                value="5"
                                class="d-none service-radio"
                            />
                            <div class="service-card">
                                <div>
                                    <h6 class="mb-1">Creambath & Massage</h6>
                                    <small class="text-secondary"
                                        >Perawatan rambut dan relaksasi
                                        tubuh</small
                                    >
                                </div>
                                <span class="fw-bold text-info">Rp 85.000</span>
                            </div>
                        </label>

                        <!-- TOMBOL INI TERSEMBUNYI DI MOBILE, KARENA ADA DI PANEL KANAN -->
                        <button
                            type="submit"
                            class="btn btn-primary d-lg-none w-100 mt-3 py-3 rounded-3 fw-bold d-none d-sm-block"
                        >
                            Selanjutnya <i class="bi bi-arrow-right"></i>
                        </button>
                    </form>
                </div>

                <!-- KOLOM KANAN: LANGKAH RESERVASI -->
                <div class="col-lg-4">
                    <div class="step-panel position-sticky" style="top: 20px">
                        <h5 class="fw-bold mb-4">Langkah Reservasi</h5>

                        <!-- Step Indicators -->
                        <div class="step-item active">
                            <div class="step-num">1</div>
                            <span>Pilih Layanan</span>
                        </div>
                        <div class="step-item">
                            <div class="step-num">2</div>
                            <span>Pilih Barber</span>
                        </div>
                        <div class="step-item">
                            <div class="step-num">2</div>
                            <span>Pilih Jadwal</span>
                        </div>

                        <div class="step-item">
                            <div class="step-num">3</div>
                            <span>Konfirmasi</span>
                        </div>

                        <hr class="my-4 border-secondary" />

                        <p class="text-secondary small">
                            Pilih salah satu layanan yang Anda inginkan, lalu
                            klik tombol "Selanjutnya" untuk melanjutkan proses
                            booking.
                        </p>

                        <!-- TOMBOL SELANJUTNYA (Desktop) -->
                        <!-- Kita pakai ID untuk submit form dari jarak jauh -->
                        <button
                            type="submit"
                            form="bookingForm"
                            class="btn btn-primary w-100 py-3 rounded-3 fw-bold mt-2 shadow-lg"
                        >
                            Selanjutnya <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script Kecil untuk Menghubungkan Tombol Kanan dengan Form Kiri -->
    <script>
        // Cari tombol yang ada di kolom kanan, dan beri event click untuk mensubmit form
        document
            .querySelector('.step-panel button[type="submit"]')
            .addEventListener("click", function () {
                // Cari form terdekat (atau form pertama di halaman) dan submit
                document.querySelector("form").submit();
            });
    </script>
</x-layout>
