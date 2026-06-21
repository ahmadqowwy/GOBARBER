<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    /* mengatur ukuran carousel */
    .carousel-item {
        height: 100vh;
        position: relative;
        min-height: 700px;
    }

    /* Mengatur Gambar Carousel */
    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* overlay gelap agar teks lebih jelas */
    .carousel-item::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
        z-index: 1;
    }

    /* teks di atas overlay */
    .carousel-item .position-absolute {
        z-index: 2;
    }

    /* Mengatur Judul Teks */
    .carousel-item h1 {
        font-size: 2.4rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 2px;
    }

    /* Mengatur Teks Deskripsi */
    .carousel-item p {
        font-size: 1.05rem;
        margin: 0;
    }

    /* tampilan tablet */
    @media (max-width: 768px) {

        .carousel-item h1 {
            font-size: 1.8rem;
        }

        .carousel-item p {
            font-size: 1rem;
        }

        .hero-content {
            padding: 0 20px;
        }

        .carousel-item {
            min-height: 650px;
        }

        .carousel-item img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }
    }

    /* tampilan hp */
    @media (max-width: 576px) {

        .carousel-item {
            min-height: 600px;
        }

        .carousel-item h1 {
            font-size: 1.5rem;
            line-height: 1.3;
        }

        .carousel-item p {
            font-size: 0.9rem;
        }
    }

    .hero-content {
        max-width: 750px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
    }
</style>
<x-layout :title="$title">
    <section class="slider_section p-0 m-0">

        <!-- bootstrap carousel -->
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"
            data-bs-interval="3000" data-bs-pause="false">

            <!-- indikator carousel -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active">
                </button>

                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1">
                </button>

                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2">
                </button>
            </div>

            <!-- isi carousel -->
            <div class="carousel-inner">

                <!-- slide 1 -->
                <div class="carousel-item active position-relative">

                    <img src="{{ asset('assets/images/gambar3.png') }}" class="d-block w-100" alt="foto1">

                    <!-- mengatur teks pada carousel -->
                    <div
                        class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-center">
                        <div class="container">

                            <div class="text-white mx-auto hero-content">
                                <h1 class="display-6 fw-bold">
                                    WUJUDKAN STYLE RAMBUT TERBAIKMU DAN TAMPIL PERCAYA DIRI
                                </h1>

                                <p>
                                    Smart Online Booking your hair style !
                                </p>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- slide 2 -->
                <div class="carousel-item position-relative">

                    <img src="{{ asset('assets/images/gambar1.png') }}" class="d-block w-100" alt="foto2">

                    <div
                        class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-center">
                        <div class="container">

                            <div class="col-lg-8 text-white mx-auto hero-content">
                                <h1 class="display-6 fw-bold">
                                    WUJUDKAN STYLE RAMBUT TERBAIKMU DAN TAMPIL PERCAYA DIRI
                                </h1>

                                <p>
                                    Smart Online Booking your hair style !
                                </p>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- slide 3 -->
                <div class="carousel-item position-relative">

                    <img src="{{ asset('assets/images/gambar2.png') }}" class="d-block w-100" alt="foto3">

                    <div
                        class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center text-center">
                        <div class="container">

                            <div class="col-lg-8 text-white mx-auto hero-content">
                                <h1 class="display-6 fw-bold">
                                    WUJUDKAN STYLE RAMBUT TERBAIKMU DAN TAMPIL PERCAYA DIRI
                                </h1>

                                <p>
                                    Smart Online Booking your hair style !
                                </p>
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
