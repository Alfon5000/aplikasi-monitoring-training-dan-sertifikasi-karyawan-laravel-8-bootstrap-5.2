<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SertifikasiController;
use App\Http\Controllers\UjianSertifikasiController;
use App\Http\Controllers\SertifikatKaryawanController;
use App\Http\Controllers\PelaksanaanKaryawanController;
use App\Http\Controllers\PelaksanaanTrainingController;
use App\Http\Controllers\PendaftaranKaryawanController;
use App\Http\Controllers\PendaftaranTrainingController;
use App\Http\Controllers\PendaftaranSertifikasiController;

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

Route::prefix('admin')->group(function () {
    Route::get('/', DashboardController::class);

    Route::resource('/data-karyawan', UserController::class);

    Route::resource('/data-training', TrainingController::class);

    Route::resource('/data-sertifikasi', SertifikasiController::class);

    Route::get('/pendaftaran-training', [PendaftaranTrainingController::class, 'index']);
    Route::put('/pendaftaran-training/accept/{id}', [PendaftaranTrainingController::class, 'accept']);
    Route::put('/pendaftaran-training/reject/{id}', [PendaftaranTrainingController::class, 'reject']);

    Route::get('/pendaftaran-sertifikasi', [PendaftaranSertifikasiController::class, 'index']);
    Route::put('/pendaftaran-sertifikasi/accept/{id}', [PendaftaranSertifikasiController::class, 'accept']);
    Route::put('/pendaftaran-sertifikasi/reject/{id}', [PendaftaranSertifikasiController::class, 'reject']);

    Route::get('/pelaksanaan-training', [PelaksanaanTrainingController::class, 'index']);

    Route::get('/ujian-sertifikasi', [UjianSertifikasiController::class, 'index']);
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/training/{id}', [DetailController::class, 'detailTraining']);
Route::get('/sertifikasi/{id}', [DetailController::class, 'detailSertifikasi']);
Route::post('/training/{id}', [DetailController::class, 'registerTraining']);
Route::post('/sertifikasi/{id}', [DetailController::class, 'registerSertifikasi']);

Route::get('/pendaftaran/training', [PendaftaranKaryawanController::class, 'indexTraining']);
Route::get('/pendaftaran/sertifikasi', [PendaftaranKaryawanController::class, 'indexSertifikasi']);

Route::get('/pelaksanaan/training', [PelaksanaanKaryawanController::class, 'indexTraining']);
Route::get('/pelaksanaan/sertifikasi', [PelaksanaanKaryawanController::class, 'indexSertifikasi']);

Route::get('/sertifikat/training', [SertifikatKaryawanController::class, 'indexTraining']);
Route::get('/sertifikat/sertifikasi', [SertifikatKaryawanController::class, 'indexSertifikasi']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'logout']);

// Auth::routes();
