<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;


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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/beritas/checkSlug', [DashboardBeritaController::class, 'createSlug'])->middleware('auth');
Route::resource('/dashboard/beritas', DashboardBeritaController::class)->middleware('auth');

