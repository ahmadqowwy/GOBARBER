@props(['title' => 'Default Title'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body>

<x-navbar />

<x-header>{{ $title }}</x-header>

<main class="p-4">
    {{ $slot }}
</main>

</body>
</html>