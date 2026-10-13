<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portal Akademik')</title>
</head>
<body>
    {{-- Menyisipkan navbar --}}
    @include('partials.navbar')

    <main style="padding: 0 20px;">
        {{-- Tempat konten dari halaman anak --}}
        @yield('content')
    </main>

    <footer style="margin-top: 40px; padding: 10px; background: #f0f0f0; text-align: center;">
        &copy; {{ date('Y') }} - Praktikum Laravel Blade
    </footer>
</body>
</html>