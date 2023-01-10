<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelaksanaanTraining;

class PelaksanaanTrainingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $pelaksanaan_trainings = PelaksanaanTraining::latest()->paginate(5);
        $count = PelaksanaanTraining::all()->count();
        $status = '';
        $color = '';

        foreach ($pelaksanaan_trainings as $pelaksanaan_training) {
            if ($pelaksanaan_training->training->tanggal_mulai > date('Y-m-d')) {
                $status = 'Belum Mulai';
                $color = 'danger';
            } elseif ($pelaksanaan_training->training->tanggal_selesai < date('Y-m-d')) {
                $status = 'Selesai';
                $color = 'success';
            } else {
                $status = 'Sedang Dilaksanakan';
                $color = 'warning';
            }
        }

        return view('admin.pelaksanaan-training.index', [
            'pelaksanaan_trainings' => $pelaksanaan_trainings,
            'count' => $count,
            'status' => $status,
            'color' => $color
        ]);
    }
}
