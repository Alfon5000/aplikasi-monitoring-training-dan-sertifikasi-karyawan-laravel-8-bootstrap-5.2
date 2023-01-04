<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UjianSertifikasi;
use App\Models\PelaksanaanTraining;

class PelaksanaanKaryawanController extends Controller
{
    public function indexTraining()
    {
        $pelaksanaanTrainings = PelaksanaanTraining::where('user_id', 2)->latest()->paginate(5);
        return view('pelaksanaan.training', ['pelaksanaanTrainings' => $pelaksanaanTrainings]);
    }

    public function indexSertifikasi()
    {
        $ujianSertifikasis = UjianSertifikasi::where('user_id', 2)->latest()->paginate(5);
        return view('pelaksanaan.sertifikasi', ['ujianSertifikasis' => $ujianSertifikasis]);
    }
}
