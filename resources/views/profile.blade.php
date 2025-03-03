@extends('layout.app')

@section('title', 'Profile')

@section('content')

<x-navbar></x-navbar>
<div class="flex h-screen mt-14">
    <main class="flex-1 p-8">
        <!-- Header -->
        <div class="bg-blue-400 p-20 rounded-lg shadow flex justify-start">
        </div>

        <!-- Profile Section -->
        <div class="mt-2 bg-white p-2 rounded-lg shadow flex">
            <!-- Profile Info -->
            <div class="w-1/4 text-center p-4 border rounded-3xl bg-gradient-to-t from-blue-500 via-blue-400 to-blue-0">
                <a href="{{ route('home') }}">
                    <i class="bi bi-arrow-left p-2 px-3 w-23 mr-20"></i>
                </a>
                <img id="preview" src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('default.png') }}" alt="Belum Diupload!" class="w-28 h-28 rounded-full mx-auto mt-2 shadow-lg">
                <h1 class="font-semibold flex justify-center mt-4">{{ $user->first_name }} {{ $user->last_name }}</h1>
                    <div>
                        <i class="bi bi-geo-alt"></i>
                        {{ $user->city }}
                    </div>
            </div>
            
            <!-- Profile Form -->
            <div class="w-3/4 p-4">
                <h2 class="text-xl font-semibold mb-4">Profil Anda</h2>
                <form class="space-y-4" action="{{ route('profile.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nama Depan</label>
                            <input type="text" name="first_name" class="w-full p-2 border rounded-lg" value="{{ old('first_name', $user->first_name) }}" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nama Belakang</label>
                            <input type="text" name="last_name" class="w-full p-2 border rounded-lg" value="{{ old('last_name', $user->last_name) }}" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">No Telepon</label>
                            <input type="text" name="phone_number" class="w-full p-2 border rounded-lg" value="{{ old('phone_number', $user->phone_number) }}" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Alamat Email</label>
                            <input type="email" name="email" class="w-full p-2 border rounded-lg" value="{{ old('email', $user->email) }}" readonly>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Kota</label>
                            <input type="text" name="city" class="w-full p-2 border rounded-lg" value="{{ old('city', $user->city) }}" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Kabupaten/Pulau</label>
                            <input type="text" name="state_country" class="w-full p-2 border rounded-lg" value="{{ old('state_country', $user->state_country) }}" required>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Kode Pos</label>
                            <input type="text" name="posscode" class="w-full p-2 border rounded-lg" value="{{ old('posscode', $user->posscode) }}" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Negara</label>
                            <input type="text" name="country" class="w-full p-2 border rounded-lg" value="{{ old('country', $user->country) }}" required>
                        </div>
                    </div>

                    <!-- File Upload -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Foto Profil</label>
                    <input type="file" name="profile_picture" class="w-full p-2 border rounded-lg" accept="image/*" onchange="previewImage(event)" required>
                </div>

                    <button type="submit" class="w-34 bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600">Update</button>
                </form>
            </div>
        </div>
    </main>
</div>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
