<?php

use App\Http\Controllers\AsetController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\TipeController;
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
Route::get('/', [HomeController::class, 'index']);


Route::get('/', function () {
    return view('Home.index');});
Route::get('/umum', function () {
    return view('Home.umum');});
Route::get('/login', function () {
        return view('auth.login');});
Route::get('/barang', function () {
            return view('admin.barang.index');});
Route::get('/admin', [HomeAdminController::class, 'index']);
Route::resource('/jenis', JenisController::class);
Route::resource('/aset', AsetController::class);
Route::resource('/barang',BarangController::class);
Route::resource('/ruang', RuangController::class);
Route::resource('/dosen', DosenController::class);
Route::resource('/tipe', TipeController::class);