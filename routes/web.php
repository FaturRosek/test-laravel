<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/proses-login', [LoginController::class, 'autentikasi']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route::group(['middleware' => 'auth'], function () {

//     Route::get('/', [PenerbitController::class, 'index']);
//     Route::get('/create', [PenerbitController::class, 'create']);
//     Route::post('/store', [PenerbitController::class, 'store']);
//     Route::post('/update', [PenerbitController::class, 'update']);
//     Route::get('/edit/{id}', [PenerbitController::class, 'edit']);
//     Route::get('/destroy/{id}', [PenerbitController::class, 'destroy']);

//     Route::get('/buku', [BukuController::class, 'index']);
//     Route::get('/buku/{id}', [BukuController::class, 'detail']);
// });

Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'level:superadmin'], function () {
        Route::get('/create', [PenerbitController::class, 'create']);
        Route::post('/store', [PenerbitController::class, 'store']);
        Route::get('/destroy/{id}', [PenerbitController::class, 'destroy']);
    });
    Route::group(['middleware' => 'level:admin'], function () {
        Route::post('/update', [PenerbitController::class, 'update']);
        Route::get('/edit/{id}', [PenerbitController::class, 'edit']);
        Route::get('/destroy/{id}', [PenerbitController::class, 'destroy']);
    });
    Route::get('/', [PenerbitController::class, 'index']);

    Route::get('/buku', [BukuController::class, 'index']);
    Route::get('/buku/{id}', [BukuController::class, 'detail']);
});
