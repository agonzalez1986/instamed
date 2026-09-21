import { Head } from '@inertiajs/react';

export default function Welcome() {
    return (
        <>
            <Head title="INSTAMED Ingeniería" />
            <div className="min-h-screen bg-white font-sans antialiased">

                {/* Header */}
                <header className="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm shadow-sm">
                    <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div className="flex h-20 items-center justify-between">
                            <div className="flex items-center gap-3">
                                <img src="/logo.jpg" alt="INSTAMED Ingeniería" className="h-14 w-auto" />
                            </div>
                            <nav className="hidden md:flex items-center gap-8">
                                <a href="#inicio" className="text-[#0D1B2A] font-medium hover:text-[#2196F3] transition-colors">Inicio</a>
                                <a href="#servicios" className="text-[#0D1B2A] font-medium hover:text-[#2196F3] transition-colors">Servicios</a>
                                <a href="#nosotros" className="text-[#0D1B2A] font-medium hover:text-[#2196F3] transition-colors">Nosotros</a>
                                <a href="#contacto" className="text-[#0D1B2A] font-medium hover:text-[#2196F3] transition-colors">Contacto</a>
                            </nav>
                            <a
                                href="#contacto"
                                className="rounded-lg bg-[#2196F3] px-6 py-2.5 text-sm font-semibold text-white shadow-md hover:bg-[#1976D2] transition-all hover:shadow-lg"
                            >
                                Cotizar
                            </a>
                        </div>
                    </div>
                </header>

                {/* Hero */}
                <section id="inicio" className="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
                    <div className="absolute inset-0 bg-gradient-to-br from-[#0D1B2A] via-[#132D4A] to-[#1a3a5c]"></div>
                    <div className="absolute inset-0 opacity-10">
                        <div className="absolute top-20 right-20 w-72 h-72 rounded-full bg-[#2196F3] blur-3xl"></div>
                        <div className="absolute bottom-10 left-10 w-96 h-96 rounded-full bg-[#2196F3] blur-3xl"></div>
                    </div>
                    <div className="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div className="max-w-3xl">
                            <h1 className="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight">
                                Ingeniería Médica
                                <span className="block text-[#2196F3] mt-2">de Precisión</span>
                            </h1>
                            <p className="mt-6 text-lg sm:text-xl text-gray-300 leading-relaxed max-w-2xl">
                                Soluciones integrales en instalaciones médicas, equipamiento hospitalario y tecnología sanitaria para Chile.
                            </p>
                            <div className="mt-10 flex flex-wrap gap-4">
                                <a
                                    href="#servicios"
                                    className="rounded-lg bg-[#2196F3] px-8 py-3.5 text-base font-semibold text-white shadow-lg hover:bg-[#1976D2] transition-all hover:shadow-xl hover:-translate-y-0.5"
                                >
                                    Nuestros Servicios
                                </a>
                                <a
                                    href="#contacto"
                                    className="rounded-lg border-2 border-white/30 px-8 py-3.5 text-base font-semibold text-white hover:bg-white/10 transition-all"
                                >
                                    Contactar
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                {/* Stats */}
                <section className="relative -mt-12 z-10 pb-16">
                    <div className="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
                        <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
                            {[
                                { number: '15+', label: 'Años de Experiencia' },
                                { number: '200+', label: 'Proyectos Realizados' },
                                { number: '50+', label: 'Clientes Activos' },
                                { number: '98%', label: 'Satisfacción' },
                            ].map((stat) => (
                                <div key={stat.label} className="rounded-xl bg-white p-6 text-center shadow-lg border border-gray-100">
                                    <div className="text-3xl font-bold text-[#2196F3]">{stat.number}</div>
                                    <div className="mt-1 text-sm text-[#666666] font-medium">{stat.label}</div>
                                </div>
                            ))}
                        </div>
                    </div>
                </section>

                {/* Servicios */}
                <section id="servicios" className="py-20 bg-gray-50">
                    <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl sm:text-4xl font-bold text-[#0D1B2A]">Nuestros Servicios</h2>
                            <p className="mt-4 text-lg text-[#666666] max-w-2xl mx-auto">
                                Ofrecemos soluciones completas para el sector salud
                            </p>
                        </div>
                        <div className="grid md:grid-cols-3 gap-8">
                            {[
                                {
                                    icon: (
                                        <svg className="w-8 h-8" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3H21" />
                                        </svg>
                                    ),
                                    title: 'Instalaciones Médicas',
                                    description: 'Diseño, construcción y adecuación de quirófanos, laboratorios, clínicas y centros de salud con los más altos estándares.',
                                },
                                {
                                    icon: (
                                        <svg className="w-8 h-8" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                        </svg>
                                    ),
                                    title: 'Equipamiento Hospitalario',
                                    description: 'Suministro, instalación y mantenimiento de equipos médicos de última generación para instituciones de salud.',
                                },
                                {
                                    icon: (
                                        <svg className="w-8 h-8" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor">
                                            <path strokeLinecap="round" strokeLinejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085" />
                                        </svg>
                                    ),
                                    title: 'Mantenimiento Técnico',
                                    description: 'Servicio de mantenimiento preventivo y correctivo para equipos médicos con响应时间 garantizado.',
                                },
                            ].map((service) => (
                                <div
                                    key={service.title}
                                    className="group rounded-xl bg-white p-8 shadow-md hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-[#2196F3]/30"
                                >
                                    <div className="flex h-14 w-14 items-center justify-center rounded-lg bg-[#2196F3]/10 text-[#2196F3] group-hover:bg-[#2196F3] group-hover:text-white transition-all duration-300">
                                        {service.icon}
                                    </div>
                                    <h3 className="mt-6 text-xl font-bold text-[#0D1B2A]">{service.title}</h3>
                                    <p className="mt-3 text-[#666666] leading-relaxed">{service.description}</p>
                                </div>
                            ))}
                        </div>
                    </div>
                </section>

                {/* Nosotros */}
                <section id="nosotros" className="py-20 bg-white">
                    <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div className="grid lg:grid-cols-2 gap-12 items-center">
                            <div>
                                <h2 className="text-3xl sm:text-4xl font-bold text-[#0D1B2A]">Sobre INSTAMED</h2>
                                <p className="mt-6 text-lg text-[#666666] leading-relaxed">
                                    Somos una empresa chilena especializada en ingeniería médica, comprometida con la excelencia y la innovación en el sector salud.
                                </p>
                                <p className="mt-4 text-[#666666] leading-relaxed">
                                    Nuestro equipo de profesionales altamente capacitados trabaja mano a mano con hospitales, clínicas y centros de salud para ofrecer soluciones integrales que mejoren la calidad de atención a los pacientes.
                                </p>
                                <div className="mt-8 grid grid-cols-2 gap-6">
                                    <div className="flex items-start gap-3">
                                        <div className="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#2196F3] mt-0.5">
                                            <svg className="h-3.5 w-3.5 text-white" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor">
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                            </svg>
                                        </div>
                                        <span className="text-[#0D1B2A] font-medium">Certificaciones ISO</span>
                                    </div>
                                    <div className="flex items-start gap-3">
                                        <div className="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#2196F3] mt-0.5">
                                            <svg className="h-3.5 w-3.5 text-white" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor">
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                            </svg>
                                        </div>
                                        <span className="text-[#0D1B2A] font-medium">Soporte 24/7</span>
                                    </div>
                                    <div className="flex items-start gap-3">
                                        <div className="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#2196F3] mt-0.5">
                                            <svg className="h-3.5 w-3.5 text-white" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor">
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                            </svg>
                                        </div>
                                        <span className="text-[#0D1B2A] font-medium">Garantía Completa</span>
                                    </div>
                                    <div className="flex items-start gap-3">
                                        <div className="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#2196F3] mt-0.5">
                                            <svg className="h-3.5 w-3.5 text-white" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor">
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                            </svg>
                                        </div>
                                        <span className="text-[#0D1B2A] font-medium">Equipo Multidisciplinario</span>
                                    </div>
                                </div>
                            </div>
                            <div className="relative">
                                <div className="aspect-[4/3] rounded-2xl bg-gradient-to-br from-[#0D1B2A] to-[#2196F3] p-1">
                                    <div className="h-full w-full rounded-xl bg-white p-8 flex items-center justify-center">
                                        <div className="text-center">
                                            <div className="mx-auto h-20 w-20 rounded-full bg-[#2196F3]/10 flex items-center justify-center mb-4">
                                                <svg className="h-10 w-10 text-[#2196F3]" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor">
                                                    <path strokeLinecap="round" strokeLinejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                                </svg>
                                            </div>
                                            <h4 className="text-xl font-bold text-[#0D1B2A]">Comprometidos con la Salud</h4>
                                            <p className="mt-2 text-[#666666] text-sm">Cada proyecto es una oportunidad para mejorar la vida de las personas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {/* Contacto */}
                <section id="contacto" className="py-20 bg-[#0D1B2A]">
                    <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div className="grid lg:grid-cols-2 gap-12">
                            <div>
                                <h2 className="text-3xl sm:text-4xl font-bold text-white">Contáctanos</h2>
                                <p className="mt-4 text-lg text-gray-300">
                                    Estamos listos para ayudarte con tu próximo proyecto médico.
                                </p>
                                <div className="mt-8 space-y-6">
                                    <div className="flex items-center gap-4">
                                        <div className="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-[#2196F3]/20">
                                            <svg className="h-6 w-6 text-[#2196F3]" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor">
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div className="text-sm text-gray-400">Dirección</div>
                                            <div className="text-white font-medium">Santiago, Chile</div>
                                        </div>
                                    </div>
                                    <div className="flex items-center gap-4">
                                        <div className="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-[#2196F3]/20">
                                            <svg className="h-6 w-6 text-[#2196F3]" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor">
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div className="text-sm text-gray-400">Teléfono</div>
                                            <div className="text-white font-medium">+56 9 XXXX XXXX</div>
                                        </div>
                                    </div>
                                    <div className="flex items-center gap-4">
                                        <div className="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-[#2196F3]/20">
                                            <svg className="h-6 w-6 text-[#2196F3]" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor">
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div className="text-sm text-gray-400">Email</div>
                                            <div className="text-white font-medium">contacto@instamed.cl</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="rounded-2xl bg-white/5 backdrop-blur-sm p-8 border border-white/10">
                                <form className="space-y-5">
                                    <div>
                                        <label className="block text-sm font-medium text-gray-300 mb-1.5">Nombre</label>
                                        <input
                                            type="text"
                                            className="w-full rounded-lg border border-white/20 bg-white/5 px-4 py-3 text-white placeholder-gray-500 focus:border-[#2196F3] focus:outline-none focus:ring-2 focus:ring-[#2196F3]/50 transition-all"
                                            placeholder="Tu nombre"
                                        />
                                    </div>
                                    <div>
                                        <label className="block text-sm font-medium text-gray-300 mb-1.5">Email</label>
                                        <input
                                            type="email"
                                            className="w-full rounded-lg border border-white/20 bg-white/5 px-4 py-3 text-white placeholder-gray-500 focus:border-[#2196F3] focus:outline-none focus:ring-2 focus:ring-[#2196F3]/50 transition-all"
                                            placeholder="tu@email.com"
                                        />
                                    </div>
                                    <div>
                                        <label className="block text-sm font-medium text-gray-300 mb-1.5">Mensaje</label>
                                        <textarea
                                            rows={4}
                                            className="w-full rounded-lg border border-white/20 bg-white/5 px-4 py-3 text-white placeholder-gray-500 focus:border-[#2196F3] focus:outline-none focus:ring-2 focus:ring-[#2196F3]/50 transition-all resize-none"
                                            placeholder="¿Cómo podemos ayudarte?"
                                        />
                                    </div>
                                    <button
                                        type="submit"
                                        className="w-full rounded-lg bg-[#2196F3] px-6 py-3.5 text-base font-semibold text-white shadow-lg hover:bg-[#1976D2] transition-all hover:shadow-xl"
                                    >
                                        Enviar Mensaje
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                {/* Footer */}
                <footer className="bg-[#0a1525] py-8">
                    <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div className="flex flex-col md:flex-row items-center justify-between gap-4">
                            <div className="flex items-center gap-3">
                                <img src="/logo.jpg" alt="INSTAMED Ingeniería" className="h-10 w-auto" />
                            </div>
                            <p className="text-sm text-gray-400">
                                &copy; {new Date().getFullYear()} INSTAMED Ingeniería. Todos los derechos reservados.
                            </p>
                        </div>
                    </div>
                </footer>
            </div>
        </>
    );
}
