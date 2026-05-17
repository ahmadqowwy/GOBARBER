<x-layout>

<style>
html,
body {
    margin: 0;
    padding: 0;
    width: 100%;
    background-color: #0b044e;
    overflow-x: hidden;
}

main {
    margin: 0 !important;
    padding: 0 !important;
}

.container {
    max-width: 100% !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
}

.custom-navbar {
    background-color: #120242;
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    
    <div class="container">

        <a class="navbar-brand" href="{{ route('home') }}">
            GoBarber
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">

            <ul class="navbar-nav">

                <li class="nav-item mx-3">

                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">

                        Home

                    </a>

                </li>

                <li class="nav-item mx-3">

                    <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}"
                       href="{{ route('blog') }}">

                        Blog

                    </a>

                </li>

                <li class="nav-item mx-3">

                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                       href="{{ route('about') }}">

                        About

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>

</x-layout>