
    <div class="absolute top-10 left-0 w-full h-full overflow-hidden">
      <div class="cloud absolute top-[60px] left-3/4 w-40 h-24 bg-white opacity-60 rounded-full blur-lg animate-cloud-move"></div>
      
      <div class="cloud absolute top-40 left-1/2 w-40 h-24 bg-white opacity-60 rounded-full blur-lg animate-cloud-move"></div>
        <div class="cloud absolute top-[80px] left-[85%] w-36 h-22 bg-white opacity-50 rounded-full blur-lg animate-cloud-move"></div>  
    </div>
    <div class="space-y-6" data-aos-duration="3000"  data-aos="fade-up">
 

    <!-- style clouds --> 
    <style>
        @keyframes cloud-move {
            0% { transform: translateX(-100px); opacity: 0.5; }
            50% { opacity: 0.8; }
            100% { transform: translateX(100vw); opacity: 0.5; }
        }
    
        .animate-cloud-move {
            animation: cloud-move 20s linear infinite;
        }
    </style>
<!-- content -->
<div x-data="{ message: '', show: false, x: 0, showImage: false }" class="relative inline-block">
  <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold">
    Hello, I'm 
    <span 
      @mouseenter="showImage = true" 
      @mouseleave="showImage = false" 
      class="text-blue-600 relative cursor-pointer"
    >
      Dan
      <!-- Hover Image -->
      <div 
        x-show="showImage" 
        x-transition 
        class="absolute -top-36 left-1/2 -translate-x-1/2 w-32 h-32 rounded-full border-4 border-white shadow-lg z-50"
      >
        <img 
          src="/icon/dan.jpg" 
          alt="Dan Hover Image" 
          class="w-full h-full object-cover rounded-full"
        >
      </div>
    </span>
    <br> 
    a <span class="text-red-600">
      <span 
        class="text-red-600 inline-block cursor-pointer"
        @mouseenter="message = 'Tailwind CSS'; show = true; $nextTick(() => x = $event.target.offsetLeft)" 
        @mouseleave="show = false"
      >T</span><span 
        class="text-red-600 inline-block cursor-pointer"
        @mouseenter="message = 'Alpine.js'; show = true; $nextTick(() => x = $event.target.offsetLeft)" 
        @mouseleave="show = false"
      >A</span><span 
        class="text-red-600 inline-block cursor-pointer"
        @mouseenter="message = 'Laravel'; show = true; $nextTick(() => x = $event.target.offsetLeft)" 
        @mouseleave="show = false"
      >L</span><span 
        class="text-red-600 inline-block cursor-pointer"
        @mouseenter="message = 'Livewire'; show = true; $nextTick(() => x = $event.target.offsetLeft)" 
        @mouseleave="show = false"
      >L</span> Stack Developer
    </span>
  </h1>
  
  <!-- Tooltip -->
  <div 
    x-show="show" 
    x-transition 
    class="absolute text-sm bg-black text-white rounded px-2 py-1 shadow-lg whitespace-nowrap"
    :style="`top: 100%; left: ${x}px`" 
    x-text="message"
  ></div>
</div>

<p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-300 mt-4">
  <i class="fa-solid fa-code text-cyan-400"></i> Passionate about building modern & scalable web applications.
</p>
    </div>


   