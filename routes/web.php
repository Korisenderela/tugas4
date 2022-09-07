<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('login', function () {
    return view('login');
});
Route::get('template', function () {
    return view('template.base');
});

Route::get('beranda', function () {
    return view('beranda');
});
Route::get('produk', function () {
    return view('produk');
});
Route::get('kategori', function () {
    return view('kategori');
});

Route::get('produk' , [ProdukController::class, 'index']);
Route::get('produk/create' , [ProdukController::class, 'create']);
Route::post('produk' , [ProdukController::class, 'store']);
Route::get('produk/{produk}' , [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit' , [ProdukController::class, 'edit']);
Route::put('produk/{produk}' , [ProdukController::class, 'update']);
Route::delete('produk/{produk}' , [ProdukController::class, 'destroy']);
Route::get('index', [ClientController::class, 'showIndex']);