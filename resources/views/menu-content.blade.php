<section class="food_section layout_padding-bottom ">
 <div class="container-fluid p-0">

    <div class="text-center mb-5 text-white">
      <h2 class="fw-bold">BarberShop</h2>
    </div>
    <div class="card-wrapper" id="cardWrapper">

      <!-- CARD 1 -->
      <div class="card-custom">
    <img src="{{ asset('assets/images/foto4.jpg') }}" alt="foto4" class="w-100">
    <div class="d-flex justify-content-between align-items-center px-3 pt-3">
        <p class="text-success mb-0">Open Now</p>
        <small class="text-muted color-light">10am – 10pm</small>
    </div>
    <h4 class="px-3 pt-2">Gamoen BarberShop</h4>
    <p class="px-3">Styling rambut premium</p>
</div>

     <!-- CARD 1 -->
      <div class="card-custom">
    <img src="{{ asset('assets/images/foto4.jpg') }}" alt="foto4" class="w-100">
    <div class="d-flex justify-content-between align-items-center px-3 pt-3">
        <p class="text-success mb-0">Open Now</p>
        <small class="text-muted color-light">10am – 10pm</small>
    </div>
    <h4 class="px-3 pt-2">Gamoen BarberShop</h4>
    <p class="px-3">Styling rambut premium</p>
</div>

     <!-- CARD 1 -->
      <div class="card-custom">
    <img src="{{ asset('assets/images/foto4.jpg') }}" alt="foto4" class="w-100">
    <div class="d-flex justify-content-between align-items-center px-3 pt-3">
        <p class="text-success mb-0">Open Now</p>
        <small class="text-muted color-light">10am – 10pm</small>
    </div>
    <h4 class="px-3 pt-2">Gamoen BarberShop</h4>
    <p class="px-3">Styling rambut premium</p>
</div>

     <!-- CARD 1 -->
      <div class="card-custom">
    <img src="{{ asset('assets/images/foto4.jpg') }}" alt="foto4" class="w-100">
    <div class="d-flex justify-content-between align-items-center px-3 pt-3">
        <p class="text-success mb-0">Open Now</p>
        <small class="text-muted color-light">10am – 10pm</small>
    </div>
    <h4 class="px-3 pt-2">Gamoen BarberShop</h4>
    <p class="px-3">Styling rambut premium</p>
</div>


     <!-- CARD 1 -->
      <div class="card-custom">
    <img src="{{ asset('assets/images/foto4.jpg') }}" alt="foto4" class="w-100">
    <div class="d-flex justify-content-between align-items-center px-3 pt-3">
        <p class="text-success mb-0">Open Now</p>
        <small class="text-muted color-light">10am – 10pm</small>
    </div>
    <h4 class="px-3 pt-2">Gamoen BarberShop</h4>
    <p class="px-3">Styling rambut premium</p>
</div>

      <!-- CARD 1 -->
      <div class="card-custom">
    <img src="{{ asset('assets/images/foto4.jpg') }}" alt="foto4" class="w-100">
    <div class="d-flex justify-content-between align-items-center px-3 pt-3">
        <p class="text-success mb-0">Open Now</p>
        <small class="text-muted color-light">10am – 10pm</small>
    </div>
    <h4 class="px-3 pt-2">Gamoen BarberShop</h4>
    <p class="px-3">Styling rambut premium</p>
</div>


    <!-- CARD 1 -->
      <div class="card-custom">
    <img src="{{ asset('assets/images/foto4.jpg') }}" alt="foto4" class="w-100">
    <div class="d-flex justify-content-between align-items-center px-3 pt-3">
        <p class="text-success mb-0">Open Now</p>
        <small class="text-muted color-light">10am – 10pm</small>
    </div>
    <h4 class="px-3 pt-2">Gamoen BarberShop</h4>
    <p class="px-3">Styling rambut premium</p>
</div>

     <!-- CARD 1 -->
      <div class="card-custom">
    <img src="{{ asset('assets/images/foto4.jpg') }}" alt="foto4" class="w-100">
    <div class="d-flex justify-content-between align-items-center px-3 pt-3">
        <p class="text-success mb-0">Open Now</p>
        <small class="text-muted color-light">10am – 10pm</small>
    </div>
    <h4 class="px-3 pt-2">Gamoen BarberShop</h4>
    <p class="px-3">Styling rambut premium</p>
</div>

      <div class="card-custom hidden-card">
        <img src="https://images.unsplash.com/photo-1512496015851-a90fb38ba796?q=80&w=800&auto=format&fit=crop" alt="Shaving Kit">
        <h4>Shaving Kit</h4>
        <p>Paket cukur lengkap</p>
      </div>

      <div class="card-custom hidden-card">
        <img src="https://images.unsplash.com/photo-1585747860715-2ba37e788b70?q=80&w=800&auto=format&fit=crop" alt="Hair Wax">
        <h4>Hair Wax</h4>
        <p>Wax rambut tahan lama</p>
      </div>

    </div>

    <div class="text-center mt-4">
      <button id="viewMoreBtn" class="btn btn-primary px-4">
        View More
      </button>
    </div>

  </div>
</section>

<style>

  .card-wrapper {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    justify-items: center;
  }

  .card-custom {
    width: 320px;
    background: rgba(255, 255, 255, 0.1); 
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: 0.3s;
    text-align: center;
    padding-bottom: 20px;
  }

  .card-custom:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 18px rgba(0,0,0,0.15);
  }

  .card-custom img {
    width: 100%;
    height: 220px;
    object-fit: cover;
  }
  .card-custom h4 {
    margin-top: 15px;
    font-weight: bold;
    color: white;
  }

  .card-custom p {
    color: #666;
    font-size: 14px;
    padding: 0 15px;
  }

 /* menyembunyikan card */
  .hidden-card {
    display: none;
  }

  /* animasi menampilkan card */
  .show-card {
    animation: fadeIn 0.5s ease;
  }

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
</style>

<script>
  const viewMoreBtn = document.getElementById("viewMoreBtn");
  const hiddenCards = document.querySelectorAll(".hidden-card");

  let isExpanded = false;

  viewMoreBtn.addEventListener("click", function () {

    if (!isExpanded) {

      hiddenCards.forEach(card => {
        card.style.display = "block";
        card.classList.add("show-card");
      });

      viewMoreBtn.innerText = "Show Less";

      isExpanded = true;

    } else {

      hiddenCards.forEach(card => {
        card.style.display = "none";
      });

      viewMoreBtn.innerText = "View More";

      isExpanded = false;
    }

  });
</script>

