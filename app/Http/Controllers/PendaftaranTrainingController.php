<?php

namespace App\Http\Controllers;

use App\Models\PelaksanaanTraining;
use App\Models\PendaftaranTraining;
use Illuminate\Http\Request;

class PendaftaranTrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pendaftaran-training.index', ['pendaftarans' => PendaftaranTraining::paginate(5), 'count' => PendaftaranTraining::all()->count()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PendaftaranTraining  $pendaftaranTraining
     * @return \Illuminate\Http\Response
     */
    public function show(PendaftaranTraining $pendaftaranTraining)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PendaftaranTraining  $pendaftaranTraining
     * @return \Illuminate\Http\Response
     */
    public function edit(PendaftaranTraining $pendaftaranTraining)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PendaftaranTraining  $pendaftaranTraining
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PendaftaranTraining $pendaftaranTraining)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PendaftaranTraining  $pendaftaranTraining
     * @return \Illuminate\Http\Response
     */
    public function destroy(PendaftaranTraining $pendaftaranTraining)
    {
        //
    }

    public function accept($id)
    {
        $pendaftaran_training = PendaftaranTraining::find($id);
        $pendaftaran_training->status_pendaftaran_id = 2;
        $pendaftaran_training->save();
        $pelaksanaan_training = new PelaksanaanTraining;
        $pelaksanaan_training->user_id = $pendaftaran_training->user_id;
        $pelaksanaan_training->training_id = $pendaftaran_training->training_id;
        $pelaksanaan_training->status_pelaksanaan_id = 1;
        $pelaksanaan_training->save();
        return redirect('/admin/pendaftaran-training');
    }

    public function reject($id)
    {
        $pendaftaran_training = PendaftaranTraining::find($id);
        $pendaftaran_training->status_pendaftaran_id = 3;
        $pendaftaran_training->save();
        return redirect('/admin/pendaftaran-training');
    }
}
