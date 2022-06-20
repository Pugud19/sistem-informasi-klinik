<?php

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
Route::view('/dashboard', 'admin.home');
Route::view('/dashboard/home', 'admin.home');
Route::view('/dashboard/pengguna', 'admin.pengguna.index');
Route::view('/dashboard/internet', 'admin.internet.index');
Route::view('/dashboard/pembayaran', 'admin.pembayaran.index');
Route::view('/dashboard/todo', 'admin.todo.index');
Route::view('/dashboard/masa-aktif', 'admin.masa-aktif.index');

// ========== Route For landing ==============
Route::view('/', 'landing.home');
Route::view('/home', 'landing.home');
Route::view('/about', 'landing.about');
Route::view('/service', 'landing.service');
Route::view('/contact', 'landing.contact');
