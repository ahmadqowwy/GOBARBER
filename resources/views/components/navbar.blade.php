<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4">
    <div class="flex h-16 items-center justify-between">

      <div class="flex items-center space-x-4">
        <span class="text-white font-bold">MyApp</span>

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

      <div class="flex items-center space-x-3">
        <span class="text-gray-300">User</span>
        <img class="h-8 w-8 rounded-full" src="https://i.pravatar.cc/100">
      </div>

    </div>
  </div>
</nav>