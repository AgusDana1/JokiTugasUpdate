@extends('layout.app')

@section('title', 'Forgot Password')

@section('content')
    <div class="flex justify-center items-center bg-gray-100 w-full h-screen">
        <div class="bg-white shadow-lg p-10 w-[450px] border border-gray-300 rounded-xl transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
            <h2 class="text-2xl font-bold text-center font-poppins mb-3">FORGOT PASSWORD</h2>
            <p class="text-gray-500 text-center mb-6 font-poppins text-sm">Masukkan email Anda, kami akan mengirimkan link reset password.</p>

            @if (session('status'))
                <div class="text-green-500 text-sm mb-4 text-center">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="text-red-500 text-sm mb-4 text-center">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1" for="email">Email</label>
                    <input type="email" name="email" id="email"
                        class="w-full p-3 border border-gray-300 rounded-lg bg-gray-100 focus:bg-white focus:ring-2 focus:ring-blue-300 focus:border-black-500 focus:outline-none transition-all duration-200 hover:bg-gray-200"
                        placeholder="Masukkan email Anda" required>
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 text-white py-3 rounded-lg font-semibold hover:bg-blue-600 hover:shadow-lg hover:scale-[1.02] transition-all text-sm shadow-md">
                    Kirim Link Reset Password
                </button>
            </form>

            <div class="text-center mt-6 text-sm">
                <a href="{{ route('login') }}" class="text-blue-500 hover:underline hover:text-blue-700 transition">
                    Kembali ke Login
                </a>
            </div>
        </div>
    </div>
@endsection
