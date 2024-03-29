<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ProliController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KenaikanController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\KelulusanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RekapitulasiController;
use App\Http\Controllers\FilterSiswaController;
use App\Http\Controllers\Backend\UserController;

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
    if(@Auth::user()->role == 'Administrator'){
        return redirect('/dashboard');
    } else if (@Auth::user()->role == 'User') {
        return redirect('/pembayaran');
    }
    return redirect('/login');
});
Route::get('/tes', function () {
    return view('tes');
});


Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'lunas'])->name('grafik');

Route::middleware('admin')->group(function () {
    Route::resource('/management/user', UserController::class);
    Route::resource('/management/kelas', KelasController::class);
    Route::resource('/management/jurusan', ProliController::class);
    Route::resource('/management/periode', PeriodeController::class);
    Route::resource('/management/kenaikan', KenaikanController::class);
    Route::resource('/management/kelulusan', KelulusanController::class);
    Route::resource('/admin/laporan/keuangan', KeuanganController::class);
    Route::resource('/admin/laporan/rekapitulasi', RekapitulasiController::class);
    Route::resource('/management/profile', ProfileController::class);
    Route::resource('/management/siswa', SiswaController::class);
    Route::get('/exportexcel', [SiswaController::class, 'exportexcel'])->name('exportexcel');
    Route::post('/importexcel', [SiswaController::class, 'importexcel'])->name('importexcel');
});

Route::middleware('auth')->group(function () {
    Route::resource('/pembayaran', PembayaranController::class);
    Route::resource('transaksi', App\Http\Controllers\Api\TransaksiController::class);
    // Route::resource('/kalender', KalenderController::class);
    // Route::resource('/management/management', ManajamenController::class);
    // Route::resource('/management/rekapitulasi', RekapitulasiController::class);  
});
