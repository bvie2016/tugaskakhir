<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\TipeController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HakaksesController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PinjamAsetController;
use App\Http\Controllers\UserProfilController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/', [HomeAdminController::class, 'index']);
    Route::resource('/jenis', JenisController::class);
    Route::resource('/aset', AsetController::class);
    Route::resource('/barang',BarangController::class);
    Route::resource('/ruang', RuangController::class);
    Route::resource('/dosen', DosenController::class);
    Route::resource('/tipe', TipeController::class);
    Route::resource('/lab', LabController::class);
    Route::resource('/laporan', LaporanController::class);
    Route::resource('/hakakses', HakaksesController::class);
    Route::resource('pengguna', UserProfilController::class);
    Route::resource('jabatan', JabatanController::class);
    Route::resource('pinjam', PinjamAsetController::class);

});


require __DIR__.'/auth.php';
