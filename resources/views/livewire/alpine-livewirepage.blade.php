<div>
    <div class="relative flex flex-col lg:flex-row items-start justify-start w-full min-h-screen bg-gray-900 text-white px-6">

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


        <div x-data="{ open: false }">
            <!-- Hamburger Button (Visible on mobile) -->
            <button @click="open = !open" class="lg:hidden absolute top-6 left-6 bg-gray-800 text-white p-3 rounded-full shadow-md transition hover:bg-gray-700 hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        
            <!-- Sidebar Navigation -->
            <aside :class="{'translate-x-0': open, '-translate-x-full': !open}" 
                   class="fixed lg:relative inset-0 w-64 bg-gray-800 p-6 rounded-md mb-6 transition-transform transform z-50 lg:w-64 lg:static lg:h-auto lg:flex lg:items-center lg:justify-center">
                
                <!-- Close Button (Visible when sidebar is open) -->
                <button @click="open = false" class="absolute top-4 right-2 bg-gray-800 text-white p-2 rounded-full shadow-md transition hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
        
                <div class="w-full text-center">
                    <h2 class="text-xl font-bold mb-4">Documentation</h2>
                    <nav>
                        <ul>
                            <li class="mb-2"><a wire:navigate href="#livewire" class="text-gray-300 hover:text-white">Livewire</a></li>
                            <li class="mb-2"><a wire:navigate href="#alpine" class="text-gray-300 hover:text-white">Alpine.js</a></li>
                            <li class="mb-2"><a wire:navigate href="#datatables" class="text-gray-300 hover:text-white">Data Tables</a></li>
                        </ul>
                    </nav>
                </div>
            </aside>
        
            <!-- Desktop Sidebar (visible on large screens) -->
            <aside class="hidden lg:block w-64 bg-gray-800 p-6 rounded-md mb-6 lg:mb-0 flex items-center justify-center">
                <div class="w-full text-center">
                    <h2 class="text-xl font-bold mb-4">Documentation</h2>
                    <nav>
                        <ul>
                            <li class="mb-2"><a wire:navigate href="#livewire" class="text-gray-300 hover:text-white">Livewire tips&tricks</a></li>
                            <li class="mb-2"><a wire:navigate href="#alpine" class="text-gray-300 hover:text-white">Alpine.js Components</a></li>
                            <li class="mb-2"><a wire:navigate href="#datatables" class="text-gray-300 hover:text-white">Data Tables</a></li>
                        </ul>
                    </nav>
                </div>
            </aside>
        
       
        </div>
        
        <!-- Main Content -->
        <main class="flex-1 w-full p-6 overflow-y-auto">
            <!-- Breadcrumbs positioned top right on larger screens -->
            <div class="absolute top-6 right-6 floating">
                @include('livewire.includes.Breadcrumbs')
            </div>

            <!-- Livewire Functions -->
            <section id="livewire" class="mb-12">
                @include('livewire.includes.Livewirefunction')
            </section>

            <!-- Alpine.js Components -->
            <section id="alpine" class="mb-12" data-aos-duration="2000" data-aos="fade-up">
                <h2 class="text-2xl font-bold mb-4">Alpine.js Components</h2>
                <p class="text-gray-300">Modal transition ease-out.</p>
                <pre class="bg-gray-800 p-4 mt-4 rounded text-sm overflow-x-auto">
                    &lt;x-transition:enter="transition ease-out duration-300 transform"&gt;
                    &lt; x-transition:enter-start="opacity-0 scale-90"&gt;
                    &lt;x-transition:enter-end="opacity-100 scale-100"&gt;
                    &lt;x-transition:leave="transition ease-in duration-200 transform"&gt;
                    &lt;x-transition:leave-start="opacity-100 scale-100"&gt;
                    &lt;x-transition:leave-end="opacity-0 scale-90"&gt;
                </pre>
            </section>

            <!-- Alpine.js Info Section -->
            <section id="alpine-info" class="mb-12" data-aos-duration="2000" data-aos="fade-up">
                <h2 class="text-2xl font-bold mb-4">Simple. Lightweight. Powerful as hell.</h2>
                <pre class="bg-gray-800 p-4 mt-4 rounded text-sm overflow-x-auto">
                    <p>
                    x-cloak
                    Hide a block of HTML until after Alpine is finished initializing its content
                    </p>
                    <div class="text-blue-500">
                        &lt;div x-cloak&gt;
                        ...
                        &lt;/div&gt;
                    </div>
                    <p>
                    x-ignore
                    Prevent a block of HTML from being initialized by Alpine
                    </p>
                    <div class="text-blue-500">
                        &lt;div x-ignore&gt;
                        ...
                        &lt;/div&gt;
                    </div>
                </pre>
            </section>

            <!-- DataTables Section -->
            <section id="datatables" class="mb-12">
                <h2 class="text-2xl font-bold mb-4">Data Tables</h2>
                <p class="text-gray-300">
                    Using DataTables for dynamic tables with sorting, searching, and pagination.
                </p>

                <div x-data="{ showAll: false }">
                    <pre 
                        class="bg-gray-800 p-4 mt-4 rounded text-sm overflow-x-auto transition-all duration-300"
                        :class="showAll ? 'max-h-full' : 'max-h-32 overflow-hidden'">
                        @include('livewire.includes.datatable-sourcecode')
                    </pre>
                    
                    <button 
                        @click="showAll = !showAll" 
                        class="mt-2 text-blue-400 hover:underline focus:outline-none">
                        <span x-text="showAll ? 'Show Less' : 'Show More'"></span>
                    </button>
                </div>
            </section>
        </main>
    </div>

    @include('livewire.includes.footer')
</div>
