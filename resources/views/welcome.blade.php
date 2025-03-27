<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('icon/avatar-people-user-profile-man-boy-cap-young-512.webp') }}">


        <title>Dan-Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- Alpine.js -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
      
         </head>
        <body class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-b from-red-800 via-gray-900 to-black text-white text-center px-6">
        <!-- Main Content -->


    
        
            @include('livewire.includes.Content')
            {{--  @include('livewire.includes.floating-button')--}}
            
            @include('livewire.includes.navbar')
            </div> 
            @include('livewire.includes.ButtonResources')
           
            

        </div>
        </body>
        <script>
        AOS.init();
        </script>
</html>
