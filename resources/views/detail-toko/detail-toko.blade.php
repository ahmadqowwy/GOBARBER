<x-layout :title="$title">

<style>
    /* Mengatur tinggi layar penuh */
    .full-height {
        height: 100vh;
    }

    /* CSS untuk Background Gambar di Kanan */
    .bg-interior {
        /* Ganti URL di bawah dengan gambar interior barbershop Anda */
        background-image: url('https://images.unsplash.com/photo-1585747860715-2ba37e788b70?q=80&w=2070&auto=format&fit=crop'); 
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }

    /* Overlay Putih Transparan agar teks terbaca di atas gambar */
    .bg-overlay {
        background-color: rgba(255, 255, 255, 0.92);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
    }

    /* Agar konten berada di atas overlay */
    .content-wrapper {
        position: relative;
        z-index: 2;
        height: 100%;
    }
</style>

<section class="p-0 m-0 overflow-hidden">

    <div class="container-fluid p-0 full-height">
        
        <div class="row g-0 h-100">
            
            <!-- KOLOM KIRI: BRANDING (HITAM) -->
            <div class="col-lg-5 col-md-12 bg-black text-white d-flex flex-column justify-content-center align-items-center text-center p-5">
                <!-- Icon Logo -->
                <div class="mb-4">
                    <i class="bi bi-scissors text-info display-1"></i>
                </div>
                
                <!-- Brand Name -->
                <h1 class="display-3 fw-bold mb-0">GAM OEN</h1>
                <p class="text-uppercase tracking-wide letter-spacing-2 fs-5 text-white-50 mt-2">.CO BARBERSHOP BWX</p>
            </div>

            <!-- KOLOM KANAN: KONTEN & BOOKING (BACKGROUND GAMBAR) -->
            <div class="col-lg-7 col-md-12 bg-interior d-flex flex-column">
                
                <!-- Layer Overlay Putih -->
                <div class="bg-overlay"></div>

                <!-- Isi Konten -->
                <div class="content-wrapper p-5 d-flex flex-column">
                    
                    <!-- Bagian Atas: Info Toko -->
                    <div class="flex-grow-1">
                        <h2 class="fw-bold mb-4 display-6">Gamoen Barbershop</h2>
                        
                        <!-- Address -->
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-geo-alt-fill text-danger fs-5 me-3"></i>
                            <div>
                                <p class="fw-bold mb-0">Location</p>
                                <p class="text-muted small mb-0">Jl. Raya Barat No. 123, Jakarta Selatan</p>
                            </div>
                        </div>

                        <!-- Jam Buka -->
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-clock-fill text-primary fs-5 me-3"></i>
                            <div>
                                <p class="fw-bold mb-0">Buka</p>
                                <p class="text-muted small mb-0">12:00 - 22:00 (Senin - Minggu)</p>
                            </div>
                        </div>

                        <!-- Telepon -->
                        <div class="d-flex align-items-center mb-4">
                            <i class="bi bi-telephone-fill text-success fs-5 me-3"></i>
                            <div>
                                <p class="fw-bold mb-0">Kontak</p>
                                <p class="text-muted small mb-0">+0813 - 3093 - 1823</p>
                            </div>
                        </div>

                        <!-- Rating -->
                        <div class="d-flex align-items-center mb-4 p-3 bg-white bg-opacity-50 rounded-3 shadow-sm">
                            <div class="bg-warning text-white rounded-circle d-flex justify-content-center align-items-center me-3" style="width: 40px; height: 40px;">
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-0">4.7</h5>
                                <small class="text-muted">1000+ Reviews</small>
                            </div>
                        </div>

                        <!-- Deskripsi / Rekomendasi -->
                        <p class="text-muted mb-0">
                            Tempat terbaik untuk potong rambut dan styling. Kami merekomendasikan layanan Hair Cut, Shaving, dan Hair Wash untuk penampilan maksimal Anda.
                        </p>
                    </div>

                    <!-- Bagian Bawah: Tombol Booking -->
                    <div class="mt-4 pt-3">
                    <a href="/">
                     <button class="btn btn-primary w-100 py-3 fw-bold rounded-3 shadow-lg">
                            Booking Sekarang
                        </button>
                    </a>
                       
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>

    @include('detail-toko.layanan-toko')
    @include('detail-toko.produk-toko')


</x-layout>