<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Nicholaus Adhyatma Surya Kusuma',
        'email' => 'nicholausadhyatma@gmail.com',
        'job' => 'Web Developers',
        'image' => 'fotoSaya.jpg',
        'title' => 'About Me'
    ]);
});

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('berita/{berita:slug}', [BeritaController::class, 'detail']);

Route::get('category/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'berita' => $category->berita
    ]);
});

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'All Categories',
        'categories' => Category::all()
    ]);
});
