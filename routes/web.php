<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\UserController;
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

Route::get('/', [UserController::class, 'index'])->middleware('guest')->name('user.index');
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::resource('/pengaduans', PengaduanController::class);
Route::resource('/pengajuans', PengajuanController::class);

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/pp', [AdminController::class, 'dataPP']);
    Route::get('/phs', [AdminController::class, 'dataPHS']);
    Route::get('/ps', [AdminController::class, 'dataPS']);
});

Route::prefix('staff')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/pp', [AdminController::class, 'dataPP'])->name('staff.dataPP');
    Route::get('/phs', [AdminController::class, 'dataPHS'])->name('staff.dataPHS');
    Route::get('/ps', [AdminController::class, 'dataPS'])->name('staff.dataPS');
    Route::put('/pengaduans/{pengaduan:id}', [PengaduanController::class, 'update'])->name('pengaduan.update');
    Route::put('/pengaJuans/{pengaJuan:id}', [PengaJuanController::class, 'update'])->name('pengaJuan.update');
});
