<div class="bg-white px-0 md:px-10" x-cloak>
    <div class="relative w-full h-99 bg-cover bg-center bg-no-repeat  bg-[url('/icon/bgphoto.jpg')] rounded-b-lg mb-5 px-5 pb-5  ">
        <div class="absolute inset-0 bg-black/60 rounded-lg"></div>
        <!-- Cover edit button -->
        <div class="absolute bottom-2 right-4">
          <button class="bg-white text-sm px-3 py-1 rounded-lg shadow text-gray-700 border border-gray-300">
          <span class="flex justify-start gap-2 py-1 font-bold"> 
            <x-phosphor.icons::bold.camera class="w-5 h-5 text-black" />
            My cover photo
        </span>
          </button>
        </div>
      </div>
      
      <!-- Profile section -->
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
  
  <hr class="mx-12 mt-10">
<!-- Alpine Tabs Wrapper -->
<div x-data="{ tab: 'posts' }">

    <!-- Navigation Tabs -->
    <div class="flex justify-center lg:justify-start px-6 mt-6 overflow-x-auto scrollbar-hide">
      <nav class="flex space-x-6 text-gray-600 text-sm font-medium border-b w-full">
        <button @click="tab = 'posts'" :class="tab === 'posts' ? 'pb-2 border-b-2 border-blue-600 text-blue-600' : 'pb-2 hover:text-blue-600 hover:border-b-2 hover:border-blue-600'">Posts</button>
        <button @click="tab = 'about'" :class="tab === 'about' ? 'pb-2 border-b-2 border-blue-600 text-blue-600' : 'pb-2 hover:text-blue-600 hover:border-b-2 hover:border-blue-600'">About</button>
        <button @click="tab = 'client'" :class="tab === 'client' ? 'pb-2 border-b-2 border-blue-600 text-blue-600' : 'pb-2 hover:text-blue-600 hover:border-b-2 hover:border-blue-600'">ClientProjects</button>
        <button @click="tab = 'photos'" :class="tab === 'photos' ? 'pb-2 border-b-2 border-blue-600 text-blue-600' : 'pb-2 hover:text-blue-600 hover:border-b-2 hover:border-blue-600'">Photos</button>
        <button @click="tab = 'personal'" :class="tab === 'personal' ? 'pb-2 border-b-2 border-blue-600 text-blue-600' : 'pb-2 hover:text-blue-600 hover:border-b-2 hover:border-blue-600'">MyPersonalProject</button>
        <button @click="tab = 'internship'" :class="tab === 'internship' ? 'pb-2 border-b-2 border-blue-600 text-blue-600' : 'pb-2 hover:text-blue-600 hover:border-b-2 hover:border-blue-600'">Internship</button>
      </nav>
    </div>
  
    <!-- Grid Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 px-5 mt-6">
      
      <!-- Left Column -->
      <div class="col-span-1 space-y-6">
        <!-- Intro -->
        <div class="bg-white p-4 rounded shadow">
          <h2 class="font-bold text-lg">Intro</h2>
          <p class="mt-2 text-[#050505] text-[15px] leading-snug font-normal">
            This portfolio is inspired by the Facebook profile layout. Hello, I'm <span class="font-medium">Dan Fred</span>, a freshgrad with freelance web developer experienced. I gained real-world project experience during my internship at <span class="font-medium">DevTeam Outsourcing Inc.</span>
          </p>
          <div class="py-2">
            <button class="bg-gray-200 text-black w-full text-sm px-4 py-2 rounded-lg font-medium shadow hover:bg-gray-300 flex justify-center gap-2">
           Edit Bio
            </button>
          </div>
          <div class="flex items-center gap-2 py-2">
            <x-phosphor.icons::bold.suitcase-simple class="w-5 h-5 text-gray-500" />
            <div class="flex items-baseline gap-1">
              <span class="text-gray-700 font-medium">Internship:</span>
              <span class="text-[#050505] text-[15px] leading-snug font-bold">DevTeamOutsourcing</span>
            </div>
          </div>
          <div class="flex items-center gap-2 py-2">
            <x-phosphor.icons::bold.graduation-cap class="w-5 h-5 text-gray-500" />
            <div class="flex items-baseline gap-1">
              <span class="text-gray-700 font-medium">Went to:</span>
              <span class="text-[#050505] text-[15px] leading-snug font-bold">STI WNU</span>
            </div>
          </div>
          <div class="flex items-center gap-2 py-2">
            <x-phosphor.icons::bold.house-line class="w-5 h-5 text-gray-500" />
            <div class="flex items-baseline gap-1">
              <span class="text-gray-700 font-medium">Lives in:</span>
              <span class="text-[#050505] text-[15px] leading-snug font-bold">Bacolod City</span>
            </div>
          </div>
                </div>
  
        <!-- Photos -->
        <div x-data="{ showModal: false, imageSrc: '' }" class="bg-white p-4 rounded shadow relative">
            <h2 class="font-semibold text-lg">Photos</h2>
          
            <div class="grid grid-cols-3 gap-2 mt-2">
              <template x-for="src in ['/icon/dan.jpg', '/icon/devteam1.jpg', '/icon/devteam.jpg']" :key="src">
                <img 
                  :src="src" 
                  @click="imageSrc = src; showModal = true" 
                  class="w-full h-20 object-cover rounded cursor-pointer hover:opacity-80 transition" 
                />
              </template>
            </div>
          
            <!-- Image Modal -->
            <div 
              x-show="showModal" 
              x-transition 
              class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50"
              @click.away="showModal = false"
            >
              <div class="max-w-3xl w-full px-4">
                <img :src="imageSrc" class="w-full rounded shadow-lg border-4 border-white" />
                <button 
                  @click="showModal = false" 
                  class="absolute top-4 right-4 text-white text-2xl font-bold"
                >&times;</button>
              </div>
            </div>
          </div>

           <!-- Projects -->
        <div x-data="{ showModal: false, imageSrc: '' }" class="bg-white p-4 rounded shadow relative">
            <h2 class="font-semibold text-lg">Projects</h2>
          
            <div class="grid grid-cols-3 gap-2 mt-2">
              <template x-for="src in ['/icon/Capture.PNG', '/icon/chomehearts.PNG', '/icon/ecommerce.PNG', '/icon/abouts.PNG' ,'/icon/bplks.jpg', '/icon/kodigu.jpg', '/icon/inventory.jpg' ]" :key="src">
                <img 
                  :src="src" 
                  @click="imageSrc = src; showModal = true" 
                  class="w-full h-20 object-cover rounded cursor-pointer hover:opacity-80 transition" 
                />
              </template>
            </div>
          
            <!-- Image Modal -->
            <div 
              x-show="showModal" 
              x-transition 
              class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50"
              @click.away="showModal = false"
            >
              <div class="max-w-3xl w-full px-4">
                <img :src="imageSrc" class="w-full rounded shadow-lg border-4 border-white" />
                <button 
                  @click="showModal = false" 
                  class="absolute top-4 right-4 text-white text-2xl font-bold"
                >&times;</button>
              </div>
            </div>
          </div>
      </div>
  
      <!-- Right Column -->
      <div class="col-span-1 lg:col-span-3 space-y-4">
        <!-- Post Composer -->
        <div class="bg-white p-4 rounded shadow">
            <div class="flex justify-start gap-2">
            <img src="/icon/dan.jpg" alt="Profile"
            class="w-12 h-12 rounded-full border-4 border-white object-cover" />
          <input type="text" placeholder="What's on your mind?" class="w-full p-2 border rounded-lg bg-gray-100" />
            </div>
          <div class="flex space-x-4 mt-3">
            <div class="flex items-center gap-2">
                <x-phosphor.icons::bold.video-camera class="w-5 h-5 text-red-600" />
                <button class="text-gray-700 font-medium">Live video</button>
              </div>
              <div class="flex items-center gap-2">
                <x-phosphor.icons::bold.images-square class="w-5 h-5 text-green-600" />
            <button class="text-gray-700">Photo/Video</button>
              </div>
          </div>
          <hr class="my-2">
        </div>
  
        <div x-show="tab === 'about'" x-cloak>
            <div x-data="projectLike('aboutSection')" class="bg-white p-4 rounded shadow">
              <p class="text-sm text-gray-500">Dan Fred · About</p>
              <h2 class="text-4xl font-bold text-gray-700">Hey, I'm Dan Fred P Cablas</h2>
          
              <p class="text-gray-700 leading-relaxed mt-2">
                I'm a TALL Stack developer, graduated from <strong>STI WEST NEGROS UNIVERSITY</strong>.
              </p>
          
              <p class="text-gray-700 leading-relaxed mt-2">
                I started learning Laravel by watching tutorials and with the guidance of my teacher, who helped me understand how to become a Laravel developer. Through hands-on practice, I improved my problem-solving skills, especially in handling logical operations and database management. 
              </p>
          
              <p class="text-gray-700 leading-relaxed mt-2">
                One of the most important lessons I’ve learned in Laravel is to <strong>follow best practices</strong>, such as using Eloquent relationships efficiently, structuring controllers properly, and optimizing queries for performance. Debugging and troubleshooting became easier as I worked on real-world projects, and I developed a mindset of <strong>writing clean, maintainable code</strong>. My advice to aspiring Laravel developers is to <strong>build small projects first</strong>, explore Laravel’s documentation, and never stop learning.
              </p>
          
              <p class="text-gray-700 leading-relaxed mt-2">
                I started learning the TALL Stack during my internship at <strong>DevTem Outsourcing Inc</strong>, an e-commerce development company. It was a valuable experience where I gained real-world exposure, learned practical techniques, and strengthened my development skills by contributing to actual projects. I'm truly grateful for the opportunity.
              </p>
               <!-- Like Button -->
               <div class="mt-3 flex items-center gap-2">
                <button @click="toggleLike" class="flex items-center text-gray-600 hover:text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 
                    6.5 3.5 5 5.5 5c1.54 0 3.04.99 
                    3.57 2.36h1.87C13.46 5.99 14.96 5 
                    16.5 5 18.5 5 20 6.5 20 
                    8.5c0 3.78-3.4 6.86-8.55 
                    11.54L12 21.35z"/>
                </svg>
                <span class="ml-1 text-sm" x-text="likes"></span>
                </button>
                <span class="text-xs text-gray-500">people liked this</span>
            </div>
            </div>
          </div>
          
  
          <div x-show="tab === 'client'" x-cloak class="space-y-8">
            <div x-data="projectLike('clientSection')" class="bg-white p-4 rounded shadow">
                <p class="text-gray-700 font-bold mb-4">Client Projects</p>
                <p class="text-gray-500 font-bold mb-4 text-xs">Posted : June 2 2025</p>
                <p class="text-sm text-gray-600 mb-4">
                    This project was developed for a <span class="font-medium">freelance company client</span>. 
                    We built the system as a team with my classmates, and I handled both the 
                    <span class="font-medium text-gray-800">front-end and back-end development</span>. 
                    The system includes modules for <span class="font-medium">sales monitoring, supplier management</span>, 
                    and <span class="font-medium">inventory tracking</span>. 
                    It was a valuable experience collaborating with a real client and applying full-stack development in a production-ready system.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Project 1 -->
                    <div class="text-center">
                        <img src="/icon/inventory.jpg" alt="Inventory with sales monitoring" class="rounded-lg shadow-md w-full h-48 object-cover transition-transform duration-300 transform hover:scale-110">
                        <p class="text-sm mt-2 font-medium text-gray-700">ERP Inventory with sales monitoring</p>
                        <p class="text-xs text-gray-500">Tall Stack. (client project).</p>
                    </div>
                </div>
            
                <!-- Like Button -->
                <div class="mt-5 flex items-center gap-2">
                    <button @click="toggleLike" class="flex items-center text-gray-600 hover:text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 
                                     2 6.5 3.5 5 5.5 5c1.54 0 3.04.99 
                                     3.57 2.36h1.87C13.46 5.99 14.96 5 
                                     16.5 5 18.5 5 20 6.5 20 8.5c0 
                                     3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                        <span class="ml-1 text-sm" x-text="likes"></span>
                    </button>
                    <span class="text-xs text-gray-500">people liked this</span>
                </div>
            </div>

            <div x-data="projectLike('clientSection')" class="bg-white p-4 rounded shadow">
                <p class="text-gray-700 font-bold mb-4">Client Projects</p>
                <p class="text-gray-500 font-bold mb-4 text-xs">Posted : June 2 2025</p>
                <p class="text-sm text-gray-600 mb-4">
                    These projects are part of our thesis. I worked as the <span class="font-medium text-gray-800">front-end developer</span>.
                    For privacy reasons, the actual images are not shown. This phase was truly challenging, but it helped me a lot in problem-solving and understanding programming logic — definitely a struggle, but worth it.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- Project 1 -->
                    <div class="text-center">
                        <img src="/icon/unavailable-rubber-grunge-stamp-seal-illustration-vector.jpg" alt="FinTrack: Smart Expense Management System" class="rounded-lg shadow-md w-full h-48 object-cover transition-transform duration-300 transform hover:scale-110">
                        <p class="text-sm mt-2 font-medium text-gray-700">FinTrack: Smart Expense Management System</p>
                        <p class="text-xs text-gray-500">A Laravel and Ajax. (client project).</p>
                    </div>
            
                    <!-- Project 2 -->
                    <div class="text-center">
                        <img src="/icon/unavailable-rubber-grunge-stamp-seal-illustration-vector.jpg" alt="Digital Complaint Filing System" class="rounded-lg shadow-md w-full h-48 object-cover transition-transform duration-300 transform hover:scale-110">
                        <p class="text-sm mt-2 font-medium text-gray-700">Digital Complaint Filing System</p>
                        <p class="text-xs text-gray-500">A digital complaint filing using jQuery, Ajax, TailwindCSS, Laravel (client project).</p>
                    </div>
                </div>
            
                <!-- Like Button -->
                <div class="mt-5 flex items-center gap-2">
                    <button @click="toggleLike" class="flex items-center text-gray-600 hover:text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 
                                     2 6.5 3.5 5 5.5 5c1.54 0 3.04.99 
                                     3.57 2.36h1.87C13.46 5.99 14.96 5 
                                     16.5 5 18.5 5 20 6.5 20 8.5c0 
                                     3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                        <span class="ml-1 text-sm" x-text="likes"></span>
                    </button>
                    <span class="text-xs text-gray-500">people liked this</span>
                </div>
            </div>
            
          </div>
  
          <div x-show="tab === 'photos'" x-cloak>
            <div class="bg-white p-4 rounded shadow text-center">
              <p class="text-gray-700 font-semibold text-lg">🚧 In Development</p>
              <p class="text-sm text-gray-500 mt-2">
                This tab is currently under development. Gallery of project screenshots and UI designs will be available soon.
              </p>
            </div>
          </div>
          
          <div x-show="tab === 'personal'" x-cloak class="space-y-8">
                <div class="bg-white p-4 rounded shadow">
                    <p class="text-gray-700 font-bold font-sans mb-5">My own personal projects and experiments.</p>
                    <p class="text-gray-500 text-xs">Posted: June 2 2025</p>
                    <p class="text-gray-700 text-sm mb-4">
                        This personal project is an experiment based on my own idea. It helped me enhance my CSS skills through hands-on design and layout implementation.
                      </p>
                      
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Project 1 -->
                        <div class="text-center">
                            <img src="/icon/bplks.jpg" alt="A simple THRIFTSHOPBCD using DaisyUi Tailwind Laravel" class="rounded-lg shadow-md w-full h-48 object-cover transition-transform duration-300 transform hover:scale-110">
                            <p class="text-sm mt-2 font-medium text-gray-700">ThriftShopBCD</p>
                            <p class="text-xs text-gray-500">A simple THRIFTSHOPBCD using DaisyUi Tailwind Laravel.</p>
                        </div>
                
                        <!-- Project 2 -->
                        <div class="text-center">
                            <img src="/icon/kodigu.jpg" alt="Digital Complaint Filing System" class="rounded-lg shadow-md w-full h-48 object-cover transition-transform duration-300 transform hover:scale-110">
                            <p class="text-sm mt-2 font-medium text-gray-700">KODIGOUI</p>
                            <p class="text-xs text-gray-500">Powered By Tall Stack. (MyUIlibrary)</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-4 rounded shadow">
                    <p class="text-gray-500 text-xs">Posted: June 2 2025</p>
                    <p class="text-gray-700 text-sm mb-4">
                        This project was developed during my internship training with the dev team. While watching tutorials, I applied the knowledge I gained and implemented it into this project to strengthen my understanding and skills.
                      </p>
                      
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Project 1 -->
                        <div class="text-center">
                            <img src="/icon/chomehearts.PNG" alt="laravel', description: 'A Chromehearts Shop using T.A.L.L. Stack" class="rounded-lg shadow-md w-full h-48 object-cover transition-transform duration-300 transform hover:scale-110">
                            <p class="text-sm mt-2 font-medium text-gray-700">Chrome Hearts Shop</p>
                            <p class="text-xs text-gray-500">laravel', description: 'A Chromehearts Shop using T.A.L.L. Stack.</p>
                        </div>
                
                        <!-- Project 2 -->
                        <div class="text-center">
                            <img src="/icon/ecommerce.PNG" alt="laravel', description: 'A E-commerce using Laravel Filament" class="rounded-lg shadow-md w-full h-48 object-cover transition-transform duration-300 transform hover:scale-110">
                            <p class="text-sm mt-2 font-medium text-gray-700">E-commerce Admin Panel</p>
                            <p class="text-xs text-gray-500">laravel', description: 'A E-commerce using Laravel Filament</p>
                        </div>
                    </div>
                </div>
              </div>
  
          <div x-show="tab === 'internship'" x-cloak>
            <div class="bg-white p-4 rounded shadow">
                <p class="text-gray-700 mb-4">
                    These pictures were taken during our internship. The experience helped us gain real-world project exposure, enhanced our programming logic, and improved our problem-solving skills.
                  </p>
                  <p class="text-gray-500 text-xs">Posted: June 2 2025</p>
                  
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                <!-- Project 1 -->
                <div class="text-center">
                    <img src="/icon/devteam1.jpg" alt="A simple THRIFTSHOPBCD using DaisyUi Tailwind Laravel" class="rounded-lg shadow-md w-full h-48 object-cover transition-transform duration-300 transform hover:scale-110">
                </div>
        
                <!-- Project 2 -->
                <div class="text-center">
                    <img src="/icon/internship2.jpg" alt="Digital Complaint Filing System" class="rounded-lg shadow-md w-full h-48 object-cover transition-transform duration-300 transform hover:scale-110">

                </div>

                 <!-- Project 3 -->
                 <div class="text-center">
                    <img src="/icon/interntask.PNG" alt="Digital Complaint Filing System" class="rounded-lg shadow-md w-full h-48 object-cover transition-transform duration-300 transform hover:scale-110">
                </div>
                  <!-- Project 3 -->
                  <div class="text-center">
                    <img src="/icon/devteam.jpg" alt="Digital Complaint Filing System" class="rounded-lg shadow-md w-full h-48 object-cover transition-transform duration-300 transform hover:scale-110">
                </div>
            </div>
          </div>
          </div>

        <!-- Alpine Tab Contents Here -->
        <div class="bg-white p-4 rounded shadow space-y-4">
            <h2 class="mt-2 font-bold text-gray-400">Pinned post</h2>
            <div x-data="projectGallery()" class="bg-white p-4 rounded shadow">
                <p class="text-sm text-gray-500">Dan Fred · Posted album. June 2 2025</p>
            <h3 class="mt-2 font-bold text-lg">Album: ACHIEVEMENTS</h3>
            <p class="text-sm text-gray-500 mb-3">
                This is my project journey that I built during my 3rd year, commission projects, client projects, personal website, and my internship tasks. It helped me a lot in problem-solving and understanding programming logic.
            </p>
              
                <div class="grid grid-cols-3 gap-2">
                  <template x-for="(project, index) in limitedProjects" :key="project.id">
                    <div class="relative cursor-pointer" @click="openModal(index)">
                      <img :src="getImage(project)" class="w-full h-44 object-cover rounded " />
                      <!-- More overlay on 6th image -->
                      <template x-if="index === 5 && projects.length > 6">
                        <div class="absolute inset-0 bg-black bg-opacity-60 flex items-center justify-center text-white text-sm font-semibold rounded">
                          +<span x-text="projects.length - 6"></span> More
                        </div>
                      </template>
                    </div>
                  </template>
                </div>
              
                 <!-- Like Button -->
                <div class="mt-3 flex items-center gap-2">
                    <button @click="toggleLike" class="flex items-center text-gray-600 hover:text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 
                        6.5 3.5 5 5.5 5c1.54 0 3.04.99 
                        3.57 2.36h1.87C13.46 5.99 14.96 5 
                        16.5 5 18.5 5 20 6.5 20 
                        8.5c0 3.78-3.4 6.86-8.55 
                        11.54L12 21.35z"/>
                    </svg>
                    <span class="ml-1 text-sm" x-text="likes"></span>
                    </button>
                    <span class="text-xs text-gray-500">people liked this</span>
                </div>
                
                <!-- Modal -->
                <div x-show="isOpen" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50" x-transition>
                  <div class="relative w-full max-w-3xl">
                    <!-- Close Button -->
                    <button @click="closeModal()" class="absolute top-2 right-2 z-50 text-white bg-black bg-opacity-50 hover:bg-opacity-75 rounded-full p-1">
                      ✕
                    </button>
              
                    <!-- Slider -->
                    <div class="relative">
                      <img :src="currentSlideImage" class="w-full max-h-[80vh] object-contain rounded" />
              
                      <!-- Prev -->
                      <button @click="prevSlide()" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white px-3 py-1 rounded hover:bg-opacity-75">
                        ‹
                      </button>
              
                      <!-- Next -->
                      <button @click="nextSlide()" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white px-3 py-1 rounded hover:bg-opacity-75">
                        ›
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              
              <script>
              function projectGallery() {
                return {
                  isOpen: false,
                  currentIndex: 0,
                  allImages: [],
                  likes: JSON.parse(localStorage.getItem('projectLikes')) || 0,

                    toggleLike() {
                    this.likes++;
                    localStorage.setItem('projectLikes', JSON.stringify(this.likes));
                    },


                  projects: [
                    { id: 1, name: 'POS and Inventory', category: 'ReactNative', description: 'POS System', image: '/icon/Capture.PNG' },
                    { id: 2, name: 'Chrome Hearts Shop', category: 'laravel', description: 'Shop', image: '/icon/chomehearts.PNG' },
                    { id: 3, name: 'E-commerce System', category: 'laravel', description: 'E-commerce', image: '/icon/ecommerce.PNG' },
                    { id: 4, name: 'Digital Vet System', category: 'laravel', description: 'Vet system', image: '/icon/abouts.PNG' },
                    { id: 5, name: 'ThriftShopBCD', category: 'laravel', description: 'Thrift Shop', image: '/icon/bplks.jpg' },
                    { id: 6, name: 'FinTrack', category: 'laravel', description: 'Finance tracker', image: '/icon/unavailable-rubber-grunge-stamp-seal-illustration-vector.jpg' },
                    { id: 7, name: 'More Items', category: 'laravel', description: 'Extra', image: '/icon/kodigu.jpg' },
                    {
                      id: 8,
                      name: 'Internship Task',
                      category: 'laravel',
                      description: 'Internship',
                      image: [
                        '/icon/interntask1.PNG',
                        '/icon/task2.png',
                        '/icon/interntask2.png'
                      ]
                    },
                    { id: 9, name: 'More Items', category: 'laravel', description: 'Extra', image: '/icon/inventory.jpg' },
                  ],
              
                  get limitedProjects() {
                    return this.projects.slice(0, 6);
                  },
              
                  getImage(project) {
                    return Array.isArray(project.image) ? project.image[0] : project.image;
                  },
              
                  openModal(index) {
                    // Flatten all images
                    this.allImages = this.projects.flatMap(p => Array.isArray(p.image) ? p.image : [p.image]);
                    this.currentIndex = index;
                    this.isOpen = true;
                  },
              
                  closeModal() {
                    this.isOpen = false;
                  },
              
                  nextSlide() {
                    if (this.currentIndex < this.allImages.length - 1) {
                      this.currentIndex++;
                    }
                  },
              
                  prevSlide() {
                    if (this.currentIndex > 0) {
                      this.currentIndex--;
                    }
                  },
              
                  get currentSlideImage() {
                    return this.allImages[this.currentIndex];
                  }
                }
              }
              </script>
              <script>
                function projectLike(key) {
                  return {
                    likes: JSON.parse(localStorage.getItem(key)) || 0,
                    toggleLike() {
                      this.likes++;
                      localStorage.setItem(key, JSON.stringify(this.likes));
                    }
                  };
                }
              </script>
              

        </div>
      </div>
    </div>
  </div>
  

</div>

</div>