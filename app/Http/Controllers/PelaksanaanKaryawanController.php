<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UjianSertifikasi;
use App\Models\PelaksanaanTraining;

class PelaksanaanKaryawanController extends Controller
{
    public function indexTraining()
    {
        $pelaksanaanTraining = PelaksanaanTraining::where('user_id', 2);
        return view('pelaksanaan.training', ['pelaksanaanTraining' => $pelaksanaanTraining]);
    }

    public function indexSertifikasi()
    {
        $ujianSertifikasi = UjianSertifikasi::where('user_id', 2);
        return view('pelaksanaan.sertifikasi', ['pelaksanaanSertifikasi' => $ujianSertifikasi]);
    }
}
