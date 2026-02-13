<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul_halaman', 'Portal Sekolah')</title>

    <!-- 1. Import CSS (Tailwind CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- 2. Import CSS Buatan Sendiri (Local) -->
    <!-- Fungsi asset() mengarah ke folder public -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    
    <!-- Slot untuk CSS tambahan per halaman -->
    @stack('styles')
</head>
<body class="flex flex-col min-h-screen">

    <!-- BAGIAN 1: NAVBAR (Tetap) -->
    <header class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-white text-2xl font-bold">SMK Hebat</h1>
            <nav>
                <a href="{{ url('/') }}" class="nav-link">Beranda</a>
                <a href="{{ url('/tentang') }}" class="nav-link">Tentang</a>
            </nav>
        </div>
    </header>

    <!-- BAGIAN 2: KONTEN DINAMIS (Berubah-ubah) -->
    <main class="container mx-auto p-6 flex-grow">
        
        @yield('konten_utama')
    </main>

    <!-- BAGIAN 3: FOOTER (Tetap) -->
    <footer class="bg-gray-800 text-white text-center p-4 mt-auto">
        <p>&copy; 2024 Project Siswa Laravel.</p>
    </footer>

    <!-- 3. Import JS Buatan Sendiri -->
    <script src="{{ asset('js/interaksi.js') }}"></script>
    
    <!-- Slot untuk JS tambahan per halaman -->
    @stack('scripts')
</body>
</html>
