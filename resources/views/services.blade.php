@extends('layouts.app')
@section('title', 'Servicios')
@section('content')
    <!-- Encabezado -->
    <section class="relative bg-gradient-to-r from-blue-900 to-blue-700 text-white py-16 sm:py-20 md:py-40 text-center overflow-hidden">
        <div class="absolute inset-0 bg-banner-tech bg-cover bg-center opacity-50"></div>
        <div class="relative container mx-auto px-4 sm:px-6" data-aos="zoom-in">
            <h1 class="text-xl sm:text-3xl md:text-5xl font-bold mb-2 sm:mb-4 drop-shadow-lg tracking-tight leading-tight">Nuestros Servicios</h1>
            <p class="text-xs sm:text-base md:text-lg mb-4 sm:mb-6 max-w-3xl mx-auto drop-shadow-md">Soluciones tecnológicas diseñadas para tu éxito.</p>
        </div>
    </section>

    <!-- Servicios -->
    <section class="py-8 sm:py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="flex flex-col md:flex-row gap-8 sm:gap-10 mb-12" data-aos="fade-up">
                <div class="flex-1 p-4 sm:p-6 bg-white border border-blue-100 rounded-xl shadow-lg hover:shadow-xl transition duration-300 text-center">
                    <i class="fas fa-code text-lg sm:text-3xl md:text-5xl text-green-500 mb-3 sm:mb-4"></i>
                    <h2 class="text-sm sm:text-lg md:text-2xl font-semibold mb-2 sm:mb-3 text-blue-900">Desarrollo Web</h2>
                    <p class="text-xs sm:text-base text-gray-600 mb-4">Creamos aplicaciones web robustas y modernas con tecnologías como Laravel, Django y Angular, optimizadas para rendimiento y SEO.</p>
                    <a href="{{ route('contact') }}" class="bg-green-500 text-white px-6 sm:px-8 py-2 sm:py-3 rounded-full hover:bg-green-600 transition duration-300 w-full sm:w-auto text-sm sm:text-base">Solicitar Presupuesto</a>
                </div>
                <div class="flex-1 p-4 sm:p-6 bg-white border border-blue-100 rounded-xl shadow-lg hover:shadow-xl transition duration-300 text-center">
                    <i class="fas fa-cogs text-lg sm:text-3xl md:text-5xl text-green-500 mb-3 sm:mb-4"></i>
                    <h2 class="text-sm sm:text-lg md:text-2xl font-semibold mb-2 sm:mb-3 text-blue-900">Consultoría Tecnológica</h2>
                    <p class="text-xs sm:text-base text-gray-600 mb-4">Ofrecemos estrategias para modernizar sistemas, integrar IA y optimizar procesos empresariales.</p>
                    <a href="{{ route('contact') }}" class="bg-green-500 text-white px-6 sm:px-8 py-2 sm:py-3 rounded-full hover:bg-green-600 transition duration-300 w-full sm:w-auto text-sm sm:text-base">Solicitar Presupuesto</a>
                </div>
                <div class="flex-1 p-4 sm:p-6 bg-white border border-blue-100 rounded-xl shadow-lg hover:shadow-xl transition duration-300 text-center">
                    <i class="fas fa-headset text-lg sm:text-3xl md:text-5xl text-green-500 mb-3 sm:mb-4"></i>
                    <h2 class="text-sm sm:text-lg md:text-2xl font-semibold mb-2 sm:mb-3 text-blue-900">Soporte Técnico</h2>
                    <p class="text-xs sm:text-base text-gray-600 mb-4">Mantenimiento y optimización de tus plataformas digitales para garantizar su correcto funcionamiento.</p>
                    <a href="{{ route('contact') }}" class="bg-green-500 text-white px-6 sm:px-8 py-2 sm:py-3 rounded-full hover:bg-green-600 transition duration-300 w-full sm:w-auto text-sm sm:text-base">Solicitar Presupuesto</a>
                </div>
            </div>
        </div>
    </section>
@endsection