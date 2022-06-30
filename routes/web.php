<?php

use App\Http\Controllers\InternetController;
use App\Http\Controllers\MasaAktifController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// ========== Route For Admin ==============
Route::middleware(['access'])->group (function() {
    Route::view('/dashboard', 'admin.home')->name('dashboard');
    Route::view('/dashboard/home', 'admin.home');
    // Route::get('/dashboard/masa-aktif', [MasaAktifController::class, 'index'])->name('index');
    // Route::get('/dashboard/masa-aktif', [MasaAktifController::class, 'create'])->name('create');
    Route::resource('/dashboard/data', MasaAktifController::class);
    Route::resource('/dashboard/pengguna', PenggunaController::class);
    Route::get('/pengguna-delete/{id}', 'App\Http\Controllers\PenggunaController@destroy')->name("hapus");
    Route::resource('/dashboard/internet', InternetController::class);
    Route::get('/internet-delete/{id}', 'App\Http\Controllers\InternetController@destroy');
    Route::view('/dashboard/pembayaran', 'admin.pembayaran.index');
    Route::view('/dashboard/todo', 'admin.todo.index');
    Route::view('/dashboard/masa-aktif', 'admin.masa-aktif.index');

});

// ========== Route For landing ==============
Route::view('/', 'landing.home');
Route::view('/home', 'landing.home');
Route::view('/about', 'landing.about');
Route::view('/service', 'landing.service');
Route::view('/contact', 'landing.contact');

// ========== Route For auth user ==============


// ========== Route For Middleware user ==============
// Route::group(['middleware' => ['auth']], function () {
//     Route::middleware(['auth', 'isAdmin'])->group(function(){
//         Route::resource('admin', AdminController::class);
//     });
//     Route::group(['middleware' => ['cek_login:admin']], function () {
//         Route::resource('admin', AdminController::class);
//     });
//     Route::group(['middleware' => ['cek_login:user']], function () {
//         Route::resource('landing', AdminController::class);
//     });
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/after-register', 'after_reg');
