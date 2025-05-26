<?php

use App\Http\Controllers\KasirController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LogMasukController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produk', ProdukController::class);
Route::resource('transaksi', KasirController::class);
Route::resource('logmasuk', LogMasukController::class);
Route::resource('kasir', KasirController::class);