<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">

    <a class="navbar-brand" href="{{ route('home') }}">GoBarber</a>

<<<<<<< HEAD
  <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
    Home
</x-nav-link>

<x-nav-link :href="route('blog')" :active="request()->routeIs('blog')">
    Blog
</x-nav-link>

<x-nav-link :href="route('about')" :active="request()->routeIs('about')">
    About
</x-nav-link>

      </div>
=======
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
            Home
          </a>
        </li>
>>>>>>> qowwy

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">
            Blog
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
            About
          </a>
        </li>

      </ul>
    </div>

  </div>
</nav>