<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexPage()
    {
        return view('dashboard'); // Menggunakan nama file view tanpa slashes
    }

    public function galleri()
    {
        return view('galleri'); // Menggunakan nama file view tanpa slashes
    }
    public function detailcard()
    {
        return view('detailcard'); // Menggunakan nama file view tanpa slashes
    }
    public function kolaborator()
    {
        return view('kolaborator'); // Menggunakan nama file view tanpa slashes
    }
    public function katalog()
    {
        return view('katalog'); // Menggunakan nama file view tanpa slashes
    }
}

