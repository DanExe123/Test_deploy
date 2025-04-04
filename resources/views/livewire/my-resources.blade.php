
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
                <div class="py-20 flex flex-col items-center text-center">
                    <h1 class="text-4xl font-bold text-white dark:text-white">
                        <span class="text-red-700 text-4xl font-bold tracking-normal">Entity Attribute Value</span> Database Structure
                    </h1>
                    <p class="mt-4 max-w-3xl text-lg text-gray-300">
                        The <strong>Entity-Attribute-Value (EAV)</strong> model is a flexible database design pattern used to store dynamic attributes for entities. 
                        Instead of having fixed columns, attributes are stored as rows, allowing for schema flexibility.
                    </p>
                
                    <div class="mt-6 max-w-3xl text-left md:text-center">
                        <p class="text-xl font-semibold">Benefits:</p>
                        <p class="mt-2"><strong>Highly flexible</strong> – Supports dynamic attributes without altering the schema.</p>
                        <p class="mt-2"><strong>Efficient for sparse data</strong> – Saves storage by only storing relevant attributes.</p>
                        <p class="mt-2"><strong>Ideal for applications with unpredictable fields</strong> (e.g., e-commerce, medical records).</p>
                    </div>
                </div>
                
                
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