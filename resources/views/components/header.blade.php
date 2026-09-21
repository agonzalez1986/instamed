@props(['active' => ''])

<header class="fixed top-0 left-0 w-full bg-white shadow-sm z-50" role="banner">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16"
        aria-label="Navegación principal">
        {{-- Logo (izquierda) --}}
        <a href="/" class="flex items-center shrink-0" aria-label="INSTAMED - Inicio">
            <img src="/logo_corto.jpg" alt="INSTAMED Ingeniería Logo" class="h-10 w-auto">
        </a>

        {{-- Menú desktop centrado --}}
        <ul class="hidden md:flex items-center justify-center gap-8 text-sm font-medium" style="color: #666666;">
            <li><a href="/"
                    class="hover:text-[#2196F3] transition-colors {{ $active === 'inicio' ? 'text-[#2196F3] font-semibold' : '' }}">Inicio</a>
            </li>
            <li><a href="/servicios"
                    class="hover:text-[#2196F3] transition-colors {{ $active === 'servicios' ? 'text-[#2196F3] font-semibold' : '' }}">Servicios</a>
            </li>
            <li><a href="/nosotros"
                    class="hover:text-[#2196F3] transition-colors {{ $active === 'nosotros' ? 'text-[#2196F3] font-semibold' : '' }}">Nosotros</a>
            </li>
            <li><a href="/contacto"
                    class="hover:text-[#2196F3] transition-colors {{ $active === 'contacto' ? 'text-[#2196F3] font-semibold' : '' }}">Contáctanos</a>
            </li>
        </ul>

        {{-- Hamburger botón --}}
        <button id="menu-toggle" class="md:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5"
            aria-label="Abrir menú" aria-expanded="false">
            <span class="block w-6 h-0.5 bg-[#0D1B2A] transition-transform duration-300 origin-center"
                id="bar1"></span>
            <span class="block w-6 h-0.5 bg-[#0D1B2A] transition-opacity duration-300" id="bar2"></span>
            <span class="block w-6 h-0.5 bg-[#0D1B2A] transition-transform duration-300 origin-center"
                id="bar3"></span>
        </button>
    </nav>

    {{-- Menú móvil --}}
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-3">
            <a href="/"
                class="block py-2 text-sm font-medium hover:text-[#2196F3] transition-colors mobile-menu-link"
                style="color: {{ $active === 'inicio' ? '#2196F3' : '#666666' }};">Inicio</a>
            <a href="/servicios"
                class="block py-2 text-sm font-medium hover:text-[#2196F3] transition-colors mobile-menu-link"
                style="color: {{ $active === 'servicios' ? '#2196F3' : '#666666' }};">Servicios</a>
            <a href="/nosotros"
                class="block py-2 text-sm font-medium hover:text-[#2196F3] transition-colors mobile-menu-link"
                style="color: {{ $active === 'nosotros' ? '#2196F3' : '#666666' }};">Nosotros</a>
            <a href="/contacto" class="block py-2 text-sm font-semibold text-white text-center rounded-lg mt-3"
                style="background-color: #2196F3;">Contáctanos</a>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');
        const bar1 = document.getElementById('bar1');
        const bar2 = document.getElementById('bar2');
        const bar3 = document.getElementById('bar3');

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
    });
</script>
