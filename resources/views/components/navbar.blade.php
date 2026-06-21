<style>
    /* NAVBAR */
    .custom-navbar {
        background: rgba(18, 2, 66, 0.55);
        backdrop-filter: blur(12px);
        padding: 18px 50px;
        z-index: 999;
    }

    .navbar-collapse {
        display: flex;
        align-items: center;
    }

    /* search + login */
    .navbar-actions {
        display: flex;
        align-items: center;
        min-width: 420px;
        justify-content: flex-end;
    }

    /* Logo GoBarber */
    .navbar-brand {
        min-width: 220px;
    }

    /* Menu */
    .navbar-nav {
        align-items: center;
    }

    /* menu tengah navbar */
    .navbar-nav .nav-link {
        color: white !important;
        font-size: 1.05rem;
        font-weight: 500;
        transition: .3s;
    }

    .navbar-nav .nav-link:hover {
        color: #6db4ff !important;
    }

    /* SLIDER */
    .slider_section {
        margin-top: -95px;
    }

    .container-fluid {
        max-width: 1500px;
    }

    /* SEARCH BAR */
    .search-form {
        width: 300px;
        margin: 0;
    }

    .search-box {
        height: 46px;
        background: rgba(255, 255, 255, 0.10);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 30px;
        overflow: hidden;
        backdrop-filter: blur(15px);
        display: flex;
        align-items: center;
    }

    /* input search */
    .search-box .form-control {
        height: 100%;
        border: none;
        background: transparent;
        color: white;
        font-size: 1rem;
        padding-left: 20px;
    }

    .search-box .form-control::placeholder {
        color: rgba(255, 255, 255, .65);
    }

    .search-box .form-control:focus {
        background: transparent;
        color: white;
        box-shadow: none;
    }

    /* ikon search */
    .btn-search {
        height: 100%;
        border: none;
        background: transparent;
        color: white;
        padding: 0 18px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-search:hover {
        color: #6db4ff;
    }

    @media (max-width: 576px) {

        .search-box {
            height: 44px;
        }

        .search-box .form-control {
            font-size: 0.9rem;
            padding-left: 15px;
        }

        .btn-search {
            padding: 0 15px;
        }
    }

    /* tombol login */
    .btn-login {
        border: 1.5px solid white;
        border-radius: 30px;
        color: white;
        padding: 10px 28px;
        transition: .3s;
    }

    .btn-login:hover {
        background: white;
        color: #17044a;
    }

    /* tamplan hp/tablet */
    @media (max-width: 991px) {
        .custom-navbar {
            padding: 15px 20px;
        }

        .navbar-actions {
            flex-direction: column;
            align-items: stretch !important;
            min-width: 100%;
            margin-top: 10px;
        }

        .search-form {
            width: 100%;
            margin: 0 0 15px 0 !important;
        }

        .btn-login {
            width: 100%;
            text-align: center;
        }

        .custom-navbar {
            padding: 12px 20px;
        }

        .navbar-brand {
            min-width: auto;
            font-size: 1.3rem;
        }

        .navbar-collapse {
            margin-top: 15px;
            text-align: center;
        }

        .navbar-nav {
            gap: 10px;
        }

        .navbar-actions {
            min-width: 100%;
            flex-direction: column;
            align-items: stretch;
            margin-top: 15px;
        }

        .btn-login {
            width: 100%;
            text-align: center;
        }

        /* tombol hamburger */
        .navbar-toggler {
            border: none;
            box-shadow: none !important;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }
    }
</style>
<!-- Background Ungu Transparan Pada Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">

    <!-- Container Navbar -->
    <div class="container-fluid px-4">

        <a class="navbar-brand" href="{{ route('home') }}">GoBarber</a>

        <!-- Tombol Hamburger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Menu Tengah -->
            <ul class="navbar-nav mx-auto align-items-center">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">
                        Menu
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        About
                    </a>
                </li>

            </ul>

            <!-- Search + Login -->
            <div class="d-flex align-items-center navbar-actions">

                <!-- Search Form -->
                <form action="{{ route('search') }}" method="GET" class="search-form me-3">

                    <!-- search box -->
                    <div class="search-box">

                        <!-- input search -->
                        <input type="text" class="form-control" name="keyword" placeholder="Cari Barbershop...">
                        <!-- ikon search -->
                        <button class="btn-search" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>

                    </div>
                </form>

                <!-- tombol login -->
                <a href="{{ route('login') }}" class="btn btn-login">
                    Login
                </a>

            </div>

        </div>
    </div>
</nav>
