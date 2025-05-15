<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoreWave - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/all.min.css') }}">
    <meta name="facebook-domain-verification" content="9yw3v58dfngveunj7er9tz29ruuptz" />
</head>
<body class="font-inter bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-corewave-blue text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/">
                <img src="{{ asset('images/logo-corewave.png') }}" alt="CoreWave Logo" class="h-10 sm:h-12">
            </a>
            <button class="md:hidden focus:outline-none" id="menu-toggle">
                <i class="fas fa-bars text-base sm:text-2xl"></i>
            </button>
            <div class="hidden md:flex space-x-4 sm:space-x-6" id="menu">
                <a href="{{ route('home') }}" class="text-white hover:text-corewave-green transition duration-300 text-xs sm:text-base">Inicio</a>
                <a href="{{ route('about') }}" class="text-white hover:text-corewave-green transition duration-300 text-xs sm:text-base">Sobre Nosotros</a>
                <a href="{{ route('services') }}" class="text-white hover:text-corewave-green transition duration-300 text-xs sm:text-base">Servicios</a>
                <a href="{{ route('contact') }}" class="text-white hover:text-corewave-green transition duration-300 text-xs sm:text-base">Contacto</a>
            </div>
        </div>
        <!-- Menú móvil -->
        <div class="hidden md:hidden bg-blue-800 p-4" id="mobile-menu">
            <a href="{{ route('home') }}" class="block py-2 text-white hover:text-corewave-green transition duration-300 text-sm">Inicio</a>
            <a href="{{ route('about') }}" class="block py-2 text-white hover:text-corewave-green transition duration-300 text-sm">Sobre Nosotros</a>
            <a href="{{ route('services') }}" class="block py-2 text-white hover:text-corewave-green transition duration-300 text-sm">Servicios</a>
            <a href="{{ route('contact') }}" class="block py-2 text-white hover:text-corewave-green transition duration-300 text-sm">Contacto</a>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-corewave-blue text-white p-6">
        <div class="container mx-auto text-center">
            <p>© 2025 CoreWave. Todos los derechos reservados.</p>
            <p>Email: contacto@corewave.com | Tel: +54 9 336 4547429</p>
        </div>
    </footer>

    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init();
        document.getElementById('menu-toggle').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>