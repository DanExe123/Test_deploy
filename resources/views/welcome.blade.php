<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('icon/avatar-people-user-profile-man-boy-cap-young-512.webp') }}">


        <title>Dan-Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.24/dist/full.min.css" rel="stylesheet" type="text/css" />

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- Alpine.js -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
      
         </head>
         <body class="text-white text-center relative">
            <!-- Background Gradient Layer -->
            <div x-cloak class="fixed inset-0 bg-gradient-to-b from-red-800 via-gray-900 to-black -z-10"></div>   <!-- Main Content -->

            <div x-data="visitorTracker()" x-init="init()" class="p-4 fixed left-0 top-0 ">
                <div class="flex justify-start gap-2">
                <div x-data="{ show: false, message: '', x: 0 }" class="relative inline-block">
                    <p class="text-white font-semibold flex justify-start gap-1">
                        <span 
                            class="text-red-600 inline-block cursor-pointer relative"
                            @mouseenter="message = 'Recently viewed my portfolio'; show = true" 
                            @mouseleave="show = false"
                        >
                            <x-phosphor.icons::bold.eye class="w-5 h-5 mt-0.5 text-white" />
                           
                
                            <!-- Tooltip -->
                            <div 
                                x-show="show" 
                                x-transition 
                                class="absolute left-full top-1/2 transform -translate-y-1/2 ml-2
                                       bg-gray-800 text-white text-xs rounded px-3 py-1 shadow z-50 whitespace-nowrap"
                            >
                                <span x-text="message"></span>
                            </div>
                        </span>
                    </p>
                </div>
                <span x-text="visitorCount" class="text-[15px]"></span>
            </div>
              </div>
         
              <script>
                function visitorTracker() {
                  return {
                    visitorCount: 0,
                    visitedIPs: [],
                    init() {
                      // Load data from localStorage
                      this.visitorCount = parseInt(localStorage.getItem('visitor_count')) || 0;
                      this.visitedIPs = JSON.parse(localStorage.getItem('visited_ips') || '[]');
              
                      // Fetch visitor IP
                      fetch('https://api.ipify.org?format=json')
                        .then(response => response.json())
                        .then(data => {
                          const ip = data.ip;
              
                          if (!this.visitedIPs.includes(ip)) {
                            this.visitedIPs.push(ip);
                            this.visitorCount++;
              
                            // Save new data
                            localStorage.setItem('visited_ips', JSON.stringify(this.visitedIPs));
                            localStorage.setItem('visitor_count', this.visitorCount);
                          }
                        });
                    }
                  };
                }
              </script>
              
        <section class="min-h-screen mt-40 px-4 sm:px-6 lg:px-8 space-y-10 w-full max-w-screen-xl mx-auto">  
            @include('livewire.includes.Content')
            </div> 
            @include('livewire.includes.ButtonResources')
           
            

        </div>
        </section>

        <section class="py-16 text-center" data-aos="fade-up" data-aos-duration="3000">
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-4">Scroll to Explore My Journey</h2>
          <p class="text-gray-300 text-sm sm:text-base md:text-lg">Discover my journey, experience, and what I love building.</p> 
      </section>
      
      <section class="py-16">
          <div class="max-w-screen-xl 2xl:max-w-screen-3xl px-4 sm:px-8 md:px-12 mx-auto py-12 lg:py-24 space-y-16 h-auto flex flex-col justify-center">
              <!-- ✅ Image Row -->
              <div class="flex flex-wrap justify-center items-center gap-4 mx-auto" data-aos="zoom-in-up" data-aos-duration="3000">
                  <a href="#_">
                      <img src="/icon/11.jpg"
                          class="w-40 h-40 sm:w-52 sm:h-52 md:w-64 md:h-64 rounded-xl rotate-6 hover:rotate-0 duration-500 hover:-translate-y-6 md:hover:-translate-y-12 object-cover hover:scale-125 transform origin-bottom"
                          alt="Internship photo 1" />
                  </a>
                  <a href="#_">
                      <img src="/icon/devteam.jpg"
                          class="w-40 h-40 sm:w-52 sm:h-52 md:w-64 md:h-64 rounded-xl -rotate-12 hover:rotate-0 duration-500 hover:-translate-y-6 md:hover:-translate-y-12 object-cover hover:scale-125 transform origin-bottom"
                          alt="Internship photo 2" />
                  </a>
                  <a href="#_">
                      <img src="/icon/devteam1.jpg"
                          class="w-40 h-40 sm:w-52 sm:h-52 md:w-64 md:h-64 rounded-xl rotate-6 hover:rotate-0 duration-500 hover:-translate-y-6 md:hover:-translate-y-12 object-cover hover:scale-125 transform origin-bottom"
                          alt="Internship photo 3" />
                  </a>
                  <a href="#_">
                      <img src="/icon/devteam2.jpg"
                          class="w-40 h-40 sm:w-52 sm:h-52 md:w-64 md:h-64 rounded-xl -rotate-12 hover:rotate-0 duration-500 hover:-translate-y-6 md:hover:-translate-y-12 object-cover hover:scale-125 transform origin-bottom"
                          alt="Internship photo 4" />
                  </a>
              </div>
          </div>
      </section>
      


                <!-- ✅ Caption / Description Section -->
<section class="py-16 px-4 sm:px-6 lg:px-0">
  <div class="text-center max-w-3xl mx-auto space-y-6" data-aos="fade-up" data-aos-duration="3000">
      <div class="flex items-center justify-center flex-wrap">
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold flex items-center gap-2 text-white text-center">
            Intership Experience at DevTeam Outsourcing
          </h2>
      </div>
      <p class="text-gray-300 text-sm sm:text-base md:text-lg leading-relaxed text-justify sm:text-center">
          These photos were taken during my internship at <strong>DevTeam Outsourcing Inc.</strong>.
          I truly enjoyed the experience — I got to work on real-world projects and grow as a developer.
          Our senior developers were very supportive, guiding me in proper code structure, teamwork, and task management.
          I learned how to collaborate, meet deadlines, and write clean, efficient code.
          <br /><br />
          I'm very grateful for the opportunity, as it helped me enhance not only my technical skills,
          but also my confidence and professionalism in a real development environment.
      </p>
  </div>
</section>

<!-- ✅ Additional Caption / Description Section -->
<section class="py-16 px-4 sm:px-6 lg:px-0">
  <div class="text-center max-w-3xl mx-auto space-y-6" data-aos="fade-up" data-aos-duration="3000">
      <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold text-white flex justify-center gap-2 mt-1">
          <span class="flex items-center gap-2 justify-center">
              My Internship Tasks & Highlights
          </span>
      </h3>
      <p class="text-gray-300 text-sm sm:text-base md:text-lg leading-relaxed text-justify sm:text-center">
          During this internship, my primary task was to implement <strong>User Access Control</strong>.
          After that, I shifted to frontend development where I focused on building reusable
          <strong>global components</strong> that my teammates could easily integrate across the app — helping improve consistency and optimize our codebase.
          <br /><br />
          One of my proudest accomplishments was developing a dynamic <strong>dashboard</strong> that displayed user data
          based on roles such as Super Admin, HR Admin, Manager, and Employee. I also built a <strong>Google Forms-inspired UI</strong>
          with a rich text editor — all <strong>from scratch</strong>, without using any external UI libraries.
          Everything was constructed using my own reusable components.
          <br /><br />
          This was a <strong>solid, hands-on experience</strong> that not only enhanced my frontend skills
          but also taught me how to deliver QA-ready features efficiently and independently.
      </p>
  </div>
</section>


           <!-- Make sure Alpine.js is included in your <head> -->

            <section class="py-16  text-white">
                <div class="max-w-screen-xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center"
                x-data="{ activeImage: 1 }">


                <!-- 👈 Left Side: Title + Description + Icons -->
                <div class="text-center lg:text-center space-y-6 max-w-full ml-10"  data-aos="fade-up"  data-aos-duration="3000">
                <h2 class="text-3xl lg:text-4xl font-bold">Let’s Connect & Collaborate</h2>
                <p class="text-gray-300 text-base lg:text-lg leading-relaxed">
                    You can reach out to me on Facebook or LinkedIn for collaboration.<br>
                    Tap the floating button to see my full details.
                </p>

                <!-- 🌐 Social Buttons -->
                <div class="flex justify-center lg:justify-center gap-4"  data-aos="fade-up"  data-aos-duration="3000">
                    <!-- Facebook -->
                    <button
                            class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-full flex items-center gap-2 text-sm lg:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.6-1.3 1.3V12h2.2l-.3 3H14v7A10 10 0 0022 12z" />
                    </svg>
                    Facebook
                    </button>

                    <!-- LinkedIn -->
                    <button 
                            class="bg-blue-800 hover:bg-blue-900 px-4 py-2 rounded-full flex items-center gap-2 text-sm lg:text-base">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452H17.21v-5.569c0-1.328-.474-2.235-1.657-2.235-.903 0-1.438.608-1.674 1.197-.086.21-.108.501-.108.793v5.814h-3.236s.043-9.43 0-10.41h3.236v1.475c.429-.663 1.197-1.61 2.908-1.61 2.123 0 3.715 1.387 3.715 4.369v6.176zM5.337 7.433a1.875 1.875 0 110-3.75 1.875 1.875 0 010 3.75zM6.897 20.452H3.774V10.042h3.123v10.41zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.225.792 24 1.771 24h20.451c.979 0 1.778-.775 1.778-1.729V1.729C24 .774 23.204 0 22.225 0z"/>
                    </svg>
                    LinkedIn
                    </button>
                </div>
                </div>

                <!-- 👉 Right Side: Phone Mockup -->
                <div class="mockup-phone"  data-aos="fade-left"  data-aos-duration="3000">
                    <div class="camera"></div>
                    <div class="display">
                    <div class="artboard artboard-demo phone-1 relative overflow-hidden">
                        <img src="/icon/screenshot.jpg" alt="Facebook Screenshot"
                            class="slide-image absolute inset-0 h-full w-full object-cover rounded-lg opacity-0 transition-opacity duration-1000" />
                        <img src="/icon/screenshot1.jpg" alt="LinkedIn Screenshot"
                            class="slide-image absolute inset-0 h-full w-full object-cover rounded-lg opacity-0 transition-opacity duration-1000" />
                    </div>
                    </div>
                </div>
                
                
                

            </div>
            </section>

              
              
              
        </body>
        <script>
        AOS.init();
        </script>
       <script>
        document.addEventListener('DOMContentLoaded', function () {
          const images = document.querySelectorAll('.slide-image');
          let current = 0;
      
          function showImage(index) {
            images.forEach((img, i) => {
              if (i === index) {
                img.classList.add('opacity-100');
                img.classList.remove('opacity-0');
              } else {
                img.classList.add('opacity-0');
                img.classList.remove('opacity-100');
              }
            });
          }
      
          // Initial display
          showImage(current);
      
          // Auto slide every 4 seconds
          setInterval(() => {
            current = (current + 1) % images.length;
            showImage(current);
          }, 4000);
        });
      </script>
      
      
          
</html>
