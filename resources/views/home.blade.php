<style>
/* gambar carousel */
.carousel-item{
    height: 100vh;
    position: relative;
}

.carousel-item img{
    width: 100%;
    height: 100vh;
    object-fit: cover;
}

/* overlay gelap agar teks lebih jelas */
.carousel-item::before{
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.45);
    z-index: 1;
}

/* isi text carousel */
.carousel-item .position-absolute{
    z-index: 2;
}

/* judul */
.carousel-item h1{
    font-size: 2.4rem;
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 2px;
}

/* deskripsi */
.carousel-item p{
    font-size: 1.05rem;
    margin: 0;
}

/* tombol */
.carousel-item .btn{
    margin-top: 2px;
    padding: 12px 30px;
    border-radius: 30px;
    font-weight: 600;
}

/* responsive */
@media (max-width: 768px){

    .carousel-item h1{
        font-size: 1.8rem;
    }

    .carousel-item p{
        font-size: 1rem;
    }

}
.hero-content{
    max-width: 750px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 2px;
}
</style>
<x-layout :title="$title">
<section class="slider_section p-0 m-0">

    <div id="carouselExampleIndicators"
        class="carousel slide carousel-fade"
        data-bs-ride="carousel"
        data-bs-interval="3000"
        data-bs-pause="false">

        <!-- indikator -->
        <div class="carousel-indicators">
            <button type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active">
            </button>

            <button type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1">
            </button>

            <button type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2">
            </button>
        </div>

        <!-- isi carousel -->
        <div class="carousel-inner">

            <!-- slide 1 -->
            <div class="carousel-item active position-relative">

                <img src="{{ asset('assets/images/gambar3.png') }}"
                    class="d-block w-100"
                    alt="foto1">

          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-center">
                    <div class="container">

                      <div class="col-lg-8 text-white mx-auto hero-content">
                            <h1 class="display-6 fw-bold">
                                WUJUDKAN STYLE RAMBUT TERBAIKMU DAN TAMPIL PERCAYA DIRI
                            </h1>

                            <p>
                                Smart Online Booking your hair style !
                            </p>

                            <a href="" class="btn btn-primary">
                                Order Sekarang
                            </a>
                        </div>

                    </div>

                </div>
            </div>

            <!-- slide 2 -->
            <div class="carousel-item position-relative">

                <img src="{{ asset('assets/images/gambar1.png') }}"
                    class="d-block w-100"
                    alt="foto2">

              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-center">
                    <div class="container">

                        <div class="col-lg-8 text-white mx-auto hero-content">
                           <h1 class="display-6 fw-bold">
                                WUJUDKAN STYLE RAMBUT TERBAIKMU DAN TAMPIL PERCAYA DIRI
                            </h1>

                            <p>
                                Smart Online Booking your hair style !
                            </p>


                            <a href="" class="btn btn-primary">
                                Order Now
                            </a>
                        </div>

                    </div>

                </div>
            </div>

            <!-- slide 3 -->
            <div class="carousel-item position-relative">

                <img src="{{ asset('assets/images/gambar2.png') }}"
                    class="d-block w-100"
                    alt="foto3">

               <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-center">
                    <div class="container">

                        <div class="col-lg-8 text-white mx-auto hero-content">
                            <h1 class="display-6 fw-bold">
                                WUJUDKAN STYLE RAMBUT TERBAIKMU DAN TAMPIL PERCAYA DIRI
                            </h1>

                            <p>
                                Smart Online Booking your hair style !
                            </p>


                            <a  class="btn btn-primary">
                                Order Now
                            </a>
                        </div>

                    </div>

                </div>
            </div>

        </div>



    </div>

</section>
    @include('menu-content')
    @include('about-content')
    @include('footer-content')
</x-layout>
