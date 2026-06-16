<x-layout :title="$title">
    <style>
        /* Background Deep Blue */
        .booking-bg {
            background-color: #0f172a;
            color: #fff;
            min-height: 100vh;
            padding-top: 100px;
        }

        /* Kartu Barber */
        .barber-card {
            background-color: #1e293b;
            border: 1px solid #334155;
            border-radius: 12px;
            padding: 15px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .barber-card:hover {
            border-color: #3b82f6;
        }

        /* CSS Magic: Jika dipilih, border biru */
        .barber-radio:checked+.barber-card {
            border-color: #3b82f6;
            box-shadow: 0 0 0 1px #3b82f6;
            background-color: #253349;
        }

        /* Gambar Barber */
        .barber-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            object-position: top center;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        /* Panel Kanan */
        .step-panel {
            background-color: #1e293b;
            border-radius: 16px;
            padding: 30px;
        }

        /* Step Indicator */
        .step-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: #64748b;
        }

        .step-item.active {
            color: #3b82f6;
            font-weight: bold;
        }

        .step-item.done {
            color: #10b981;
            /* Hijau untuk selesai */
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

        .step-item.done .step-num {
            background-color: #10b981;
            border-color: #10b981;
            color: #fff;
        }
    </style>

    <section class="booking-bg px-5">
        <div class="container py-5">
            <div class="row g-4">
                <!-- KOLOM KIRI: DAFTAR BARBER -->
                <div class="col-lg-8">
                    <h4 class="fw-bold mb-4">Pilih Barber</h4>

                    <form id="barberForm" action="{{ route('booking.jadwal') }}" method="POST">
                        @csrf

                        <!-- MENYIMPAN DATA DARI LANGKAH 1 -->
                        <input type="hidden" name="layanan_id" value="{{ request('layanan_id') }}" />
                        <input type="hidden" name="shop_id" value="{{ request('shop_id') }}" />

                        <div class="row g-3">
                            @foreach ($barbers as $barber)
                                <div class="col-md-3">
                                    <label class="w-100">
                                        <input type="radio" name="barber_id" value="{{ $barber->barber_id }}"
                                            class="d-none barber-radio" required />
                                        <div class="barber-card text-center">
                                            @if ($barber->photo)
                                                <img src="{{ $barber->photo }}" class="barber-img" alt="Foto Barber">
                                            @else
                                                <span class="text-muted">Tidak ada foto</span>
                                            @endif
                                            <h6 class="mb-1">{{ $barber->barber_name }}</h6>
                                            <small class="text-warning"><i class="bi bi-star-fill"></i>
                                                4.9</small>
                                        </div>
                                    </label>
                                </div>
                            @endforeach
                        </div>

                        <!-- TOMBOL MOBILE -->
                        <button type="submit" class="btn btn-primary w-100 py-3 rounded-3 fw-bold mt-4 d-lg-none">
                            Selanjutnya
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </form>
                </div>

                <!-- KOLOM KANAN: LANGKAH RESERVASI -->
                <div class="col-lg-4">
                    <div class="step-panel position-sticky d-none d-lg-block" style="top: 20px">
                        <h5 class="fw-bold mb-4">Langkah Reservasi</h5>

                        <!-- Step 1: Selesai (Hijau) -->
                        <div class="step-item done">
                            <div class="step-num">
                                <i class="bi bi-check"></i>
                            </div>
                            <span>Pilih Layanan</span>
                        </div>

                        <!-- Step 2: Sedang Berlangsung (Biru) -->
                        <div class="step-item active">
                            <div class="step-num">2</div>
                            <span>Pilih Barber</span>
                        </div>
                        <!-- Step 2: Sedang Berlangsung (Biru) -->
                        <div class="step-item">
                            <div class="step-num">3</div>
                            <span>Pilih Jadwal</span>
                        </div>

                        <!-- Step 3: Belum aktif (Abu) -->
                        <div class="step-item">
                            <div class="step-num">4</div>
                            <span>Konfirmasi</span>
                        </div>

                        <hr class="my-4 border-secondary" />

                        <!-- Tombol Lanjut -->
                        <button type="submit" form="barberForm"
                            class="btn btn-primary w-100 py-3 rounded-3 fw-bold shadow-lg">
                            Selanjutnya <i class="bi bi-arrow-right ms-2"></i>
                        </button>

                        <!-- Tombol "Bukan Sekarang" (Sesuai gambar) -->
                        <a href="{{ route('home') }}"
                            class="btn btn-link text-secondary w-100 mt-2 text-decoration-none small">
                            Bukan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
