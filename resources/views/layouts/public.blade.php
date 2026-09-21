<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Primary Meta Tags --}}
    <title>@yield('title', 'INSTAMED Ingeniería - Soluciones en Ingeniería Médica para Chile')</title>
    <meta name="description" content="@yield('description', 'INSTAMED Ingeniería ofrece soluciones integrales en instalaciones médicas, equipamiento hospitalario y mantenimiento técnico para instituciones de salud en Chile.')">
    <meta name="keywords" content="@yield('keywords', 'ingeniería médica, instalaciones médicas, equipamiento hospitalario, mantenimiento técnico, clínicas, hospitales, Chile, INSTAMED')">
    <meta name="author" content="INSTAMED Ingeniería">
    <meta name="robots" content="index, follow">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="@yield('og:type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og:title', 'INSTAMED Ingeniería - Soluciones en Ingeniería Médica para Chile')">
    <meta property="og:description" content="@yield('og:description', 'Soluciones integrales en instalaciones médicas, equipamiento hospitalario y mantenimiento técnico para instituciones de salud en Chile.')">
    <meta property="og:image" content="@yield('og:image', asset('logo.jpg'))">
    <meta property="og:locale" content="es_CL">
    <meta property="og:site_name" content="INSTAMED Ingeniería">

    {{-- Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('og:title', 'INSTAMED Ingeniería')">
    <meta property="twitter:description" content="@yield('og:description', 'Soluciones integrales en ingeniería médica.')">
    <meta property="twitter:image" content="@yield('og:image', asset('logo.jpg'))">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Favicon --}}
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    {{-- Tailwind CSS via Vite --}}
    @vite(['resources/css/public.css'])

    {{-- Structured Data (JSON-LD) --}}
    @yield('structured-data')
</head>
<body class="font-sans antialiased bg-white text-gray-900">
    @yield('content')
</body>
</html>
