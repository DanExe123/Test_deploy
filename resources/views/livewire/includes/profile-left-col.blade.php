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