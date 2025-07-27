<div class="relative flex flex-col items-center justify-center min-h-screen bg-gray-900 text-white px-6 py-12" >
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

            <div class="absolute top-7 right-6 floating">
                @include('livewire.includes.Breadcrumbs')
            </div>       
  
    <h1 class="text-3xl sm:text-4xl font-bold text-white mb-6 text-center">
        My Development Tools
    </h1>
    
    <p class="text-gray-300 text-center max-w-2xl mb-10">
        These are the essential tools I use for UI  to build seamless and interactive applications.
    </p>

    <!-- Grid Container (3 Columns) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6" data-aos-duration="3000" data-aos="fade-up">

             <!-- PHOSHPOR Flip Card -->
             <div x-data="{ flipped: false }" 
             @mouseenter="flipped = true" 
             @mouseleave="flipped = false" 
             class="relative w-full h-64 perspective">
            <div class="w-full h-full transition-transform duration-500 transform-style-3d"
                 :class="{ 'rotate-y-180': flipped }">
                 
           <!-- Tool 1 -->
           <div class="mockup-browser bg-base-300 border">
               <div class="mockup-browser-toolbar">
                   <div class="input text-black">https://phosphoricons.com/?weight=bold</div>
               </div>
               <div class="bg-base-200 flex justify-center">
                   <img 
                       src="/icon/test.jpg" 
                       alt="Tailwind CSS" 
                       class="max-w-full h-auto rounded-lg shadow-lg"
                   >
               </div>
           </div>
       </div>
   </div>
       
        <!-- Alpine.js Flip Card -->
          <div x-data="{ flipped: false }" 
          @mouseenter="flipped = true" 
          @mouseleave="flipped = false" 
          class="relative w-full h-64 perspective">
         <div class="w-full h-full transition-transform duration-500 transform-style-3d"
              :class="{ 'rotate-y-180': flipped }">
              
        <!-- Tool 1 -->
        <div class="mockup-browser bg-base-300 border">
            <div class="mockup-browser-toolbar">
                <div class="input text-black">https://tailwindcss.com/docs/text-wrap</div>
            </div>
            <div class="bg-base-200 flex justify-center">
                <img 
                    src="/icon/tailwindcssbrowser.PNG" 
                    alt="Tailwind CSS" 
                    class="max-w-full h-auto rounded-lg shadow-lg"
                >
            </div>
        </div>
    </div>
</div>


        <!-- Tool 2 -->
        <div x-data="{ flipped: false }" 
        @mouseenter="flipped = true" 
        @mouseleave="flipped = false" 
        class="relative w-full h-64 perspective">
       <div class="w-full h-full transition-transform duration-500 transform-style-3d"
            :class="{ 'rotate-y-180': flipped }">
        <div class="mockup-browser bg-base-300 border">
            <div class="mockup-browser-toolbar">
                <div class="input text-black">https://www.freepik.com/free-vector/credit-card-landing-page-payment-concept_5568517.htm#fromView=search&page=1&position=3&uuid=0b9965b0-6e1b-42f2-a293-b4125852771a</div>
            </div>
            <div class="bg-base-200 flex justify-center">
                <img 
                    src="/icon/freepikbrowser.PNG" 
                    alt="Laravel" 
                    class="max-w-full h-auto rounded-lg shadow-lg"
                >
            </div>
        </div>
       </div>
    </div>

        <!-- Tool 3 -->
        <div x-data="{ flipped: false }" 
        @mouseenter="flipped = true" 
        @mouseleave="flipped = false" 
        class="relative w-full h-64 perspective">
       <div class="w-full h-full transition-transform duration-500 transform-style-3d"
            :class="{ 'rotate-y-180': flipped }">
        <div class="mockup-browser bg-base-300 border">
            <div class="mockup-browser-toolbar">
                <div class="input text-black">https://michalsnik.github.io/aos/</div>
            </div>
            <div class="bg-base-200 flex justify-center">
                <img 
                    src="/icon/aosbrowserbrowser.PNG" 
                    alt="Livewire" 
                    class="max-w-full h-auto rounded-lg shadow-lg"
                >
            </div>
        </div>
       </div>
    </div>

        
        <!-- Tool 4 -->
        <div x-data="{ flipped: false }" 
        @mouseenter="flipped = true" 
        @mouseleave="flipped = false" 
        class="relative w-full h-64 perspective">
       <div class="w-full h-full transition-transform duration-500 transform-style-3d"
            :class="{ 'rotate-y-180': flipped }">
        <div class="mockup-browser bg-base-300 border">
            <div class="mockup-browser-toolbar">
                <div class="input text-black">https://daisyui.com/components/mockup-browser/</div>
            </div>
            <div class="bg-base-200 flex justify-center">
                <img 
                    src="/icon/daisyuibrowser.PNG" 
                    alt="Laravel" 
                    class="max-w-full h-auto rounded-lg shadow-lg"
                >
            </div>
        </div>
       </div>
        </div>
        
        <!-- Tool 5 -->
        <div x-data="{ flipped: false }" 
        @mouseenter="flipped = true" 
        @mouseleave="flipped = false" 
        class="relative w-full h-64 perspective">
       <div class="w-full h-full transition-transform duration-500 transform-style-3d"
            :class="{ 'rotate-y-180': flipped }">
        <div class="mockup-browser bg-base-300 border">
            <div class="mockup-browser-toolbar">
                <div class="input text-black">https://app.spline.design/community</div>
            </div>
            <div class="bg-base-200 flex justify-center">
                <img 
                    src="/icon/splinebrowser.PNG" 
                    alt="Laravel" 
                    class="max-w-full h-auto rounded-lg shadow-lg"
                >
            </div>
        </div>
       </div>
        </div>

        
        <!-- Tool 6 -->
        <div x-data="{ flipped: false }" 
        @mouseenter="flipped = true" 
        @mouseleave="flipped = false" 
        class="relative w-full h-64 perspective">
       <div class="w-full h-full transition-transform duration-500 transform-style-3d"
            :class="{ 'rotate-y-180': flipped }">
        <div class="mockup-browser bg-base-300 border">
            <div class="mockup-browser-toolbar">
                <div class="input text-black">https://heroicons.com/</div>
            </div>
            <div class="bg-base-200 flex justify-center">
                <img 
                    src="/icon/heroiconsbrowser.PNG" 
                    alt="Laravel" 
                    class="max-w-full h-auto rounded-lg shadow-lg"
                >
            </div>
        </div>
       </div>
        </div>


        
        <!-- Tool 7 -->
        <div x-data="{ flipped: false }" 
        @mouseenter="flipped = true" 
        @mouseleave="flipped = false" 
        class="relative w-full h-64 perspective">
       <div class="w-full h-full transition-transform duration-500 transform-style-3d"
            :class="{ 'rotate-y-180': flipped }">
        <div class="mockup-browser bg-base-300 border">
            <div class="mockup-browser-toolbar">
                <div class="input text-black">https://livewire.laravel.com/</div>
            </div>
            <div class="bg-base-200 flex justify-center">
                <img 
                    src="/icon/livewirebrowser.PNG" 
                    alt="Laravel" 
                    class="max-w-full h-auto rounded-lg shadow-lg"
                >
            </div>
        </div>
       </div>
        </div>

        
        <!-- Tool 2 -->
        <div x-data="{ flipped: false }" 
        @mouseenter="flipped = true" 
        @mouseleave="flipped = false" 
        class="relative w-full h-64 perspective">
       <div class="w-full h-full transition-transform duration-500 transform-style-3d"
            :class="{ 'rotate-y-180': flipped }">
        <div class="mockup-browser bg-base-300 border">
            <div class="mockup-browser-toolbar">
                <div class="input text-black">https://www.penguinui.com/</div>
            </div>
            <div class="bg-base-200 flex justify-center">
                <img 
                    src="/icon/penguinuibrowser.PNG" 
                    alt="Laravel" 
                    class="max-w-full h-auto rounded-lg shadow-lg"
                >
            </div>
        </div>
       </div>
        </div>

        
        <!-- Tool 2 -->
        <div x-data="{ flipped: false }" 
        @mouseenter="flipped = true" 
        @mouseleave="flipped = false" 
        class="relative w-full h-64 perspective">
       <div class="w-full h-full transition-transform duration-500 transform-style-3d"
            :class="{ 'rotate-y-180': flipped }">
        <div class="mockup-browser bg-base-300 border">
            <div class="mockup-browser-toolbar">
                <div class="input text-black">https://getwaves.io/</div>
            </div>
            <div class="bg-base-200 flex justify-center">
                <img 
                    src="/icon/getwavesbrowser.PNG" 
                    alt="Laravel" 
                    class="max-w-full h-auto rounded-lg shadow-lg"
                >
            </div>
        </div>
       </div>
        </div>

        
        <!-- Tool 2 -->
        <div x-data="{ flipped: false }" 
        @mouseenter="flipped = true" 
        @mouseleave="flipped = false" 
        class="relative w-full h-64 perspective">
       <div class="w-full h-full transition-transform duration-500 transform-style-3d"
            :class="{ 'rotate-y-180': flipped }">
        <div class="mockup-browser bg-base-300 border">
            <div class="mockup-browser-toolbar">
                <div class="input text-black">https://lottiefiles.com/</div>
            </div>
            <div class="bg-base-200 flex justify-center">
                <img 
                    src="/icon/lottiefilesbrowser.PNG" 
                    alt="Laravel" 
                    class="max-w-full h-auto rounded-lg shadow-lg"
                >
            </div>
        </div>
       </div></div>


    </div>
    
    <style>
        .perspective {
            perspective: 1000px;
        }
        .transform-style-3d {
            transform-style: preserve-3d;
        }
        .rotate-y-180 {
            transform: rotateY(180deg);
        }
        .backface-hidden {
            backface-visibility: hidden;
        }
    </style>
</div>
