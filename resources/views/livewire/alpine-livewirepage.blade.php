
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
  <!-- Sidebar Navigation -->
  <aside class="w-64 bg-gray-800 p-6">
    <h2 class="text-xl font-bold mb-4">Documentation</h2>
    <nav>
        <ul>
            <li class="mb-2"><a href="#livewire" class="text-gray-300 hover:text-white">Livewire tips&tricks</s></a></li>
            <li class="mb-2"><a href="#alpine" class="text-gray-300 hover:text-white">Alpine.js Components</a></li>
            <li class="mb-2"><a href="#datatables" class="text-gray-300 hover:text-white">Data Tables</a></li>
        </ul>
    </nav>
</aside>

<!-- Main Content -->
<main class="flex-1 p-6 overflow-y-auto">
    <!-- Breadcrumbs -->
    <div class="absolute top-6 right-6 floating">
        @include('livewire.includes.Breadcrumbs')
    </div>

        <!-- Livewire Functions -->
        <section id="livewire" class="mb-12">
         @include('livewire.includes.Livewirefunction')
        </section>


                <!-- Alpine.js Components -->
                <section id="alpine" class="mb-12">
                    <h2 class="text-2xl font-bold mb-4">Alpine.js Components</h2>
                    <p class="text-gray-300">Alpine.js is a lightweight JavaScript framework that provides reactive behavior in your HTML.</p>
                    <pre class="bg-gray-800 p-4 mt-4 rounded text-sm overflow-x-auto">
            &lt;div x-data="{ open: false }"&gt;
            &lt;button @click="open = !open"&gt;Toggle&lt;/button&gt;
            &lt;div x-show="open"&gt;Content Here&lt;/div&gt;
            &lt;/div&gt;
                    </pre>
                </section>


                   <!-- Data Tables Section -->
            <section id="datatables" class="mb-12">
                <h2 class="text-2xl font-bold mb-4">Data Tables</h2>
                <p class="text-gray-300">Using DataTables for dynamic tables with sorting, searching, and pagination.</p>
             
                </pre>
            </section>





               
            </main>
            </div>

@include('livewire.includes.footer')

</div>