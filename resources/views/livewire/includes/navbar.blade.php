<!-- Menu Items (Moved to Left) -->
<div 
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
    <nav class="flex space-x-6">
        <!-- Home -->
        <a wire:navigate.prevent href="{{ route('home') }}" 
           class="relative text-white font-semibold text-lg transition-all duration-300 hover:text-red-200 
           after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-red-700 hover:after:w-full after:transition-all after:duration-300">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
          </svg>          
        </a>
        <!-- About -->
        <a wire:navigate.prevent href="{{ route('about') }}" 
           class="relative text-white font-semibold text-lg transition-all duration-300 hover:text-red-400 
           after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-red-700 hover:after:w-full after:transition-all after:duration-300">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>          
        </a>
       <!-- Projects (Updated to a new Laptop Icon) -->
       <a wire:navigate.prevent href="{{ route('projects') }}" 
       class="relative text-white font-semibold text-lg transition-all duration-300 hover:text-red-400 
       after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-red-700 hover:after:w-full after:transition-all after:duration-300">
       <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h18v12H3V5zm0 14h18v2H3v-2z"/>
     </svg>
    </a>
    

        <!-- Contact (Updated to Email Icon) -->
        <a wire:navigate.prevent href="{{ route('contact') }}" 
           class="relative text-white font-semibold text-lg transition-all duration-300 hover:text-red-400 
           after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-red-700 hover:after:w-full after:transition-all after:duration-300">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
          </svg>          
        </a>
   <!-- Technologies (Updated to Tools Icon - Wrench & Gear) -->
   <a wire:navigate.prevent href="{{ route('technologies') }}" 
      class="relative text-white font-semibold text-lg transition-all duration-300 hover:text-red-400 
      after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-red-700 hover:after:w-full after:transition-all after:duration-300">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2m0 14v2m-9-9h2m14 0h2M4.93 4.93l1.41 1.41M16.66 16.66l1.41 1.41M3 12a9 9 0 1 1 9 9 9 9 0 0 1-9-9zm12-3a3 3 0 1 1-4 4l-4 4a3 3 0 1 1-4-4l4-4a3 3 0 1 1 4-4z"></path>
      </svg>
   </a>


    </nav>
</div>
