@props([])

<header id="site-header"
    class="fixed top-0 left-0 w-full z-50 shadow-sm transition-colors duration-300 bg-[#343957]/20"
    role="banner">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16 sm:h-20"
        aria-label="Navegación principal">
        {{-- Logo (izquierda) --}}
        <a href="#inicio" class="flex items-center shrink-0" aria-label="Instamed - Inicio">
            <img src="/logo_blanco_transp.png" alt="Instamed Logo" class="h-10 sm:h-12 lg:h-14 w-auto">
        </a>

        {{-- Menú desktop --}}
        <ul class="hidden lg:flex items-center justify-center gap-6 xl:gap-8 text-sm font-medium">
            <li><a href="#inicio" data-section="inicio"
                    class="nav-link text-white hover:text-[#2196F3] transition-colors"
                    style="color: #2196F3; font-semibold;">Inicio</a>
            </li>
            <li><a href="#nosotros" data-section="nosotros"
                    class="nav-link text-white hover:text-[#2196F3] transition-colors">Nosotros</a>
            </li>
            <li><a href="#servicios" data-section="servicios"
                    class="nav-link text-white hover:text-[#2196F3] transition-colors">Servicios</a>
            </li>
            <li><a href="#sectores" data-section="sectores"
                    class="nav-link text-white hover:text-[#2196F3] transition-colors">Sectores</a>
            </li>
            <li><a href="#proyectos" data-section="proyectos"
                    class="nav-link text-white hover:text-[#2196F3] transition-colors">Proyectos</a>
            </li>
            <li><a href="#contacto" data-section="contacto"
                    class="nav-link text-sm font-semibold text-white px-4 py-2 rounded-lg border-2 transition-colors hover:bg-white/10"
                    style="border-color: #2196F3;">Contacto</a>
            </li>
        </ul>

        {{-- Hamburger botón --}}
        <button id="menu-toggle" class="lg:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5"
            aria-label="Abrir menú" aria-expanded="false">
            <span class="block w-6 h-0.5 bg-white transition-transform duration-300 origin-center"
                id="bar1"></span>
            <span class="block w-6 h-0.5 bg-white transition-opacity duration-300" id="bar2"></span>
            <span class="block w-6 h-0.5 bg-white transition-transform duration-300 origin-center"
                id="bar3"></span>
        </button>
    </nav>

    {{-- Menú móvil --}}
    <div id="mobile-menu" class="hidden lg:hidden bg-[#343957] border-t border-white/10 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-3">
            <a href="#inicio" data-section="inicio"
                class="nav-link mobile-menu-link block py-2 text-sm font-medium text-white hover:text-[#2196F3] transition-colors"
                style="color: #2196F3; font-semibold;">Inicio</a>
            <a href="#nosotros" data-section="nosotros"
                class="nav-link mobile-menu-link block py-2 text-sm font-medium text-white hover:text-[#2196F3] transition-colors">Nosotros</a>
            <a href="#servicios" data-section="servicios"
                class="nav-link mobile-menu-link block py-2 text-sm font-medium text-white hover:text-[#2196F3] transition-colors">Servicios</a>
            <a href="#sectores" data-section="sectores"
                class="nav-link mobile-menu-link block py-2 text-sm font-medium text-white hover:text-[#2196F3] transition-colors">Sectores</a>
            <a href="#proyectos" data-section="proyectos"
                class="nav-link mobile-menu-link block py-2 text-sm font-medium text-white hover:text-[#2196F3] transition-colors">Proyectos</a>
            <a href="#contacto"
                class="mobile-menu-link block py-2 text-sm font-semibold text-white text-center rounded-lg mt-3"
                style="background-color: #2196F3;">Contacto</a>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var header = document.getElementById('site-header');
        var hero = document.querySelector('[data-rotator]');
        if (!header || !hero) {
            return;
        }

        var nav = header.querySelector('nav');

        function updateHeader() {
            var overHero = hero.getBoundingClientRect().bottom > nav.offsetHeight;
            header.classList.toggle('bg-[#343957]', !overHero);
            header.classList.toggle('bg-[#343957]/20', overHero);
        }

        updateHeader();
        window.addEventListener('scroll', updateHeader, { passive: true });
        window.addEventListener('resize', updateHeader);
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');
        const bar1 = document.getElementById('bar1');
        const bar2 = document.getElementById('bar2');
        const bar3 = document.getElementById('bar3');
        const navLinks = document.querySelectorAll('.nav-link');

        toggle.addEventListener('click', function() {
            const isOpen = !menu.classList.contains('hidden');
            menu.classList.toggle('hidden');
            toggle.setAttribute('aria-expanded', !isOpen);
            bar1.classList.toggle('rotate-45');
            bar1.classList.toggle('translate-y-1.5');
            bar2.classList.toggle('opacity-0');
            bar3.classList.toggle('-rotate-45');
            bar3.classList.toggle('-translate-y-1.5');
        });

        menu.querySelectorAll('.mobile-menu-link').forEach(function(link) {
            link.addEventListener('click', function() {
                menu.classList.add('hidden');
                toggle.setAttribute('aria-expanded', 'false');
                bar1.classList.remove('rotate-45', 'translate-y-1.5');
                bar2.classList.remove('opacity-0');
                bar3.classList.remove('-rotate-45', '-translate-y-1.5');
            });
        });

        function setActiveSection(id) {
            navLinks.forEach(function(link) {
                const active = link.dataset.section === id;
                link.style.color = active ? '#2196F3' : '';
                link.style.fontWeight = active ? '600' : '';
            });
        }

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        setActiveSection(entry.target.id);
                    }
                });
            }, { rootMargin: '-' + nav.offsetHeight + 'px 0px -55% 0px', threshold: 0 });

            ['inicio', 'nosotros', 'servicios', 'sectores', 'proyectos', 'contacto'].forEach(function(id) {
                const el = document.getElementById(id);
                if (el) observer.observe(el);
            });
        }
    });
</script>
