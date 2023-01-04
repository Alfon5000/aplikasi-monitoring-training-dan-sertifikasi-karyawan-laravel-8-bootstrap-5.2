<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranTraining;
use App\Models\PendaftaranSertifikasi;

class PendaftaranKaryawanController extends Controller
{
    public function indexTraining()
    {
        $pendaftaranTraining = PendaftaranTraining::where('user_id', 2);
        return view('pendaftaran.training', ['pendaftaranTraining' => $pendaftaranTraining]);
    }

    public function indexSertifikasi()
    {
        $pendaftaranSertifikasi = PendaftaranSertifikasi::where('user_id', 2);
        return view('pendaftaran.sertifikasi', ['pendaftaranSertifikasi' => $pendaftaranSertifikasi]);
    }
}
