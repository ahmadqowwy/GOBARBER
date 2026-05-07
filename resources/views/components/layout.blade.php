<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>{{ $title ?? 'App' }}</title>
</head>
<body>

    <!-- Navbar -->
    <x-navbar />

    <!-- Header -->
    <x-header>{{ $title ?? 'Title' }}</x-header>

    <!-- Content -->
    <main class="container py-4">
        {{ $slot }}
    </main>

    <!-- Bootstrap JS (WAJIB di bawah) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>