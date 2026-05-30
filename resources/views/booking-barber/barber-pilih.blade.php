<x-layout :title="$title">

<style>
    /* Background Deep Blue */
    .booking-bg {
        background-color: #0f172a;
        color: #fff;
        min-height: 100vh;
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
    .barber-radio:checked + .barber-card {
        border-color: #3b82f6;
        box-shadow: 0 0 0 1px #3b82f6;
        background-color: #253349;
    }

    /* Gambar Barber */
    .barber-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
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
        color: #10b981; /* Hijau untuk selesai */
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

<section class="p-0 m-0 booking-bg">
    <div class="container py-5">
        <div class="row g-4">
            
            <!-- KOLOM KIRI: DAFTAR BARBER -->
            <div class="col-lg-8">
                <h4 class="fw-bold mb-4">Pilih Barber</h4>

                <form action="{{ route('booking.konfirmasi') }}" method="POST">
                    @csrf 
                    
                    <!-- MENYIMPAN DATA LAYANAN DARI LANGKAH 1 -->
                    <input type="hidden" name="layanan_id" value="{{ request('layanan_id') }}">

                    <div class="row g-3">
                        
                        <!-- Barber 1 -->
                        <div class="col-md-6">
                            <label class="w-100">
                                <input type="radio" name="barber_id" value="1" class="d-none barber-radio" required>
                                <div class="barber-card text-center">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop&crop=face" class="barber-img" alt="Barber 1">
                                    <h6 class="mb-1">Alex Johnson</h6>
                                    <small class="text-warning"><i class="bi bi-star-fill"></i> 4.9</small>
                                </div>
                            </label>
                        </div>

                        <!-- Barber 2 -->
                        <div class="col-md-6">
                            <label class="w-100">
                                <input type="radio" name="barber_id" value="2" class="d-none barber-radio">
                                <div class="barber-card text-center">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300&h=300&fit=crop&crop=face" class="barber-img" alt="Barber 2">
                                    <h6 class="mb-1">Budi Santoso</h6>
                                    <small class="text-warning"><i class="bi bi-star-fill"></i> 4.8</small>
                                </div>
                            </label>
                        </div>

                        <!-- Barber 3 -->
                        <div class="col-md-6">
                            <label class="w-100">
                                <input type="radio" name="barber_id" value="3" class="d-none barber-radio">
                                <div class="barber-card text-center">
                                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=300&h=300&fit=crop&crop=face" class="barber-img" alt="Barber 3">
                                    <h6 class="mb-1">Rizky Pratama</h6>
                                    <small class="text-warning"><i class="bi bi-star-fill"></i> 4.7</small>
                                </div>
                            </label>
                        </div>

                        <!-- Barber 4 -->
                        <div class="col-md-6">
                            <label class="w-100">
                                <input type="radio" name="barber_id" value="4" class="d-none barber-radio">
                                <div class="barber-card text-center">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&h=300&fit=crop&crop=face" class="barber-img" alt="Barber 4">
                                    <h6 class="mb-1">Dimas Arya</h6>
                                    <small class="text-warning"><i class="bi bi-star-fill"></i> 4.9</small>
                                </div>
                            </label>
                        </div>

                    </div>
                </form>
            </div>

            <!-- KOLOM KANAN: LANGKAH RESERVASI -->
            <div class="col-lg-4">
                <div class="step-panel position-sticky" style="top: 20px;">
                    <h5 class="fw-bold mb-4">Langkah Reservasi</h5>

                    <!-- Step 1: Selesai (Hijau) -->
                    <div class="step-item done">
                        <div class="step-num"><i class="bi bi-check"></i></div>
                        <span>Pilih Layanan</span>
                    </div>

                    <!-- Step 2: Sedang Berlangsung (Biru) -->
                    <div class="step-item active">
                        <div class="step-num">2</div>
                        <span>Pilih Barber</span>
                    </div>
                    <!-- Step 2: Sedang Berlangsung (Biru) -->
                    <div class="step-item ">
                        <div class="step-num">3</div>
                        <span>Pilih Jadwal</span>
                    </div>

                    <!-- Step 3: Belum aktif (Abu) -->
                    <div class="step-item">
                        <div class="step-num">4</div>
                        <span>Konfirmasi</span>
                    </div>

                    <hr class="my-4 border-secondary">

                    <!-- Tombol Lanjut -->
                    <button type="submit" class="btn btn-primary w-100 py-3 rounded-3 fw-bold shadow-lg" onclick="document.querySelector('form').submit();">
                        Selanjutnya <i class="bi bi-arrow-right ms-2"></i>
                    </button>

                    <!-- Tombol "Bukan Sekarang" (Sesuai gambar) -->
                    <a href="{{ route('home') }}" class="btn btn-link text-secondary w-100 mt-2 text-decoration-none small">
                        Bukan Sekarang
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

</x-layout>