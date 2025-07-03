<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 w-full max-w-6xl mt-20">
        
    <!-- Column 1: Database Flow Chart -->
    <div class="flex flex-col items-center space-y-16">
        <!-- USERS -->
        <div x-data="{ hover: false }" 
            @mouseenter="hover = true" @mouseleave="hover = false" 
            class="transition-all duration-300 flex flex-col items-center"
            :class="{ 'scale-110': hover } "data-aos-duration="2000"  data-aos="fade-right">
            <h1 class="font-bold text-white text-2xl">Entities table</h1>
            <img src="/icon/entities.png" alt="entities" 
                class="max-w-full h-auto rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-24 h-24 text-red-700">
                    <path fill-rule="evenodd" d="M12 2.25a.75.75 0 0 1 .75.75v16.19l2.47-2.47a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 1 1 1.06-1.06l2.47 2.47V3a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                  </svg>  
        </div>

        <!-- PETS -->
        <div x-data="{ hover: false }" 
            @mouseenter="hover = true" @mouseleave="hover = false" 
            class="transition-all duration-300 flex flex-col items-center"
            :class="{ 'scale-110': hover }"data-aos-duration="2000"  data-aos="fade-right">
            <h1 class="font-bold text-white text-2xl">Attributes table</h1>
            <img src="/icon/attributes.png" alt="attributes" 
                class="max-w-full h-auto rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-24 h-24 text-red-700">
                    <path fill-rule="evenodd" d="M12 2.25a.75.75 0 0 1 .75.75v16.19l2.47-2.47a.75.75 0 1 1 1.06 1.06l-3.75 3.75a.75.75 0 0 1-1.06 0l-3.75-3.75a.75.75 0 1 1 1.06-1.06l2.47 2.47V3a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                  </svg>  
        </div>

        <!-- APPOINTMENTS -->
        <div x-data="{ hover: false }" 
            @mouseenter="hover = true" @mouseleave="hover = false" 
            class="transition-all duration-300 flex flex-col items-center "
            :class="{ 'scale-110': hover }"data-aos-duration="2000"  data-aos="fade-right">
            <h1 class="font-bold text-white text-2xl">Attributesvalue table</h1>
            <img src="/icon/attributesvalue.PNG" alt="attributesvalue" 
                class="max-w-full h-auto rounded-md ">
        </div>

    </div>

    <!-- Column 2: Mockup Code (Aligned in a Vertical List) -->
    <div class="flex flex-col items-center space-y-37">

        <div class="mockup-code w-full max-w-lg mt-10 "data-aos-duration="2000"  data-aos="fade-left">
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

        <div class="mockup-code w-full max-w-lg mt-20"data-aos-duration="2000"  data-aos="fade-left" >
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

        <div class="mockup-code w-full max-w-lg" data-aos-duration="2000"  data-aos="fade-left">
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