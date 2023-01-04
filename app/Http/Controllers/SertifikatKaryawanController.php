<?php

namespace App\Http\Controllers;

use App\Models\SertifikatKompetensi;
use Illuminate\Http\Request;
use App\Models\SertifikatTraining;

class SertifikatKaryawanController extends Controller
{
    public function indexTraining()
    {
        $sertifikatTraining = SertifikatTraining::where('user_id', 2);
        return view('sertifikat.training', ['pendaftaranTraining' => $sertifikatTraining]);
    }

    public function indexSertifikasi()
    {
        $sertifikatKompetensi = SertifikatKompetensi::where('user_id', 2);
        return view('sertifikat.sertifikasi', ['pendaftaranSertifikasi' => $sertifikatKompetensi]);
    }
}
