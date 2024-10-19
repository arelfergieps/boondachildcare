<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChildAdController extends Controller

{
    // Fungsi untuk menampilkan halaman admin
    public function index()
    {
        // Mengambil user yang sedang login
        $user = Auth::user();
        
        // Mengirim data user ke view
        return view('admin', compact('user'));
    }
}


