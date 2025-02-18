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
            <h2 class="text-2xl font-bold mb-2">Register</h2>
            <p class="text-gray-600 mb-6">Halo selamat datang</p>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="text-red-500 text-sm mb-4">
                        {{ $errors->first() }}
                    </div>
                @endif
                <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-lg mb-4 focus:border-blue-500 focus:ring focus:ring-blue-300 transition" placeholder="Username" required>
                <input type="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg mb-4 focus:border-blue-500 focus:ring focus:ring-blue-300 transition" placeholder="Email" required>
                <input type="password" name="password" class="w-full p-3 border border-gray-300 rounded-lg mb-4 focus:border-blue-500 focus:ring focus:ring-blue-300 transition" placeholder="Password" required>
                <input type="password" name="password_confirmation" class="w-full p-3 border border-gray-300 rounded-lg mb-4 focus:border-blue-500 focus:ring focus:ring-blue-300 transition" placeholder="Confirm Password" required>
                <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold shadow-md hover:bg-blue-600 transition">
                    REGISTER
                </button>
            </form>
            <p class="mt-4 text-sm text-center">Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a></p>
        </div>
    </div>
</div>
@endsection
