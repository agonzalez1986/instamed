@extends('layouts.public')

@section('title', 'Sobre Nosotros - INSTAMED Ingeniería')
@section('description', 'Conozca la historia, misión y valores de INSTAMED Ingeniería, líderes en ingeniería médica en Chile con más de 15 años de experiencia.')
@section('og:title', 'Sobre Nosotros - INSTAMED Ingeniería')
@section('og:description', 'Más de 15 años de experiencia en soluciones de ingeniería médica en Chile.')
@section('og:type', 'website')
@section('og:image')
    {{ asset('logo.jpg') }}
@endsection

@section('content')
<x-header active="nosotros" />

<main role="main">
    <section class="pt-24 sm:pt-32 pb-12 sm:pb-20 text-white text-center" style="background: linear-gradient(135deg, #0D1B2A, #1a3a5c);" aria-label="Cabecera sobre nosotros">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Sobre INSTAMED</h1>
            <p class="text-base sm:text-lg md:text-xl opacity-80 max-w-2xl mx-auto">Construyendo confianza a través de la excelencia técnica y el compromiso con la salud.</p>
        </div>
    </section>

    <section class="py-12 sm:py-20 bg-white" aria-label="Historia y misión">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-8 sm:gap-12 items-center">
                <div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 sm:mb-6" style="color: #0D1B2A;">Nuestra Historia</h2>
                    <p class="mb-4 text-sm sm:text-base leading-relaxed" style="color: #666666;">
                        Fundada en Chile hace más de 15 años, INSTAMED Ingeniería nació con la visión de cerrar la brecha entre la tecnología médica internacional y las necesidades reales de las instituciones de salud chilenas. Desde nuestros inicios, hemos trabajado incansablemente para ofrecer soluciones de ingeniería médica de la más alta calidad.
                    </p>
                    <p class="mb-4 text-sm sm:text-base leading-relaxed" style="color: #666666;">
                        A lo largo de nuestra trayectoria, hemos completado más de 200 proyectos exitosos, estableciendo relaciones de largo plazo con hospitales públicos, clínicas privadas y centros de salud en todo el país.
                    </p>
                    <p class="text-sm sm:text-base leading-relaxed" style="color: #666666;">
                        Nuestro equipo está compuesto por ingenieros biomédicos, técnicos especializados y profesionales certificados que comparten la pasión por mejorar la infraestructura de salud chilena.
                    </p>
                </div>
                <div class="rounded-xl overflow-hidden shadow-lg order-first md:order-last">
                    <img src="/logo.jpg" alt="Equipo INSTAMED Ingeniería" class="w-full h-auto" width="600" height="400" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 sm:py-20" style="background-color: #f8f9fa;" aria-label="Misión y visión">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-8 sm:mb-12" style="color: #0D1B2A;">Misión y Visión</h2>
            <div class="grid md:grid-cols-2 gap-6 sm:gap-8">
                <article class="bg-white rounded-xl p-6 sm:p-8 shadow-sm">
                    <h3 class="text-xl sm:text-2xl font-bold mb-4" style="color: #0D1B2A;">Misión</h3>
                    <p class="text-sm sm:text-base leading-relaxed" style="color: #666666;">
                        Proporcionar soluciones integrales de ingeniería médica que mejoren la capacidad y calidad de la atención en salud, mediante un servicio técnico excepcional, tecnología de vanguardia y un compromiso inquebrantable con la seguridad del paciente.
                    </p>
                </article>
                <article class="bg-white rounded-xl p-6 sm:p-8 shadow-sm">
                    <h3 class="text-xl sm:text-2xl font-bold mb-4" style="color: #0D1B2A;">Visión</h3>
                    <p class="text-sm sm:text-base leading-relaxed" style="color: #666666;">
                        Ser la empresa líder en ingeniería médica en Latinoamérica, reconocida por nuestra innovación, excelencia operativa y contribución al fortalecimiento de los sistemas de salud públicos y privados.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="py-12 sm:py-20 bg-white" aria-label="Valores">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-8 sm:mb-12" style="color: #0D1B2A;">Nuestros Valores</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                <article class="text-center p-6">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: rgba(33,150,243,0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 sm:w-8 sm:h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold mb-2" style="color: #0D1B2A;">Seguridad</h3>
                    <p class="text-sm" style="color: #666666;">La seguridad del paciente es el eje central de cada decisión que tomamos.</p>
                </article>
                <article class="text-center p-6">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: rgba(33,150,243,0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 sm:w-8 sm:h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold mb-2" style="color: #0D1B2A;">Innovación</h3>
                    <p class="text-sm" style="color: #666666;">Adoptamos las últimas tecnologías para ofrecer soluciones de vanguardia.</p>
                </article>
                <article class="text-center p-6">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: rgba(33,150,243,0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 sm:w-8 sm:h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold mb-2" style="color: #0D1B2A;">Compromiso</h3>
                    <p class="text-sm" style="color: #666666;">Dedicación total a cada proyecto, respondiendo con rapidez y eficacia.</p>
                </article>
                <article class="text-center p-6">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: rgba(33,150,243,0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 sm:w-8 sm:h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold mb-2" style="color: #0D1B2A;">Calidad</h3>
                    <p class="text-sm" style="color: #666666;">Procesos certificados ISO que garantizan resultados superiores en cada entrega.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="py-12 sm:py-20" style="background-color: #f8f9fa;" aria-label="Certificaciones">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-8 sm:mb-12" style="color: #0D1B2A;">Certificaciones y Alianzas</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <article class="bg-white rounded-xl p-6 shadow-sm text-center">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center mx-auto mb-4" style="background-color: rgba(33,150,243,0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold mb-2" style="color: #0D1B2A;">ISO 9001:2015</h3>
                    <p class="text-sm" style="color: #666666;">Sistema de Gestión de Calidad certificado internacionalmente.</p>
                </article>
                <article class="bg-white rounded-xl p-6 shadow-sm text-center">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center mx-auto mb-4" style="background-color: rgba(33,150,243,0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold mb-2" style="color: #0D1B2A;">Soporte 24/7</h3>
                    <p class="text-sm" style="color: #666666;">Disponibilidad permanente para emergencias técnicas críticas.</p>
                </article>
                <article class="bg-white rounded-xl p-6 shadow-sm text-center sm:col-span-2 lg:col-span-1">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center mx-auto mb-4" style="background-color: rgba(33,150,243,0.1);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-base sm:text-lg font-bold mb-2" style="color: #0D1B2A;">Alianzas Fabricantes</h3>
                    <p class="text-sm" style="color: #666666;">Representante autorizado de las principales marcas de tecnología médica mundial.</p>
                </article>
            </div>
        </div>
    </section>
</main>

<x-footer />
@endsection
