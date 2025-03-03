@extends('layout.app')

@section('title', 'Reset Password')

@section('content')
<div class="flex justify-center items-top bg-black w-full h-screen">
    <div class="bg-white shadow-xl p-4 w-full rounded-lg">
        <h2 class="text-xl font-bold mb-2">Reset Password</h2>
        <p class="text-gray-600 mb-2 text-sm">Masukan password baru Anda.</p>

        @if ($errors->any())
            <div class="text-red-500 text-sm mb-2">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="email" name="email" class="w-full p-3 border border-blue-400 rounded-lg mb-4 text-sm" placeholder="Email" required>
            <input type="password" name="password" class="w-full p-3 border border-blue-400 rounded-lg mb-4 text-sm" placeholder="Password Baru" required>
            <input type="password" name="password_confirmation" class="w-full p-3 border border-blue-400 rounded-lg mb-4 text-sm" placeholder="Konfirmasi Password" required>

            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold hover:bg-blue-600 transition-all text-sm">
                Reset Password
            </button>
        </form>
    </div>
</div>
@endsection