<style>
    .fade-up {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }
  
    .in-view {
      opacity: 1;
      transform: translateY(0);
    }

    .galeri-slide {
      width: 100%;
      max-width: 1200px;
      position: relative;
    }

    .galeri-item img {
      width: 100%;
      height: 500px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      transition: filter 0.5s ease;
    }

    .swiper-button-next, .swiper-button-prev {
      color: white;
    }

    .galeri-item .teks {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 2rem;
      font-weight: bold;
      color: white;
      opacity: 0;
      transition: opacity 0.5s ease;
    }

    .galeri-item:hover img {
      filter: brightness(50%);
    }

    .galeri-item:hover .teks {
      opacity: 1;
    }
    .swiper-button-next, .swiper-button-prev {
    width: 20px; 
    height: 20px; 
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.swiper-button-next::after, .swiper-button-prev::after {
    font-size: 12px;
}
</style>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script>
    document.addEventListener("DOMContentLoaded", function () {
      const elements = document.querySelectorAll(".fade-up");
  
      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add("in-view");
            } 
          });
        },
        { threshold: 0.3 }
      );
  
      elements.forEach((el) => observer.observe(el));
    });
  </script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const elemen = document.querySelectorAll(".muncul-pelan");
  
      const pengamat = new IntersectionObserver(
        (entri) => {
          entri.forEach((item) => {
            if (item.isIntersecting) {
              item.target.classList.add("terlihat");
            } 
          });
        },
        { threshold: 0.3 }
      );
  
      elemen.forEach((el) => pengamat.observe(el));
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var geserGambar = new Swiper(".galeri-slide", {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    });
</script>
<div class="mt-28 flex flex-col items-center">
<div class='w-11/12 flex justify-center'>
        <div class="swiper galeri-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide galeri-item">
                    <img src="{{ asset('img/imgBlog/unseen-studio-s9CC2SKySJM-unsplash.jpg') }}" alt="Gambar 1">
                    <div class="teks">Temukan Solusi Tugas Anda</div>
                </div>
                <div class="swiper-slide galeri-item">
                    <img src="{{ asset('img/andrew-neel-wClUbRMCBD8-unsplash.jpg') }}" alt="Gambar 2">
                    <div class="teks">Belajar Lebih Mudah</div>
                </div>
                <div class="swiper-slide galeri-item">
                    <img src="{{ asset('img/ed-us-RwZzAcRmbbI-unsplash (1).jpg') }}" alt="Gambar 3">
                    <div class="teks">Dapatkan Bantuan Profesional</div>
                </div>
                <div class="swiper-slide galeri-item">
                    <img src="{{ asset('img/assad-tanoli-DreH1YbP1js-unsplash.jpg') }}" alt="Gambar 4">
                    <div class="teks">Cepat, Tepat, dan Akurat</div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

        {{-- rectangle biru --}}
        <div class="w-full bg-blue-500 h-3 shadow-lg mt-8"></div>
        {{-- wave --}}
        <img class="h-auto object-cover w-full" src="{{ asset('svg/wave-kebalik3.svg') }}" alt="">

        {{-- Joki Tugas untuk anak sekolah --}}
        <div>
            <h1 class="text-center text-2xl font-normal text-gray-950 mb-0">
                Sheets Si Teman Tugasmu
            </h1>
            <h2 class="text-center text-3xl font-bold text-gray-950 mb-0">
                Tuntaskan tugas anak
            </h2>
            <h2 class="text-center text-3xl font-bold text-gray-950 mb-7">
                sekolah dari SD - SMA
            </h2>

            <!-- Grid Layout -->
        <div class="grid fade-up grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 sm:gap-6 mt-10">
            <!-- Joki Tugas SD -->
            <div class="flex flex-col items-center bg-blue-500 rounded-xl p-4 shadow-xl hover:scale-110 transition-all duration-500">
                <img src="{{ asset('img/imgBlog/20 Things We Miss When We Leave Indonesia _ WowShack 1.png') }}" 
                alt="Joki Tugas SD" 
                class="rounded-lg w-5/6 md:w-full h-36 sm:h-48 lg:h-64 object-cover">
                <p class="mt-4 font-bold text-white font-poppins text-lg">Menyelesaikan Tugas SD</p>
            </div>

            <!-- Joki Tugas SMP -->
            <div class="flex flex-col items-center bg-blue-500 rounded-xl p-4 shadow-xl hover:scale-110 transition-all duration-500">
                <img src="{{ asset('img/imgBlog/7 Cara Masuk Perguruan Tinggi Negeri dengan Mudah.png') }}" 
                alt="Joki Tugas SMP" 
                class="rounded-lg w-5/6 md:w-full h-36 sm:h-48 lg:h-64 object-cover">
                <p class="mt-4 font-bold text-white font-poppins text-lg">Menyelesaikan Tugas SMP</p>
            </div>

            <!-- Joki Tugas SMA/SMK -->
            <div class="flex flex-col items-center mt-8 bg-blue-500 rounded-xl p-4 shadow-xl hover:scale-110 transition-all duration-500">
                <img src="{{ asset('img/imgBlog/100 Contoh Soal Cerdas Cermat Pengetahuan Umum Disertai Jawabannya.png') }}" 
                alt="Joki Tugas SMA/SMK" 
                class="rounded-lg w-5/6 md:w-full h-36 sm:h-48 lg:h-64 object-cover">
                <p class="mt-4 font-bold text-white font-poppins text-lg">Menyelesaikan Tugas SMA/SMK</p>
            </div>

            <!-- Revisi Gratis -->
            <div class="flex flex-col items-center mt-8 bg-blue-500 rounded-xl p-4 shadow-xl hover:scale-110 transition-all duration-500">
                <img src="{{ asset('img/imgBlog/download (2).png') }}" 
                alt="Revisi Gratis" 
                class="rounded-lg w-5/6 md:w-full h-36 sm:h-48 lg:h-64 object-cover">
                <p class="mt-4 font-bold text-white font-poppins text-lg">Revisi Gratis</p>
            </div>
        </div>
    </div>

    {{-- Penjelasan tentang Jasa Joki Tugas --}}
    <div class="mt-16 fade-up">
        <h2 class="text-center text-xl md:text-3xl font-bold text-gray-950 mb-0">
            Penjelasan Tentang Sheets Si Teman Tugasmu
        </h2>

        <div class="w-full flex flex-wrap lg:flex-nowrap p-6 mt-10 rounded-lg ">
            <!-- Gambar -->
            <div class="w-full lg:w-1/2 flex justify-center lg:justify-end px-8 py-4">
                <div class="overflow-hidden w-2/3 lg:w-3/4">
                    <img class="w-full h-auto object-cover rounded-lg" src="{{ asset('img/imgBlog/unsplash_AjGYOg18LJ0.png') }}" alt="Tugas Individu">
                </div>
            </div>
        
            <!-- Teks -->
            <div class="w-full lg:w-1/2 flex items-center lg:justify-start px-8">
                <p class="font-poppins w-full lg:w-1/2 text-sm text-center lg:text-left leading-relaxed">
                    Di Sheets Si Teman Tugasmu bisa dibuatkan tugas secara individu ataupun kelompok mulai dari tugas makalah, ppt ataupun tugas rumah, dan tugas akan dikerjakan oleh orang yang ahli dan profesional dalam bidangnya.
                </p>
            </div>
        </div>
        
        <div class="w-full flex flex-wrap lg:flex-nowrap p-6">
            <!-- Gambar -->
            <div class="w-full lg:w-1/2 flex justify-center lg:justify-end px-8 py-4">
                <div class="overflow-hidden w-2/3 lg:w-3/4">
                    <img class="w-full h-auto object-cover rounded-lg" src="{{ asset('img/imgBlog/unsplash_9zo9aAsZJZ8 (1).png') }}" alt="Revisi Gratis">
                </div>
            </div>
        
            <!-- Teks -->
            <div class="w-full lg:w-1/2 flex items-center lg:justify-start px-8">
                <p class="font-poppins w-full lg:w-1/2 text-sm text-center lg:text-left leading-relaxed">
                    Di Sheets Si Teman Tugasmu dapat melakukan revisi secara gratis tanpa ada biaya tambahan, dan juga para pekerja akan menyesuaikan apa yang kamu minta.
                </p>
            </div>
        </div>
    </div>
</div>