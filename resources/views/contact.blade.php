@extends('layouts.app')
@section('title', 'Contacto')
@section('content')
    <!-- Encabezado -->
    <section class="relative bg-gradient-to-r from-blue-900 to-blue-700 text-white py-16 sm:py-20 md:py-40 text-center overflow-hidden">
        <div class="absolute inset-0 bg-banner-tech bg-cover bg-center opacity-50"></div>
        <div class="relative container mx-auto px-4 sm:px-6" data-aos="zoom-in">
            <h1 class="text-xl sm:text-3xl md:text-5xl font-bold mb-2 sm:mb-4 drop-shadow-lg tracking-tight leading-tight">Contáctanos</h1>
            <p class="text-xs sm:text-base md:text-lg mb-4 sm:mb-6 max-w-3xl mx-auto drop-shadow-md">Estamos listos para ayudarte a transformar tu negocio.</p>
        </div>
    </section>

    <!-- Formulario y contacto -->
    <section class="py-8 sm:py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 flex flex-col md:flex-row gap-8 sm:gap-10">
            <!-- Formulario -->
            <div class="flex-1" data-aos="fade-right">
                <h2 class="text-lg sm:text-3xl md:text-4xl font-bold mb-4 text-blue-900">Envíanos un mensaje</h2>
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-xs sm:text-sm font-medium text-gray-600">Nombre</label>
                        <input type="text" name="name" id="name" class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none text-sm sm:text-base" required>
                    </div>
                    <div>
                        <label for="email" class="block text-xs sm:text-sm font-medium text-gray-600">Email</label>
                        <input type="email" name="email" id="email" class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none text-sm sm:text-base" required>
                    </div>
                    <div>
                        <label for="message" class="block text-xs sm:text-sm font-medium text-gray-600">Mensaje</label>
                        <textarea name="message" id="message" class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none text-sm sm:text-base" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="bg-green-500 text-white px-6 sm:px-8 py-2 sm:py-3 rounded-full hover:bg-green-600 transition duration-300 w-full sm:w-auto text-sm sm:text-base">Enviar</button>
                </form>
            </div>
            <!-- Información de contacto -->
            <div class="flex-1" data-aos="fade-left">
                <h2 class="text-lg sm:text-3xl md:text-4xl font-bold mb-4 text-blue-900">Información de Contacto</h2>
                <div class="space-y-4">
                    <p class="text-xs sm:text-base text-gray-600"><i class="fas fa-envelope text-green-500 mr-2"></i><strong>Email:</strong> contacto@corewave.com</p>
                    <p class="text-xs sm:text-base text-gray-600"><i class="fas fa-phone text-green-500 mr-2"></i><strong>Teléfono:</strong> +54 9 336 4547429</p>
                    <p class="text-xs sm:text-base text-gray-600"><i class="fas fa-map-marker-alt text-green-500 mr-2"></i><strong>Ubicación:</strong> Paso de los Libres, Argentina</p>
                    <div class="flex gap-4 mt-4 justify-center md:justify-start">
                        <a href="https://www.linkedin.com/in/marcelo-duhalde" target="_blank" class="text-green-500 hover:text-green-600"><i class="fab fa-linkedin text-xl sm:text-2xl"></i></a>
                        <a href="https://x.com/marceloduhalde" target="_blank" class="text-green-500 hover:text-green-600"><i class="fab fa-x-twitter text-xl sm:text-2xl"></i></a>
                        <a href="https://www.instagram.com/marceloduhalde" target="_blank" class="text-green-500 hover:text-green-600"><i class="fab fa-instagram text-xl sm:text-2xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection