<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4">
    <div class="flex h-16 items-center justify-between">

      <div class="flex items-center space-x-4">
        <span class="text-white font-bold">MyApp</span>

       <a href="{{ route('home') }}"
   class="{{ request()->routeIs('home') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md">
   Home
</a>

<a href="{{ route('blog') }}"
   class="{{ request()->is('blog') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md">
   Blog
</a>

<a href="{{ url('/about') }}"
   class="{{ request()->is('about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md">
   About
</a>
      </div>

      <div class="flex items-center space-x-3">
        <span class="text-gray-300">User</span>
        <img class="h-8 w-8 rounded-full" src="https://i.pravatar.cc/100">
      </div>

    </div>
  </div>
</nav>