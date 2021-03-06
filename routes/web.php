<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupplierController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//--------------------------PRAKTIKUM 1------------------------
// Route::get('/', [HomeController::class, 'home']);
// Route::prefix('product')->group(function () {
//     Route::get('/halaman1', [HomeController::class, 'product']);
// });
// Route::get('/news/{param}',[HomeController::class,'news']);
// Route::prefix('program')->group(function () {
//     Route::get('/halaman1', [HomeController::class, 'program']);
// });
// Route::get('/about-us', [HomeController::class, 'aboutUs']);
// Route::get('/contact-us', [HomeController::class, 'contactUs']);

//--------------------------PRAKTIKUM 2------------------------
    Route::get('/', [HomeController::class, 'home']);
    Route::get('/about', [HomeController::class, 'about']);
    Route::get('/features', [HomeController::class, 'features']);
    Route::get('/contact', [HomeController::class, 'contact']);

//-------------------------Kuis 1-------------------------------
    Route::get('/barang', [BarangController::class, 'index']);
    Route::get('/pelanggan', [PelangganController::class, 'index']);
    Route::get('/pegawai', [PegawaiController::class, 'index']);
    Route::get('/supplier', [SupplierController::class, 'index']);
