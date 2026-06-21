<!-- Section BarberShop -->
<section class="food_section layout_padding-bottom ">
    <div class="container-fluid p-0">

        <!-- Judul -->
        <div class="text-center mb-5 text-white">
            <h2 class="fw-bold">BarberShop</h2>
        </div>

        <!-- wadah seluruh isi card barber -->
        <div class="card-wrapper" id="cardWrapper">

            <!-- Perulangan Data Barber -->
            @foreach ($barber_shop as $barber)
                <!-- card barbershop -->
                <div class="card-custom">
                    {{-- <img src="{{ asset('assets/images/foto4.jpg') }}" alt="foto4"> --}}
                    @if ($barber->photo)
                        <img src="{{ $barber->photo }}" alt="Foto Barber">
                    @else
                        <span class="text-muted">Tidak ada foto</span>
                    @endif
                    <!-- isi informasi card -->
                    <div class="card-content">
                        <!-- Informasi Jam Operasional -->
                        <div class="card-info">
                            <span class="jam">⏰ {{ $barber->open_time }} - {{ $barber->close_time }}</span>
                            {{-- <span class="jam">⏰ 10am - 10pm</span> --}}
                        </div>
                        <h4>{{ $barber->shop_name }}</h4>
                        <p>{{ $barber->location }}</p>
                        <a href="{{ route('detail.shop', $barber->shop_id) }}">
                            <button class="booking-btn">
                                Booking Now
                            </button>
                        </a>
                    </div>

                </div>
            @endforeach
        </div>

    </div>



    <div class="text-center mt-5">
        <button id="viewMoreBtn" class="view-more-btn">
            View More
        </button>
    </div>

</section>

<style>
    /* Background Halaman */
    body {
        background: #0B0F1A;
        font-family: 'Poppins', sans-serif;
    }

    .food_section {
        padding: 80px 40px;
    }

    /* teks judul */
    .food_section h2 {
        font-size: 48px;
        color: white;
        margin-bottom: 50px;
        position: relative;
    }

    /* garis biru dibawah teks judul */
    .food_section h2::after {
        content: '';
        width: 120px;
        height: 4px;
        background: #4DA3FF;
        display: block;
        margin: 15px auto 0;
        border-radius: 10px;
    }

    /* posisi card */
    .card-wrapper {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 35px;
        justify-items: center;
    }

    /* desain card */
    .card-custom {
        width: 320px;
        background: #161B2E;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        transition: 0.4s ease;
        position: relative;
    }

    .card-custom:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 15px 30px rgba(77, 163, 255, 0.45);
    }

    /* ukuran gambar */
    .card-custom img {
        width: 100%;
        height: 230px;
        object-fit: cover;
        transition: 0.4s ease;
    }

    .card-custom:hover img {
        transform: scale(1.08);
    }

    /* Memberikan ruang isi card */
    .card-content {
        padding: 20px;
        text-align: center;
    }

    /* nama barbershop */
    .card-content h4 {
        color: white;
        font-weight: 700;
        margin-bottom: 10px;
    }

    /* alamat */
    .card-content p {
        color: #b0b0b0;
        font-size: 14px;
        margin-bottom: 18px;
    }

    /* Jam Operasional */
    .card-info {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 15px;
    }

    /* Tulisan Jam */
    .jam {
        color: white;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    /* tombol booking */
    .booking-btn {
        background: #4DA3FF;
        color: white;
        border: none;
        padding: 10px 24px;
        border-radius: 30px;
        font-weight: 600;
        transition: 0.3s;
    }

    .booking-btn:hover {
        background: white;
        color: #4DA3FF;
    }

    /* menyembunyikan card */
    .hidden-card {
        display: none;
    }

    /* animasi menampilkan card */
    .show-card {
        animation: fadeIn 0.5s ease;
    }

    /* animasi fade in */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* tombol view more */
    #viewMoreBtn {
        background: #4DA3FF;
        border: none;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: 600;
        color: white;
        transition: 0.3s;
    }

    #viewMoreBtn:hover {
        background: white;
        color: #4DA3FF;
    }


</style>

<script>
    // Mengambil tombol View More agar dapat diberi aksi ketika diklik
    const viewMoreBtn = document.getElementById("viewMoreBtn");

    // Mengambil seluruh card yang disembunyikan
    const hiddenCards = document.querySelectorAll(".hidden-card");

    //Menentukan apakah card sedang ditampilkan atau belum
    let isExpanded = false;

    // Menjalankan kode ketika tombol View More diklik
    viewMoreBtn.addEventListener("click", function() {

        if (!isExpanded) {

            hiddenCards.forEach(card => {
                // Menampilkan seluruh card tersembunyi beserta animasinya
                card.style.display = "block";
                card.classList.add("show-card");
            });

            // Mengubah tulisan tombol
            viewMoreBtn.innerText = "Show Less";

            isExpanded = true;

        } else {

            hiddenCards.forEach(card => {
                // Menghilangkan kembali card tambahan
                card.style.display = "none";
            });

            // Mengembalikan tulisan tombol
            viewMoreBtn.innerText = "View More";

            isExpanded = false;
        }

    });
</script>
