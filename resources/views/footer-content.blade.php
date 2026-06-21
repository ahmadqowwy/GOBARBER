<!-- section utama -->
<footer class="footer_section">

    <!-- garis biru-->
    <div class="footer-top-line"></div>

    <div class="container footer-container">

        <!-- Membagi footer menjadi 3 kolom -->
        <div class="row align-items-start justify-content-center gy-5">

            <!-- Contact -->
            <div class="col-lg-3 col-md-6">

                <div class="footer_contact">

                    <h4>Contact Us</h4>

                    <div class="contact_link_box">

                        <a href="#">
                            <i class="fa fa-map-marker-alt"></i>
                            <span>Banyuwangi, Indonesia</span>
                        </a>

                        <a href="#">
                            <i class="fa fa-phone"></i>
                            <span>+62 812 3456 7890</span>
                        </a>

                        <a href="#">
                            <i class="fa fa-envelope"></i>
                            <span>gobarber@gmail.com</span>
                        </a>

                    </div>

                </div>

            </div>

            <!-- Logo -->
            <div class="col-lg-5 col-md-12">

                <div class="footer_detail text-center">

                    <a href="#" class="footer-logo">
                        GoBarber
                    </a>

                    <p>
                        Solusi booking barber modern dengan pelayanan premium
                        dan barber profesional terpercaya.
                    </p>

                </div>

            </div>

            <!-- Opening Hours -->
            <div class="col-lg-3 col-md-6">

                <div class="opening_hours">

                    <h4>Opening Hours</h4>

                    <p>Everyday</p>

                    <p>10:00 AM - 10:00 PM</p>

                </div>

            </div>

            <!-- copyright -->
            <div class="footer-info">

                <p>
                    © 2026 GoBarber. All Rights Reserved.
                </p>

            </div>

        </div>

</footer>
<style>
    /* Background Footer */
    .footer_section {
        background: #0F172A;
        color: white;
        padding: 90px 0 25px;
        position: relative;
        overflow: hidden;
    }

    .footer-container {
        max-width: 1400px;
        padding-left: 70px;
        padding-right: 70px;
    }

    /* garis biru atas */
    .footer-top-line {
        width: 100%;
        height: 2px;
        background: linear-gradient(to right, transparent, #4DA3FF, transparent);
        margin-bottom: 75px;
    }

    /* judul kontak */
    .footer_section h4 {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 28px;
        color: white;
    }

    .footer_section p {
        color: #cbd5e1;
        line-height: 1.9;
        font-size: 16px;
        margin-bottom: 10px;
    }

    /* judul logo */
    .footer-logo {
        display: inline-block;
        font-size: 58px;
        font-weight: 800;
        color: #4DA3FF;
        margin-bottom: 20px;
        text-decoration: none;
        transition: 0.3s ease;
    }

    .footer-logo:hover {
        color: white;
        transform: scale(1.03);
    }

    /* setiap kontak tersusun ke bawah */
    .contact_link_box {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    /* ikon dan tulisan berada dalam satu baris */
    .contact_link_box a {
        color: #cbd5e1;
        text-decoration: none;
        transition: 0.3s ease;
        font-size: 17px;
        display: flex;
        align-items: center;
    }

    .contact_link_box a:hover {
        color: #4DA3FF;
        transform: translateX(5px);
    }

    /* ikon menjadi biru */
    .contact_link_box i {
        width: 35px;
        font-size: 18px;
        color: #4DA3FF;
    }

    /* isi kolom berada di sebelah kanan */
    .opening_hours {
        text-align: right;
    }

    .opening_hours p {
        margin-bottom: 14px;
    }

    /* copyright */
    .footer-info {
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        margin-top: 60px;
        padding-top: 25px;
        text-align: center;
    }

    .footer-info p {
        margin: 0;
        color: #94A3B8;
        font-size: 14px;
        letter-spacing: 0.5px;
    }

    /* responsive tablet */
    @media (max-width: 991px) {

        .footer_section {
            text-align: center;
            padding: 70px 0 25px;
        }

        .footer-container {
            padding-left: 25px;
            padding-right: 25px;
        }

        .footer-logo {
            font-size: 48px;
        }

        .footer_section h4 {
            font-size: 28px;
        }

        .contact_link_box a {
            justify-content: center;
        }

        .opening_hours {
            text-align: center;
        }

    }

    /* responsive hp */
    @media (max-width: 576px) {

        .footer-logo {
            font-size: 40px;
        }

        .footer_section h4 {
            font-size: 24px;
        }

        .footer_section p,
        .contact_link_box a {
            font-size: 15px;
        }

        .footer-container {
            padding-left: 18px;
            padding-right: 18px;
        }
    }
</style>
