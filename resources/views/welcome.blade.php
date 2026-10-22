@extends('layouts.public')

@section('title', 'INSTAMED Ingeniería - Ingeniería Médica de Precisión en Chile')
@section('description', 'Soluciones integrales de ingeniería médica para hospitales y clínicas en Chile. Instalaciones, equipamiento y mantenimiento técnico especializado.')
@section('og:title', 'INSTAMED Ingeniería - Ingeniería Médica de Precisión')
@section('og:description', 'Soluciones integrales de ingeniería médica para hospitales y clínicas en Chile.')
@section('og:type', 'website')
@section('og:image', asset('logo.jpg'))

@section('structured-data')
    <script type="application/ld+json">
    {!! json_encode([
        '@' . 'context' => 'https://schema.org',
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
        '@' . 'context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => 'INSTAMED Ingeniería',
        'url' => url('/'),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endsection

@section('content')
    <x-header />

    <main role="main">
        {{-- Inicio: Hero + Estadísticas --}}
        <section id="inicio" aria-label="Presentación principal">
            <h1 class="sr-only">Instamed Ingeniería - Ingeniería Médica de Precisión en Chile</h1>
            <div data-rotator class="relative min-h-[80vh] sm:min-h-screen overflow-hidden flex"
                style="background-color: #0D1B2A;">
                <img src="/hero_bg.jpg" alt="Instalaciones de gases clínicos y climatización hospitalaria Instamed"
                    fetchpriority="high"
                    class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0"
                    style="background: linear-gradient(to right, rgba(13, 27, 42, 0.85), rgba(13, 27, 42, 0.45) 55%, rgba(13, 27, 42, 0.25));">
                </div>
                <div class="relative flex-1 grid grid-rows-[1fr_auto] items-center justify-items-start px-4 sm:px-6 lg:px-12 pt-16 sm:pt-20 pb-16 sm:pb-20">
                    <div data-text class="col-start-1 row-start-1 transition-opacity duration-700 ease-in-out"
                        aria-hidden="false">
                        <h2 class="m-0 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold">
                            <span style="color: #ffffff;">Gases</span>
                            <span style="color: #23a7d8;">Clínicos</span>
                        </h2>
                        <p class="text-sm sm:text-base md:text-lg lg:text-xl max-w-2xl text-white leading-relaxed mt-4 sm:mt-6">
                            Contamos con vasta experiencia en montaje y mantenimiento a nivel nacional de
                            diferentes marcas asociadas que garantizan instalaciones de alta calidad
                        </p>
                    </div>
                    <div data-text class="col-start-1 row-start-1 opacity-0 transition-opacity duration-700 ease-in-out"
                        aria-hidden="true">
                        <h2 class="m-0 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold">
                            <span style="color: #ffffff;">Climatización</span>
                            <span style="color: #23a7d8;">Hospitalaria</span>
                        </h2>
                        <p class="text-sm sm:text-base md:text-lg lg:text-xl max-w-2xl text-white leading-relaxed mt-4 sm:mt-6">
                            Nuestra empresa cuenta con un grupo de profesionales altamente calificados con
                            sólidos conocimientos en las áreas de mantenimiento, instalación y reparación de
                            equipos de aire acondicionado, ventilación y calefacción.
                        </p>
                    </div>
                    <div class="col-start-1 row-start-2 w-full mt-12 sm:mt-16 md:mt-20 grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6"
                        role="group" aria-label="Estadísticas">
                        <div class="text-center">
                            <p class="text-2xl sm:text-3xl md:text-4xl font-bold mb-1" style="color: #2196F3;">15+</p>
                            <p class="text-xs sm:text-sm" style="color: #ffffff;">Años de Experiencia</p>
                        </div>
                        <div class="text-center">
                            <p class="text-2xl sm:text-3xl md:text-4xl font-bold mb-1" style="color: #2196F3;">200+</p>
                            <p class="text-xs sm:text-sm" style="color: #ffffff;">Proyectos Realizados</p>
                        </div>
                        <div class="text-center">
                            <p class="text-2xl sm:text-3xl md:text-4xl font-bold mb-1" style="color: #2196F3;">50+</p>
                            <p class="text-xs sm:text-sm" style="color: #ffffff;">Clientes Activos</p>
                        </div>
                        <div class="text-center">
                            <p class="text-2xl sm:text-3xl md:text-4xl font-bold mb-1" style="color: #2196F3;">98%</p>
                            <p class="text-xs sm:text-sm" style="color: #ffffff;">Satisfacción</p>
                        </div>
                    </div>
                </div>
                <img src="/logo_blanco_transp.png" alt="Instamed" loading="lazy"
                    class="absolute bottom-4 right-4 sm:bottom-6 sm:right-6 h-8 sm:h-10 w-auto z-10">
            </div>
            <script>
                (function() {
                    var rotator = document.querySelector('[data-rotator]');
                    if (!rotator) {
                        return;
                    }

                    var texts = rotator.querySelectorAll('[data-text]');
                    var index = 0;
                    var timer = null;

                    function show(n) {
                        index = (n + texts.length) % texts.length;
                        texts.forEach(function(text, i) {
                            var active = i === index;
                            text.classList.toggle('opacity-100', active);
                            text.classList.toggle('opacity-0', !active);
                            text.setAttribute('aria-hidden', active ? 'false' : 'true');
                        });
                    }

                    function stop() {
                        if (timer) {
                            clearInterval(timer);
                            timer = null;
                        }
                    }

                    function start() {
                        stop();
                        timer = setInterval(function() {
                            show(index + 1);
                        }, 7000);
                    }

                    rotator.addEventListener('mouseenter', stop);
                    rotator.addEventListener('mouseleave', start);

                    show(0);
                    start();
                })();
            </script>
        </section>

        {{-- Nosotros --}}
        <section id="nosotros" aria-label="Sobre nosotros">
            {{-- Sobre Instamed --}}
            <div class="py-12 sm:py-20 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid md:grid-cols-2 gap-8 sm:gap-12 items-center">
                        <div>
                            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 sm:mb-6" style="color: #0D1B2A;">Sobre
                                Instamed</h2>
                            <p class="mb-3 sm:mb-4 text-sm sm:text-base leading-relaxed" style="color: #666666;">
                                Fundada en Chile hace más de 15 años, Instamed nació con la visión de cerrar la brecha
                                entre la tecnología médica internacional y las necesidades reales de las instituciones
                                de salud chilenas. Desde nuestros inicios, hemos trabajado incansablemente para ofrecer
                                soluciones de ingeniería médica de la más alta calidad.
                            </p>
                            <p class="mb-3 sm:mb-4 text-sm sm:text-base leading-relaxed" style="color: #666666;">
                                A lo largo de nuestra trayectoria, hemos completado más de 200 proyectos exitosos,
                                estableciendo relaciones de largo plazo con hospitales públicos, clínicas privadas y
                                centros de salud en todo el país.
                            </p>
                            <p class="mb-6 sm:mb-8 text-sm sm:text-base leading-relaxed" style="color: #666666;">
                                Nuestro equipo está compuesto por ingenieros biomédicos, técnicos especializados y
                                profesionales certificados que comparten la pasión por mejorar la infraestructura de
                                salud chilena.
                            </p>
                            <ul class="space-y-3 sm:space-y-4">
                                <li class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"
                                        style="color: #2196F3;" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-sm sm:text-base" style="color: #666666;">Normativa NFPA
                                        99</span>
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
                        <div data-carousel class="relative rounded-xl overflow-hidden shadow-lg order-first md:order-last">
                            <div class="relative aspect-[4/3] w-full bg-[#f8f9fa]">
                                <img src="/trabajos/trabajo-1.jpg"
                                    alt="Panel de reguladores de gases médicos instalado por Instamed"
                                    data-slide width="1400" height="1050"
                                    class="absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-700">
                                <img src="/trabajos/trabajo-2.jpg" alt="Sistemas de gases instalados en pabellón quirúrgico"
                                    data-slide width="1400" height="1050"
                                    class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700">
                                <img src="/trabajos/trabajo-3.jpg" alt="Tuberías de gases médicos en techo técnico"
                                    data-slide width="1200" height="1200"
                                    class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700">
                                <img src="/trabajos/trabajo-4.jpg" alt="Instalaciones exteriores y equipo de terreno Instamed"
                                    data-slide width="1400" height="1050"
                                    class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700">
                                <img src="/trabajos/trabajo-5.jpg" alt="Salidas de gases médicos instaladas en pared"
                                    data-slide width="1400" height="1050"
                                    class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700">
                            </div>
                            <button type="button" data-carousel-prev aria-label="Imagen anterior"
                                class="cursor-pointer absolute left-2 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full flex items-center justify-center text-white bg-[#0D1B2A]/55 hover:bg-[#0D1B2A]/80 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 18l-6-6 6-6" />
                                </svg>
                            </button>
                            <button type="button" data-carousel-next aria-label="Imagen siguiente"
                                class="cursor-pointer absolute right-2 top-1/2 -translate-y-1/2 w-9 h-9 rounded-full flex items-center justify-center text-white bg-[#0D1B2A]/55 hover:bg-[#0D1B2A]/80 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 18l6-6-6-6" />
                                </svg>
                            </button>
                        </div>
                        <script>
                            (function () {
                                var carousel = document.querySelector('[data-carousel]');
                                if (!carousel) return;
                                var slides = carousel.querySelectorAll('[data-slide]');
                                var index = 0;
                                var timer = null;
                                function show(i) {
                                    index = (i + slides.length) % slides.length;
                                    slides.forEach(function (slide, n) {
                                        slide.classList.toggle('opacity-100', n === index);
                                        slide.classList.toggle('opacity-0', n !== index);
                                    });
                                }
                                function restart() {
                                    clearInterval(timer);
                                    timer = setInterval(function () {
                                        show(index + 1);
                                    }, 5000);
                                }
                                carousel.querySelector('[data-carousel-prev]').addEventListener('click', function () {
                                    show(index - 1);
                                    restart();
                                });
                                carousel.querySelector('[data-carousel-next]').addEventListener('click', function () {
                                    show(index + 1);
                                    restart();
                                });
                                restart();
                            })();
                        </script>
                    </div>
                </div>
            </div>

            {{-- Misión y Visión --}}
            <div class="py-12 sm:py-20" style="background-color: #f8f9fa;" aria-label="Misión y visión">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-8 sm:mb-12" style="color: #0D1B2A;">
                        Misión y Visión</h2>
                    <div class="grid md:grid-cols-2 gap-6 sm:gap-8">
                        <article class="bg-white rounded-xl p-6 sm:p-8 shadow-sm">
                            <h3 class="text-xl sm:text-2xl font-bold mb-4" style="color: #0D1B2A;">Misión</h3>
                            <p class="text-sm sm:text-base leading-relaxed" style="color: #666666;">
                                Proporcionar soluciones integrales de ingeniería médica que mejoren la capacidad y
                                calidad de la atención en salud, mediante un servicio técnico excepcional, tecnología de
                                vanguardia y un compromiso inquebrantable con la seguridad del paciente.
                            </p>
                        </article>
                        <article class="bg-white rounded-xl p-6 sm:p-8 shadow-sm">
                            <h3 class="text-xl sm:text-2xl font-bold mb-4" style="color: #0D1B2A;">Visión</h3>
                            <p class="text-sm sm:text-base leading-relaxed" style="color: #666666;">
                                Ser la empresa líder en ingeniería médica en Latinoamérica, reconocida por nuestra
                                innovación, excelencia operativa y contribución al fortalecimiento de los sistemas de
                                salud públicos y privados.
                            </p>
                        </article>
                    </div>
                </div>
            </div>

            {{-- Valores --}}
            <div class="py-12 sm:py-20 bg-white" aria-label="Valores">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-8 sm:mb-12" style="color: #0D1B2A;">
                        Nuestros Valores</h2>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                        <article class="text-center p-6">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center mx-auto mb-4"
                                style="background-color: #23a7d8;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #ffffff;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold mb-2" style="color: #0D1B2A;">Seguridad</h3>
                            <p class="text-sm" style="color: #666666;">La seguridad del paciente es el eje central de
                                cada decisión que tomamos.</p>
                        </article>
                        <article class="text-center p-6">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center mx-auto mb-4"
                                style="background-color: #23a7d8;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #ffffff;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold mb-2" style="color: #0D1B2A;">Innovación</h3>
                            <p class="text-sm" style="color: #666666;">Adoptamos las últimas tecnologías para ofrecer
                                soluciones de vanguardia.</p>
                        </article>
                        <article class="text-center p-6">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center mx-auto mb-4"
                                style="background-color: #23a7d8;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #ffffff;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold mb-2" style="color: #0D1B2A;">Compromiso</h3>
                            <p class="text-sm" style="color: #666666;">Dedicación total a cada proyecto, respondiendo
                                con rapidez y eficacia.</p>
                        </article>
                        <article class="text-center p-6">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center mx-auto mb-4"
                                style="background-color: #23a7d8;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #ffffff;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold mb-2" style="color: #0D1B2A;">Calidad</h3>
                            <p class="text-sm" style="color: #666666;">Procesos certificados ISO que garantizan
                                resultados superiores en cada entrega.</p>
                        </article>
                    </div>
                </div>
            </div>

            {{-- Certificaciones --}}
            <div class="py-12 sm:py-20" style="background-color: #f8f9fa;" aria-label="Certificaciones">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-8 sm:mb-12" style="color: #0D1B2A;">
                        Certificaciones y Alianzas</h2>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                        <article class="bg-white rounded-xl p-6 shadow-sm text-center card-hover">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center mx-auto mb-4"
                                style="background-color: #23a7d8;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" style="color: #ffffff;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2 3h6a4 4 0 014 4v14a3 3 0 00-3-3H2z M22 3h-6a4 4 0 00-4 4v14a3 3 0 013-3h7z" />
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold mb-2" style="color: #0D1B2A;">Normativa NFPA 99</h3>
                            <p class="text-sm" style="color: #666666;">Estándar para sistemas de gases médicos en
                                instalaciones de salud.</p>
                        </article>
                        <article class="bg-white rounded-xl p-6 shadow-sm text-center card-hover">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center mx-auto mb-4"
                                style="background-color: #23a7d8;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" style="color: #ffffff;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold mb-2" style="color: #0D1B2A;">Soporte 24/7</h3>
                            <p class="text-sm" style="color: #666666;">Disponibilidad permanente para emergencias
                                técnicas críticas.</p>
                        </article>
                        <article class="bg-white rounded-xl p-6 shadow-sm text-center card-hover sm:col-span-2 lg:col-span-1">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center mx-auto mb-4"
                                style="background-color: #23a7d8;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" style="color: #ffffff;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold mb-2" style="color: #0D1B2A;">Alianzas
                                Fabricantes</h3>
                            <p class="text-sm" style="color: #666666;">Representante autorizado de las principales marcas
                                de tecnología médica mundial.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        {{-- Servicios --}}
        <section id="servicios" class="py-12 sm:py-20 bg-white" aria-label="Servicios">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-3 sm:mb-4" style="color: #0D1B2A;">
                    Nuestros Servicios</h2>
                <p class="text-center mb-8 sm:mb-12 max-w-2xl mx-auto text-sm sm:text-base" style="color: #666666;">
                    Soluciones completas para cada etapa del ciclo de vida de su equipamiento médico.
                </p>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8 items-start">
                    <article class="bg-white rounded-xl border border-gray-100 p-6 sm:p-8 shadow-sm card-hover">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-lg flex items-center justify-center mb-4 sm:mb-6"
                            style="background-color: rgba(33,150,243,0.1);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-7 sm:h-7" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2 sm:mb-3" style="color: #0D1B2A;">Instalaciones
                            Médicas</h3>
                        <p class="text-sm sm:text-base leading-relaxed mb-4" style="color: #666666;">
                            Diseñamos y ejecutamos infraestructura médica conforme a la normativa del Ministerio de
                            Salud y estándares internacionales.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="color: #2196F3;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Salas de operación y quirófanos
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="color: #2196F3;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Unidades de cuidados intensivos
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="color: #2196F3;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Laboratorios y servicios diagnósticos
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="color: #2196F3;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Infraestructura de gases médicos
                            </li>
                        </ul>
                    </article>
                    <article class="bg-white rounded-xl border border-gray-100 p-6 sm:p-8 shadow-sm card-hover">
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
                        <p class="text-sm sm:text-base leading-relaxed mb-4" style="color: #666666;">
                            Representamos a los principales fabricantes mundiales y ofrecemos equipamiento certificado
                            para todas las áreas clínicas.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="color: #2196F3;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Imagenología y diagnóstico
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="color: #2196F3;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Monitoreo de signos vitales
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="color: #2196F3;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Equipamiento quirúrgico
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="color: #2196F3;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Integración con sistemas hospitalarios
                            </li>
                        </ul>
                    </article>
                    <article class="bg-white rounded-xl border border-gray-100 p-6 sm:p-8 shadow-sm card-hover sm:col-span-2 lg:col-span-1">
                        <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-lg flex items-center justify-center mb-4 sm:mb-6"
                            style="background-color: rgba(33,150,243,0.1);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-7 sm:h-7" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" style="color: #2196F3;"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31.826-2.37 2.37a1.724 1.724 0 00-1.066 2.573c-1.756.426-1.756 2.924 0 3.35a1.724 1.724 0 001.066 2.573c.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2 sm:mb-3" style="color: #0D1B2A;">Mantenimiento
                            Técnico</h3>
                        <p class="text-sm sm:text-base leading-relaxed mb-4" style="color: #666666;">
                            Programas de mantenimiento preventivo y correctivo para maximizar la vida útil de sus
                            equipos. Servicio disponible las 24 horas, los 7 días de la semana.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="color: #2196F3;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Mantenimiento preventivo programado
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="color: #2196F3;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Reparación de emergencia 24/7
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="color: #2196F3;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Calibración y verificación
                            </li>
                            <li class="flex items-center gap-2 text-sm sm:text-base" style="color: #666666;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5" style="color: #2196F3;"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Contratos de soporte a largo plazo
                            </li>
                        </ul>
                    </article>
                </div>

                {{-- CTA --}}
                <div class="mt-12 sm:mt-16 rounded-2xl px-6 sm:px-10 py-10 sm:py-14 text-center text-white"
                    style="background: linear-gradient(135deg, #0D1B2A, #1a3a5c);">
                    <h3 class="text-xl sm:text-2xl md:text-3xl font-bold mb-3 sm:mb-4">¿Necesita una solución a medida?</h3>
                    <p class="text-sm sm:text-base mb-6 sm:mb-8 opacity-80 max-w-2xl mx-auto">
                        Cuéntenos sus requerimientos y le diseñaremos una propuesta técnica y económica adaptada a su
                        institución.
                    </p>
                    <a href="#contacto"
                        class="inline-block px-6 sm:px-8 py-3 rounded-lg font-semibold text-base sm:text-lg transition-colors"
                        style="background-color: #2196F3; color: #fff;">
                        Solicitar Cotización
                    </a>
                </div>
            </div>
        </section>

        {{-- Sectores --}}
        <section id="sectores" class="py-12 sm:py-20 bg-navy-lines" aria-label="Sectores donde trabajamos">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-3 sm:mb-4" style="color: #ffffff;">
                    Sectores donde trabajamos</h2>
                <p class="text-center mb-8 sm:mb-12 max-w-2xl mx-auto text-sm sm:text-base"
                    style="color: rgba(255, 255, 255, 0.75);">
                    Acompañamos a instituciones de salud en todo Chile, desde grandes hospitales hasta centros de
                    atención ambulatoria.
                </p>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
                    <article class="bg-white/10 border border-white/15 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                            style="background-color: rgba(255, 255, 255, 0.12);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2" style="color: #23a7d8;" aria-hidden="true">
                                <circle cx="12" cy="12" r="10" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8M8 12h8" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #ffffff;">Centros Médicos</h3>
                        <p class="text-sm sm:text-base" style="color: rgba(255, 255, 255, 0.75);">Instalación de gases medicinales y
                            equipamiento para consultorios y centros médicos ambulatorios.</p>
                    </article>
                    <article class="bg-white/10 border border-white/15 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                            style="background-color: rgba(255, 255, 255, 0.12);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2" style="color: #23a7d8;" aria-hidden="true">
                                <circle cx="12" cy="12" r="10" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 14s1.5 2 4 2 4-2 4-2M9 9h.01M15 9h.01" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #ffffff;">Odontológicos</h3>
                        <p class="text-sm sm:text-base" style="color: rgba(255, 255, 255, 0.75);">Sistemas de succión y gases médicos
                            para clínicas y consultorios dentales.</p>
                    </article>
                    <article class="bg-white/10 border border-white/15 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                            style="background-color: rgba(255, 255, 255, 0.12);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2" style="color: #23a7d8;" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #ffffff;">Laboratorios</h3>
                        <p class="text-sm sm:text-base" style="color: rgba(255, 255, 255, 0.75);">Equipamiento y gases medicinales para
                            laboratorios clínicos y servicios de diagnóstico.</p>
                    </article>
                    <article class="bg-white/10 border border-white/15 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                            style="background-color: rgba(255, 255, 255, 0.12);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2" style="color: #23a7d8;" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #ffffff;">Clínicas</h3>
                        <p class="text-sm sm:text-base" style="color: rgba(255, 255, 255, 0.75);">Soluciones integrales para clínicas
                            multidisciplinarias y centros de especialidades médicas.</p>
                    </article>
                    <article class="bg-white/10 border border-white/15 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                            style="background-color: rgba(255, 255, 255, 0.12);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2" style="color: #23a7d8;" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 2.69l5.66 5.66a8 8 0 11-11.31 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #ffffff;">Pisciculturas</h3>
                        <p class="text-sm sm:text-base" style="color: rgba(255, 255, 255, 0.75);">Sistemas de oxigenación y suministro
                            de gases para centros de piscicultura.</p>
                    </article>
                    <article class="bg-white/10 border border-white/15 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                            style="background-color: rgba(255, 255, 255, 0.12);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2" style="color: #23a7d8;" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #ffffff;">Hospitales de alta y
                            mediana complejidad</h3>
                        <p class="text-sm sm:text-base" style="color: rgba(255, 255, 255, 0.75);">Infraestructura crítica y equipamiento,
                            desde quirófanos hasta cuidados intensivos.</p>
                    </article>
                    <article class="bg-white/10 border border-white/15 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                            style="background-color: rgba(255, 255, 255, 0.12);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2" style="color: #23a7d8;" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z M9 22V12h6v10" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #ffffff;">Centros de Salud Familiar
                            (CESFAM)</h3>
                        <p class="text-sm sm:text-base" style="color: rgba(255, 255, 255, 0.75);">Gases medicinales y equipamiento para
                            la atención primaria de salud.</p>
                    </article>
                    <article class="bg-white/10 border border-white/15 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                            style="background-color: rgba(255, 255, 255, 0.12);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2" style="color: #23a7d8;" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #ffffff;">Servicios de Atención
                            Primaria de Urgencia de Alta Resolutividad (SAR)</h3>
                        <p class="text-sm sm:text-base" style="color: rgba(255, 255, 255, 0.75);">Tecnología y gases medicinales para
                            unidades de urgencia de atención primaria.</p>
                    </article>
                    <article class="bg-white/10 border border-white/15 rounded-xl p-6">
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                            style="background-color: rgba(255, 255, 255, 0.12);">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2" style="color: #23a7d8;" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #ffffff;">Centros Comunitarios de
                            Salud Familiar (CECOF)</h3>
                        <p class="text-sm sm:text-base" style="color: rgba(255, 255, 255, 0.75);">Instalaciones y equipamiento para centros
                            comunitarios de salud familiar.</p>
                    </article>
                </div>
            </div>
        </section>

        {{-- Proyectos --}}
        <section id="proyectos" class="py-12 sm:py-20 bg-white" aria-label="Proyectos">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-3 sm:mb-4" style="color: #0D1B2A;">
                    Proyectos</h2>
                <p class="text-center mb-8 sm:mb-12 max-w-2xl mx-auto text-sm sm:text-base" style="color: #666666;">
                    Más de 200 proyectos ejecutados a lo largo de 15 años. Algunos ejemplos de nuestras instalaciones,
                    equipamientos y contratos de mantenimiento.
                </p>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
                    <article class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold"
                                style="background-color: rgba(33,150,243,0.1); color: #2196F3;">Hospitales</span>
                            <span class="text-xs" style="color: #666666;">2025</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #0D1B2A;">Modernización de UCI</h3>
                        <p class="text-sm" style="color: #666666;">Renovación de monitores multiparamétricos, camas
                            críticas y sistema de gases medicinales en unidad de cuidados intensivos.</p>
                    </article>
                    <article class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold"
                                style="background-color: rgba(33,150,243,0.1); color: #2196F3;">Clínicas</span>
                            <span class="text-xs" style="color: #666666;">2025</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #0D1B2A;">Sala de imágenes
                            diagnósticas</h3>
                        <p class="text-sm" style="color: #666666;">Diseño e instalación integral de sala de radiología
                            digital con blindaje, integración PACS y puesta en marcha.</p>
                    </article>
                    <article class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold"
                                style="background-color: rgba(33,150,243,0.1); color: #2196F3;">Hospitales</span>
                            <span class="text-xs" style="color: #666666;">2024</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #0D1B2A;">Gases medicinales en
                            quirófanos</h3>
                        <p class="text-sm" style="color: #666666;">Instalación de red de gases medicinales y sistema de
                            alarmas para seis quirófanos, según normativa del MINSAL.</p>
                    </article>
                    <article class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold"
                                style="background-color: rgba(33,150,243,0.1); color: #2196F3;">Clínicas</span>
                            <span class="text-xs" style="color: #666666;">2024</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #0D1B2A;">Mantenimiento preventivo
                            de red</h3>
                        <p class="text-sm" style="color: #666666;">Contrato de mantenimiento preventivo y correctivo
                            para más de 500 equipos biomédicos en clínicas de la Región Metropolitana.</p>
                    </article>
                    <article class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold"
                                style="background-color: rgba(33,150,243,0.1); color: #2196F3;">Laboratorios</span>
                            <span class="text-xs" style="color: #666666;">2023</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #0D1B2A;">Adecuación de laboratorio
                            clínico</h3>
                        <p class="text-sm" style="color: #666666;">Adecuación de infraestructura, instalación de
                            equipamiento y calibración de instrumentos de análisis.</p>
                    </article>
                    <article class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-3">
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold"
                                style="background-color: rgba(33,150,243,0.1); color: #2196F3;">Imagenología</span>
                            <span class="text-xs" style="color: #666666;">2026</span>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold mb-2" style="color: #0D1B2A;">Soporte 24/7 con SLA</h3>
                        <p class="text-sm" style="color: #666666;">Contrato de soporte técnico con SLA 24/7 para
                            equipamiento de urgencias e imagenología de un centro médico.</p>
                    </article>
                </div>
            </div>
        </section>

        {{-- Contacto --}}
        <section id="contacto" class="py-12 sm:py-20 bg-navy-lines" aria-label="Contacto">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-3 sm:mb-4" style="color: #ffffff;">
                    Contáctanos</h2>
                <p class="text-center mb-8 sm:mb-12 max-w-2xl mx-auto text-sm sm:text-base"
                    style="color: rgba(255, 255, 255, 0.75);">
                    Estamos listos para responder sus consultas y diseñar soluciones a la medida.
                </p>
                <div class="grid md:grid-cols-5 gap-8 sm:gap-12">
                    <div class="md:col-span-2 space-y-6 sm:space-y-8">
                        <h3 class="text-xl sm:text-2xl font-bold" style="color: #ffffff;">Información de Contacto</h3>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center shrink-0"
                                style="background-color: rgba(255, 255, 255, 0.12);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" style="color: #23a7d8;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm sm:text-base mb-1" style="color: #ffffff;">Dirección</h4>
                                <p class="text-sm sm:text-base" style="color: rgba(255, 255, 255, 0.75);">Santiago, Chile</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center shrink-0"
                                style="background-color: rgba(255, 255, 255, 0.12);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" style="color: #23a7d8;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm sm:text-base mb-1" style="color: #ffffff;">Teléfono</h4>
                                <p class="text-sm sm:text-base" style="color: rgba(255, 255, 255, 0.75);">+56 9 1234 5678</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center shrink-0"
                                style="background-color: rgba(255, 255, 255, 0.12);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" style="color: #23a7d8;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm sm:text-base mb-1" style="color: #ffffff;">Email</h4>
                                <p class="text-sm sm:text-base" style="color: rgba(255, 255, 255, 0.75);">contacto@instamed.cl</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg flex items-center justify-center shrink-0"
                                style="background-color: rgba(255, 255, 255, 0.12);">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2" style="color: #23a7d8;" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-sm sm:text-base mb-1" style="color: #ffffff;">Horario</h4>
                                <p class="text-sm sm:text-base" style="color: rgba(255, 255, 255, 0.75);">Lun - Vie: 9:00 - 18:00</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-3">
                        <form action="#" method="POST" class="bg-white/10 border border-white/15 rounded-xl p-6 sm:p-8 space-y-5 sm:space-y-6"
                            aria-label="Formulario de contacto">
                            @csrf
                            <div class="grid sm:grid-cols-2 gap-5 sm:gap-6">
                                <div>
                                    <label for="nombre" class="block text-sm font-medium mb-1" style="color: #ffffff;">Nombre
                                        Completo</label>
                                    <input type="text" id="nombre" name="nombre" required
                                        class="w-full px-4 py-2.5 sm:py-3 rounded-lg border border-white/25 bg-white/10 text-white placeholder:text-white/45 focus:ring-2 focus:ring-[#23a7d8] focus:border-transparent outline-none text-sm sm:text-base">
                                </div>
                                <div>
                                    <label for="empresa" class="block text-sm font-medium mb-1" style="color: #ffffff;">Empresa
                                        / Institución</label>
                                    <input type="text" id="empresa" name="empresa" placeholder="Opcional"
                                        class="w-full px-4 py-2.5 sm:py-3 rounded-lg border border-white/25 bg-white/10 text-white placeholder:text-white/45 focus:ring-2 focus:ring-[#23a7d8] focus:border-transparent outline-none text-sm sm:text-base">
                                </div>
                            </div>
                            <div class="grid sm:grid-cols-2 gap-5 sm:gap-6">
                                <div>
                                    <label for="email" class="block text-sm font-medium mb-1" style="color: #ffffff;">Email</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-4 py-2.5 sm:py-3 rounded-lg border border-white/25 bg-white/10 text-white placeholder:text-white/45 focus:ring-2 focus:ring-[#23a7d8] focus:border-transparent outline-none text-sm sm:text-base">
                                </div>
                                <div>
                                    <label for="telefono" class="block text-sm font-medium mb-1" style="color: #ffffff;">Teléfono</label>
                                    <input type="tel" id="telefono" name="telefono"
                                        class="w-full px-4 py-2.5 sm:py-3 rounded-lg border border-white/25 bg-white/10 text-white placeholder:text-white/45 focus:ring-2 focus:ring-[#23a7d8] focus:border-transparent outline-none text-sm sm:text-base">
                                </div>
                            </div>
                            <div>
                                <label for="servicio" class="block text-sm font-medium mb-1" style="color: #ffffff;">Servicio
                                    de Interés</label>
                                <select id="servicio" name="servicio"
                                    class="contact-form-select w-full px-4 py-2.5 sm:py-3 rounded-lg border border-white/25 bg-white/10 text-white focus:ring-2 focus:ring-[#23a7d8] focus:border-transparent outline-none text-sm sm:text-base">
                                    <option value="">Seleccione un servicio</option>
                                    <option value="instalaciones">Instalaciones Médicas</option>
                                    <option value="equipamiento">Equipamiento Hospitalario</option>
                                    <option value="mantenimiento">Mantenimiento Técnico</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                            <div>
                                <label for="mensaje" class="block text-sm font-medium mb-1" style="color: #ffffff;">Mensaje</label>
                                <textarea id="mensaje" name="mensaje" rows="5" required
                                    class="w-full px-4 py-2.5 sm:py-3 rounded-lg border border-white/25 bg-white/10 text-white placeholder:text-white/45 focus:ring-2 focus:ring-[#23a7d8] focus:border-transparent outline-none resize-none text-sm sm:text-base"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full py-3 rounded-lg font-semibold text-sm sm:text-base transition-colors text-[#0D1B2A]"
                                style="background-color: #23a7d8;" onmouseover="this.style.backgroundColor='#1E93C0'"
                                onmouseout="this.style.backgroundColor='#23a7d8'">
                                Enviar Mensaje
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-footer />
@endsection
