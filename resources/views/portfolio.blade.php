@extends('layouts.app')
@section('title', 'Portafolio')
@section('content')
    <!-- Encabezado -->
    <section class="py-12 md:py-16 bg-white text-center">
        <div class="container mx-auto px-4" data-aos="fade-up">
            <h1 class="text-2xl md:text-3xl font-bold mb-4">Nuestro Portafolio</h1>
            <p class="text-base md:text-lg max-w-2xl mx-auto">Descubre algunos de nuestros proyectos destacados.</p>
        </div>
    </section>

    <!-- Proyectos -->
    <section class="py-12 md:py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 sm:p-6 bg-white rounded-lg shadow" data-aos="fade-up">
                    <img src="https://source.unsplash.com/random/600x400?web" alt="Proyecto 1" class="w-full h-auto rounded mb-4" loading="lazy">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Sistema de Gestión Web</h3>
                    <p class="text-sm md:text-base mb-4">Aplicación web desarrollada con Laravel para optimizar procesos internos de una empresa.</p>
                    <a href="#" class="text-corewave-green hover:underline">Ver Detalles</a>
                </div>
                <div class="p-4 sm:p-6 bg-white rounded-lg shadow" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://source.unsplash.com/random/600x400?tech" alt="Proyecto 2" class="w-full h-auto rounded mb-4" loading="lazy">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">Plataforma de Consultoría</h3>
                    <p class="text-sm md:text-base mb-4">Sistema de consultoría tecnológica con integración de IA para análisis de datos.</p>
                    <a href="#" class="text-corewave-green hover:underline">Ver Detalles</a>
                </div>
                <div class="p-4 sm:p-6 bg-white rounded-lg shadow" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://source.unsplash.com/random/600x400?code" alt="Proyecto 3" class="w-full h-auto rounded mb-4" loading="lazy">
                    <h3 class="text-lg md:text-xl font-semibold mb-2">E-commerce Personalizado</h3>
                    <p class="text-sm md:text-base mb-4">Tienda online desarrollada con WordPress y optimizada para SEO.</p>
                    <a href="#" class="text-corewave-green hover:underline">Ver Detalles</a>
                </div>
            </div>
        </div>
    </section>
@endsection