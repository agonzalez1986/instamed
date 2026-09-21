@extends('layouts.public')

@section('title', 'Servicios - INSTAMED Ingeniería')
@section('description', 'Conozca nuestros servicios de ingeniería médica: instalaciones, equipamiento hospitalario y mantenimiento técnico especializado.')
@section('og:title', 'Servicios - INSTAMED Ingeniería')
@section('og:description', 'Soluciones integrales de ingeniería médica para hospitales y clínicas en Chile.')
@section('og:type', 'website')
@section('og:image')
    {{ asset('logo.jpg') }}
@endsection

@section('content')
    <x-header active="servicios" />

    <main role="main">
        <section class="pt-24 sm:pt-32 pb-12 sm:pb-20 text-white text-center"
            style="background: linear-gradient(135deg, #0D1B2A, #1a3a5c);" aria-label="Cabecera de servicios">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-3 sm:mb-4">Nuestros Servicios</h1>
                <p class="text-base sm:text-lg md:text-xl opacity-80 max-w-2xl mx-auto">
                    Soluciones completas para cada etapa del ciclo de vida de su equipamiento médico.
                </p>
            </div>
        </section>

        <section class="py-12 sm:py-20 bg-white" aria-label="Servicios detallados">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12 sm:space-y-16">
                <article class="grid md:grid-cols-2 gap-6 sm:gap-8 md:gap-12 items-center">
                    <div class="order-2 md:order-1">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-lg flex items-center justify-center mb-4 sm:mb-6"
                            style="background-color: rgba(33,150,243,0.1);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-7 sm:h-7" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2" style="color: #2196F3;" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-3 sm:mb-4" style="color: #0D1B2A;">Instalaciones Médicas</h2>
                        <p class="mb-3 sm:mb-4 text-sm sm:text-base leading-relaxed" style="color: #666666;">
                            Diseñamos y ejecutamos infraestructura médica de conformidad con las normativas del Ministerio de Salud
                            de Chile y estándares internacionales.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5" style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Salas de operación y quirófanos
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5" style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Unidades de cuidados intensivos
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5" style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Laboratorios y servicios diagnósticos
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5" style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Infraestructura de gases médicos
                            </li>
                        </ul>
                    </div>
                    <div class="order-1 md:order-2 rounded-xl overflow-hidden shadow-lg">
                        <img src="/logo.jpg" alt="Instalaciones médicas INSTAMED" class="w-full h-auto" loading="lazy">
                    </div>
                </article>

                <article class="grid md:grid-cols-2 gap-6 sm:gap-8 md:gap-12 items-center">
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <img src="/logo.jpg" alt="Equipamiento hospitalario INSTAMED" class="w-full h-auto" loading="lazy">
                    </div>
                    <div>
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-lg flex items-center justify-center mb-4 sm:mb-6"
                            style="background-color: rgba(33,150,243,0.1);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-7 sm:h-7" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2" style="color: #2196F3;" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                        </div>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-3 sm:mb-4" style="color: #0D1B2A;">Equipamiento Hospitalario</h2>
                        <p class="mb-3 sm:mb-4 text-sm sm:text-base leading-relaxed" style="color: #666666;">
                            Representamos a los principales fabricantes mundiales y ofrecemos equipamiento certificado para todas las
                            áreas clínicas.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5" style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Imagenología y diagnóstico
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5" style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Monitoreo de signos vitales
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5" style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Equipamiento quirúrgico
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5" style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Integración con sistemas hospitalarios
                            </li>
                        </ul>
                    </div>
                </article>

                <article class="grid md:grid-cols-2 gap-6 sm:gap-8 md:gap-12 items-center">
                    <div class="order-2 md:order-1">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-lg flex items-center justify-center mb-4 sm:mb-6"
                            style="background-color: rgba(33,150,243,0.1);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-7 sm:h-7" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2" style="color: #2196F3;" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-3 sm:mb-4" style="color: #0D1B2A;">Mantenimiento Técnico</h2>
                        <p class="mb-3 sm:mb-4 text-sm sm:text-base leading-relaxed" style="color: #666666;">
                            Programas de mantenimiento preventivo y correctivo diseñados para maximizar la vida útil de sus equipos.
                            Servicio disponible las 24 horas, los 7 días de la semana.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5" style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Mantenimiento preventivo programado
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5" style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Reparación de emergencia 24/7
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5" style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Calibración y verificación
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5" style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Contratos de soporte a largo plazo
                            </li>
                        </ul>
                    </div>
                    <div class="order-1 md:order-2 rounded-xl overflow-hidden shadow-lg">
                        <img src="/logo.jpg" alt="Mantenimiento técnico INSTAMED" class="w-full h-auto" loading="lazy">
                    </div>
                </article>
            </div>
        </section>

        <section class="py-12 sm:py-20 text-center text-white"
            style="background: linear-gradient(135deg, #0D1B2A, #1a3a5c);" aria-label="Llamado a la acción">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 sm:mb-6">¿Necesita una solución a medida?</h2>
                <p class="text-sm sm:text-base md:text-lg mb-6 sm:mb-8 opacity-80">
                    Cuéntenos sus requerimientos y le diseñaremos una propuesta técnica y económica adaptada a su institución.
                </p>
                <a href="/contacto"
                    class="inline-block px-6 sm:px-8 py-3 rounded-lg font-semibold text-base sm:text-lg transition-colors"
                    style="background-color: #2196F3; color: #fff;">
                    Solicitar Cotización
                </a>
            </div>
        </section>
    </main>

    <x-footer />
@endsection
