@extends('layouts.public')

@section('title', 'INSTAMED Ingeniería - Ingeniería Médica de Precisión en Chile')
@section('description', 'Soluciones integrales de ingeniería médica para hospitales y clínicas en Chile. Instalaciones,
    equipamiento y mantenimiento técnico especializado.')
@section('og:title', 'INSTAMED Ingeniería - Ingeniería Médica de Precisión')
@section('og:description', 'Soluciones integrales de ingeniería médica para hospitales y clínicas en Chile.')
@section('og:type', 'website')
@section('og:image')
    {{ asset('logo.jpg') }}
@endsection

@section('structured-data')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'INSTAMED Ingeniería',
        'description' => 'Soluciones integrales de ingeniería médica para hospitales y clínicas en Chile.',
        'url' => url('/'),
        'logo' => asset('logo.jpg'),
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Santiago',
            'addressCountry' => 'CL',
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => 'INSTAMED Ingeniería',
        'url' => url('/'),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endsection

@section('content')
    <x-header active="inicio" />

    <main id="inicio" role="main">
        {{-- Hero --}}
        <section class="min-h-[80vh] sm:min-h-screen flex items-center justify-center text-white pt-16"
            style="background: linear-gradient(135deg, #0D1B2A, #1a3a5c);" aria-label="Presentación principal">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-12">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 sm:mb-6 leading-tight">
                    Ingeniería Médica<br class="sm:hidden"> de Precisión
                </h1>
                <p
                    class="text-base sm:text-lg md:text-xl lg:text-2xl mb-8 sm:mb-10 max-w-3xl mx-auto opacity-90 leading-relaxed">
                    Soluciones integrales para la instalación, equipamiento y mantenimiento de
                    equipamiento hospitalario en Chile.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center">
                    <a href="#servicios"
                        class="px-6 sm:px-8 py-3 rounded-lg font-semibold text-base sm:text-lg transition-colors"
                        style="background-color: #2196F3; color: #fff;">
                        Nuestros Servicios
                    </a>
                    <a href="/contacto"
                        class="px-6 sm:px-8 py-3 rounded-lg font-semibold text-base sm:text-lg border-2 border-white hover:bg-white hover:text-[#0D1B2A] transition-colors">
                        Solicitar Cotización
                    </a>
                </div>
            </div>
        </section>

        {{-- Stats --}}
        <section class="py-12 sm:py-20 bg-white" aria-label="Estadísticas">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-8">
                    <article class="text-center p-4">
                        <p class="text-3xl sm:text-4xl md:text-5xl font-bold mb-1 sm:mb-2" style="color: #2196F3;">15+</p>
                        <p class="text-sm sm:text-lg" style="color: #666666;">Años de Experiencia</p>
                    </article>
                    <article class="text-center p-4">
                        <p class="text-3xl sm:text-4xl md:text-5xl font-bold mb-1 sm:mb-2" style="color: #2196F3;">200+</p>
                        <p class="text-sm sm:text-lg" style="color: #666666;">Proyectos Realizados</p>
                    </article>
                    <article class="text-center p-4">
                        <p class="text-3xl sm:text-4xl md:text-5xl font-bold mb-1 sm:mb-2" style="color: #2196F3;">50+</p>
                        <p class="text-sm sm:text-lg" style="color: #666666;">Clientes Activos</p>
                    </article>
                    <article class="text-center p-4">
                        <p class="text-3xl sm:text-4xl md:text-5xl font-bold mb-1 sm:mb-2" style="color: #2196F3;">98%</p>
                        <p class="text-sm sm:text-lg" style="color: #666666;">Satisfacción</p>
                    </article>
                </div>
            </div>
        </section>

        {{-- Servicios --}}
        <section id="servicios" class="py-12 sm:py-20" style="background-color: #f8f9fa;" aria-label="Servicios">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-3 sm:mb-4" style="color: #0D1B2A;">
                    Nuestros Servicios</h2>
                <p class="text-center mb-8 sm:mb-12 max-w-2xl mx-auto text-sm sm:text-base" style="color: #666666;">
                    Ofrecemos soluciones completas para cada etapa del ciclo de vida de su equipamiento médico.
                </p>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
                    <article class="bg-white rounded-xl p-6 sm:p-8 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-lg flex items-center justify-center mb-4 sm:mb-6"
                            style="background-color: rgba(33,150,243,0.1);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-7 sm:h-7" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2 sm:mb-3" style="color: #0D1B2A;">Instalaciones Médicas
                        </h3>
                        <p class="text-sm sm:text-base" style="color: #666666;">Diseño y ejecución de infraestructura médica
                            cumpliendo las más altas
                            normativas nacionales e internacionales.</p>
                    </article>
                    <article class="bg-white rounded-xl p-6 sm:p-8 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-lg flex items-center justify-center mb-4 sm:mb-6"
                            style="background-color: rgba(33,150,243,0.1);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-7 sm:h-7" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2 sm:mb-3" style="color: #0D1B2A;">Equipamiento
                            Hospitalario</h3>
                        <p class="text-sm sm:text-base" style="color: #666666;">Provisión e integración de tecnología médica
                            de vanguardia para
                            optimizar la atención al paciente.</p>
                    </article>
                    <article
                        class="bg-white rounded-xl p-6 sm:p-8 shadow-sm hover:shadow-md transition-shadow sm:col-span-2 md:col-span-1">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-lg flex items-center justify-center mb-4 sm:mb-6"
                            style="background-color: rgba(33,150,243,0.1);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-7 sm:h-7" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2 sm:mb-3" style="color: #0D1B2A;">Mantenimiento Técnico
                        </h3>
                        <p class="text-sm sm:text-base" style="color: #666666;">Programas de mantenimiento preventivo y
                            correctivo para garantizar la
                            disponibilidad continua de equipos.</p>
                    </article>
                </div>
            </div>
        </section>

        {{-- Nosotros --}}
        <section id="nosotros" class="py-12 sm:py-20 bg-white" aria-label="Sobre nosotros">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-8 sm:gap-12 items-center">
                    <div>
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 sm:mb-6" style="color: #0D1B2A;">Sobre
                            INSTAMED</h2>
                        <p class="mb-3 sm:mb-4 text-sm sm:text-base leading-relaxed" style="color: #666666;">
                            Con más de 15 años de trayectoria en Chile, INSTAMED Ingeniería se ha consolidado como líder en
                            soluciones de ingeniería médica. Nuestro equipo multidisciplinario combina experiencia técnica
                            con un compromiso inquebrantable con la calidad y la seguridad del paciente.
                        </p>
                        <p class="mb-6 sm:mb-8 text-sm sm:text-base leading-relaxed" style="color: #666666;">
                            Trabajamos con los principales fabricantes mundiales para ofrecer tecnología de vanguardia
                            adaptada a las necesidades específicas de cada institución de salud.
                        </p>
                        <ul class="space-y-3 sm:space-y-4">
                            <li class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                    style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-sm sm:text-base" style="color: #666666;">Certificación ISO
                                    9001:2015</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                    style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-sm sm:text-base" style="color: #666666;">Soporte técnico 24/7</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                    style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-sm sm:text-base" style="color: #666666;">Garantía en todos los
                                    proyectos</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                    style="color: #2196F3;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-sm sm:text-base" style="color: #666666;">Equipo multidisciplinario
                                    certificado</span>
                            </li>
                        </ul>
                    </div>
                    <div class="rounded-xl overflow-hidden shadow-lg order-first md:order-last">
                        <img src="/logo.jpg" alt="INSTAMED Ingeniería" class="w-full h-auto" width="600"
                            height="400" loading="lazy">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-footer />
@endsection
