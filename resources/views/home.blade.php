@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
    <!-- Banner -->
    <section class="relative bg-gradient-to-r from-blue-900 to-blue-700 text-white py-16 sm:py-20 md:py-40 text-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/banner-tech-bg.jpg') }}'); opacity: 0.5; background-position: center;"></div>
        <div class="relative container mx-auto px-4 sm:px-6" data-aos="zoom-in">
            <h1 class="text-xl sm:text-3xl md:text-5xl font-bold mb-2 sm:mb-4 drop-shadow-lg tracking-tight leading-tight">CoreWave: Impulsamos tu futuro con tecnología</h1>
            <p class="text-xs sm:text-base md:text-lg mb-4 sm:mb-6 max-w-3xl mx-auto drop-shadow-md">Soluciones personalizadas en desarrollo web y consultoría tecnológica.</p>
            <a href="{{ route('contact') }}" class="bg-green-500 text-white px-8 sm:px-10 py-3 sm:py-4 rounded-full hover:bg-green-600 transition duration-300 shadow-lg w-11/12 sm:w-auto text-sm sm:text-lg font-semibold">Contáctanos</a>
        </div>
    </section>

    <!-- Servicios destacados -->
    <section class="py-8 sm:py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 text-center">
            <h2 class="text-lg sm:text-3xl md:text-4xl font-bold mb-6 sm:mb-8 text-blue-900" data-aos="fade-up">Nuestros Servicios</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 sm:gap-12">
                <div class="p-3 sm:p-4 md:p-6 bg-white border border-blue-100 rounded-xl shadow-lg hover:shadow-xl transition duration-300" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-code text-lg sm:text-3xl md:text-5xl text-green-500 mb-3 sm:mb-4"></i>
                    <h3 class="text-sm sm:text-lg md:text-2xl font-semibold mb-2 sm:mb-3 text-blue-900">Desarrollo Web</h3>
                    <p class="text-xs sm:text-base text-gray-600">Aplicaciones web modernas y optimizadas con Laravel, Django y más.</p>
                </div>
                <div class="p-3 sm:p-4 md:p-6 bg-white border border-blue-100 rounded-xl shadow-lg hover:shadow-xl transition duration-300" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-cogs text-lg sm:text-3xl md:text-5xl text-green-500 mb-3 sm:mb-4"></i>
                    <h3 class="text-sm sm:text-lg md:text-2xl font-semibold mb-2 sm:mb-3 text-blue-900">Consultoría Tecnológica</h3>
                    <p class="text-xs sm:text-base text-gray-600">Estrategias para modernizar sistemas y adoptar nuevas tecnologías.</p>
                </div>
                <div class="p-3 sm:p-4 md:p-6 bg-white border border-blue-100 rounded-xl shadow-lg hover:shadow-xl transition duration-300" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-headset text-lg sm:text-3xl md:text-5xl text-green-500 mb-3 sm:mb-4"></i>
                    <h3 class="text-sm sm:text-lg md:text-2xl font-semibold mb-2 sm:mb-3 text-blue-900">Soporte Técnico</h3>
                    <p class="text-xs sm:text-base text-gray-600">Mantenimiento y optimización de tus plataformas digitales.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-8 sm:py-12 md:py-20 bg-green-500 text-white text-center bg-cover bg-center" style="background-image: url('{{ asset('images/background-tech.jpg') }}');">
        <div class="container mx-auto px-4 sm:px-6" data-aos="fade-up">
            <h2 class="text-lg sm:text-3xl md:text-4xl font-bold mb-4 sm:mb-6 drop-shadow-md">¿Listo para transformar tu negocio?</h2>
            <a href="{{ route('contact') }}" class="bg-white text-green-500 px-8 sm:px-10 py-3 sm:py-4 rounded-full hover:bg-gray-200 transition duration-300 shadow-lg w-11/12 sm:w-auto text-sm sm:text-lg font-semibold">Hablemos</a>
        </div>
    </section>
@endsection