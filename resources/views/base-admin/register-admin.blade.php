<x-layout :title="$title">

<section class="min-vh-100 d-flex align-items-center py-5"
         style="background:#0a0a0a;">

    <div class="container">

        <div class="row rounded-4 overflow-hidden shadow-lg bg-white mx-auto"
             style="
                max-width:1200px;
                min-height:85vh;
             ">

            <!-- ========================================= -->
            <!-- LEFT SIDE -->
            <!-- ========================================= -->

            <div class="col-lg-6 d-none d-lg-flex flex-column justify-content-between p-5 text-white position-relative overflow-hidden"
                 style="
                    background:#111;
                    border-top-left-radius:24px;
                    border-bottom-left-radius:24px;
                 ">

                <!-- Background -->
                <div class="position-absolute top-0 start-0 w-100 h-100"
                     style="
                        background:
                        linear-gradient(
                            160deg,
                            rgba(10,10,10,.75),
                            rgba(10,10,10,.95)
                        ),
                        radial-gradient(
                            circle at top right,
                            rgba(77,171,247,.12),
                            transparent 35%
                        );
                     ">
                </div>

                <!-- Pattern -->
                <div class="position-absolute top-0 start-0 w-100 h-100"
                     style="
                        opacity:.06;
                        background-image:
                        radial-gradient(#4dabf7 1px, transparent 1px);
                        background-size:28px 28px;
                     ">
                </div>

                <!-- Decorative Circle -->
                <div class="position-absolute"
                     style="
                        width:420px;
                        height:420px;
                        border:1px solid rgba(255,255,255,.05);
                        border-radius:50%;
                        top:-100px;
                        right:-120px;
                     ">
                </div>

                <!-- CONTENT -->
                <div class="position-relative z-2">

                    <!-- Logo -->
                    <div class="d-flex align-items-center gap-3 mb-5">

                        <div class="gb-logo-icon">
                            <i class="ti ti-shield-lock text-white fs-4"></i>
                        </div>

                        <h3 class="fw-bold m-0">
                            Go<span class="text-primary">Barber</span>Shop
                        </h3>

                    </div>

                    <!-- Badge -->
                    <span class="gb-badge mb-4">
                        <i class="ti ti-shield-check"></i>
                        Admin Dashboard
                    </span>

                    <!-- Title -->
                    <h1 class="gb-title mb-4">
                        Login
                        <br>
                        <span class="text-primary">
                            Administrator
                        </span>
                    </h1>

                    <!-- Description -->
                    <p class="gb-subtitle mb-5">
                        Kelola owner barbershop, layanan,
                        booking customer, dan seluruh sistem
                        GoBarberShop dalam satu dashboard modern.
                    </p>

                    <!-- Stats -->
                    <div class="d-flex gap-5">

                        <div class="gb-stat">
                            <h3>100+</h3>
                            <span>BARBERSHOP</span>
                        </div>

                        <div class="gb-stat">
                            <h3>5.000+</h3>
                            <span>CUSTOMER</span>
                        </div>

                        <div class="gb-stat">
                            <h3>24/7</h3>
                            <span>SYSTEM</span>
                        </div>

                    </div>

                </div>

                <!-- Footer -->
                <div class="position-relative z-2">
                    <small class="text-secondary">
                        © 2026 GoBarberShop Admin Panel
                    </small>
                </div>

            </div>

            <!-- ========================================= -->
            <!-- RIGHT SIDE -->
            <!-- ========================================= -->

            <div class="col-lg-6 bg-white p-5 d-flex align-items-center"
                 style="
                    border-top-right-radius:24px;
                    border-bottom-right-radius:24px;
                 ">

                <div class="w-100">

                    <!-- Header -->
                    <div class="text-center mb-5">

                        <div class="gb-form-icon mx-auto mb-3">

                            <i class="ti ti-lock-access text-primary fs-2"></i>

                        </div>

                        <h2 class="fw-bold mb-2">
                            Login Admin
                        </h2>

                        <p class="text-secondary">
                            Masukkan email dan password admin
                        </p>

                    </div>

                    <!-- FORM -->
                    <form action="" method="POST">

                        @csrf

                        <!-- EMAIL -->
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Email
                            </label>

                            <div class="input-group gb-input-group">

                                <span class="input-group-text">
                                    <i class="ti ti-mail"></i>
                                </span>

                                <input type="email"
                                       name="email"
                                       class="form-control"
                                       placeholder="Masukkan email admin">

                            </div>

                        </div>

                        <!-- PASSWORD -->
                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Password
                            </label>

                            <div class="input-group gb-input-group">

                                <span class="input-group-text">
                                    <i class="ti ti-lock"></i>
                                </span>

                                <input type="password"
                                       name="password"
                                       class="form-control"
                                       placeholder="Masukkan password">

                            </div>

                        </div>

                        <!-- REMEMBER -->
                        <div class="d-flex justify-content-between align-items-center mb-4">

                            <div class="form-check">

                                <input class="form-check-input"
                                       type="checkbox"
                                       id="remember">

                                <label class="form-check-label text-secondary small"
                                       for="remember">
                                    Remember me
                                </label>

                            </div>

                            <a href="#"
                               class="text-decoration-none small text-primary">
                                Forgot Password?
                            </a>

                        </div>

                        <!-- BUTTON -->
                        <button type="submit"
                                class="btn gb-btn-primary w-100 py-3">

                            <i class="ti ti-login me-2"></i>
                            Login Admin

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<style>

/* ========================================= */
/* BODY */
/* ========================================= */

body{
    background:#0a0a0a;
}

/* ========================================= */
/* SHADOW */
/* ========================================= */

.shadow-lg{
    box-shadow:0 25px 60px rgba(0,0,0,.45)!important;
}

/* ========================================= */
/* LEFT */
/* ========================================= */

.gb-logo-icon{
    width:60px;
    height:60px;
    border-radius:18px;
    background:linear-gradient(135deg,#4dabf7,#228be6);
    display:flex;
    align-items:center;
    justify-content:center;
    box-shadow:0 0 30px rgba(77,171,247,.35);
}

.gb-badge{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding:8px 18px;
    border-radius:50px;
    background:rgba(77,171,247,.1);
    border:1px solid rgba(77,171,247,.2);
    color:#74c0fc;
    font-size:13px;
    font-weight:500;
}

.gb-title{
    font-size:3rem;
    font-weight:800;
    line-height:1.2;
    color:white;
}

.gb-subtitle{
    color:rgba(255,255,255,.55);
    line-height:1.8;
    max-width:420px;
    font-size:15px;
}

.gb-stat h3{
    color:white;
    font-weight:700;
    margin-bottom:4px;
}

.gb-stat span{
    font-size:11px;
    letter-spacing:1px;
    color:rgba(255,255,255,.35);
}

/* ========================================= */
/* RIGHT FORM */
/* ========================================= */

.gb-form-icon{
    width:75px;
    height:75px;
    border-radius:20px;
    background:rgba(77,171,247,.1);
    display:flex;
    align-items:center;
    justify-content:center;
}

.gb-input-group{
    border-radius:14px;
    overflow:hidden;
    border:1px solid #e9ecef;
}

.gb-input-group .input-group-text{
    background:#f8f9fa;
    border:none;
    color:#6c757d;
}

.gb-input-group .form-control{
    border:none;
    background:#f8f9fa;
    height:54px;
    font-size:14px;
}

.gb-input-group .form-control:focus{
    box-shadow:none;
    background:#f8f9fa;
}

.gb-btn-primary{
    border:none;
    border-radius:14px;
    background:linear-gradient(135deg,#4dabf7,#228be6);
    color:white;
    font-weight:600;
    transition:.3s;
}

.gb-btn-primary:hover{
    transform:translateY(-2px);
    box-shadow:0 12px 25px rgba(77,171,247,.3);
}

/* ========================================= */
/* RESPONSIVE */
/* ========================================= */

@media(max-width:991px){

    .row{
        border-radius:24px!important;
    }

    .col-lg-6{
        border-radius:0!important;
    }

}

</style>

</x-layout>