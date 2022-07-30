<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita', [
            'title' => 'All Post Artikel',
            'active' => 'berita',
            // 'berita' => Berita::all()
            'berita' => Berita::latest()->get()
        ]);
    }

    public function detail(Berita $berita)
    {
        return view('berita-detail', [
            'title' => $berita->title,
            'active' => 'berita',
            'post' => $berita
        ]);
    }
}
