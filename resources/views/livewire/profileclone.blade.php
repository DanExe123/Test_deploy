<div class="bg-white px-0 md:px-10" x-cloak>
   @include('livewire.includes.cover-photo')
      
      <!-- Profile section -->
   @include('livewire.includes.profile-section')
  
  <hr class="mx-12 mt-10">
<!-- Alpine Tabs Wrapper -->
<div x-data="{ tab: 'posts' }">
    <!-- Navigation Tabs -->
  @include('livewire.includes.profile-nav')
      <!-- Grid Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 px-5 mt-6">
      
      <!-- Left Column -->
      <div class="col-span-1 space-y-6">
        <!-- Intro -->
       @include('livewire.includes.profile-left-col')

       <div class="hidden sm:block text-sm text-gray-500  space-y-1">
        <p>Inspired by FB Profile | Developed by Dan Fred</p>
        <p>Powered by TALL Stack</p>
      </div>
      </div>
  
      <style>
        .scrollbar-invisible::-webkit-scrollbar {
          display: none;
        }
      
        .scrollbar-invisible {
          -ms-overflow-style: none;  /* IE and Edge */
          scrollbar-width: none;     /* Firefox */
        }
      </style>
      <!-- Right Column -->
      <div class="col-span-1 lg:col-span-3 space-y-4 overflow-y-auto max-h-screen scrollbar-invisible">
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
            <div x-data="projectLike('clientSection')" class="bg-white rounded shadow">
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

            <div x-data="projectLike('clientSection')" class="bg-white rounded shadow">
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
  
          <div x-show="tab === 'contact'" x-cloak class="">
            <div class="bg-white rounded-lg shadow p-6 space-y-6">
          
              <!-- Header -->
              <div class="text-center">
                <h2 class="text-2xl font-bold text-gray-800">Contact Me</h2>
                <p class="text-sm text-gray-500 mt-1">Let’s connect — open for commission project, collaboration</p>
              </div>
          
              <!-- Profile Info -->
              <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4 text-center sm:text-left">
                <img src="/icon/dan.jpg" alt="Profile Picture" class="w-24 h-24 rounded-full border-4 border-blue-500 object-cover">
          
                <div>
                  <h3 class="text-xl font-bold text-gray-800">Dan Fred</h3>
                  <p class="text-gray-500 text-sm">Full-Stack Developer</p>
          
                  <div class="mt-3">
                    <p class="text-gray-700 text-sm font-medium">📧 Email:</p>
                    <p class="text-blue-600 text-sm break-all">cablascablas@gmail.com</p>
                  </div>
                </div>
              </div>
          
              <!-- Front-End Tools -->
              <div class="bg-gray-100 rounded-lg p-4">
                <h4 class="text-sm font-semibold text-gray-700 mb-2">🎨 Front-End Stack:</h4>
                <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                  <li><span class="font-medium text-blue-600">Tailwind CSS</span> – Utility-first responsive styling.</li>
                  <li><span class="font-medium text-purple-600">Alpine.js</span> – Lightweight JS for interactivity.</li>
                  <li><span class="font-medium text-rose-600">Livewire</span> – Laravel reactive components without JS.</li>
                  <li><span class="font-medium text-indigo-600">DaisyUI</span> – Tailwind-based UI component library.</li>
                  <li><span class="font-medium text-green-600">Custom UI Components</span> – Clean and reusable design elements.</li>
                </ul>
              </div>
          
              <!-- Back-End Tools -->
              <div class="bg-gray-100 rounded-lg p-4">
                <h4 class="text-sm font-semibold text-gray-700 mb-2">🧰 Back-End Stack:</h4>
                <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                  <li><span class="font-medium text-red-600">Laravel</span> – PHP framework for scalable applications.</li>
                  <li><span class="font-medium text-yellow-600">PHP</span> – Core language for backend logic.</li>
                  <li><span class="font-medium text-teal-600">MySQL</span> – Robust relational database system.</li>
                </ul>
              </div>
          
              <!-- Technical Knowledge -->
              <div class="bg-gray-100 rounded-lg p-4">
                <h4 class="text-sm font-semibold text-gray-700 mb-2">🧠 Additional Knowledge:</h4>
                <ul class="text-sm text-gray-600 list-disc list-inside space-y-1">
                  <li><span class="font-medium text-orange-600">Eloquent ORM</span> – Deep understanding of relationships (hasOne, hasMany, belongsToMany), query scopes, accessors, and eager loading.</li>
                  <li><span class="font-medium text-blue-600">PHPMailer</span> – Sending secure and styled email alerts via SMTP, including attachments and HTML formatting.</li>
                  <li><span class="font-medium text-gray-700">Cross-Browser Compatibility</span> – Ensuring UI consistency across Chrome, Firefox, Safari, and Edge using proper prefixes, responsive breakpoints, and feature fallback strategies.</li>
                </ul>
              </div>
          
              <!-- Footer Note -->
              <div class="text-center text-gray-500 text-sm italic pt-4 border-t">
                Committed to building responsive, maintainable, and cross-platform solutions from design to deployment.
              </div>
          
            </div>
          </div>
          
          
          <div x-show="tab === 'personal'" x-cloak class="space-y-8">
                <div class="bg-white rounded shadow">
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

                <div class="bg-white rounded shadow">
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
            <div class="bg-white rounded shadow">
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
        <div class="bg-white rounded shadow space-y-4">
            <h2 class="mt-2 font-bold text-gray-400">Pinned post</h2>
            <div x-data="projectGallery()" class="bg-white p-4 rounded shadow">
              <div class="flex items-center justify-start gap-2">
                <img src="/icon/dan.jpg" alt="Profile"
                     class="w-12 h-12 rounded-full border-4 border-white object-cover" />
                <div>
                  <h3 class="text-lg font-semibold">Dan Fred</h3>
                  <div class="flex items-center gap-1 text-sm text-gray-500">
                    <p>Posted album. June 2, 2025</p>
              
                    <!-- Tooltip with Alpine.js -->
                    <div x-data="{ show: false }" class="relative ml-1">
                      <x-phosphor.icons::bold.globe-hemisphere-east 
                        class="w-4 h-4 text-gray-500 cursor-pointer"
                        @mouseenter="show = true" 
                        @mouseleave="show = false"
                      />
                      <div 
                        x-show="show" 
                        x-transition 
                        class="absolute bottom-full mb-1 px-2 py-1 text-xs text-white bg-black rounded shadow-lg"
                        style="white-space: nowrap;"
                      >
                        Public
                      </div>
                    </div>
              
                  </div>
                </div>
              </div>
                         
              
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

              <div x-data="projectLike('post1Section')" class="bg-white rounded shadow">
                <div class="flex items-center justify-start gap-2">
                  <img src="/icon/dan.jpg" alt="Profile"
                       class="w-12 h-12 rounded-full border-4 border-white object-cover" />
                  <div>
                    <h3 class="text-lg font-semibold">Dan Fred</h3>
                    <div class="flex items-center gap-1 text-sm text-gray-500">
                      <p>June 2, 2025</p>
                
                      <!-- Tooltip with Alpine.js -->
                      <div x-data="{ show: false }" class="relative ml-1">
                        <x-phosphor.icons::bold.globe-hemisphere-east 
                          class="w-4 h-4 text-gray-500 cursor-pointer"
                          @mouseenter="show = true" 
                          @mouseleave="show = false"
                        />
                        <div 
                          x-show="show" 
                          x-transition 
                          class="absolute bottom-full mb-1 px-2 py-1 text-xs text-white bg-black rounded shadow-lg"
                          style="white-space: nowrap;"
                        >
                          Public
                        </div>
                      </div>
                
                    </div>
                  </div>
                </div>
                
                <p class="text-gray-700 mb-4">
                  This picture showcases one of my tasks during my internship at DevTeam.
I was responsible for translating UI/UX designs into functional front-end code, which significantly enhanced my skills in responsive design and user interface development. I also gained valuable experience in quality assurance (QA), where I cross-checked the system for bugs and layout inconsistencies to ensure a polished final product </p>
                  
            <div class="grid grid-cols-1 sm:grid-cols-1 gap-4">
                <!-- Project 1 -->
                <div class="text-center">
                  <img src="/icon/interntask.PNG" 
                       alt="A simple THRIFTSHOPBCD using DaisyUi Tailwind Laravel"
                       class="rounded-lg shadow-md max-w-sm h-auto object-cover transition-transform duration-300 transform hover:scale-110 mx-auto">
                </div>                
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
          </div>

          <div x-data="projectLike('post2Section')" class="bg-white rounded shadow">
            <div class="flex items-center justify-start gap-2">
              <img src="/icon/dan.jpg" alt="Profile"
                   class="w-12 h-12 rounded-full border-4 border-white object-cover" />
              <div>
                <h3 class="text-lg font-semibold">Dan Fred</h3>
                <div class="flex items-center gap-1 text-sm text-gray-500">
                  <p>June 2, 2025</p>
            
                  <!-- Tooltip with Alpine.js -->
                  <div x-data="{ show: false }" class="relative ml-1">
                    <x-phosphor.icons::bold.globe-hemisphere-east 
                      class="w-4 h-4 text-gray-500 cursor-pointer"
                      @mouseenter="show = true" 
                      @mouseleave="show = false"
                    />
                    <div 
                      x-show="show" 
                      x-transition 
                      class="absolute bottom-full mb-1 px-2 py-1 text-xs text-white bg-black rounded shadow-lg"
                      style="white-space: nowrap;"
                    >
                      Public
                    </div>
                  </div>
            
                </div>
              </div>
            </div>
            
            <p class="text-gray-700 mb-4">
              I created a simple UI component library designed to help students and friends quickly build user interfaces.
              The goal is to speed up development, encourage clean and optimized code, and provide reusable components for academic or personal projects—especially useful for upcoming thesis work.
              Some components are still in development and will be published soon once everything is fully polished. <br>
              Powered by the TALL Stack (TailwindCSS, Alpine.js, Laravel, and Livewire).
            </p>
             <div class="grid grid-cols-1 sm:grid-cols-1 gap-4">
            <!-- Project 1 -->
            <div class="text-center">
              <img src="/icon/kodigu.jpg" 
                   alt="A simple THRIFTSHOPBCD using DaisyUi Tailwind Laravel"
                   class="rounded-lg shadow-md max-w-sm h-auto object-cover transition-transform duration-300 transform hover:scale-110 mx-auto">
            </div>                
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
      </div>
      <div x-data="projectLike('post2Section')" class="bg-white rounded shadow">
        <div class="flex items-center justify-start gap-2">
          <img src="/icon/dan.jpg" alt="Profile"
               class="w-12 h-12 rounded-full border-4 border-white object-cover" />
          <div>
            <h3 class="text-lg font-semibold">Dan Fred</h3>
            <div class="flex items-center gap-1 text-sm text-gray-500">
              <p>June 2, 2025</p>
        
              <!-- Tooltip with Alpine.js -->
              <div x-data="{ show: false }" class="relative ml-1">
                <x-phosphor.icons::bold.globe-hemisphere-east 
                  class="w-4 h-4 text-gray-500 cursor-pointer"
                  @mouseenter="show = true" 
                  @mouseleave="show = false"
                />
                <div 
                  x-show="show" 
                  x-transition 
                  class="absolute bottom-full mb-1 px-2 py-1 text-xs text-white bg-black rounded shadow-lg"
                  style="white-space: nowrap;"
                >
                  Public
                </div>
              </div>
        
            </div>
          </div>
        </div>
        
        <p class="text-gray-700 mb-4">
          I discovered my passion for building and translating UI/UX designs into functional code during my internship.
          Since then, I've enjoyed turning visual concepts into responsive, user-friendly interfaces—bringing designs to life through clean and efficient front-end development.
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
  <div x-data="projectLike('post3Section')" class="bg-white rounded shadow">
    <div class="flex items-center justify-start gap-2">
      <img src="/icon/dan.jpg" alt="Profile"
           class="w-12 h-12 rounded-full border-4 border-white object-cover" />
      <div>
        <h3 class="text-lg font-semibold">Dan Fred</h3>
        <div class="flex items-center gap-1 text-sm text-gray-500">
          <p>June 2, 2025</p>
    
          <!-- Tooltip with Alpine.js -->
          <div x-data="{ show: false }" class="relative ml-1">
            <x-phosphor.icons::bold.globe-hemisphere-east 
              class="w-4 h-4 text-gray-500 cursor-pointer"
              @mouseenter="show = true" 
              @mouseleave="show = false"
            />
            <div 
              x-show="show" 
              x-transition 
              class="absolute bottom-full mb-1 px-2 py-1 text-xs text-white bg-black rounded shadow-lg"
              style="white-space: nowrap;"
            >
              Public
            </div>
          </div>
    
        </div>
      </div>
    </div>
    <p class="text-gray-700 mb-4"> Spline ❤️ 😊 </p>
    <div class="overflow-hidden h-[400px] rounded-xl">
    <iframe src="https://my.spline.design/robotfollowcursorforlandingpagemc-4qwPLbTvX90DgnZJC9Nhv9zi/"
    class="w-full h-[600px] -mt-24" 
    frameborder="0">
</iframe>

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
      </div> <!-- right col parent div closing -->

    </div>
  </div>
  

</div>

</div>