<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;



// Auth
Route::get('login',[AuthController:: class, 'showLogin'])->name('login');
Route::post('login',[AuthController:: class, 'prosesLogin']);
Route::get('logout',[AuthController:: class, 'logout']);
Route::get('signup',[AuthController:: class, 'Registration']);





// User
Route::get('/',[IndexController:: class, 'showIndex']);
Route::get('/index',[IndexController:: class, 'showIndex']);
Route::get('/detail',[IndexController:: class, 'showDetail']);
Route::get('/detail/{detail}',[IndexController:: class, 'showDetail']);






// admin
Route::get('beranda', [HomeController:: class, 'showBeranda']);
Route::get('jual-produk', [HomeController:: class, 'showJual']);
Route::get('kategori', [HomeController:: class, 'showKategori']);



// prefix----------------------------------------------
Route::prefix('admin')->middleware('auth')->group(function(){
		// produk
		Route::resource('produk',ProdukController:: class);
		// Kategori
		Route::resource('kategori',KategoriController:: class);
		//user
		Route::resource('user',UserController:: class);
});
// end prefix------------------------------------------