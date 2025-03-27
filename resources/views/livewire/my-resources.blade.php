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

<!-- Two Column Layout -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 w-full max-w-6xl mt-20">
    
    <!-- Column 1: Database Flow Chart -->
    <div class="flex flex-col items-center space-y-16">
        
        <!-- USERS -->
        <div x-data="{ hover: false }" 
            @mouseenter="hover = true" @mouseleave="hover = false" 
            class="transition-all duration-300 flex flex-col items-center"
            :class="{ 'scale-110': hover }">
            <img src="/icon/entities.PNG" alt="Users" 
                class="max-w-full h-auto rounded-md">
            <svg width="50" height="80">
                <line x1="25" y1="10" x2="25" y2="70" stroke="white" stroke-width="5" marker-end="url(#arrow)" />
            </svg>
        </div>

        <!-- PETS -->
        <div x-data="{ hover: false }" 
            @mouseenter="hover = true" @mouseleave="hover = false" 
            class="transition-all duration-300 flex flex-col items-center"
            :class="{ 'scale-110': hover }">
            <img src="/icon/attributes.PNG" alt="Pets" 
                class="max-w-full h-auto rounded-md">
            <svg width="50" height="80">
                <line x1="25" y1="10" x2="25" y2="70" stroke="white" stroke-width="5" marker-end="url(#arrow)" />
            </svg>
        </div>

        <!-- APPOINTMENTS -->
        <div x-data="{ hover: false }" 
            @mouseenter="hover = true" @mouseleave="hover = false" 
            class="transition-all duration-300 flex flex-col items-center"
            :class="{ 'scale-110': hover }">
            <img src="/icon/attributesvalue.PNG" alt="Appointments" 
                class="max-w-full h-auto rounded-md">
        </div>

    </div>

    <!-- Column 2: Mockup Code (Aligned in a Vertical List) -->
    <div class="flex flex-col items-center space-y-25">

        <div class="mockup-code w-full max-w-lg mt-5">
            <pre data-prefix="$"><code>
                // Create Entities Table
                Schema::create('entities', function (Blueprint $table) {
                    $table->id();
                    $table->enum('entity_type', ['Product', 'Customer', 'Order']);
                    $table->string('name');
                    $table->text('description')->nullable();
                    $table->timestamps();
                });
            </code></pre>
        </div>

        <div class="mockup-code w-full max-w-lg mt-20">
            <pre data-prefix="$"><code>
                // Create Attributes Table
                Schema::create('attributes', function (Blueprint $table) {
                 $table->id();
                 $table->string('name');
                 $table->enum('data_type', ['string', 'integer', 'decimal', 'boolean', 'date']);
                 $table->enum('entity_type', ['Product', 'Customer', 'Order']);
                 $table->timestamps();
             });    
            </code></pre>
        </div>

        <div class="mockup-code w-full max-w-lg">
            <pre data-prefix="$"><code>  Schema::create('attribute_values', function (Blueprint $table) {
                $table->id();
                $table->foreignId('entity_id')->constrained('entities')->onDelete('cascade');
                $table->foreignId('attribute_id')->constrained('attributes')->onDelete('cascade');
                $table->text('value');
                $table->timestamps();
            });</code></pre>
        </div>

    </div>

</div>

<!-- Arrow Definition -->
<svg class="absolute hidden">
    <defs>
        <marker id="arrow" markerWidth="12" markerHeight="12" refX="9" refY="3" orient="auto" markerUnits="strokeWidth">
            <path d="M0,0 L0,6 L9,3 z" fill="white" />
        </marker>
    </defs>
</svg>




</div>  

