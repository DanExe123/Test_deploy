<!-- Menu Items -->
<div 
    x-data="{ tooltip: '', show: false, x: 0 }"
    x-show="open" 
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    @click.away="open = false" 
    class="absolute bottom-0 left-20 mr-2 bg-gray-800 shadow-lg rounded-lg p-4"
>
    <nav class="flex space-x-6 relative">

        <!-- Tooltip Message -->
        <div 
            x-show="show" 
            x-transition 
            x-text="tooltip"
            class="absolute -top-10 text-sm bg-black text-white px-3 py-1 rounded shadow-lg whitespace-nowrap"
            :style="`left: ${x}px`"
        ></div>

        <!-- Home -->
        <a wire:navigate.prevent href="{{ route('home') }}" 
           class="relative text-white font-semibold text-lg transition-all duration-300 hover:text-red-200"
           @mouseenter="tooltip = 'Back to Home'; show = true; $nextTick(() => x = $event.target.offsetLeft)"
           @mouseleave="show = false">
           <x-phosphor.icons::bold.arrow-circle-left class="w-7 h-7" />          
        </a>

        <!-- About -->
        <a wire:navigate.prevent href="{{ route('about') }}" 
           class="relative text-white font-semibold text-lg transition-all duration-300 hover:text-red-400"
           @mouseenter="tooltip = 'About my info'; show = true; $nextTick(() => x = $event.target.offsetLeft)"
           @mouseleave="show = false">
           <x-phosphor.icons::bold.info class="w-7 h-7" />         
        </a>

        <!-- Projects -->
        <a wire:navigate.prevent href="{{ route('projects') }}" 
           class="relative text-white font-semibold text-lg transition-all duration-300 hover:text-red-400"
           @mouseenter="tooltip = 'My projects'; show = true; $nextTick(() => x = $event.target.offsetLeft)"
           @mouseleave="show = false">
           <x-phosphor.icons::bold.laptop class="w-7 h-7" />
        </a>

        <!-- Contact -->
        <a wire:navigate.prevent href="{{ route('contact') }}" 
           class="relative text-white font-semibold text-lg transition-all duration-300 hover:text-red-400"
           @mouseenter="tooltip = 'Contact me and collab'; show = true; $nextTick(() => x = $event.target.offsetLeft)"
           @mouseleave="show = false">
           <x-phosphor.icons::bold.mailbox class="w-7 h-7" />         
        </a>

        <!-- Technologies -->
        <a wire:navigate.prevent href="{{ route('technologies') }}" 
           class="relative text-white font-semibold text-lg transition-all duration-300 hover:text-red-400"
           @mouseenter="tooltip = 'These are my tools'; show = true; $nextTick(() => x = $event.target.offsetLeft)"
           @mouseleave="show = false">
           <x-phosphor.icons::bold.toolbox class="w-7 h-7" /> 
        </a>

    </nav>
</div>