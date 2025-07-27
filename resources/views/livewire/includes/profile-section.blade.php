<div class="flex flex-col lg:flex-row items-center justify-between px-6 mt-[-4.5rem]">
    <!-- Left: Profile Image & Name -->
    <div class="flex flex-col lg:flex-row items-center lg:items-start lg:space-x-4 text-center lg:text-left w-full lg:w-auto">
      
      <!-- Profile photo -->
      <div class="relative flex justify-center lg:justify-start w-full lg:w-auto">
        <img src="/icon/dan.jpg" alt="Profile"
          class="w-36 h-36 rounded-full border-4 border-white object-cover" />
      </div>
  
      <!-- Alpine Tab Wrapper -->
      <div x-data="{ tab: 'tech' }" class="mt-6 lg:mt-12" x-cloak>
        <!-- Header -->
        <h1 class="text-4xl font-bold py-2">Dan Fred</h1>
  
        <!-- Tabs -->
        <div class="flex items-center justify-center lg:justify-start gap-4 text-sm text-gray-600 mb-2">
          <button 
            @click="tab = 'tech'" 
            :class="{ 'font-bold text-black': tab === 'tech' }"
          >
            15 MyTechnologies
          </button>
          <button 
            @click="tab = 'follow'" 
            :class="{ 'font-bold text-black': tab === 'follow' }"
          >
            2 following
          </button>
        </div>
  
        <!-- Tech Icons -->
        <div class="flex mt-2 flex-wrap justify-center lg:justify-start gap-1" x-show="tab === 'tech'">
          <template x-for="icon in [
            {src: '/icon/composer-removebg-preview.png', alt: 'Composer'},
            {src: '/icon/vscode-removebg-preview.png', alt: 'VSCode'},
            {src: '/icon/xamp-removebg-preview.png', alt: 'XAMPP'},
            {src: '/icon/cmd-removebg-preview.png', alt: 'Command Prompt'},
            {src: '/icon/git-removebg-preview.png', alt: 'Git'},
            {src: '/icon/github-removebg-preview.png', alt: 'GitHub'},
            {src: '/icon/postman-removebg-preview.png', alt: 'Postman'},
            {src: '/icon/laravel-removebg-preview.png', alt: 'Laravel'},
            {src: '/icon/tailwind-removebg-preview.png', alt: 'TailwindCSS'},
            {src: '/icon/daisyui-removebg-preview.png', alt: 'DaisyUI'},
            {src: '/icon/aos-removebg-preview.png', alt: 'AOS Animation'},
            {src: '/icon/reactnative-removebg-preview.png', alt: 'React Native'},
            {src: '/icon/livewire-removebg-preview.png', alt: 'Livewire'},
            {src: '/icon/alpinejs-removebg-preview.png', alt: 'AlpineJS'},
            {src: '/icon/php-removebg-preview.png', alt: 'PHP'}
          ]" :key="icon.alt">
            <img 
              :src="icon.src" 
              :alt="icon.alt"
              :title="icon.alt"
              class="w-8 h-8 rounded-full border-2 border-white object-contain bg-white transition-transform duration-300 transform hover:scale-110"
            />
          </template>
        </div>
  
        <!-- Following Icons -->
        <div class="flex mt-2 flex-wrap gap-2 justify-center lg:justify-start" x-show="tab === 'follow'">
          <img class="w-50 h-20 rounded-lg border-2 border-white object-cover transition-transform duration-300 transform hover:scale-110"  src="/icon/following1.PNG" alt="Composer" title="laravel daily" />
          <img class="w-70 h-20 rounded-lg border-2 border-white object-cover transition-transform duration-300 transform hover:scale-110"  src="/icon/following2.PNG" alt="Composer" title="freecodecamp" />
        </div>
      </div>
    </div>
  
    <!-- Right: Buttons -->
    <div class="flex space-x-2 mt-4 lg:mt-0">
    <a href="{{ route('home') }}">
      <button class="bg-blue-600 text-white text-sm px-4 py-2 rounded-lg font-medium shadow hover:bg-opacity-50 flex justify-start gap-2">
        <x-phosphor.icons::bold.trophy class="w-5 h-5 text-white" />
        My Journey</button></a>
        <a href="{{ asset('icon/danfredcablasresume.pdf') }}" download>
            <button class="bg-gray-200 text-sm px-4 py-2 rounded font-medium shadow text-gray-800 flex justify-start hover:bg-blue-600 gap-1">
                <x-phosphor.icons::bold.download-simple class="w-5 h-5 text-black" />
                CV
            </button>
        </a>        
        <a href="https://github.com/DanExe123" target="_blank" rel="noopener noreferrer">
            <button class="bg-gray-200 text-sm px-4 py-2 rounded font-medium shadow text-gray-800 flex items-center hover:bg-blue-600 gap-1">
              <img class="w-5 h-5 rounded-lg object-cover" src="/icon/github-removebg-preview.png" alt="GitHub" title="GitHub" />
              Github
            </button>
          </a>
          
    </div>
  </div>