<?php

namespace App\Http\Controllers;

use App\Models\SertifikatKompetensi;
use Illuminate\Http\Request;
use App\Models\SertifikatTraining;

class SertifikatKaryawanController extends Controller
{
    public function indexTraining()
    {
        $sertifikatTrainings = SertifikatTraining::where('user_id', auth()->user()->id)->latest()->paginate(5);
        $count = SertifikatTraining::all()->count();
        return view('sertifikat.training', [
            'sertifikatTrainings' => $sertifikatTrainings,
            'count' => $count
        ]);
    }

    public function indexSertifikasi()
    {
        $sertifikatKompetensis = SertifikatKompetensi::where('user_id', auth()->user()->id)->latest()->paginate(5);
        $count = SertifikatKompetensi::all()->count();
        return view('sertifikat.sertifikasi', [
            'sertifikatKompetensis' => $sertifikatKompetensis,
            'count' => $count
        ]);
    }
}
