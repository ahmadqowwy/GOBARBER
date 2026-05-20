<x-layout :title="$title">

<style>
    /* Mengatur layar penuh dan layout vertikal */
    .full-height {
        height: 100vh;
    }
</style>

<section class="p-0 m-0 overflow-hidden">

    <div class="container-fluid p-0 full-height d-flex flex-column">
        
        <!-- BAGIAN ATAS: GAMOEN (BACKGROUND HITAM) -->
        <div class="h-50 bg-black text-white d-flex flex-column justify-content-center align-items-center text-center p-4">
            <!-- Icon Logo -->
            <div class="mb-3">
                <i class="bi bi-scissors text-info display-2"></i>
            </div>
            
            <!-- Brand Name -->
            <h1 class="display-4 fw-bold mb-0">GAM OEN</h1>
            <p class="text-uppercase tracking-wide letter-spacing-2 fs-6 text-white-50 mt-2">.CO BARBERSHOP BWX</p>
        </div>

        <!-- BAGIAN BAWAH: LOCATION & DETAILS (BACKGROUND PUTIH) -->
        <div class="h-50 bg-white text-dark d-flex flex-column">
            
            <!-- Isi Konten Bawah -->
            <div class="p-5 flex-grow-1">
                <h2 class="fw-bold mb-3">Gamoen Barbeshop</h2>
                
                <!-- Rating -->
                <div class="mb-4">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <span class="ms-2 fw-bold">5.0</span>
                </div>

                <!-- LOCATION (Lokasi) -->
                <div class="d-flex align-items-start mb-4">
                    <i class="bi bi-geo-alt-fill text-danger fs-4 me-3 mt-1"></i>
                    <div>
                        <h6 class="fw-bold mb-1">Location</h6>
                        <p class="text-muted mb-0">Jl. Raya Barat No. 123, Jakarta Selatan, Indonesia</p>
                    </div>
                </div>
            </div>

        
</section>
</x-layout>