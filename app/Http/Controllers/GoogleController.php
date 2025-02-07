<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    // Mengarahkan pengguna ke halaman login Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Menangani callback setelah login melalui Google
    public function handleGoogleCallback(Request $request)
    {
        $googleUser = Socialite::driver('google')->user();

        // Cek apakah pengguna sudah ada di database
        $user = User::where('email', $googleUser->getEmail())->first();

        if (!$user) {
            // Jika pengguna baru, buat akun
            $user = User::create([
                'nama_lengkap' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'no_telp' => '', // Atau bisa menggunakan null jika kolom sudah mendukung NULL
                'password' => bcrypt(Str::random(16)), // Menggunakan Str::random
                'level' => 'user', // Set level user atau sesuai kebutuhan 
            ]);
        }

        // Login pengguna ke aplikasi
        Auth::login($user);

        // Redirect ke halaman dashboard atau halaman lain setelah login sukses
        return redirect()->route('home');
    }
}
