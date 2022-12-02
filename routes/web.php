<?php

use App\Models\Ekstrakulikuler;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\AdminPendaftarController;

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
    return view('user.views.index');
});


// ROUTE HALAMAN ADMIN
Route::get('/admin', [EkskulController::class, 'index']);

// ROUTE ADMIN DELETE USER
Route::get('/admin/user', [UserController::class, 'index']);

// ROUTE ADMIN DELETE
Route::get('/admin/pendaftar', [AdminPendaftarController::class, 'index']);

// LOGIN ROUTE

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// REGISTER ROUTE

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// PENDAFTAR ROUTE
Route::get('/daftar', [PendaftarController::class, 'index'])->middleware('auth'); 
Route::post('/daftar', [PendaftarController::class, 'store']); 


Route::get('/tentang', function () {
    return view('user.views.tentang');
});

// Route::get('/', PostController::class, 'index')->middleware('auth');


Route::resource('/admin/views', EkskulController::class)->middleware('auth');