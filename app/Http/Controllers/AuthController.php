<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // REGISTER / SIGNUP
    public function register(Request $request)
{
    // Validasi input
    $request->validate([
        'nama_lengkap' => 'required|string|max:100',
        'no_telp' => 'nullable|string|max:15', // Bisa kosong
        'email' => 'required|email|unique:tbl_user,email|max:100',
        'password' => 'required|min:6', 
    ]);

    // Simpan ke database
    User::create([
        'nama_lengkap' => $request->nama_lengkap,
        'no_telp' => $request->no_telp ?? null, // Jika kosong, set null
        'email' => $request->email,
        'password' => Hash::make($request->password), // Enkripsi password
        'level' => 'user', // Default user
    ]);

    return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Silakan login.');
}


    // LOGIN
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Login berhasil!');
        }

        return redirect()->back()->with('error', 'Email atau password salah!');
    }

    // LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Anda telah logout.');
    }

    // HAPUS AKUN SENDIRI
    public function deleteAccount()
    {
        $user = Auth::user();
        if ($user) {
            $user->delete();
            Auth::logout();
            return redirect('/')->with('message', 'Akun Anda telah dihapus.');
        }
        return redirect()->back()->with('error', 'Gagal menghapus akun.');
    }
}
