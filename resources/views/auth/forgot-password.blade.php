@extends('layout.app')

@section('title', 'Forgot Password')

@section('content')
    <div class="flex justify-center items-center bg-white w-full h-screen">
        <div class="bg-white shadow-xl p-8 w-full border border-black rounded-lg">
            <h2 class="text-xl font-bold mb-2">Lupa Password?</h2>
            <p class="text-gray-600 mb-4 text-sm">Masukan email Anda, kami akan mengirimkan link reset password.</p>

            @if (session('status'))
                <div class="text-green-500 text-sm mb-4">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="text-red-500 text-sm mb-4">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <input type="email" name="email" class="w-full p-2 border border-blue-500 rounded-lg mb-4 text-sm" placeholder="Email" required>
                <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold hover:bg-blue-600 transition-all text-sm">
                    Kirim Link Reset Password
                </button>
            </form>

            <div class="text-center mt-4 text-sm">
                <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Kembali ke Login</a>
            </div>
        </div>
    </div>
@endsection