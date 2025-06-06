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
            <div class="flex-1" data-aos="fade-up">
                <h2 class="text-lg sm:text-3xl md:text-4xl font-bold mb-4 text-blue-900">Envíanos un mensaje</h2>
                <!-- Mensajes de éxito/error -->
                @if (session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg text-sm sm:text-base">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg text-sm sm:text-base">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-xs sm:text-sm font-medium text-gray-600">Nombre</label>
                        <input type="text" name="name" id="name" class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none text-sm sm:text-base @error('name') border-red-500 @enderror" required>
                        @error('name')
                            <p class="text-red-500 text-xs sm:text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-xs sm:text-sm font-medium text-gray-600">Email</label>
                        <input type="email" name="email" id="email" class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none text-sm sm:text-base @error('email') border-red-500 @enderror" required>
                        @error('email')
                            <p class="text-red-500 text-xs sm:text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="message" class="block text-xs sm:text-sm font-medium text-gray-600">Mensaje</label>
                        <textarea name="message" id="message" class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:outline-none text-sm sm:text-base @error('message') border-red-500 @enderror" rows="5" required></textarea>
                        @error('message')
                            <p class="text-red-500 text-xs sm:text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="bg-green-500 text-white px-6 sm:px-8 py-2 sm:py-3 rounded-full hover:bg-green-600 transition duration-300 w-full sm:w-auto text-sm sm:text-base">Enviar</button>
                </form>
            </div>
            <!-- Información de contacto -->
            <div class="flex-1" data-aos="fade-up">
                <h2 class="text-lg sm:text-3xl md:text-4xl font-bold mb-4 text-blue-900">Información de Contacto</h2>
                <div class="space-y-4">
                    <p class="text-xs sm:text-base text-gray-600"><i class="fas fa-envelope text-green-500 mr-2"></i><strong>Email:</strong> <a href="mailto:contacto@corewave.com.ar" class="text-green-500 hover:text-green-600">contacto@corewave.com.ar</a></p>
                    <p class="text-xs sm:text-base text-gray-600"><i class="fas fa-phone text-green-500 mr-2"></i><strong>Teléfono:</strong> <a href="tel:+5493364547429" class="text-green-500 hover:text-green-600">+54 9 336 4547429</a> | <a href="https://wa.me/5493364547429" class="text-green-500 hover:text-green-600">WhatsApp</a></p>
                    <p class="text-xs sm:text-base text-gray-600"><i class="fas fa-map-marker-alt text-green-500 mr-2"></i><strong>Ubicación:</strong> Paso de los Libres, Argentina</p>
                    <div class="flex gap-4 mt-4 justify-center md:justify-start">
                        <a href="https://www.linkedin.com/company/corewaveit" target="_blank" class="text-green-500 hover:text-green-600"><i class="fab fa-linkedin text-xl sm:text-2xl"></i></a>
                        <a href="https://x.com/CoreWaveIT" target="_blank" class="text-green-500 hover:text-green-600"><i class="fab fa-x-twitter text-xl sm:text-2xl"></i></a>
                        <a href="https://www.instagram.com/corewaveit" target="_blank" class="text-green-500 hover:text-green-600"><i class="fab fa-instagram text-xl sm:text-2xl"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61576221545167" target="_blank" class="text-green-500 hover:text-green-600"><i class="fab fa-facebook text-xl sm:text-2xl"></i></a>
                        <a href="https://www.tiktok.com/@corewaveit" target="_blank" class="text-green-500 hover:text-green-600"><i class="fab fa-tiktok text-xl sm:text-2xl"></i></a>
                        <a href="https://www.threads.com/@corewaveit" target="_blank" class="text-green-500 hover:text-green-600"><i class="fab fa-threads text-xl sm:text-2xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection