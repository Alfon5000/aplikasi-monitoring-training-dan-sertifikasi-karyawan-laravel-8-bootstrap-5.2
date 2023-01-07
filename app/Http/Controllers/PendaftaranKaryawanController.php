<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranTraining;
use App\Models\PendaftaranSertifikasi;

class PendaftaranKaryawanController extends Controller
{
    public function indexTraining()
    {
        $pendaftaranTrainings = PendaftaranTraining::where('user_id', auth()->user()->id)->latest()->paginate(5);
        $count = PendaftaranTraining::all()->count();
        return view('pendaftaran.training', [
            'pendaftaranTrainings' => $pendaftaranTrainings,
            'count' => $count
        ]);
    }

    public function indexSertifikasi()
    {
        $pendaftaranSertifikasis = PendaftaranSertifikasi::where('user_id', auth()->user()->id)->latest()->paginate(5);
        $count = PendaftaranSertifikasi::all()->count();
        return view('pendaftaran.sertifikasi', [
            'pendaftaranSertifikasis' => $pendaftaranSertifikasis,
            'count' => $count
        ]);
    }
}
