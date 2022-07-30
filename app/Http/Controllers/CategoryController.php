<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'All Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    }
    public function detail(Category $category)
    {
        return view('berita', [
            'title' => "Post By Category : ".$category->name,
            'active' => 'berita',
            'berita' => $category->berita->load('author', 'category')
        ]);
    }
}
