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
        return view('admin.pelaksanaan-training.index', [
            'pelaksanaan_trainings' => PelaksanaanTraining::latest()->paginate(5),
            'count' => PelaksanaanTraining::all()->count()
        ]);
    }
}
