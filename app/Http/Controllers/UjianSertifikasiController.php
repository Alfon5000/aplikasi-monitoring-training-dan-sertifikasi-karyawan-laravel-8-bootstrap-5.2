<?php

namespace App\Http\Controllers;

use App\Models\UjianSertifikasi;
use Illuminate\Http\Request;

class UjianSertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ujian-sertifikasi.index', [
            'ujian_sertifikasis' => UjianSertifikasi::latest()->paginate(5),
            'count' => UjianSertifikasi::all()->count()
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
     * @param  \App\Models\UjianSertifikasi  $ujianSertifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(UjianSertifikasi $ujianSertifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UjianSertifikasi  $ujianSertifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(UjianSertifikasi $ujianSertifikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UjianSertifikasi  $ujianSertifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UjianSertifikasi $ujianSertifikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UjianSertifikasi  $ujianSertifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(UjianSertifikasi $ujianSertifikasi)
    {
        //
    }
}
