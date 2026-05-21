<x-layout :title="$title">
    <section class="gb-page">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12">

                    <div class="row g-0 gb-card overflow-hidden">

                        <!-- LEFT CONTENT -->
                        <div
                            class="col-lg-6 d-none d-lg-flex flex-column justify-content-center position-relative gb-left-panel"
                        >
                            {{-- Background Pattern --}}
                            <div class="gb-left-bg"></div>

                            {{-- SVG ART --}}
                            <div class="gb-left-art">
                                <svg
                                    width="340"
                                    height="500"
                                    viewBox="0 0 340 500"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <circle
                                        cx="170"
                                        cy="170"
                                        r="130"
                                        stroke="white"
                                        stroke-width="1"
                                        stroke-dasharray="8 6"
                                    />
                                    <circle
                                        cx="170"
                                        cy="170"
                                        r="85"
                                        stroke="white"
                                        stroke-width="0.5"
                                    />
                                    <path
                                        d="M125 105 L215 105 L215 235 Q215 278 170 278 Q125 278 125 235 Z"
                                        stroke="white"
                                        stroke-width="1"
                                        fill="none"
                                    />
                                    <path
                                        d="M140 138 Q140 120 170 120 Q200 120 200 138"
                                        stroke="white"
                                        stroke-width="1"
                                        fill="none"
                                    />
                                    <line
                                        x1="170"
                                        y1="120"
                                        x2="170"
                                        y2="94"
                                        stroke="white"
                                        stroke-width="1"
                                    />
                                    <circle
                                        cx="170"
                                        cy="88"
                                        r="7"
                                        stroke="white"
                                        stroke-width="1"
                                        fill="none"
                                    />
                                    <path
                                        d="M136 155 L158 155"
                                        stroke="white"
                                        stroke-width="2.5"
                                        stroke-linecap="round"
                                    />
                                    <path
                                        d="M182 155 L204 155"
                                        stroke="white"
                                        stroke-width="2.5"
                                        stroke-linecap="round"
                                    />
                                    <path
                                        d="M152 186 Q170 198 188 186"
                                        stroke="white"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        fill="none"
                                    />
                                    <path
                                        d="M105 315 L148 315 L170 358 L192 315 L235 315"
                                        stroke="white"
                                        stroke-width="1"
                                        stroke-linecap="round"
                                        fill="none"
                                    />
                                    <rect
                                        x="153"
                                        y="376"
                                        width="34"
                                        height="76"
                                        rx="5"
                                        stroke="white"
                                        stroke-width="1"
                                        fill="none"
                                    />
                                    <line
                                        x1="153"
                                        y1="395"
                                        x2="187"
                                        y2="395"
                                        stroke="white"
                                        stroke-width="0.5"
                                    />
                                    <line
                                        x1="153"
                                        y1="412"
                                        x2="187"
                                        y2="412"
                                        stroke="white"
                                        stroke-width="0.5"
                                    />
                                    <line
                                        x1="153"
                                        y1="430"
                                        x2="187"
                                        y2="430"
                                        stroke="white"
                                        stroke-width="0.5"
                                    />
                                    <circle
                                        cx="55"
                                        cy="440"
                                        r="28"
                                        stroke="white"
                                        stroke-width="0.5"
                                        fill="none"
                                    />
                                    <circle
                                        cx="285"
                                        cy="440"
                                        r="28"
                                        stroke="white"
                                        stroke-width="0.5"
                                        fill="none"
                                    />
                                </svg>
                            </div>

                            {{-- CONTENT --}}
                            <div class="gb-left-content">

                                {{-- Logo --}}
                                <div class="d-flex align-items-center gap-3 mb-5">
                                    <div class="gb-logo-icon">
                                        <i class="ti ti-cut text-white fs-5"></i>
                                    </div>

                                    <span class="gb-logo-name">
                                        Go<span>Barber</span>Shop
                                    </span>
                                </div>

                                {{-- Tag --}}
                                <span class="gb-hero-tag mb-3 d-inline-flex">
                                    <i class="ti ti-shield-check"></i>
                                    Platform Partner Resmi
                                </span>

                                {{-- Title --}}
                                <h1 class="gb-hero-title mb-3">
                                    Gabung Menjadi<br />
                                    <span class="blue">
                                        Owner Barbershop
                                    </span>
                                </h1>

                                {{-- Subtitle --}}
                                <p class="gb-hero-sub mb-5">
                                    Kelola toko, layanan, pegawai, dan booking
                                    pelanggan dalam satu platform terintegrasi
                                    yang modern dan mudah digunakan.
                                </p>

                                {{-- Stats --}}
                                <div class="d-flex gap-4">
                                    <div class="gb-stat">
                                        <div class="gb-stat-num">100+</div>
                                        <div class="gb-stat-label">
                                            Barbershop
                                        </div>
                                    </div>

                                    <div class="gb-stat">
                                        <div class="gb-stat-num">5.000+</div>
                                        <div class="gb-stat-label">
                                            Customer
                                        </div>
                                    </div>

                                    <div class="gb-stat">
                                        <div class="gb-stat-num">24/7</div>
                                        <div class="gb-stat-label">
                                            Booking
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- RIGHT FORM -->
                        <div class="col-lg-6 bg-white">

                            <div class="gb-form-wrapper">

                                {{-- ICON --}}
                                <div class="gb-form-icon">
                                    <i class="ti ti-user-plus"></i>
                                </div>

                                {{-- TITLE --}}
                                <h2 class="gb-form-title">
                                    Register Owner
                                </h2>

                                <p class="gb-form-subtitle">
                                    Lengkapi data owner barbershop
                                </p>

                                <form action="" method="POST">
                                    @csrf

                                    <!-- OWNER NAME -->
                                    <div class="mb-3">
                                        <label class="gb-label">
                                            Nama Owner
                                        </label>

                                        <input
                                            type="text"
                                            name="owner_name"
                                            class="form-control gb-input"
                                            placeholder="Masukkan nama owner"
                                        />
                                    </div>

                                    <!-- EMAIL -->
                                    <div class="mb-3">
                                        <label class="gb-label">
                                            Email
                                        </label>

                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control gb-input"
                                            placeholder="Masukkan email"
                                        />
                                    </div>

                                    <!-- PHONE -->
                                    <div class="mb-3">
                                        <label class="gb-label">
                                            Nomor Telepon
                                        </label>

                                        <input
                                            type="text"
                                            name="phone"
                                            class="form-control gb-input"
                                            placeholder="Masukkan nomor telepon"
                                        />
                                    </div>

                                    <!-- ADMIN ID -->
                                    <div class="mb-4">
                                        <label class="gb-label">
                                            Admin ID
                                        </label>

                                        <input
                                            type="number"
                                            name="admin_id"
                                            class="form-control gb-input"
                                            placeholder="Masukkan admin id"
                                        />
                                    </div>

                                    <!-- BUTTON -->
                                    <button
                                        type="submit"
                                        class="btn gb-btn-primary"
                                    >
                                        Daftar Owner
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .gb-page {
            min-height: 100vh;
            background: #0a0a0a;
            padding-top: 40px;
            padding-bottom: 40px;
            font-family: "Inter", sans-serif;
        }

        /* CARD */
        .gb-card {
            border-radius: 30px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.45);
        }

        /* LEFT PANEL */
        .gb-left-panel {
            min-height: 850px;
            padding: 70px;
            overflow: hidden;
            background: #050505;
        }

        .gb-left-bg {
            position: absolute;
            inset: 0;
            z-index: 0;

            background:
                radial-gradient(
                    circle at top left,
                    rgba(77, 171, 247, 0.12),
                    transparent 35%
                ),
                radial-gradient(
                    circle at bottom right,
                    rgba(77, 171, 247, 0.08),
                    transparent 30%
                ),
                linear-gradient(
                    180deg,
                    #050505 0%,
                    #0d1117 100%
                );
        }

        .gb-left-bg::before {
            content: "";
            position: absolute;
            inset: 0;

            background-image:
                linear-gradient(
                    rgba(255,255,255,0.03) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(255,255,255,0.03) 1px,
                    transparent 1px
                );

            background-size: 35px 35px;
        }

        .gb-left-art {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
            pointer-events: none;
        }

        .gb-left-art svg {
            opacity: 0.07;
            transform: scale(1.05);
        }

        .gb-left-content {
            position: relative;
            z-index: 3;
        }

        /* LOGO */
        .gb-logo-icon {
            width: 55px;
            height: 55px;
            border-radius: 16px;
            background: linear-gradient(
                135deg,
                #4dabf7,
                #228be6
            );

            display: flex;
            align-items: center;
            justify-content: center;

            box-shadow: 0 0 35px rgba(77,171,247,.4);
        }

        .gb-logo-name {
            font-size: 28px;
            font-weight: 700;
            color: #fff;
        }

        .gb-logo-name span {
            color: #4dabf7;
        }

        /* TAG */
        .gb-hero-tag {
            align-items: center;
            gap: 7px;

            background: rgba(77,171,247,.1);
            border: 1px solid rgba(77,171,247,.2);

            color: #74c0fc;

            padding: 8px 18px;
            border-radius: 50px;

            font-size: 12px;
            font-weight: 600;
        }

        /* TITLE */
        .gb-hero-title {
            font-size: 58px;
            line-height: 1.08;
            font-weight: 800;
            color: #fff;
            letter-spacing: -1px;
        }

        .gb-hero-title .blue {
            color: #4dabf7;
        }

        .gb-hero-sub {
            max-width: 420px;
            font-size: 17px;
            line-height: 1.9;
            color: rgba(255,255,255,.58);
        }

        /* STATS */
        .gb-stat {
            border-left: 2px solid rgba(77,171,247,.3);
            padding-left: 16px;
        }

        .gb-stat-num {
            font-size: 40px;
            font-weight: 800;
            color: #fff;
        }

        .gb-stat-label {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: rgba(255,255,255,.4);
        }

        /* RIGHT FORM */
        .gb-form-wrapper {
            padding: 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 850px;
        }

        .gb-form-icon {
            width: 70px;
            height: 70px;
            border-radius: 22px;

            background: linear-gradient(
                135deg,
                #4dabf7,
                #228be6
            );

            color: #fff;
            font-size: 30px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 28px;

            box-shadow: 0 15px 40px rgba(77,171,247,.35);
        }

        .gb-form-title {
            font-size: 44px;
            font-weight: 800;
            text-align: center;
            color: #111827;
            margin-bottom: 10px;
        }

        .gb-form-subtitle {
            text-align: center;
            color: #6b7280;
            font-size: 16px;
            margin-bottom: 50px;
        }

        /* LABEL */
        .gb-label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            font-size: 14px;
            color: #111827;
        }

        /* INPUT */
        .gb-input {
            height: 60px;
            border-radius: 18px;
            border: 1px solid #e5e7eb;

            padding: 0 20px;
            font-size: 15px;

            transition: 0.25s;
            box-shadow: none !important;
        }

        .gb-input:focus {
            border-color: #4dabf7;
            box-shadow: 0 0 0 4px rgba(77,171,247,.12) !important;
        }

        /* BUTTON */
        .gb-btn-primary {
            width: 100%;
            height: 60px;
            border: none;
            border-radius: 18px;

            background: linear-gradient(
                135deg,
                #4dabf7,
                #228be6
            );

            color: #fff;
            font-weight: 700;
            font-size: 16px;

            transition: 0.3s;
        }

        .gb-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(77,171,247,.3);
        }

        /* RESPONSIVE */
        @media (max-width: 991px) {

            .gb-form-wrapper {
                min-height: auto;
                padding: 40px 25px;
            }

            .gb-form-title {
                font-size: 34px;
            }

            .gb-card {
                border-radius: 24px;
            }
        }
    </style>
</x-layout>