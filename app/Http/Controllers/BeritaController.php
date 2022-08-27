<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\User;
use App\Models\Category;

class BeritaController extends Controller
{
    public function index()
    {
        $title = 'All Post Artikel';

        if (request('search')) $title = 'Search result : ' . request('search');

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            if ($author)
                $title .= ' by ' . $author->name;
        }

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            if ($category)
                $title .= ' in ' . $category->name;
        }

        return view('berita', [
            'title' => $title,
            'berita' => Berita::latest()->filter(request(['search', 'category', 'author']))
                ->paginate(7)->withQueryString()
        ]);
    }

    public function detail(Berita $berita)
    {
        return view('berita-detail', [
            'title' => $berita->title,
            'post' => $berita
        ]);
    }
}
