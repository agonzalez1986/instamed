@extends('layouts.public')

@section('title', 'Contacto - INSTAMED Ingeniería')
@section('description', 'Contáctenos para solicitar cotizaciones, información sobre servicios de ingeniería médica o soporte técnico en Santiago, Chile.')
@section('og:title', 'Contacto - INSTAMED Ingeniería')
@section('og:description', 'Solicite información o cotizaciones de ingeniería médica en Chile.')
@section('og:type', 'website')
@section('og:image')
    {{ asset('logo.jpg') }}
@endsection

@section('content')
<x-header active="contacto" />

<main role="main">
    <section class="pt-24 sm:pt-32 pb-12 sm:pb-20 text-white text-center" style="background: linear-gradient(135deg, #0D1B2A, #1a3a5c);" aria-label="Cabecera de contacto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Contáctanos</h1>
            <p class="text-base sm:text-lg md:text-xl opacity-80 max-w-2xl mx-auto">Estamos listos para responder sus consultas y diseñar soluciones a la medida.</p>
        </div>
    </section>

    <section class="py-12 sm:py-20 bg-white" aria-label="Formulario e información de contacto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-5 gap-8 sm:gap-12">
                <div class="md:col-span-2 space-y-6 sm:space-y-8">
                    <h2 class="text-xl sm:text-2xl font-bold" style="color: #0D1B2A;">Información de Contacto</h2>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: rgba(33,150,243,0.1);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-sm sm:text-base mb-1" style="color: #0D1B2A;">Dirección</h3>
                            <p class="text-sm sm:text-base" style="color: #666666;">Santiago, Chile</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: rgba(33,150,243,0.1);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-sm sm:text-base mb-1" style="color: #0D1B2A;">Teléfono</h3>
                            <p class="text-sm sm:text-base" style="color: #666666;">+56 9 1234 5678</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: rgba(33,150,243,0.1);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-sm sm:text-base mb-1" style="color: #0D1B2A;">Email</h3>
                            <p class="text-sm sm:text-base" style="color: #666666;">contacto@instamed.cl</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center flex-shrink-0" style="background-color: rgba(33,150,243,0.1);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-sm sm:text-base mb-1" style="color: #0D1B2A;">Horario</h3>
                            <p class="text-sm sm:text-base" style="color: #666666;">Lun - Vie: 9:00 - 18:00</p>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-3">
                    <form action="#" method="POST" class="bg-gray-50 rounded-xl p-6 sm:p-8 space-y-5 sm:space-y-6" aria-label="Formulario de contacto">
                        @csrf
                        <div class="grid sm:grid-cols-2 gap-5 sm:gap-6">
                            <div>
                                <label for="nombre" class="block text-sm font-medium mb-1" style="color: #0D1B2A;">Nombre Completo</label>
                                <input type="text" id="nombre" name="nombre" required class="w-full px-4 py-2.5 sm:py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#2196F3] focus:border-transparent outline-none text-sm sm:text-base">
                            </div>
                            <div>
                                <label for="empresa" class="block text-sm font-medium mb-1" style="color: #0D1B2A;">Empresa / Institución</label>
                                <input type="text" id="empresa" name="empresa" class="w-full px-4 py-2.5 sm:py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#2196F3] focus:border-transparent outline-none text-sm sm:text-base">
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-5 sm:gap-6">
                            <div>
                                <label for="email" class="block text-sm font-medium mb-1" style="color: #0D1B2A;">Email</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-2.5 sm:py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#2196F3] focus:border-transparent outline-none text-sm sm:text-base">
                            </div>
                            <div>
                                <label for="telefono" class="block text-sm font-medium mb-1" style="color: #0D1B2A;">Teléfono</label>
                                <input type="tel" id="telefono" name="telefono" class="w-full px-4 py-2.5 sm:py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#2196F3] focus:border-transparent outline-none text-sm sm:text-base">
                            </div>
                        </div>
                        <div>
                            <label for="servicio" class="block text-sm font-medium mb-1" style="color: #0D1B2A;">Servicio de Interés</label>
                            <select id="servicio" name="servicio" class="w-full px-4 py-2.5 sm:py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#2196F3] focus:border-transparent outline-none text-sm sm:text-base" style="color: #666666;">
                                <option value="">Seleccione un servicio</option>
                                <option value="instalaciones">Instalaciones Médicas</option>
                                <option value="equipamiento">Equipamiento Hospitalario</option>
                                <option value="mantenimiento">Mantenimiento Técnico</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        <div>
                            <label for="mensaje" class="block text-sm font-medium mb-1" style="color: #0D1B2A;">Mensaje</label>
                            <textarea id="mensaje" name="mensaje" rows="5" required class="w-full px-4 py-2.5 sm:py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#2196F3] focus:border-transparent outline-none resize-none text-sm sm:text-base"></textarea>
                        </div>
                        <button type="submit" class="w-full py-3 rounded-lg text-white font-semibold text-sm sm:text-base transition-colors" style="background-color: #2196F3;" onmouseover="this.style.backgroundColor='#1976D2'" onmouseout="this.style.backgroundColor='#2196F3'">
                            Enviar Mensaje
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 sm:py-20" style="background-color: #f8f9fa;" aria-label="Mapa de ubicación">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-center mb-6 sm:mb-8" style="color: #0D1B2A;">Ubicación</h2>
            <div class="w-full h-64 sm:h-80 rounded-xl overflow-hidden shadow-sm flex items-center justify-center" style="background-color: #e0e0e0;">
                <div class="text-center px-4" style="color: #666666;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 sm:w-12 sm:h-12 mx-auto mb-3 opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <p class="font-medium text-sm sm:text-base">Mapa de ubicación</p>
                    <p class="text-xs sm:text-sm opacity-70">Santiago, Chile</p>
                </div>
            </div>
        </div>
    </section>
</main>

<x-footer />
@endsection
