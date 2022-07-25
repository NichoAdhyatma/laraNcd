<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index() {
        return view('berita', [
            'title' => 'Artikel',
            'berita' => Berita::all()
        ]);
    }

    public function detail(Berita $berita) {
        return view('berita-detail', [
            'title' => $berita->title,
            'post' => $berita
        ]);
    }
}
