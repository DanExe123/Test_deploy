
<div>
    <div class="relative flex flex-col lg:flex-row items-center justify-center min-h-screen bg-gray-900 text-white px-6">

    <!-- Floating Animation CSS -->
    <style>
        @keyframes floating {
            0% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
            100% { transform: translateY(0); }
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
    </style>

    <!-- Floating Back Arrow -->
    <a wire:navigate.prevent href="{{ route('home') }}" 
        class="absolute top-6 left-6 bg-gray-800 text-white p-3 rounded-full shadow-md transition hover:bg-gray-700 hover:scale-110 floating" 
        data-aos-duration="3000" data-aos="fade-right">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
    </a>

            <!-- Floating Profile Button -->
            <button @click="open = !open" 
                class="absolute top-20 left-6 w-16 h-16 rounded-full shadow-lg focus:outline-none transition bg-white flex items-center justify-center floating" 
                data-aos-duration="3000" data-aos="fade-right">
                <img src="/icon/man-wearing-baseball-cap-icon-600nw-530829364.webp" alt="Menu" class="w-10 h-10 rounded-full object-cover">
            </button>

            <!-- Breadcrumbs -->
            <div class="absolute top-6 right-6 floating">
             @include('livewire.includes.Breadcrumbs')
            </div>

            <!-- Main Layout: Two Column Layout + Bottom Section -->
            <div class="flex flex-col w-full max-w-6xl">

             <!-- Two Column Layout -->
            @include('livewire.includes.EAV-table')

            <!-- Section: Front-End and Back-End Code -->
            <section class="mt-auto w-full text-start">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 w-full max-w-6xl mt-20">
                @include('livewire.includes.FrontBack')
                @include('livewire.includes.ArtisanTinker')
                </section>
                </div>  
                </div>
                @include('livewire.includes.footer')

</div>