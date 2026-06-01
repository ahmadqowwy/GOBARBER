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

    .navbar-actions {
        display: flex;
        align-items: center;
        min-width: 420px;
        justify-content: flex-end;
    }

    /* Logo */
    .navbar-brand {
        min-width: 220px;
    }

    /* Menu */
    .navbar-nav {
        align-items: center;
    }

    /* menu navbar */
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

    @media (max-width: 991px) {

        .search-form {
            width: 100%;
            margin: 15px 0;
        }

        .d-flex.align-items-center.gap-3 {
            flex-direction: column;
            align-items: stretch !important;
        }

        .btn-outline-light {
            width: 100%;
        }

    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">
    <div class="container-fluid px-4">

        <a class="navbar-brand" href="{{ route('home') }}">GoBarber</a>

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

                <form action="#" method="GET" class="search-form me-3">
                    <div class="search-box">

                        <input type="text" class="form-control" name="keyword" placeholder="Cari Barbershop...">

                        <button class="btn-search" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>

                    </div>
                </form>

                <a href="" class="btn btn-login">
                    Login
                </a>

            </div>

        </div>
    </div>
</nav>
