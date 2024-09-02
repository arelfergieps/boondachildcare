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
}
