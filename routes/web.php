<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\PerusahaanController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [KaryawanController::class, 'index']);
Route::get('/karyawan/add', [KaryawanController::class, 'add']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/edit/{id}',[KaryawanController::class, 'edit']);
Route::post('/karyawan/update', [KaryawanController::class, 'update']);
Route::get('/karyawan/delete/{id}', [KaryawanController::class, 'delete']);

Route::get('/divisi/add', [DivisiController::class, 'add']);
Route::post('/divisi/store', [DivisiController::class, 'store']);

Route::get('/perusahaan/add', [PerusahaanController::class, 'add']);
Route::post('/perusahaan/store', [PerusahaanController::class, 'store']);
