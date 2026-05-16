<section class="about_section py-5">

    <div class="container">

        <!-- TITLE -->
        <div class="text-center mb-5">

            <small class="text-uppercase text-danger fw-bold">
                Testimonials
            </small>

            <h2 class="fw-bold">
                Keunggulan GoBarbershop
            </h2>

        </div>

        <!-- CARD 1 -->
        <div class="about_box dark_box mb-5">

            <div class="row align-items-center">

                <div class="col-lg-4 text-center">

                    <img src="{{ asset('assets/images/foto1.jpg') }}"
                        class="about_img"
                        alt="foto1">

                </div>

                <div class="col-lg-8 text-white">

                    <h3 class="fw-bold mb-3">
                        Sedang mencari Treatment tertentu?
                    </h3>

                    <p>
                        Anda di tempat yang tepat. GoBarbershop menyediakan fitur
                        untuk menemukan treatment tertentu yang anda inginkan.
                        Pernah mencoba mengganti warna rambut? Eksplor sekarang.
                    </p>

                    <a href=""
                        class="btn btn-light rounded-pill px-4 mt-2">
                        Cari Treatment
                    </a>

                </div>

            </div>

        </div>

        <!-- CARD 2 -->
        <div class="about_box light_box">

            <div class="row align-items-center">

                <div class="col-lg-4 text-center">

                    <img src="{{ asset('assets/images/foto6.jpg') }}"
                        class="about_img"
                        alt="foto66">

                </div>

                <div class="col-lg-8">

                    <h3 class="fw-bold mb-3">
                        Ingin mencoba tempat cukur baru?
                    </h3>

                    <p class="text-secondary">
                        Tunggu apa lagi di GoBarbershop anda dapat mengeksplor
                        venue terbaik dengan pelayanan terbaik. Cek sekarang!
                    </p>

                    <a href=""
                        class="btn btn-dark rounded-pill px-4 mt-2">
                        Cari Venue
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<style>

.about_section{
    background:#f5f5f5;
    padding:80px 60px;
}

/* BOX */
.about_box{
    border-radius:25px;
    padding:40px;
    overflow:hidden;
}

/* DARK */
.dark_box{
    background:#14003b;
}

/* LIGHT */
.light_box{
    background:white;
    box-shadow:0 4px 12px rgba(0,0,0,0.08);
}

/* IMAGE */
.about_img{
    width:220px;
    height:220px;
    object-fit:cover;
    border-radius:50%;
    border:5px solid white;
}

/* RESPONSIVE */
@media(max-width:768px){

    .about_box{
        text-align:center;
        padding:30px 20px;
    }

    .about_img{
        margin-bottom:20px;
    }

}

</style>