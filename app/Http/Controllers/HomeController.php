<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data = Berita::where('category_id', 1)->get(['title', 'slug', 'category_id']);
        return view('home', [
            'title' => 'Home',
            'berita' => $data,
            'count_data' => $data->count()
        ]);
    }
}
