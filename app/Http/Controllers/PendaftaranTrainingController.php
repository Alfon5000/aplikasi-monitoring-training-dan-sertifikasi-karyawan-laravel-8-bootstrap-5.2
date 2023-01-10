<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;
use App\Models\PelaksanaanTraining;
use App\Models\PendaftaranTraining;

class PendaftaranTrainingController extends Controller
{
    public function index()
    {
        return view('admin.pendaftaran-training.index', [
            'pendaftarans' => PendaftaranTraining::paginate(5),
            'count' => PendaftaranTraining::all()->count()
        ]);
    }

    public function accept($id)
    {
        $pendaftaran_training = PendaftaranTraining::find($id);
        $pendaftaran_training->status = 'Disetujui';
        $pendaftaran_training->save();
        $pelaksanaan_training = new PelaksanaanTraining;
        $pelaksanaan_training->user_id = $pendaftaran_training->user_id;
        $pelaksanaan_training->training_id = $pendaftaran_training->training_id;
        $pelaksanaan_training->status = 'Belum Mulai';
        $pelaksanaan_training->save();
        return redirect('/admin/pendaftaran-training');
    }

    public function reject($id)
    {
        $pendaftaran_training = PendaftaranTraining::find($id);
        $training = Training::find($pendaftaran_training->training_id);
        $pendaftaran_training->status = 'Ditolak';
        $training->kuota = $training->kuota + 1;
        $pendaftaran_training->save();
        $training->save();
        return redirect('/admin/pendaftaran-training');
    }
}
