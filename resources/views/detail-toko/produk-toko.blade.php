<style>
    /* Background Halaman Gelap */
    .shop-bg {
        background-color: #121212;
        color: #fff;
        min-height: 100vh;
    }

    /* Desain Kartu Produk */
    .product-card {
        background-color: #1e1e1e;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #333;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    /* Efek Hover saat mouse diarahkan */
    .product-card:hover {
        transform: translateY(-5px);
        border-color: #4dabf7;
        box-shadow: 0 5px 15px rgba(0,0,0,0.5);
    }

    /* Warna Harga */
    .price-tag {
        color: #4dabf7;
        font-weight: 700;
    }

    /* Agar gambar rapi di dalam kotak */
    .product-img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        background-color: #2c2c2c;
        transition: opacity 0.3s;
    }
    
    /* Efek saat gambar di-hover */
    .product-link:hover .product-img {
        opacity: 0.8;
    }
</style>

<section class="p-0 m-0 shop-bg">
    
    <div class="container py-5">
        
        <!-- Header Halaman -->
        <div class="mb-5 text-center">
            <h2 class="fw-bold text-uppercase tracking-wide">Styling & Care Products</h2>
            <div class="bg-primary mx-auto mt-2" style="width: 60px; height: 3px; border-radius: 2px;"></div>
        </div>

        <!-- Grid Produk -->
        <div class="row g-4">
            
            <!-- Produk 1: Hair Powder -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card p-3">
                    <!-- LINK GAMBAR & JUDUL KE HALAMAN DETAIL -->
                    <a href="{{ route('detail-produk', 1) }}" class="text-white text-decoration-none product-link">
                        <img src="https://images.unsplash.com/photo-1629198688000-71f23e745b6e?q=80&w=300&auto=format&fit=crop" class="product-img rounded mb-3" alt="Hair Powder">
                        <h6 class="fw-bold mb-1">Hair Powder</h6>
                    </a>
                    
                    <p class="price-tag mb-3">Rp 29.000</p>
                    
                    <div class="mt-auto">
                        <!-- Tombol ini hanya untuk Add to Cart, tidak pindah halaman -->
                        <button class="btn btn-sm btn-primary w-100 rounded-pill">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Produk 2: Hair Pomade -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card p-3">
                    <a href="{{ route('detail-produk', 2) }}" class="text-white text-decoration-none product-link">
                        <img src="https://images.unsplash.com/photo-1626803775151-61d756612f97?q=80&w=300&auto=format&fit=crop" class="product-img rounded mb-3" alt="Hair Pomade">
                        <h6 class="fw-bold mb-1">Hair Pomade</h6>
                    </a>
                    
                    <p class="price-tag mb-3">Rp 38.000</p>
                    
                    <div class="mt-auto">
                        <button class="btn btn-sm btn-primary w-100 rounded-pill">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Produk 3: Hair Moist -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card p-3">
                    <a href="{{ route('detail-produk', 3) }}" class="text-white text-decoration-none product-link">
                        <img src="https://images.unsplash.com/photo-1608248597279-f99d160bfcbc?q=80&w=300&auto=format&fit=crop" class="product-img rounded mb-3" alt="Hair Moist">
                        <h6 class="fw-bold mb-1">Hair Moist</h6>
                    </a>
                    
                    <p class="price-tag mb-3">Rp 20.000</p>
                    
                    <div class="mt-auto">
                        <button class="btn btn-sm btn-primary w-100 rounded-pill">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Produk 4: Hair Tonic -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card p-3">
                    <a href="{{ route('detail-produk', 4) }}" class="text-white text-decoration-none product-link">
                        <img src="https://images.unsplash.com/photo-1556227702-d1e4e7b5c232?q=80&w=300&auto=format&fit=crop" class="product-img rounded mb-3" alt="Hair Tonic">
                        <h6 class="fw-bold mb-1">Hair Tonic</h6>
                    </a>
                    
                    <p class="price-tag mb-3">Rp 20.000</p>
                    
                    <div class="mt-auto">
                        <button class="btn btn-sm btn-primary w-100 rounded-pill">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Produk 5: Hair Serum -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card p-3">
                    <a href="{{ route('detail-produk', 5) }}" class="text-white text-decoration-none product-link">
                        <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=300&auto=format&fit=crop" class="product-img rounded mb-3" alt="Hair Serum">
                        <h6 class="fw-bold mb-1">Hair Serum</h6>
                    </a>
                    
                    <p class="price-tag mb-3">Rp 28.000</p>
                    
                    <div class="mt-auto">
                        <button class="btn btn-sm btn-primary w-100 rounded-pill">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Produk 6: Shampoo Selsun -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card p-3">
                    <a href="{{ route('detail-produk', 6) }}" class="text-white text-decoration-none product-link">
                        <img src="https://images.unsplash.com/photo-1626766838375-84a293651f69?q=80&w=300&auto=format&fit=crop" class="product-img rounded mb-3" alt="Shampoo Selsun">
                        <h6 class="fw-bold mb-1">Shampoo Selsun</h6>
                    </a>
                    
                    <p class="price-tag mb-3">Rp 25.000</p>
                    
                    <div class="mt-auto">
                        <button class="btn btn-sm btn-primary w-100 rounded-pill">Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>