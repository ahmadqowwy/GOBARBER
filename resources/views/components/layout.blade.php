@props([
    'title' => 'Default Title',
    'navbar' => 'default'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS custom -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>{{ $title ?? 'App' }}</title>
</head>
<body>

    <!-- Navbar -->
    
    @if($navbar == 'default')

        <x-navbar />

    @elseif($navbar == 'toko')

        <x-navbar-toko />

    @endif

    <!-- Content -->
    <main class="container p-0 m-0">
        {{ $slot }}
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>