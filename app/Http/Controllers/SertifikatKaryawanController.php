<?php

namespace App\Http\Controllers;

use App\Models\SertifikatKompetensi;
use Illuminate\Http\Request;
use App\Models\SertifikatTraining;

class SertifikatKaryawanController extends Controller
{
    public function indexTraining()
    {
        $sertifikatTrainings = SertifikatTraining::where('user_id', 2)->latest()->paginate(5);
        return view('sertifikat.training', ['sertifikatTrainings' => $sertifikatTrainings]);
    }

    public function indexSertifikasi()
    {
        $sertifikatKompetensis = SertifikatKompetensi::where('user_id', 2)->latest()->paginate(5);
        return view('sertifikat.sertifikasi', ['sertifikatKompetensis' => $sertifikatKompetensis]);
    }
}
