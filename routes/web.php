<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Nicholaus Adhyatma Surya Kusuma',
        'active' => 'about',
        'email' => 'nicholausadhyatma@gmail.com',
        'job' => 'Web Developers',
        'image' => 'fotoSaya.jpg',
        'title' => 'About Me'
    ]);
});

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('berita/{berita:slug}', [BeritaController::class, 'detail']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('category/{category:slug}', [CategoryController::class, 'detail']);

Route::get('/author/{author:username}', [AuthorController::class, 'index']);
