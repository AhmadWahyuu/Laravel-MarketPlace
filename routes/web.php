<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlamatPengirimController;
use App\Http\Controllers\DasboardUserController;
use App\Http\Controllers\DasboardAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home',[
        'title'=>'Home',
        'active'=>'home'
    ]);
})->middleware('guest');
Route::get('/about', function () {
    return view('about',[
        'title'=>'About',
        'active'=>'about'
    ]);
})->middleware('guest');

Route::get('/market',[MarketController::class, 'index']);
Route::get('/market/{market:slug}',[MarketController::class, 'find']);

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
// route untuk mengeksekusi inputan user yang ingin login
Route::post('/login',[LoginController::class,'auth']);
// route untuk mengeluarkan akun user yang sedang login
Route::post('/logout',[LoginController::class,'logout']);

//route untuk menampilkan form registrasi
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
// mengeksekusi inputan user untuk registrasi
Route::post('/register',[RegisterController::class,'store']);

// halaman home yang bisa diakses oleh user yang sudah login
// middleware adalah sebuah pembatasan user
Route::middleware(['auth'])->group(function(){
    Route::get('/user/home',[DasboardUserController::class,'home']);
    Route::get('/user/market',[DasboardUserController::class,'market']);
    Route::get('/user/market/{market:slug}',[DasboardUserController::class,'produk']);

    Route::get('/user/order/{market:slug}',[DasboardUserController::class,'order']);
    Route::post('/user/checkout',[DasboardUserController::class,'checkout']);
    Route::get('/user/riwayat',[DasboardUserController::class, 'riwayat']);
    
    Route::get('/user/alamat',[AlamatPengirimController::class,'show']);
    Route::post('/user/alamat/{AlamatPengirim:id}',[AlamatPengirimController::class,'update']);
    Route::delete('/user/alamat/{AlamatPengirim:id}',[AlamatPengirimController::class,'destroy']);
    Route::post('/user/alamat',[AlamatPengirimController::class,'store']);
});

Route::middleware(['auth','IsAdmin'])->group(function(){
    // menampilkan halaman dashboard admin
    Route::get('/admin', [DasboardAdminController::class,'index']);
    // route untuk keluar akun dan berubah menjadi user guest(tamu)
    Route::post('/admin/logout',[DasboardAdminController::class, 'logout']);

    // menampilkan produk-produk yang ada di database
    Route::get('/admin/produk', [DasboardAdminController::class,'produk']);
    // menampilkan form menambahkan produk baru
    Route::get('/admin/produk/create', [DasboardAdminController::class,'createProduk']);
    //menambahkan produk baru kedalam database
    Route::post('/admin/produk/create', [DasboardAdminController::class,'store']);
    Route::get('/admin/category',[DasboardAdminController::class,'category']);
    Route::get('/admin/category/new',[DasboardAdminController::class,'newCategory']);
    Route::post('/admin/category/new',[DasboardAdminController::class,'storeCategory']);
    // router untuk menghapus produk pada database
    Route::delete('/admin/produk/{market:slug}', [DasboardAdminController::class,'destroy']);
    //menampilkan form edit
    Route::get('/admin/produk/edit/{market:slug}', [DasboardAdminController::class,'edit']);
    Route::post('/admin/produk/edit/{market:slug}', [DasboardAdminController::class,'update']);
    // menampilkan data detail produk
    Route::get('/admin/produk/show/{market:slug}',[DasboardAdminController::class,'show']);
    // menampilkan data orderan user
    Route::get('/admin/order',[DasboardAdminController::class,'showOrder']);
});