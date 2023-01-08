<?php

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
use App\Http\Controllers\ProfilController;

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

Route::middleware('guest')->group(function () {
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'index');
        Route::post('/register', 'store');
    });

    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'authenticate');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/', HomeController::class);

    Route::get('/profil', [ProfilController::class, 'profilKaryawan']);

    Route::controller(DetailController::class)->group(function () {
        Route::get('/training/{id}', 'detailTraining');
        Route::get('/sertifikasi/{id}', 'detailSertifikasi');
        Route::post('/training/{id}', 'registerTraining');
        Route::post('/sertifikasi/{id}', 'registerSertifikasi');
    });

    Route::controller(PendaftaranKaryawanController::class)->group(function () {
        Route::get('/pendaftaran/training', 'indexTraining');
        Route::get('/pendaftaran/sertifikasi', 'indexSertifikasi');
    });

    Route::controller(PelaksanaanKaryawanController::class)->group(function () {
        Route::get('/pelaksanaan/training', 'indexTraining');
        Route::get('/pelaksanaan/sertifikasi', 'indexSertifikasi');
    });

    Route::controller(SertifikatKaryawanController::class)->group(function () {
        Route::get('/sertifikat/training', 'indexTraining');
        Route::get('/sertifikat/sertifikasi', 'indexSertifikasi');
    });

    Route::prefix('admin')->group(function () {
        Route::get('/', DashboardController::class);

        Route::get('/profil', [ProfilController::class, 'profilAdmin']);

        Route::resource('/data-karyawan', UserController::class);

        Route::resource('/data-training', TrainingController::class);

        Route::resource('/data-sertifikasi', SertifikasiController::class);

        Route::get('/pendaftaran-training', [PendaftaranTrainingController::class, 'index']);

        Route::get('/pendaftaran-sertifikasi', [PendaftaranSertifikasiController::class, 'index']);

        Route::get('/pelaksanaan-training', [PelaksanaanTrainingController::class, 'index']);

        Route::get('/ujian-sertifikasi', [UjianSertifikasiController::class, 'index']);

        Route::controller(PendaftaranTrainingController::class)->group(function () {
            Route::put('/pendaftaran-training/accept/{id}', 'accept');
            Route::put('/pendaftaran-training/reject/{id}', 'reject');
        });

        Route::controller(PendaftaranSertifikasiController::class)->group(function () {
            Route::put('/pendaftaran-sertifikasi/accept/{id}', 'accept');
            Route::put('/pendaftaran-sertifikasi/reject/{id}', 'reject');
        });
    });

    Route::post('/logout', [LogoutController::class, 'logout']);
});
