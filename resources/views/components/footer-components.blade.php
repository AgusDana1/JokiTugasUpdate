<footer class="bg-blue-500 text-white py-8">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        {{-- desktop --}}
        <div class="hidden md:flex flex-row items-center justify-between text-left mb-8">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('img/SHEETS LOGO1.jpg') }}" alt="Logo" class="w-12 h-12 md:w-16 md:h-16 rounded-full">
                <div>
                    <h2 class="text-xl md:text-2xl font-bold">Sheets Si Teman Tugasmu</h2>
                    <p class="text-base md:text-lg">Si Teman tugasmu</p>
                </div>
            </div>
            <div class="flex space-x-8 md:space-x-12">
                <!-- nomor -->
                <div class="flex items-center space-x-2 md:space-x-3">
                    <i class="bi bi-telephone-fill"></i>
                    <span class="text-sm md:text-lg">082146478465</span>
                </div>
                <!-- wa -->
                <div class="flex items-center space-x-2 md:space-x-3">
                    <i class="bi bi-whatsapp"></i>
                    <span class="text-sm md:text-lg">082146478465</span>
                </div>
                <!-- email -->
                <div class="flex items-center space-x-2 md:space-x-3">
                    <i class="bi bi-envelope"></i>
                    <span class="text-sm md:text-lg">sheetstemantugasmu@gmail.com</span>
                </div>
            </div>
        </div>
        
        {{-- mobile --}}
        <div class="flex flex-col items-center md:hidden text-center mb-6">
            <img src="{{ asset('img/SHEETS LOGO1.jpg') }}" alt="Logo" class="w-10 h-10 rounded-full">
            <h2 class="text-lg font-bold mt-2">Sheets Si Teman Tugasmu</h2>
            <p class="text-xs">Joki tugas sekolah anda</p>
        </div>
        
        <div class="grid grid-cols-1 md:hidden gap-4 mt-4 w-full max-w-xs mx-auto">
            <!-- nomor -->
            <div class="flex items-center justify-center space-x-2">
                <i class="bi bi-telephone-fill"></i>
                <span class="text-xs">082146478465</span>
            </div>
            <!-- wa -->
            <div class="flex items-center justify-center space-x-2">
                <i class="bi bi-whatsapp"></i>
                <span class="text-xs">082146478465</span>
            </div>
            <!-- email -->
            <div class="flex items-center justify-center space-x-2">
                <i class="bi bi-envelope"></i>
                <span class="text-xs">sheetssijoki@gmail.com</span>
            </div>
        </div>
    </div>
</footer>
