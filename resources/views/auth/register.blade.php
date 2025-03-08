@extends('layout.app')

@section('title', 'Register')

@section('content')
<div class="flex justify-center items-center w-full h-screen bg-gray-100 ">
    <div class="bg-white shadow-xl flex flex-col md:flex-row w-full h-full">
        <!-- Bagian Kiri -->
        <div class="bg-gradient-to-b from-blue-500 via-blue-400 to-blue-0 text-white p-8 flex flex-col justify-center items-center w-full md:w-1/2">
            <img src="{{ asset('img/SHEETS LOGO1.jpg') }}" alt="Logo" 
            class="w-14 h-14 md:w-20 md:h-20 rounded-full mb-3 shadow-lg object-contain">
                <div class="w-40 border-b-2 border-white mb-3"></div>
                    <h2 class="text-lg md:text-4xl font-bold text-center">SELAMAT DATANG</h2>
                        <p class="text-sm md:text-xl text-center">Di Sheets si teman tugasmu</p>
                        </div>

        <!-- Bagian Kanan -->
        <div class="p-6 my-auto w-full md:w-1/2 flex flex-col justify-center">
            <h2 class="text-2xl font-bold mb-2 font-poppins">Register</h2>
            <p class="text-gray-600 mb-6">Halo Selamat Datang 🙌, Daftarkan akun anda terlebih dahulu.</p>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="text-red-500 text-sm mb-4">
                        {{ $errors->first() }}
                    </div>
                @endif
                <input type="text" name="name" class="w-full p-3 border border-blue-400 rounded-lg mb-4 focus:border-blue-500 focus:ring focus:ring-blue-300 transition" placeholder="Username" required>
                <input type="email" name="email" class="w-full p-3 border border-blue-400 rounded-lg mb-4 focus:border-blue-500 focus:ring focus:ring-blue-300 transition" placeholder="Email" required>
                <!-- Password dengan fitur show/hide -->
                <div x-data="{ show: false }" class="relative mb-4">
                    <input :type="show ? 'text' : 'password'" name="password" class="w-full p-3 border border-blue-400 rounded-lg focus:border-blue-500 focus:ring focus:ring-blue-300 transition text-sm md:text-base" placeholder="Password" required>
                    <button type="button" @click="show = !show" class="absolute inset-y-0 right-3 flex items-center text-gray-500">
                        <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"><path fill="currentColor" d="M11.83 9L15 12.16V12a3 3 0 0 0-3-3zm-4.3.8l1.55 1.55c-.05.21-.08.42-.08.65a3 3 0 0 0 3 3c.22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.41.53-2.2.53a5 5 0 0 1-5-5c0-.79.2-1.53.53-2.2M2 4.27l2.28 2.28l.45.45C3.08 8.3 1.78 10 1 12c1.73 4.39 6 7.5 11 7.5c1.55 0 3.03-.3 4.38-.84l.43.42L19.73 22L21 20.73L3.27 3M12 7a5 5 0 0 1 5 5c0 .64-.13 1.26-.36 1.82l2.93 2.93c1.5-1.25 2.7-2.89 3.43-4.75c-1.73-4.39-6-7.5-11-7.5c-1.4 0-2.74.25-4 .7l2.17 2.15C10.74 7.13 11.35 7 12 7"/></svg>
                        <svg x-show="show" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 576 512"><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19M288 400a144 144 0 1 1 144-144a143.93 143.93 0 0 1-144 144m0-240a95.3 95.3 0 0 0-25.31 3.79a47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160"/></svg>
                    </button>
                </div>

                {{-- Password Confirmation --}}
                <div x-data="{show: false}" class="relative mb-4">
                    <input :type="show ? 'text' : 'password'" name="password_confirmation" class="w-full p-3 border border-blue-400 rounded-lg focus:border-blue-500 focus:ring focus:ring-blue-300 transition text-sm md:text-base" placeholder="Confirm Password" required>
                    <button type="button" @click="show = !show" class="absolute inset-y-0 right-3 flex items-center text-gray-500">
                        <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"><path fill="currentColor" d="M11.83 9L15 12.16V12a3 3 0 0 0-3-3zm-4.3.8l1.55 1.55c-.05.21-.08.42-.08.65a3 3 0 0 0 3 3c.22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.41.53-2.2.53a5 5 0 0 1-5-5c0-.79.2-1.53.53-2.2M2 4.27l2.28 2.28l.45.45C3.08 8.3 1.78 10 1 12c1.73 4.39 6 7.5 11 7.5c1.55 0 3.03-.3 4.38-.84l.43.42L19.73 22L21 20.73L3.27 3M12 7a5 5 0 0 1 5 5c0 .64-.13 1.26-.36 1.82l2.93 2.93c1.5-1.25 2.7-2.89 3.43-4.75c-1.73-4.39-6-7.5-11-7.5c-1.4 0-2.74.25-4 .7l2.17 2.15C10.74 7.13 11.35 7 12 7"/></svg>
                        <svg x-show="show" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 576 512"><path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19M288 400a144 144 0 1 1 144-144a143.93 143.93 0 0 1-144 144m0-240a95.3 95.3 0 0 0-25.31 3.79a47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160"/></svg>
                    </button>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold shadow-md hover:bg-blue-600 transition">
                    REGISTER
                </button>
            </form>
            <p class="mt-4 text-sm text-center">Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500 ">Login</a></p>
        </div>
    </div>
</div>
@endsection
