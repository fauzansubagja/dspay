<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ProliController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\KenaikanController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\KelulusanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PembayaranController;
// use App\Http\Controllers\KalenderController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});
// Route::get('/pembayaran', function () {
//     return view('admin.pembayaran.index');
// });

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function () {
    Route::resource('/management/user', UserController::class);
    Route::resource('/management/kelas', KelasController::class);
    Route::resource('/management/jurusan', ProliController::class);
    Route::resource('/management/periode', PeriodeController::class);
    Route::resource('/management/kenaikan', KenaikanController::class);
    Route::resource('/management/kelulusan', KelulusanController::class);
    Route::resource('/pembayaran', PembayaranController::class);
    Route::resource('/management/keuangan', KeuanganController::class);
    Route::resource('/management/profile', ProfileController::class);
    Route::resource('/management/siswa', SiswaController::class);
    // Route::resource('/kalender', KalenderController::class);
    // Route::resource('/management/management', ManajamenController::class);
    // Route::resource('/management/rekapitulasi', RekapitulasiController::class);  
});
// Route::resource('/management/kelas', KelasController::class);

// Route::resource('/management/periode', PeriodeController::class);
// Route::resource('/admin/pembayaran', PembayaranController::class);

// Route::resource('/management/kenaikan', KenaikanController::class);
// Route::resource('/management/kelulusan', KelulusanController::class);
// // Route::resource('/kalender', KalenderController::class);
// Route::resource('/management/keuangan', KeuanganController::class);
// // Route::resource('/management/management', ManajamenController::class);
// Route::resource('/management/profile', ProfileController::class);
// Route::resource('/management/siswa', SiswaController::class);
// Route::resource('/management/rekapitulasi', RekapitulasiController::class);