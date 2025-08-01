<div class="flex justify-center lg:justify-start px-6 mt-6 overflow-x-auto scrollbar-hide">
    <nav class="flex space-x-6 text-gray-600 text-sm font-medium border-b w-full">
      <button @click="tab = 'posts'" :class="tab === 'posts' ? 'pb-2 border-b-2 border-blue-600 text-blue-600' : 'pb-2 hover:text-blue-600 hover:border-b-2 hover:border-blue-600'">Posts</button>
      <button @click="tab = 'about'" :class="tab === 'about' ? 'pb-2 border-b-2 border-blue-600 text-blue-600' : 'pb-2 hover:text-blue-600 hover:border-b-2 hover:border-blue-600'">About</button>
      <button @click="tab = 'client'" :class="tab === 'client' ? 'pb-2 border-b-2 border-blue-600 text-blue-600' : 'pb-2 hover:text-blue-600 hover:border-b-2 hover:border-blue-600'">ClientProjects</button>
      <button @click="tab = 'contact'" :class="tab === 'photos' ? 'pb-2 border-b-2 border-blue-600 text-blue-600' : 'pb-2 hover:text-blue-600 hover:border-b-2 hover:border-blue-600'">Contact</button>
      <button @click="tab = 'personal'" :class="tab === 'personal' ? 'pb-2 border-b-2 border-blue-600 text-blue-600' : 'pb-2 hover:text-blue-600 hover:border-b-2 hover:border-blue-600'">MyPersonalProject</button>
      <button @click="tab = 'internship'" :class="tab === 'internship' ? 'pb-2 border-b-2 border-blue-600 text-blue-600' : 'pb-2 hover:text-blue-600 hover:border-b-2 hover:border-blue-600'">Internship</button>
    </nav>
  </div>