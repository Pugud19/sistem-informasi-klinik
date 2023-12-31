<?php

use App\Http\Controllers\GajiController;
use App\Http\Controllers\InternetController;
use App\Http\Controllers\MasaAktifController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\TindakanController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WilayahController;
use App\Models\Pembayaran;
use App\Models\Pengguna;
use App\Models\Tindakan;
use App\Models\Wilayah;
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
    // Route::resource('/dashboard/data', MasaAktifController::class);
    Route::resource('/dashboard/pengguna', PenggunaController::class);
    Route::get('/dashboard/penggunas', [PenggunaController::class, 'search'])->name('search');

    Route::get('/pengguna-delete/{id}', 'App\Http\Controllers\PenggunaController@destroy')->name("hapus");
    Route::resource('/dashboard/wilayah', WilayahController::class);
    Route::get('/wilayah-delete/{id}', 'App\Http\Controllers\WilayahController@destroy');
    Route::resource('/dashboard/tagihan', TagihanController::class);
    Route::get('/tagihan-delete/{id}', 'App\Http\Controllers\TagihanController@destroy');
    Route::resource('/dashboard/obat', ObatController::class);
    Route::get('/obat-delete/{id}', 'App\Http\Controllers\ObatController@destroy');
    // Route::view('/dashboard/masa-aktif', 'admin.masa-aktif.index');
    Route::resource('/dashboard/tindakan', TindakanController::class);
    Route::get('/tindakan-delete/{id}', 'App\Http\Controllers\TindakanController@destroy');
    Route::resource('/dashboard/users', UserController::class);



});

// ========== Route For landing ==============
Route::view('/', 'landing.home');
Route::view('/home', 'landing.home');
// Route::get('/', [InternetController::class, 'ambil'])->name('ambil');
// Route::get('/home', [InternetController::class, 'ambil'])->name('ambil');
// Route::get('/home', 'InternetController@ambil');
Route::view('/about', 'landing.about');
Route::view('/service', 'landing.service');
Route::get('/tagihan', [TagihanController::class, 'tagihan'])->name('tagihan');

// Route::view('/payment', 'payment.payment');
Route::get('/payment-form', [PaymentController::class, 'index']);
Route::get('/payment', [PaymentController::class, 'payment']);
Route::post('/payment', [PaymentController::class, 'payment_post']);
// Route::get('/tagihan', [UserController::class, 'tagihan'])->name('tagihan');
// Route::get('/tagihans', [PenggunaController::class, 'tagihans']);




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
