<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index(User $author)
    {
        return view('berita', [
            'title' => 'Post By Author : ' . $author->name ,
            'active' => 'berita',
            'berita' => $author->Berita->load('category', 'author')
        ]);
    }
}
