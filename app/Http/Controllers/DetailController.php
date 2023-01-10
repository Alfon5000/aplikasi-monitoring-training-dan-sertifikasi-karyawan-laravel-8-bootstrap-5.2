<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\Sertifikasi;
use App\Models\PendaftaranTraining;
use App\Models\PendaftaranSertifikasi;

class DetailController extends Controller
{
    public function detailTraining($id)
    {
        $training = Training::find($id);
        $registered = PendaftaranTraining::where('training_id', '=', $training->id, 'AND', 'user_id', '=', auth()->user()->id)->count();
        return view('detail.training', [
            'training' => $training,
            'registered' => $registered
        ]);
    }

    public function detailSertifikasi($id)
    {
        $sertifikasi = Sertifikasi::find($id);
        $registered = PendaftaranSertifikasi::where('sertifikasi_id', '=', $sertifikasi->id, 'AND', 'user_id', '=', auth()->user()->id)->count();
        return view('detail.sertifikasi', [
            'sertifikasi' => $sertifikasi,
            'registered' => $registered
        ]);
    }

    public function registerTraining($id)
    {
        $training = Training::find($id);
        $pendaftaranTraining = new PendaftaranTraining;
        $pendaftaranTraining->user_id = auth()->user()->id;
        $pendaftaranTraining->training_id = $training->id;
        $pendaftaranTraining->tanggal = now()->toDate();
        $pendaftaranTraining->status = 'Menunggu Konfirmasi';
        $training->kuota = $training->kuota - 1;
        $pendaftaranTraining->save();
        $training->save();
        return redirect('/')->with('daftar', 'Pendaftaran berhasil. Silakan menunggu persetujuan dari Admin.');
    }

    public function registerSertifikasi($id)
    {
        $sertifikasi = Sertifikasi::find($id);
        $pendaftaranSertifikasi = new PendaftaranSertifikasi;
        $pendaftaranSertifikasi->user_id = auth()->user()->id;
        $pendaftaranSertifikasi->sertifikasi_id = $sertifikasi->id;
        $pendaftaranSertifikasi->tanggal = now()->toDate();
        $pendaftaranSertifikasi->status = 'Menunggu Konfirmasi';
        $sertifikasi->kuota = $sertifikasi->kuota - 1;
        $pendaftaranSertifikasi->save();
        $sertifikasi->save();
        return redirect('/')->with('daftar', 'Pendaftaran berhasil. Silakan menunggu persetujuan dari Admin.');
    }
}
