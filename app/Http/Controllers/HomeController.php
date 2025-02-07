<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Menampilkan halaman home dengan data pengguna
    public function index()
    {
        $user = Auth::user(); // Mengambil data pengguna yang sedang login
        return view('client.landing.home', compact('user')); // Kirim data pengguna ke tampilan
    }
}
