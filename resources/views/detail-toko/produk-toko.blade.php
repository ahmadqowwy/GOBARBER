<x-layout title="Produk">

<style>
/* Background */
.shop-bg{
    background:#121212;
    min-height:100vh;
    color:white;
}

/* Title */
.shop-title{
    font-size:40px;
    font-weight:700;
    text-align:center;
    margin-bottom:50px;
}

/* Product Card */
.product-card{
    background:#1e1e1e;
    border-radius:16px;
    overflow:hidden;
    border:1px solid #2c2c2c;
    transition:0.3s;
    height:100%;
}

.product-card:hover{
    transform:translateY(-5px);
    border-color:#4dabf7;
    box-shadow:0 10px 25px rgba(0,0,0,0.4);
}

/* Product Image */
.product-img{
    width:100%;
    height:220px;
    object-fit:cover;
}

/* Body */
.product-body{
    padding:18px;
}

/* Product Name */
.product-name{
    font-size:18px;
    font-weight:700;
    margin-bottom:8px;
}

/* Price */
.product-price{
    color:#4dabf7;
    font-size:18px;
    font-weight:bold;
    margin-bottom:15px;
}

/* Button */
.btn-detail{
    background:#4dabf7;
    border:none;
    width:100%;
    padding:10px;
    border-radius:10px;
    color:white;
    text-decoration:none;
    display:inline-block;
    text-align:center;
    transition:0.3s;
}

.btn-detail:hover{
    background:#339af0;
    color:white;
}
</style>

<section class="shop-bg py-5">

    <div class="container">

        <!-- TITLE -->
        <h1 class="shop-title">
            Produk Barber
        </h1>

        <!-- PRODUCT GRID -->
        <div class="row g-4">

            <!-- PRODUCT 1 -->
            <div class="col-6 col-md-4 col-lg-3">

                <div class="product-card">

                    <img
                        src="https://images.unsplash.com/photo-1629198688000-71f23e745b6e?q=80&w=600"
                        class="product-img"
                        alt="Hair Powder"
                    >

                    <div class="product-body">

                        <div class="product-name">
                            Hair Powder
                        </div>

                        <div class="product-price">
                            Rp 29.000
                        </div>

                        <a href="{{ route('detail-produk', 1) }}"
                           class="btn-detail">

                            Detail Produk

                        </a>

                    </div>

                </div>

            </div>

            <!-- PRODUCT 2 -->
            <div class="col-6 col-md-4 col-lg-3">

                <div class="product-card">

                    <img
                        src="https://images.unsplash.com/photo-1626803775151-61d756612f97?q=80&w=600"
                        class="product-img"
                        alt="Pomade"
                    >

                    <div class="product-body">

                        <div class="product-name">
                            Hair Pomade
                        </div>

                        <div class="product-price">
                            Rp 38.000
                        </div>

                        <a href="{{ route('detail-produk', 2) }}"
                           class="btn-detail">

                            Detail Produk

                        </a>

                    </div>

                </div>

            </div>

            <!-- PRODUCT 3 -->
            <div class="col-6 col-md-4 col-lg-3">

                <div class="product-card">

                    <img
                        src="https://images.unsplash.com/photo-1608248597279-f99d160bfcbc?q=80&w=600"
                        class="product-img"
                        alt="Hair Moist"
                    >

                    <div class="product-body">

                        <div class="product-name">
                            Hair Moist
                        </div>

                        <div class="product-price">
                            Rp 20.000
                        </div>

                        <a href="{{ route('detail-produk', 3) }}"
                           class="btn-detail">

                            Detail Produk

                        </a>

                    </div>

                </div>

            </div>

            <!-- PRODUCT 4 -->
            <div class="col-6 col-md-4 col-lg-3">

                <div class="product-card">

                    <img
                        src="https://images.unsplash.com/photo-1556227702-d1e4e7b5c232?q=80&w=600"
                        class="product-img"
                        alt="Hair Tonic"
                    >

                    <div class="product-body">

                        <div class="product-name">
                            Hair Tonic
                        </div>

                        <div class="product-price">
                            Rp 20.000
                        </div>

                        <a href="{{ route('detail-produk', 4) }}"
                           class="btn-detail">

                            Detail Produk

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
@include('detail-toko.toko-footer')

</x-layout>