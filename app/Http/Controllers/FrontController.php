<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News; // Sesuaikan dengan nama Model Filament kalian

class FrontController extends Controller
{
    public function beranda()
    {
        // Ambil data terbaru
        $data = News::latest()->take(3)->get();
        
        // Kirim ke view 'beranda'
        return view('beranda', ['semua_berita' => $data]);
    }
    
    public function profil()
    {
        
        // Kirim ke view 'beranda'
        return view('profil');
    }

    public function tentang()
    {
        
        // Kirim ke view 'beranda'
        return view('tentang');
    }

    public function chatbot()
    {
        
        // Kirim ke view 'beranda'
        return view('chatbot');
    }

    public function kontak()
    {
        
        // Kirim ke view 'beranda'
        return view('kontak');
    }
}
