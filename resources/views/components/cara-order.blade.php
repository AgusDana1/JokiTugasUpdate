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
  </style>

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
        { threshold: 0.5 }
      );
  
      elements.forEach((el) => observer.observe(el));
    });
  </script>

<div class="relative mt-40 bg-white">
    <div class="flex flex-col md:flex-row justify-evenly py-8">
        <!-- Bagian Cara Order Dan Sheets Si Joki Tugas -->
        <div class="text-center py-8 z-10">
            <h1 class="text-3xl font-semibold font-poppins text-gray-800 animate-bounce">Cara Order</h1>
            <h2 class="text-4xl font-bold text-blue-600 animate-bounce">
            Sheets Si Teman Tugasmu
            </h2>
        </div>
    
        <!-- Gambar -->
        <div class="flex justify-center mb-12 z-10">
            <div class="w-60 h-60 rounded-full bg-gradient-to-r from-blue-300 via-blue-500 to-blue-700 p-2">
            <img
                src="{{ asset("img/imgCaraOrder/Premium Photo _ Beautiful young Asian woman in green sweater smiling pointing fingers down, inviting customers to special event isolated over purple background.jpeg") }}"
                alt="Gambar"
                class="w-full h-full object-cover rounded-full"
            />
            </div>
        </div>
    </div>
    
    <!-- Gelombang -->
    <div class="absolute inset-x-0 bottom-0">
      <svg
        class="w-full"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
      >
        <path
          fill="#0099FF"
          fill-opacity="1"
          d="M0,128L48,122.7C96,117,192,107,288,128C384,149,480,203,576,192C672,181,768,107,864,101.3C960,96,1056,160,1152,176C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </div>
  </div>

  <div class="w-full bg-blue-500 h-3 shadow-lg"></div>

  {{-- Order Sheets Si Joki Tugas Dengan Mudah --}}
  <div class="mx-auto p-2">

    <div class="fade-up grid sm:grid-cols-1 my-20 md:grid-cols-1 lg:grid-cols-3 gap-14 w-full md:w-full">
        <div class="col-span-1 shadow-2xl rounded-md relative text-black flex flex-col items-center justify-center gap-6 px-2 py-4  group">
            <div class="w-10 h-10 rounded-full text-white bg-blue-500 overflow-hidden absolute mx-auto -top-10 border-white flex items-center justify-center font-poppins font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M21.41 8.64v-.05a10 10 0 0 0-18.78 0s0 0 0 .05a9.86 9.86 0 0 0 0 6.72v.05a10 10 0 0 0 18.78 0s0 0 0-.05a9.86 9.86 0 0 0 0-6.72M4.26 14a7.8 7.8 0 0 1 0-4h1.86a16.7 16.7 0 0 0 0 4Zm.82 2h1.4a12 12 0 0 0 1 2.57A8 8 0 0 1 5.08 16m1.4-8h-1.4a8 8 0 0 1 2.37-2.57A12 12 0 0 0 6.48 8M11 19.7A6.34 6.34 0 0 1 8.57 16H11Zm0-5.7H8.14a14.4 14.4 0 0 1 0-4H11Zm0-6H8.57A6.34 6.34 0 0 1 11 4.3Zm7.92 0h-1.4a12 12 0 0 0-1-2.57A8 8 0 0 1 18.92 8M13 4.3A6.34 6.34 0 0 1 15.43 8H13Zm0 15.4V16h2.43A6.34 6.34 0 0 1 13 19.7m2.86-5.7H13v-4h2.86a14.4 14.4 0 0 1 0 4m.69 4.57a12 12 0 0 0 1-2.57h1.4a8 8 0 0 1-2.4 2.57M19.74 14h-1.86a16 16 0 0 0 .12-2a16 16 0 0 0-.12-2h1.86a7.8 7.8 0 0 1 0 4"/></svg>
            </div>
            {{-- Arrow --}}
            <div class="absolute -right-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"/></svg>
            </div>
            <h2 class="text-black font-poppins font-semibold text-sm text-center">Kunjungi Website Sheets Si Teman Tugasmu</h2>
            <p class="text-start text-black font-poppins text-sm">Langkah pertama adalah mengunjungi website resmi kami. Di halaman utama, Anda akan menemukan informasi lengkap mengenai layanan yang kami tawarkan.</p>
        </div>

        <div class="col-span-1 shadow-2xl rounded-md relative text-black flex flex-col items-center justify-center gap-6 px-2 py-4 group">
            <div class="w-10 h-10 rounded-full text-white bg-blue-500 overflow-hidden absolute mx-auto -top-10 border-white flex items-center justify-center font-poppins font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M3 6.25A3.25 3.25 0 0 1 6.25 3h9.5A3.25 3.25 0 0 1 19 6.25v9.5A3.25 3.25 0 0 1 15.75 19h-9.5A3.25 3.25 0 0 1 3 15.75zm12.28 2.78a.75.75 0 0 0-1.06-1.06L10 12.19l-1.97-1.97a.75.75 0 1 0-1.06 1.06l2.5 2.5a.75.75 0 0 0 1.06 0zM6.5 20a3.25 3.25 0 0 0 2.741 1.5h7.005a5.254 5.254 0 0 0 5.254-5.254V9.241A3.25 3.25 0 0 0 19.999 6.5v9.746A3.753 3.753 0 0 1 16.246 20z"/></svg>
            </div>
            {{-- Arrow --}}
            <div class="absolute -right-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"/></svg>
            </div>
            <h2 class="text-black font-poppins font-semibold text-sm text-center">Pilih Layanan Yang Dibutuhkan</h2>
            <p class="text-start text-black font-poppins text-sm">Di bagian layanan, Anda akan melihat berbagai pilihan layanan pengerjaan tugas yang kami tawarkan, seperti:
                Tugas Sekolah SD,
                Tugas Sekolah SMP,
                Tugas Sekolah SMA/SMK,
                Pilih layanan yang sesuai dengan kebutuhan Anda.</p>
        </div>
        <div class="col-span-1 shadow-2xl rounded-md relative text-black flex flex-col items-center gap-6 px-2 py-4  group">
            <div class="w-10 h-10 rounded-full text-white bg-blue-500 overflow-hidden absolute mx-auto -top-10 border-white flex items-center justify-center font-poppins font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M16 3a3 3 0 0 1 2.995 2.824L19 6v10h.75c.647 0 1.18.492 1.244 1.122l.006.128V19a3 3 0 0 1-2.824 2.995L18 22H8a3 3 0 0 1-2.995-2.824L5 19V9H3.25a1.25 1.25 0 0 1-1.244-1.122L2 7.75V6a3 3 0 0 1 2.824-2.995L5 3zm0 2H7v14a1 1 0 1 0 2 0v-1.75c0-.69.56-1.25 1.25-1.25H17V6a1 1 0 0 0-1-1m3 13h-8v1c0 .35-.06.687-.17 1H18a1 1 0 0 0 1-1zm-7-6a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2zm2-4a1 1 0 1 1 0 2h-4a1 1 0 0 1 0-2zM5 5a1 1 0 0 0-.993.883L4 6v1h1z"/></g></svg>
            </div>
            <h2 class="text-black font-poppins font-semibold text-sm text-center">Isi Formulir Pemesanan</h2>
            <p class="text-start text-black font-poppins text-sm">Setelah memilih layanan, Anda akan diarahkan ke formulir pemesanan. Isi dengan:
                1. Judul tugas,
                2. Deskripsi tugas,
                3. Deadline (tanggal & waktu),
                4. Jumlah halaman,
                5. Upload Foto Tugas
                6. Tentukan Metode Pembayaran.
                Pastikan informasi lengkap & Sesuai.</p>
        </div>
        <div class="col-span-1 shadow-2xl rounded-md relative text-black flex flex-col items-center justify-center gap-6 px-2 py-4  group">
            <div class="w-10 h-10 rounded-full text-white bg-blue-500 overflow-hidden absolute mx-auto -top-10 border-white flex items-center justify-center font-poppins font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32"><path fill="currentColor" d="M9 11a7 7 0 1 1 14 0a1 1 0 1 0 2 0a9 9 0 1 0-14.385 7.212a9 9 0 0 0 3.558 1.602a2 2 0 1 0 .216-2A7 7 0 0 1 9 11m1 0a6 6 0 1 1 7.913 5.689A3 3 0 0 0 16 16c-.727 0-1.393.259-1.913.689A6 6 0 0 1 10 11m6 11a3 3 0 0 0 2.83-4h5.67a3.5 3.5 0 0 1 3.5 3.5v.5c0 2.393-1.523 4.417-3.685 5.793C22.141 29.177 19.198 30 16 30s-6.14-.823-8.315-2.207C5.523 26.417 4 24.393 4 22v-.5A3.5 3.5 0 0 1 7.5 18h1.359a10 10 0 0 0 4.662 2.69c.54.791 1.45 1.31 2.479 1.31"/></svg>
            </div>
            {{-- Arrow --}}
            <div class="absolute -right-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"/></svg>
            </div>
            <h2 class="text-black font-poppins font-semibold text-sm text-center">Konsultasi</h2>
            <p class="text-start text-black font-poppins text-sm">Setelah mengisi formulir, Anda dapat berkonsultasi dengan tim kami via chat, email, atau telepon untuk memberikan Feedback ataupun Pertanyaan tambahan.</p>
        </div>
        <div class="col-span-1 shadow-2xl rounded-md relative text-black flex flex-col items-center justify-center gap-6 px-2 py-4  group">
            <div class="w-10 h-10 rounded-full text-white bg-blue-500 overflow-hidden absolute mx-auto -top-10 border-white flex items-center justify-center font-poppins font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 28 28"><path fill="currentColor" d="M5.754 5a3.75 3.75 0 0 0-3.75 3.75v.75H26v-.75A3.75 3.75 0 0 0 22.25 5zm-3.75 14.25V11H26v8.25A3.75 3.75 0 0 1 22.25 23H5.755a3.75 3.75 0 0 1-3.75-3.75M18.25 16.5a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5z"/></svg>
            </div>
            {{-- Arrow --}}
            <div class="absolute -right-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"/></svg>
            </div>
            <h2 class="text-black font-poppins font-semibold text-sm text-center">Pembayaran</h2>
            <p class="text-start text-black font-poppins text-sm">Setelah detail tugas dikonfirmasi, Anda akan menerima rincian biaya. Lakukan pembayaran melalui transfer bank atau e-wallet sesuai pilihan anda.</p>
        </div>
        <div class="col-span-1 shadow-2xl rounded-md relative text-black flex flex-col items-center gap-6 px-2 py-4  group">
            <div class="w-10 h-10 rounded-full text-white bg-blue-500 overflow-hidden absolute mx-auto -top-10 border-white flex items-center justify-center font-poppins font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M12.09 2.91C10.08.9 7.07.49 4.65 1.67L8.28 5.3c.39.39.39 1.02 0 1.41L6.69 8.3c-.39.4-1.02.4-1.41 0L1.65 4.67C.48 7.1.89 10.09 2.9 12.1a6.51 6.51 0 0 0 6.89 1.48l7.96 7.96a2.613 2.613 0 0 0 3.71 0a2.613 2.613 0 0 0 0-3.71L13.54 9.9c.92-2.34.44-5.1-1.45-6.99"/></svg>
            </div>
            <h2 class="text-black font-poppins font-semibold text-sm text-center">Proses Pengerjaan</h2>
            <p class="text-start text-black font-poppins text-sm">Setelah pembayaran diterima, kami akan menyelesaikan tugas anda. Anda akan menerima pembaruan secara berkala dan dapat memberikan instruksi tambahan kapan saja.</p>
        </div>
        <div class="col-span-1 shadow-2xl rounded-md relative text-black flex flex-col items-center gap-6 justify-center px-2 py-4  group">
            <div class="w-10 h-10 rounded-full text-white bg-blue-500 overflow-hidden absolute mx-auto -top-10 border-white flex items-center justify-center font-poppins font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor"><path d="M13.5 20s1 0 2 2c0 0 3.177-5 6-6M7 16h4m-4-5h8M6.5 3.5c-1.556.047-2.483.22-3.125.862c-.879.88-.879 2.295-.879 5.126v6.506c0 2.832 0 4.247.879 5.127C4.253 22 5.668 22 8.496 22h2.5m4.496-18.5c1.556.047 2.484.22 3.125.862c.88.88.88 2.295.88 5.126V13.5"/><path d="M6.496 3.75c0-.966.784-1.75 1.75-1.75h5.5a1.75 1.75 0 1 1 0 3.5h-5.5a1.75 1.75 0 0 1-1.75-1.75"/></g></svg>
            </div>
            {{-- Arrow --}}
            <div class="absolute -right-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"/></svg>
            </div>
            <h2 class="text-black font-poppins font-semibold text-sm text-center">Penyelesaian dan Pengiriman</h2>
            <p class="text-start text-black font-poppins text-sm">Setelah pengerjaan tugas selesai, kami akan memberikan informasi kepada anda secara berkala melalui email.</p>
        </div>
        <div class="col-span-1 shadow-2xl rounded-md relative text-black flex flex-col items-center justify-center gap-6 px-2 py-4  group">
            <div class="w-10 h-10 rounded-full text-white bg-blue-500 overflow-hidden absolute mx-auto -top-10 border-white flex items-center justify-center font-poppins font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M8.625 8.5h-4.5a1 1 0 0 1-1-1V3a1 1 0 0 1 2 0v3.5h3.5a1 1 0 0 1 0 2"/><path fill="currentColor" d="M21 13a1 1 0 0 1-1-1A7.995 7.995 0 0 0 5.08 8.001a1 1 0 0 1-1.731-1.002A9.995 9.995 0 0 1 22 12a1 1 0 0 1-1 1m-1.125 9a1 1 0 0 1-1-1v-3.5h-3.5a1 1 0 0 1 0-2h4.5a1 1 0 0 1 1 1V21a1 1 0 0 1-1 1"/><path fill="currentColor" d="M12 22A10.01 10.01 0 0 1 2 12a1 1 0 0 1 2 0a7.995 7.995 0 0 0 14.92 3.999a1 1 0 0 1 1.731 1.002A10.03 10.03 0 0 1 12 22"/></svg>
            </div>
            {{-- Arrow --}}
            <div class="absolute -right-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"/></svg>
            </div>
            <h2 class="text-black font-poppins font-semibold text-sm text-center">Revisi (Jika Diperlukan)</h2>
            <p class="text-start text-black font-poppins text-sm">Jika terdapat bagian yang perlu diperbaiki, Anda dapat meminta revisi. Kami akan melakukannya tanpa biaya tambahan hingga hasil sesuai dengan harapan Anda.</p>
        </div>
        <div class="col-span-1 shadow-2xl rounded-md relative text-black flex flex-col items-center gap-6 px-2 py-4  group">
            <div class="w-10 h-10 rounded-full text-white bg-blue-500 overflow-hidden absolute mx-auto -top-10 border-white flex items-center justify-center font-poppins font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m9.618 12.249l-3.814 3.814c-.293.293-.44.677-.44 1.06M9.619 22l-3.814-3.814a1.5 1.5 0 0 1-.44-1.061m13.395 0H5.365m-.124-9.751h13.394m-4.253-4.875l3.814 3.814c.293.293.44.677.44 1.06m-4.254 4.876l3.814-3.814c.293-.293.44-.677.44-1.061"/></svg>
            </div>
            <h2 class="text-black font-poppins font-semibold text-sm text-center">Konfirmasi & Umpan Balik</h2>
            <p class="text-start text-black font-poppins text-sm">Anda dapat meminta revisi tanpa biaya tambahan hingga hasil sesuai dengan harapan Anda.</p>
        </div>
        <div class="col-span-1 shadow-2xl rounded-md relative text-black flex flex-col items-center gap-6 px-2 py-4  group">
            <div class="w-10 h-10 rounded-full text-white bg-blue-500 overflow-hidden absolute mx-auto -top-10 border-white flex items-center justify-center font-poppins font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M20 17q.86 0 1.45.6t.58 1.4L14 22l-7-2v-9h1.95l7.27 2.69q.78.31.78 1.12q0 .47-.34.82t-.86.37H13l-1.75-.67l-.33.94L13 17zM16 3.23Q17.06 2 18.7 2q1.36 0 2.3 1t1 2.3q0 1.03-1 2.46t-1.97 2.39T16 13q-2.08-1.89-3.06-2.85t-1.97-2.39T10 5.3q0-1.36.97-2.3t2.34-1q1.6 0 2.69 1.23M.984 11H5v11H.984z"/></svg>
            </div>
            <h2 class="text-black font-poppins font-semibold text-sm text-center">Dukungan Lanjutan</h2>
            <p class="text-start text-black font-poppins text-sm">Kami siap memberikan dukungan lanjutan dan membantu dengan tugas akademik berikutnya. Tim kami selalu tersedia untuk menjawab pertanyaan Anda.</p>
        </div>
    </div>
</div>