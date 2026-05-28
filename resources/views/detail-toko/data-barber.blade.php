<style>
    .barber-section {
        background: #111827;
        padding: 60px 0;
        min-height: 100vh;
    }

    .section-title {
        color: white;
        font-weight: bold;
        margin-bottom: 40px;
    }

    .barber-card {
        background: #1f2937;
        border-radius: 20px;
        overflow: hidden;
        transition: 0.3s;
        text-align: center;
        padding-bottom: 20px;
    }

    .barber-card:hover {
        transform: translateY(-5px);
    }

    .barber-img {
        width: 100%;
        height: 320px;
        object-fit: cover;
    }

    .barber-name {
        color: white;
        font-size: 22px;
        font-weight: bold;
        margin-top: 15px;
    }

    .barber-skill {
        color: #9ca3af;
        font-size: 14px;
    }
</style>

<section class="barber-section">

    <div class="container">

        <h2 class="section-title">Barber</h2>

        <div id="barberCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row justify-content-center g-4">

                        <div class="col-md-4">
                            <div class="barber-card">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=800"
                                    class="barber-img">

                                <div class="barber-name">
                                    Rizky
                                </div>

                                <div class="barber-skill">
                                    Fade Specialist
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

</section>