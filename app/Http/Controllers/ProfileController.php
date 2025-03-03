<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', ['user' => Auth::user()]);
    }

    public function upload(Request $request)
    {
        $user = Auth::user();

        // Validasi data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone_number' => 'nullable|string|max:20',
            'city' => 'nullable|string|max:255',
            'state_country' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'posscode' => 'nullable|string|max:10',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        // Jika ada file gambar diunggah, hapus yang lama lalu simpan yang baru
        if($request->hasFile('profile_picture') && $request->file('profile_picture')->isValid()) {
            if ($user->profile_picture) {
                Storage::disk('public')->delete($user->profile_picture);
            }

            // Simpan foto baru
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $path;
        }

        // Simpan data profil
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->city = $request->city;
        $user->state_country = $request->state_country;
        $user->country = $request->country;
        $user->posscode = $request->posscode;
    
        // Simpan perubahan
        $user->save();

        return redirect()->route('profile')->with('success', 'Profile berhasil diperbarui');
    }
}
