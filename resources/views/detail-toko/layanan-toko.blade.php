<style>
    /* 1. Style Navbar Teks (Code Anda yang lama) */
    .nav-link-custom {
        color: #6c757d;
        font-weight: 500;
        text-decoration: none;
        padding-bottom: 8px;
        transition: all 0.3s ease;
    }
    .nav-link-custom.active {
        color: #000;
        border-bottom: 2px solid #000;
    }
    .nav-link-custom:hover {
        color: #000;
    }

    /* 2. Style Layout Vertical (Supaya rapi ke atas dan bawah) */
    .full-height {
        height: 100vh;
    }
    
    /* Area Konten agar bisa discroll */
    .content-scroll {
        overflow-y: auto;
        /* Sembunyikan scrollbar agar bersih */
        scrollbar-width: none; 
        -ms-overflow-style: none; 
    }
    .content-scroll::-webkit-scrollbar {
        display: none;
    }
</style>

<section class="p-0 m-0 overflow-hidden bg-light h-100 d-flex flex-column">

    <div class="container-fluid p-0 full-height d-flex flex-column">
        
        <!-- BAGIAN ATAS: BRANDING -->
        <div class="bg-white p-4 text-center border-bottom">
            <h3 class="fw-bold mb-0">GAM OEN</h3>
            <small class="text-muted">Barbershop BWX</small>
        </div>

        <!-- BAGIAN TENGAH: NAVBAR TOMBOL TEKS (PEMISAH) -->
        <!-- Code Navbar yang Anda kirim tadi -->
        <div class="bg-white p-3 border-bottom shadow-sm">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item mx-3">
                    <a href="{{ route('layanan') }}" class="btn btn-light">Layanan</a>
                </li>
           
                <li class="nav-item mx-3">
                    <a href="{{ route('produk-toko') }}" class="btn btn-light">Product</a>
                </li>
                <li class="nav-item mx-3">
                    <a href="{{ route('produk-toko') }}" class="btn btn-light">Product</a>
                </li>
           
              </ul>
        </div>

        <!-- BAGIAN BAWAH: KONTEN LAYANAN (BARU) -->
        <!-- flex-grow-1 memastikan ini mengisi sisa layar -->
        <div class="flex-grow-1 content-scroll p-3">
            
            <!-- Kartu Container Putih Lebar Panjang -->
            <div class="bg-white rounded-4 shadow-sm overflow-hidden">
                
                <div class="p-4">
                    <h5 class="fw-bold mb-4">Daftar Layanan</h5>

                    <!-- Item Layanan 1 -->
                    <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
                        <img src="https://ui-avatars.com/api/?name=H+Cut&background=0D8ABC&color=fff" class="rounded-3 me-3" width="60" height="60" alt="Icon">
                        <div class="flex-grow-1">
                            <h6 class="fw-bold mb-1">Hair Cut</h6>
                            <p class="text-muted small mb-0">Potong rambut standar dengan styling modern.</p>
                        </div>
                        <span class="fw-bold text-primary">Rp 50.000</span>
                    </div>

                    <!-- Item Layanan 2 -->
                    <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
                        <img src="https://ui-avatars.com/api/?name=Shave&background=198754&color=fff" class="rounded-3 me-3" width="60" height="60" alt="Icon">
                        <div class="flex-grow-1">
                            <h6 class="fw-bold mb-1">Shaving</h6>
                            <p class="text-muted small mb-0">Cukur jenggot bersih dengan handuk hangat.</p>
                        </div>
                        <span class="fw-bold text-primary">Rp 35.000</span>
                    </div>

                    <!-- Item Layanan 3 -->
                    <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
                        <img src="https://ui-avatars.com/api/?name=Wash&background=fd7e14&color=fff" class="rounded-3 me-3" width="60" height="60" alt="Icon">
                        <div class="flex-grow-1">
                            <h6 class="fw-bold mb-1">Hair Wash</h6>
                            <p class="text-muted small mb-0">Keramas dan pijat kepala ringan.</p>
                        </div>
                        <span class="fw-bold text-primary">Rp 30.000</span>
                    </div>

                    <!-- Item Layanan 4 -->
                    <div class="d-flex align-items-center mb-2">
                        <img src="https://ui-avatars.com/api/?name=Color&background=dc3545&color=fff" class="rounded-3 me-3" width="60" height="60" alt="Icon">
                        <div class="flex-grow-1">
                            <h6 class="fw-bold mb-1">Hair Coloring</h6>
                            <p class="text-muted small mb-0">Pewarnaan rambut profesional.</p>
                        </div>
                        <span class="fw-bold text-primary">Rp 150.000</span>
                    </div>

                </div>
            </div>
            <!-- Spacer bawah agar konten tidak tertutup -->
            <div style="height: 20px;"></div>
        </div>

    </div>
</section>