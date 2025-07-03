<div class="flex flex-col  items-center mt-5 text-center" data-aos-duration="3000" data-aos="fade-up">
  <p class="text-gray-300 max-w-lg mb-3">
    "These resources have helped me develop my skills and learn, enabling me to build seamless and interactive applications.
    They also serve as my reviewer whenever my brain needs a refresh."
  </p>

  <div class="flex justify-between gap-2">
    <div class="flex justify-between">
      <a wire:navigate.prevent href="{{ route('my-resources') }}" 
         class="flex items-center gap-2 bg-red-600 text-white text-[13px] font-bold py-2 px-6 rounded-full shadow-lg transition duration-300 tracking-widest border-2 border-transparent 
                hover:bg-transparent hover:border-red-600 hover:text-white">
        
        <x-phosphor.icons::bold.books class="w-5 h-5" />
        <span>Resources</span> 
      </a>
    </div>    

    <a wire:navigate.prevent href="https://kodigoui.laravel.cloud/" target="blank"
    class="flex items-center gap-2  text-white text-[13px] font-bold py-2 px-6 rounded-full shadow-lg transition duration-300 tracking-widest border border-indigo-700 
             hover:bg-indigo-300 hover:text-white">
   
   <x-phosphor.icons::bold.browser class="w-5 h-5" />
   <span>Visit my KodigoUI</span> 
 </a>
</div> 
</div>
</div>
