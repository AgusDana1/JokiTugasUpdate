@extends('layout.app')

@section('title', 'Login')

@section('content')
<div class="flex justify-center items-center bg-black w-full h-screen">
    <div class="bg-white shadow-xl flex flex-col md:flex-row w-full h-full border border-black">

        <!-- Bagian kiri -->
        <div class="bg-gradient-to-b from-blue-500 via-blue-400 to-blue-0 text-white p-8 flex flex-col justify-center items-center w-full md:w-1/2">
            <img src="{{ asset('img/SHEETS LOGO1.jpg') }}" 
                alt="Logo" 
                class="w-14 h-14 md:w-20 md:h-20 rounded-full mb-3 shadow-lg object-contain">
            <div class="w-40 border-b-2 border-white mb-3"></div>
            <h2 class="text-lg md:text-4xl font-bold">SELAMAT DATANG</h2>
            <p class="text-sm md:text-xl">Di Sheets si teman tugasmu</p>
        </div>

        <!-- Bagian kanan -->
        <div class="p-6 my-auto md:p-10 w-full md:w-1/2">
            <h2 class="text-xl md:text-xl font-bold mb-2">Halo, Selamat Datang Kembali.🙌</h2>
            <p class="text-gray-600 text-sm md:text-base mb-6">Masuk kembali ke akunmu!</p>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="text-red-500 text-sm mb-4">
                        {{ $errors->first() }}
                    </div>
                @endif
                <input type="email" name="email" class="w-full p-3 border border-blue-400 rounded-lg mb-4 focus:border-blue-500 focus:ring focus:ring-blue-300 transition text-sm md:text-base" placeholder="Email" required>
                <input type="password" name="password" class="w-full p-3 border border-blue-400 rounded-lg mb-4 focus:border-blue-500 focus:ring focus:ring-blue-300 transition text-sm md:text-base" placeholder="Password" required>

                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4 text-xs md:text-sm">
                    <label class="flex items-center mb-2 md:mb-0">
                        <input type="checkbox" name="remember" class="mr-2"> Remember me
                    </label>
                    <a href="{{ route("password.request") }}" class="text-blue-500 hover:underline">Forgot Password?</a>
                </div>

                <!-- Tombol Login -->
                <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold shadow-md hover:bg-blue-600 transition text-sm md:text-base">
                    LOGIN
                </button>
            </form>

            <div class="text-center mt-6">
                <p class="text-gray-500 text-xs md:text-sm">atau dengan</p>
                <!-- Tombol Google -->
                <a href="{{ route('auth.google') }}">
                    <button class="bg-gray-200 px-4 py-3 rounded-lg w-full mt-2 flex justify-center items-center shadow-md hover:bg-gray-300 transition gap-3 text-sm md:text-base">
                        <img src="{{ asset('img/ggl.png') }}" alt="Google" 
                             class="w-4 h-4 md:w-5 md:h-5 max-w-[20px] max-h-[20px] object-contain flex-shrink-0"> 
                        <span class="text-gray-700 font-medium">Google</span>
                    </button>
                </a>
                <p class="mt-4 text-xs md:text-sm">Belum punya akun? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Register</a></p>
            </div>
        </div>
    </div>
</div>
@endsection