<x-layout :title="$title">

<section class="slider_section p-0 m-0">

    <div id="carouselExampleIndicators"
        class="carousel slide"
        data-bs-ride="carousel">

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

                <img src="{{ asset('assets/images/foto1.jpg') }}"
                    class="d-block w-100"
                    alt="foto1">

          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-center">
                    <div class="container">

                      <div class="col-lg-8 text-white mx-auto">
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

                <img src="{{ asset('assets/images/foto2.jpg') }}"
                    class="d-block w-100"
                    alt="foto2">

              <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-center">
                    <div class="container">

                        <div class="col-lg-8 text-white mx-auto">
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

                <img src="{{ asset('assets/images/foto3.jpg') }}"
                    class="d-block w-100"
                    alt="foto3">

               <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-center">
                    <div class="container">

                        <div class="col-lg-8 text-white mx-auto">
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

        <!-- tombol -->
        <button class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">

            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">

            <span class="carousel-control-next-icon"></span>
        </button>

    </div>

</section>
    @include('menu-content')
    @include('about-content')
    @include('footer-content')
</x-layout>
