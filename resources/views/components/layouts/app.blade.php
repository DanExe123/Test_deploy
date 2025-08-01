<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('icon/avatar-people-user-profile-man-boy-cap-young-512.webp') }}">


        <title>Dan-Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

        
        
        
           <!-- Tailwind CSS -->
           <script src="https://cdn.tailwindcss.com"></script>
        <!-- Scripts -->
        @vite(['resources/js/app.js']) <!-- Ensure Alpine.js is loaded via Vite -->

    </head>
    <body class="w-full h-screen bg-gradient-to-b from-black via-gray-900 to-gray-800">
        {{ $slot }}
        @yield('content')
        
        
        <script>
            AOS.init();
          </script>
        <!-- Alpine.js -->
        <script type="module">
            import Alpine from 'alpinejs'
            window.Alpine = Alpine
            Alpine.start()
        </script>
        
    </body>
</html>
