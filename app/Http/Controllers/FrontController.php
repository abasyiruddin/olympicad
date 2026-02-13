<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News; // Sesuaikan dengan nama Model Filament kalian

class FrontController extends Controller
{
    public function index()
    {
        // Ambil data terbaru
        $data = News::latest()->get();
        
        // Kirim ke view 'beranda'
        return view('beranda', ['semua_berita' => $data]);
    }

    public function tentang()
    {
        // Ambil data terbaru
        $data = News::latest()->get();
        
        // Kirim ke view 'beranda'
        return view('beranda', ['semua_berita' => $data]);
    }
}
