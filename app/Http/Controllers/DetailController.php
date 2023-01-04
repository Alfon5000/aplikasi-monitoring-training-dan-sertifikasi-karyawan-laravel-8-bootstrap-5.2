<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\Sertifikasi;
use Illuminate\Http\Request;
use App\Models\PendaftaranTraining;
use App\Models\PendaftaranSertifikasi;

class DetailController extends Controller
{
    public function detailTraining($id)
    {
        $training = Training::find($id);
        return view('detail.training', ['training' => $training]);
    }

    public function detailSertifikasi($id)
    {
        $sertifikasi = Sertifikasi::find($id);
        return view('detail.sertifikasi', ['sertifikasi' => $sertifikasi]);
    }

    public function registerTraining($id)
    {
        $training = Training::find($id);
        $pendaftaranTraining = new PendaftaranTraining;
        $pendaftaranTraining->user_id = 2;
        $pendaftaranTraining->training_id = $training->id;
        $pendaftaranTraining->tanggal = now()->toDate();
        $pendaftaranTraining->status = 'Menunggu Konfirmasi';
        $pendaftaranTraining->save();
        return redirect('/')->with('daftar', 'Pendaftaran berhasil. Silakan menunggu persetujuan dari Admin.');
    }

    public function registerSertifikasi($id)
    {
        $sertifikasi = Sertifikasi::find($id);
        $pendaftaranSertifikasi = new PendaftaranSertifikasi;
        $pendaftaranSertifikasi->user_id = 2;
        $pendaftaranSertifikasi->sertifikasi_id = $sertifikasi->id;
        $pendaftaranSertifikasi->tanggal = now()->toDate();
        $pendaftaranSertifikasi->status = 'Menunggu Konfirmasi';
        $pendaftaranSertifikasi->save();
        return redirect('/')->with('daftar', 'Pendaftaran berhasil. Silakan menunggu persetujuan dari Admin.');
    }
}
