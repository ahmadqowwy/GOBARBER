<style>
    /* NAVBAR */
    .custom-navbar {
        background: rgba(18, 2, 66, 0.45);
        backdrop-filter: blur(6px);
        transition: 0.3s;
        padding: 18px 40px;
        z-index: 999;
    }

    /* menu navbar */
    .navbar-nav .nav-link {
        color: white !important;
        font-weight: 500;
        transition: 0.3s;
    }

    .navbar-nav .nav-link:hover {
        color: #4da3ff !important;
    }

    /* tombol login */
    .btn-outline-light {
        border-radius: 30px;
        padding: 8px 24px;
        border: 1.5px solid white;
    }

    /* SLIDER */
    .slider_section {
        margin-top: -90px;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">
    <div class="container-fluid px-4">

        <a class="navbar-brand" href="{{ route('home') }}">GoBarber</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item mx-3">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item mx-3">
                    <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">
                        Menu
                    </a>
                </li>

                <li class="nav-item mx-3">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        About
                    </a>
                </li>

            </ul>
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn btn-outline-light rounded-pill px-4">
                    Login
                </a>
            </div>
        </div>
    </div>
</nav>
