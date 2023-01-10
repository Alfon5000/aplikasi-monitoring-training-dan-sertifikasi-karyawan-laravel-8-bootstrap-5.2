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
        $status = '';
        $color = '';

        foreach ($pelaksanaanTrainings as $pelaksanaanTraining) {
            if ($pelaksanaanTraining->training->tanggal_mulai > date('Y-m-d')) {
                $status = 'Belum Mulai';
                $color = 'danger';
            } elseif ($pelaksanaanTraining->training->tanggal_selesai < date('Y-m-d')) {
                $status = 'Selesai';
                $color = 'success';
            } else {
                $status = 'Sedang Dilaksanakan';
                $color = 'warning';
            }
        }

        return view('pelaksanaan.training', [
            'pelaksanaanTrainings' => $pelaksanaanTrainings,
            'count' => $count,
            'status' => $status,
            'color' => $color
        ]);
    }

    public function indexSertifikasi()
    {
        $ujianSertifikasis = UjianSertifikasi::where('user_id', auth()->user()->id)->latest()->paginate(5);
        $count = UjianSertifikasi::all()->count();
        $status = '';
        $color = '';

        foreach ($ujianSertifikasis as $ujianSertifikasi) {
            if ($ujianSertifikasi->sertifikasi->tanggal_ujian > date('Y-m-d')) {
                $status = 'Belum Mulai';
                $color = 'danger';
            } elseif ($ujianSertifikasi->sertifikasi->tanggal_ujian < date('Y-m-d')) {
                $status = 'Selesai';
                $color = 'success';
            } else {
                $status = 'Sedang Dilaksanakan';
                $color = 'warning';
            }
        }

        return view('pelaksanaan.sertifikasi', [
            'ujianSertifikasis' => $ujianSertifikasis,
            'count' => $count,
            'status' => $status,
            'color' => $color
        ]);
    }
}
