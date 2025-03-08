<nav id="navbar" class="bg-white shadow-md py-4 fixed top-0 w-full z-50  transition-transform duration-300" x-data="{ open: false }">
    <div class="mx-auto flex items-center space-x-4 px-4 font-poppins justify-between">
        <div class="flex items-center space-x-4 ml-4">
            <img class="rounded-full w-14 h-14" src="{{ asset('img/SHEETS LOGO1.jpg') }}" alt="Logo Sheets si Joki Tugas">
            <div>
                <h2 class="text-blue-600 font-semibold">Sheets Si Teman Tugasmu</h2>
                <p class="font-light text-sm">Si Teman tugasmu</p>
            </div>
        </div>

        {{-- navbar nav --}}
        <ul class="hidden md:flex gap-4 justify-between font-semibold">
            <li><a href="/"  class="{{ request()->is('/') ? 'text-blue-600 font-semibold after:w-full transition-all' : 'text-gray-900 font-semibold hover:text-blue-600' }}">Beranda</a></li>
            {{-- hanya bisa diakses user --}}
            @can('user')
            <li><a href="/caraOrder" class="{{ request()->is('caraOrder') ? 'text-blue-600 font-semibold' : 'text-gray-900 font-semibold hover:text-blue-600' }}">Cara Order</a></li>
            <li><a href="/blog" class="{{ request()->is('blog') ? 'text-blue-600 font-semibold' : 'text-gray-900 font-semibold hover:text-blue-600' }}">Blog</a></li>
            <li><a href="/contact" class="{{ request()->is('contact') ? 'text-blue-600 font-semibold' : 'text-gray-900 font-semibold hover:text-blue-600' }}">Kontak Kami</a></li>
            <li><a href="/payment" class="{{ request()->is('payment') ? 'text-blue-600 font-semibold' : 'text-gray-900 font-semibold hover:text-blue-600' }}">Order</a></li>
            <x-logout-component></x-logout-component>

            {{-- lonceng notifikasi --}}
            <div x-data="{ open: false, notifications: [] }" class="relative">
                <button @click="open = !open; fetchNotifications()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path fill="currentColor" d="M440.08 341.31c-1.66-2-3.29-4-4.89-5.93c-22-26.61-35.31-42.67-35.31-118c0-39-9.33-71-27.72-95c-13.56-17.73-31.89-31.18-56.05-41.12a3 3 0 0 1-.82-.67C306.6 51.49 282.82 32 256 32s-50.59 19.49-59.28 48.56a3.1 3.1 0 0 1-.81.65c-56.38 23.21-83.78 67.74-83.78 136.14c0 75.36-13.29 91.42-35.31 118c-1.6 1.93-3.23 3.89-4.89 5.93a35.16 35.16 0 0 0-4.65 37.62c6.17 13 19.32 21.07 34.33 21.07H410.5c14.94 0 28-8.06 34.19-21a35.17 35.17 0 0 0-4.61-37.66M256 480a80.06 80.06 0 0 0 70.44-42.13a4 4 0 0 0-3.54-5.87H189.12a4 4 0 0 0-3.55 5.87A80.06 80.06 0 0 0 256 480"/></svg>
                    <span x-show="notifications.length > 0" 
                          class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full px-1">
                        <span x-text="notifications.length"></span>
                    </span>
                </button>
            
                <div x-show="open" class="absolute bg-white shadow-md rounded-md mt-2 w-64 z-50">
                    <ul class="p-2">
                        <template x-for="notification in notifications" :key="notification.id">
                            <li @click="notification.data.url ? window.location.href = notification.data.url : null"
                                class="p-2 border-b cursor-pointer hover:bg-gray-100" 
                                x-text="notification.data.message">
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
            @endcan

            {{-- Hanya tampilkan Order jika user adalah admin --}}
            @can('admin')
                <li><a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'text-blue-600 font-semibold' : 'text-gray-900 font-semibold hover:text-blue-600' }}">Dashboard Admin</a></li>
                <x-logout-component></x-logout-component>

                {{-- lonceng notifikasi --}}
            <div x-data="{ open: false, notifications: [] }" class="relative">
                <button @click="open = !open; fetchNotifications()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path fill="currentColor" d="M440.08 341.31c-1.66-2-3.29-4-4.89-5.93c-22-26.61-35.31-42.67-35.31-118c0-39-9.33-71-27.72-95c-13.56-17.73-31.89-31.18-56.05-41.12a3 3 0 0 1-.82-.67C306.6 51.49 282.82 32 256 32s-50.59 19.49-59.28 48.56a3.1 3.1 0 0 1-.81.65c-56.38 23.21-83.78 67.74-83.78 136.14c0 75.36-13.29 91.42-35.31 118c-1.6 1.93-3.23 3.89-4.89 5.93a35.16 35.16 0 0 0-4.65 37.62c6.17 13 19.32 21.07 34.33 21.07H410.5c14.94 0 28-8.06 34.19-21a35.17 35.17 0 0 0-4.61-37.66M256 480a80.06 80.06 0 0 0 70.44-42.13a4 4 0 0 0-3.54-5.87H189.12a4 4 0 0 0-3.55 5.87A80.06 80.06 0 0 0 256 480"/></svg>
                    <span x-show="notifications.length > 0" 
                          class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full px-1">
                        <span x-text="notifications.length">0</span>
                    </span>
                </button>
            
                <div x-show="open" class="absolute bg-white shadow-md rounded-md mt-2 w-64 z-50">
                    <ul class="p-2">
                        <template x-for="notification in notifications" :key="notification.id">
                            <li @click="notification.data.url ? window.location.href = notification.data.url : null"
                                class="p-2 border-b cursor-pointer hover:bg-gray-100" 
                                x-text="notification.data.message">
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
            @endcan

            {{-- Hanya tampilkan dashboad Penjoki jika user adalah Penjoki --}}
            @can('penjoki')
            <li><a href="/penjoki/dashboard" class="{{ request()->is('penjoki/dashboard') ? 'text-blue-600 font-semibold' : 'text-gray-900 font-semibold hover:text-blue-600' }}">Dashboard Penjoki</a></li>
            <x-logout-component></x-logout-component>
            @endcan

            {{-- User Profile --}}
            @auth
                <div class="relative flex" id="profile-container"> 
                    <button class="relative flex items-center focus:outline-none" id="profile-button">
                        <a href="{{ route('profile') }}">
                            <img class="w-8 h-8 rounded-full border-2 border-gray-300" src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('svg/mdi--user.svg') }}" alt="User">
                        </a>
                    </button>
                </div>
        @endauth
        </ul>

        {{-- Mobile Menu Button --}}
        <button class="md:hidden flex items-center" id="mobile-button" @click="open = !open">
            <i class="bi bi-list text-4xl"></i>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="open" class="md:hidden bg-white shadow-md py-4 absolute top-30 w-full z-20 transition-transform duration-300" @click.away="open = false" x-transition.duration.400ms>
        <ul class="flex flex-col gap-4 px-4 font-semibold">
            <li><a href="/" class="{{ request()->is('/') ? 'text-blue-600 font-semibold' : 'text-gray-900 font-semibold hover:text-blue-600' }}">Beranda</a></li>
            {{-- Hanya bisa diakses user --}}
            @can('user')
            <li><a href="/caraOrder" class="{{ request()->is('caraOrder') ? 'text-blue-600 font-semibold' : 'text-gray-900 font-semibold hover:text-blue-600' }}">Cara Order</a></li>
            <li><a href="/blog" class="{{ request()->is('blog') ? 'text-blue-600 font-semibold' : 'text-gray-900 font-semibold hover:text-blue-600' }}">Blog</a></li>
            <li><a href="/contact" class="{{ request()->is('contact') ? 'text-blue-600 font-semibold' : 'text-gray-900 font-semibold hover:text-blue-600' }}">Kontak Kami</a></li>
            <li><a href="/payment" class="{{ request()->is('payment') ? 'text-blue-600 font-semibold' : 'text-gray-900 font-semibold hover:text-blue-600' }}">Order</a></li>
            <x-logout-component></x-logout-component>
            {{-- lonceng notifikasi --}}
            <div x-data="{ open: false, notifications: [] }" class="relative">
                <button @click="open = !open; fetchNotifications()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path fill="currentColor" d="M440.08 341.31c-1.66-2-3.29-4-4.89-5.93c-22-26.61-35.31-42.67-35.31-118c0-39-9.33-71-27.72-95c-13.56-17.73-31.89-31.18-56.05-41.12a3 3 0 0 1-.82-.67C306.6 51.49 282.82 32 256 32s-50.59 19.49-59.28 48.56a3.1 3.1 0 0 1-.81.65c-56.38 23.21-83.78 67.74-83.78 136.14c0 75.36-13.29 91.42-35.31 118c-1.6 1.93-3.23 3.89-4.89 5.93a35.16 35.16 0 0 0-4.65 37.62c6.17 13 19.32 21.07 34.33 21.07H410.5c14.94 0 28-8.06 34.19-21a35.17 35.17 0 0 0-4.61-37.66M256 480a80.06 80.06 0 0 0 70.44-42.13a4 4 0 0 0-3.54-5.87H189.12a4 4 0 0 0-3.55 5.87A80.06 80.06 0 0 0 256 480"/></svg>
                    <span x-show="notifications.length > 0" 
                          class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full px-1">
                        <span x-text="notifications.length"></span>
                    </span>
                </button>
            
                <div x-show="open" class="absolute bg-white shadow-md rounded-md mt-2 w-64 z-50">
                    <ul class="p-2">
                        <template x-for="notification in notifications" :key="notification.id">
                            <li @click="notification.data.url ? window.location.href = notification.data.url : null"
                                class="p-2 border-b cursor-pointer hover:bg-gray-100" 
                                x-text="notification.data.message">
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
            @endcan

            {{-- Hanya tampilkan dashboard admin jika user adalah admin dan order diclose --}}
            @can('admin')
                <li><a href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'text-blue-600 font-semibold' : 'text-gray-900 font-semibold hover:text-blue-600' }}">Dashboard Admin</a></li>
                <x-logout-component></x-logout-component>

                <div x-data="{ open: false, notifications: [] }" class="relative">
                    <button @click="open = !open; fetchNotifications()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path fill="currentColor" d="M440.08 341.31c-1.66-2-3.29-4-4.89-5.93c-22-26.61-35.31-42.67-35.31-118c0-39-9.33-71-27.72-95c-13.56-17.73-31.89-31.18-56.05-41.12a3 3 0 0 1-.82-.67C306.6 51.49 282.82 32 256 32s-50.59 19.49-59.28 48.56a3.1 3.1 0 0 1-.81.65c-56.38 23.21-83.78 67.74-83.78 136.14c0 75.36-13.29 91.42-35.31 118c-1.6 1.93-3.23 3.89-4.89 5.93a35.16 35.16 0 0 0-4.65 37.62c6.17 13 19.32 21.07 34.33 21.07H410.5c14.94 0 28-8.06 34.19-21a35.17 35.17 0 0 0-4.61-37.66M256 480a80.06 80.06 0 0 0 70.44-42.13a4 4 0 0 0-3.54-5.87H189.12a4 4 0 0 0-3.55 5.87A80.06 80.06 0 0 0 256 480"/></svg>
                        <span x-show="notifications.length > 0" 
                              class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full px-1">
                            <span x-text="notifications.length"></span>
                        </span>
                    </button>
                
                    <div x-show="open" class="absolute bg-white shadow-md rounded-md mt-2 w-64 z-50">
                        <ul class="p-2">
                            <template x-for="notification in notifications" :key="notification.id">
                                <li @click="notification.data.url ? window.location.href = notification.data.url : null"
                                    class="p-2 border-b cursor-pointer hover:bg-gray-100" 
                                    x-text="notification.data.message">
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>
            @endcan

            {{-- Hanya tampilkan dashboad Penjoki jika user adalah Penjoki --}}
            @can('penjoki')
            <li><a href="/penjoki/dashboard" class="{{ request()->is('penjoki/dashboard') ? 'text-blue-600 font-semibold' : 'text-gray-900 font-semibold hover:text-blue-600' }}">Dashboard Penjoki</a></li>
            <x-logout-component></x-logout-component>
            @endcan

            @auth
            {{-- User Profile --}}
            <div class="relative" id="profile-container"> 
                <button class="relative flex items-center focus:outline-none" id="profile-button">
                    <a href="{{ route('profile') }}">
                        <img class="w-8 h-8 rounded-full border-2 border-gray-300" src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('svg/mdi--user.svg') }}" alt="User">
                    </a>
                </button>
            </div>
        @endauth
        </ul>
    </div>
</nav>

{{-- Javascript --}}
<script>
    let lastScrollTop = 0;
    const navbar = document.getElementById('navbar');
    // navbar scroller
    window.addEventListener('scroll', function () {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            navbar.style.transform = 'translateY(-100%)';
        } else {
            navbar.style.transform = 'translateY(0)';
        }
        lastScrollTop = scrollTop;
    });

    // Animate mobile menu toggle
    const mobileMenu = document.querySelector('[x-show="open"]');
    const toggleButton = document.getElementById('mobile-button');

    toggleButton.addEventListener('click', () => {
        mobileMenu.style.transform = mobileMenu.style.transform === 'scaleY(1)' ? 'scaleY(0)' : 'scaleY(1)';
        mobileMenu.style.transformOrigin = 'top';
        mobileMenu.style.transition = 'transform 0.3s ease';
    });

    const profileContainer = document.getElementById('profile-container');
    const profileButton = document.getElementById('profile-button');

    // profile dropdown
    if(profileButton) {
        profileButton.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    } else {
        console.error('Element with ID profile-container not found');
    }

    function fetchNotifications() {
    fetch('/notifications')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            if (!Array.isArray(data)) {
                console.error('Notifications response is not an array', data);
                return;
            }.
            
            Alpine.store('notificationsStore', data);
        })
        .catch(error => {
            console.error('Fetch notifications failed:', error);
        });
}
// Inisialisasi store untuk Alpine.js
document.addEventListener('alpine:init', () => {
    Alpine.store('notificationsStore', []);
});
</script>
