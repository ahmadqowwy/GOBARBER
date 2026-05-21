<footer class="footer_section">

    <div class="footer-top-line"></div>

    <div class="container">

        <div class="row">

            <!-- Contact -->
            <div class="col-md-4 footer-col">

                <div class="footer_contact">

                    <h4>Contact Us</h4>

                    <div class="contact_link_box">

                        <a href="#">
                            <i class="fa fa-map-marker"></i>
                            <span>Madiun, Indonesia</span>
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
            <div class="col-md-4 footer-col">

                <div class="footer_detail">

                    <a href="#" class="footer-logo">
                        GoBarber
                    </a>

                    <p>
                        Solusi booking barber modern dengan pelayanan premium
                        dan barber profesional terpercaya.
                    </p>

                    <div class="footer_social">
                        <!-- Instagram -->
                        <a href="https://instagram.com/gobarber" target="_blank">

                            <i class="fa-brands fa-instagram"></i>

                        </a>

                        <!-- TikTok -->
                        <a href="https://tiktok.com/@gobarber" target="_blank">

                            <i class="fa-brands fa-music"></i>

                        </a>

                        <!-- WhatsApp -->
                        <a href="https://wa.me/6281234567890" target="_blank">

                            <i class="fa-brands fa-whatsapp"></i>

                        </a>
                    </div>

                </div>

            </div>

            <!-- Opening Hours -->
            <div class="col-md-4 footer-col">

                <h4>Opening Hours</h4>

                <p>Everyday</p>

                <p>10:00 AM - 10:00 PM</p>

            </div>

        </div>

        <!-- Bottom -->
        <div class="footer-info">

            <p>
                © 2026 GoBarber. All Rights Reserved.
            </p>

        </div>

    </div>

</footer>
<style>
    .footer_section {
        background: #111827;
        color: white;
        padding: 80px 0 30px;
        position: relative;
        overflow: hidden;
    }

    /* garis glow atas */
    .footer-top-line {
        width: 100%;
        height: 3px;
        background: linear-gradient(to right, transparent, #4DA3FF, transparent);
        margin-bottom: 60px;
    }

    .footer_section h4 {
        font-size: 30px;
        font-weight: 700;
        margin-bottom: 25px;
        color: white;
    }

    .footer_section p {
        color: #cbd5e1;
        line-height: 1.8;
        font-size: 15px;
    }

    .footer-col {
        margin-bottom: 35px;
    }

    /* logo */
    .footer-logo {
        display: inline-block;
        font-size: 42px;
        font-weight: 700;
        color: #4DA3FF;
        margin-bottom: 20px;
        text-decoration: none;
        transition: 0.3s;
    }

    .footer-logo:hover {
        color: white;
    }

    /* contact */
    .contact_link_box {
        display: flex;
        flex-direction: column;
    }

    .contact_link_box a {
        color: #cbd5e1;
        text-decoration: none;
        margin: 10px 0;
        transition: 0.3s;
        font-size: 15px;
    }

    .contact_link_box a:hover {
        color: #4DA3FF;
        transform: translateX(5px);
    }

    .contact_link_box i {
        margin-right: 10px;
        color: #4DA3FF;
    }

    /* social media */
    .footer_social {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 25px;
        flex-wrap: wrap;
    }

    .footer_social a {
        width: 50px;
        height: 50px;
        background: #1E293B;
        color: white;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        font-size: 20px;
        transition: 0.35s ease;
        position: relative;
        overflow: hidden;
    }

    .footer_social a:hover {
        background: #4DA3FF;
        transform: translateY(-7px) scale(1.08);
        box-shadow: 0 0 18px rgba(77, 163, 255, 0.6);
    }

    /* icon */
    .footer_social a i {
        transition: 0.3s;
    }

    .footer_social a:hover i {
        transform: rotate(8deg);
    }

    /* footer bawah */
    .footer-info {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        margin-top: 50px;
        padding-top: 25px;
        text-align: center;
    }

    .footer-info p {
        margin: 0;
        color: #94A3B8;
        font-size: 14px;
    }

    /* responsive */
    @media (max-width: 768px) {

        .footer_section {
            text-align: center;
        }

        .footer_social {
            justify-content: center;
        }

    }
</style>
