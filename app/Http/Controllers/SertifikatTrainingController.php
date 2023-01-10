<?php

namespace App\Http\Controllers;

use App\Models\SertifikatTraining;
use Illuminate\Http\Request;

class SertifikatTrainingController extends Controller
{
    public function index()
    {
        return view('admin.sertifikat-training.index', [
            'sertifikat_trainings' => SertifikatTraining::paginate(5),
            'count' => SertifikatTraining::all()->count()
        ]);
    }

    public function accept($id)
    {
        $sertifikat_trainings = SertifikatTraining::find($id);
        $sertifikat_trainings->status_validasi = 'Valid';
        $sertifikat_trainings->save();
        return redirect('admin/sertifikat-training');
    }

    public function reject($id)
    {
        $sertifikat_trainings = SertifikatTraining::find($id);
        $sertifikat_trainings->status_validasi = 'Tidak Valid';
        $sertifikat_trainings->save();
        return redirect('admin/sertifikat-training');
    }
}
