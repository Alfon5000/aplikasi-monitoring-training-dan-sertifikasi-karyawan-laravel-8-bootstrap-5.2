<?php

namespace App\Http\Controllers;

use App\Models\PelaksanaanTraining;
use Illuminate\Http\Request;

class PelaksanaanTrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pelaksanaan-training.index', [
            'pelaksanaan_trainings' => PelaksanaanTraining::latest()->paginate(5),
            'count' => PelaksanaanTraining::all()->count()
        ]);
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
     * @param  \App\Models\PelaksanaanTraining  $pelaksanaanTraining
     * @return \Illuminate\Http\Response
     */
    public function show(PelaksanaanTraining $pelaksanaanTraining)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PelaksanaanTraining  $pelaksanaanTraining
     * @return \Illuminate\Http\Response
     */
    public function edit(PelaksanaanTraining $pelaksanaanTraining)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PelaksanaanTraining  $pelaksanaanTraining
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PelaksanaanTraining $pelaksanaanTraining)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PelaksanaanTraining  $pelaksanaanTraining
     * @return \Illuminate\Http\Response
     */
    public function destroy(PelaksanaanTraining $pelaksanaanTraining)
    {
        //
    }
}
