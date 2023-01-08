<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UjianSertifikasi;
use App\Models\PelaksanaanTraining;

class PelaksanaanKaryawanController extends Controller
{
    public function indexTraining()
    {
        $pelaksanaanTrainings = PelaksanaanTraining::where('user_id', auth()->user()->id)->latest()->paginate(5);
        $count = PelaksanaanTraining::all()->count();
        return view('pelaksanaan.training', [
            'pelaksanaanTrainings' => $pelaksanaanTrainings,
            'count' => $count
        ]);
    }

    public function indexSertifikasi()
    {
        $ujianSertifikasis = UjianSertifikasi::where('user_id', auth()->user()->id)->latest()->paginate(5);
        $count = UjianSertifikasi::all()->count();
        return view('pelaksanaan.sertifikasi', [
            'ujianSertifikasis' => $ujianSertifikasis,
            'count' => $count
        ]);
    }
}
