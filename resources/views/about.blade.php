@extends('layouts.app')
@section('title', 'Sobre Nosotros')
@section('content')
    <!-- Encabezado -->
    <section class="relative bg-gradient-to-r from-blue-900 to-blue-700 text-white py-16 sm:py-20 md:py-40 text-center overflow-hidden">
        <div class="absolute inset-0 bg-banner-tech bg-cover bg-center opacity-50"></div>
        <div class="relative container mx-auto px-4 sm:px-6" data-aos="zoom-in">
            <h1 class="text-xl sm:text-3xl md:text-5xl font-bold mb-2 sm:mb-4 drop-shadow-lg tracking-tight leading-tight">Sobre CoreWave</h1>
            <p class="text-xs sm:text-base md:text-lg mb-4 sm:mb-6 max-w-3xl mx-auto drop-shadow-md">Tu aliado en innovación tecnológica.</p>
        </div>
    </section>

    <!-- Misión, Visión, Valores -->
    <section class="py-8 sm:py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 sm:gap-10">
                <div class="p-4 sm:p-6 bg-white border border-blue-100 rounded-xl shadow-lg hover:shadow-xl transition duration-300" data-aos="fade-right">
                    <h3 class="text-sm sm:text-lg md:text-xl font-semibold mb-2 text-blue-900">Misión</h3>
                    <p class="text-xs sm:text-base text-gray-600">Empoderar a las empresas con soluciones tecnológicas innovadoras y personalizadas, optimizando procesos y generando impacto.</p>
                </div>
                <div class="p-4 sm:p-6 bg-white border border-blue-100 rounded-xl shadow-lg hover:shadow-xl transition duration-300" data-aos="fade-right" data-aos-delay="100">
                    <h3 class="text-sm sm:text-lg md:text-xl font-semibold mb-2 text-blue-900">Visión</h3>
                    <p class="text-xs sm:text-base text-gray-600">Liderar en desarrollo web, consultoría tecnológica y soporte técnico, integrando inteligencia artificial para transformar industrias.</p>
                </div>
                <div class="p-4 sm:p-6 bg-white border border-blue-100 rounded-xl shadow-lg hover:shadow-xl transition duration-300" data-aos="fade-right" data-aos-delay="200">
                    <h3 class="text-sm sm:text-lg md:text-xl font-semibold mb-2 text-blue-900">Valores</h3>
                    <p class="text-xs sm:text-base text-gray-600">Excelencia, Innovación, Colaboración, Integridad, Adaptabilidad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Equipo -->
    <section class="py-8 sm:py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 sm:gap-12">
                <!-- Marcelo Duhalde -->
                <div class="text-center" data-aos="fade-up">
                    <img src="{{ asset('images/marcelo-duhalde.jpg') }}" alt="Marcelo Duhalde" class="w-32 h-32 sm:w-40 sm:h-40 mx-auto rounded-full shadow-lg mb-4">
                    <h2 class="text-lg sm:text-3xl md:text-4xl font-bold mb-2 text-blue-900">Marcelo Duhalde, Fundador</h2>
                    <p class="text-xs sm:text-base text-gray-600 max-w-2xl mx-auto mb-4">Analista Universitario en Sistemas (UNR) con más de 10 años de experiencia en desarrollo web y visión artificial. He trabajado en proyectos para ArcelorMittal, Accenture y como freelance, especializándome en soluciones innovadoras con Laravel y Python.</p>
                    <div class="flex gap-4 mt-4 justify-center">
                        <a href="https://www.linkedin.com/in/marceloduhalde/" target="_blank" class="text-green-500 hover:text-green-600"><i class="fab fa-linkedin text-xl sm:text-2xl"></i></a>
                        <a href="https://github.com/marceloDuhalde2" target="_blank" class="text-green-500 hover:text-green-600"><i class="fab fa-github text-xl sm:text-2xl"></i></a>
                    </div>
                </div>

                <!-- Emilio Colombo -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('images/emilio-colombo.jpg') }}" alt="Emilio Colombo" class="w-32 h-32 sm:w-40 sm:h-40 mx-auto rounded-full shadow-lg mb-4">
                    <h2 class="text-lg sm:text-3xl md:text-4xl font-bold mb-2 text-blue-900">Emilio Colombo, Consultor</h2>
                    <p class="text-xs sm:text-base text-gray-600 max-w-2xl mx-auto mb-4">Analista de Sistemas con más de 10 años de experiencia en desarrollo web (PHP, HTML, JavaScript, CSS, MySQL) y 5 años en aplicaciones web y de escritorio (C#, Angular 2, Microsoft SQL Server). Especializado en gestión de proyectos complejos, desde el análisis de requerimientos hasta la entrega, con comunicación fluida en inglés y español.</p>
                    <div class="flex gap-4 mt-4 justify-center">
                        <a href="https://www.linkedin.com/in/emilio-colombo/" target="_blank" class="text-green-500 hover:text-green-600"><i class="fab fa-linkedin text-xl sm:text-2xl"></i></a>
                    </div>
                </div>

                <!-- Cristian Vasquez -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('images/cristian-vasquez.jpg') }}" alt="Cristian Vasquez" class="w-32 h-32 sm:w-40 sm:h-40 mx-auto rounded-full shadow-lg mb-4">
                    <h2 class="text-lg sm:text-3xl md:text-4xl font-bold mb-2 text-blue-900">Cristian Vasquez, Consultor</h2>
                    <p class="text-xs sm:text-base text-gray-600 max-w-2xl mx-auto mb-4">Especialista en telecomunicaciones y soporte IT con más de 10 años de experiencia en gestión de redes (LAN/WAN, WiFi, fibra óptica), infraestructura CCTV, y soporte de segundo nivel. Ha trabajado en Pluspetrol, Superior Energy Services, y Accenture, administrando sistemas, seguridad informática, y proyectos para clientes como YPF y Chevron.</p>
                    <div class="flex gap-4 mt-4 justify-center">
                        <a href="https://www.linkedin.com/in/cristian-vasquez-937ba237/" target="_blank" class="text-green-500 hover:text-green-600"><i class="fab fa-linkedin text-xl sm:text-2xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection