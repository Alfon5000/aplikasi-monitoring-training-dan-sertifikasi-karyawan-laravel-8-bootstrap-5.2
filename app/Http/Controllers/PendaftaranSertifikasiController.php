<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UjianSertifikasi;
use App\Models\PendaftaranSertifikasi;

class PendaftaranSertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pendaftaran-sertifikasi.index', ['pendaftarans' => PendaftaranSertifikasi::paginate(5), 'count' => PendaftaranSertifikasi::all()->count()]);
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
     * @param  \App\Models\PendaftaranSertifikasi  $pendaftaranSertifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(PendaftaranSertifikasi $pendaftaranSertifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PendaftaranSertifikasi  $pendaftaranSertifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(PendaftaranSertifikasi $pendaftaranSertifikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PendaftaranSertifikasi  $pendaftaranSertifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PendaftaranSertifikasi $pendaftaranSertifikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PendaftaranSertifikasi  $pendaftaranSertifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(PendaftaranSertifikasi $pendaftaranSertifikasi)
    {
        //
    }

    public function accept($id)
    {
        $pendaftaran_sertifikasi = PendaftaranSertifikasi::find($id);
        $pendaftaran_sertifikasi->status = 'Disetujui';
        $pendaftaran_sertifikasi->save();
        $ujian_sertifikasi = new UjianSertifikasi;
        $ujian_sertifikasi->user_id = $pendaftaran_sertifikasi->user_id;
        $ujian_sertifikasi->sertifikasi_id = $pendaftaran_sertifikasi->sertifikasi_id;
        $ujian_sertifikasi->status = 'Belum Mulai';
        $ujian_sertifikasi->keterangan = 'Menunggu Hasil';
        $ujian_sertifikasi->save();
        return redirect('/admin/pendaftaran-sertifikasi');
    }

    public function reject($id)
    {
        $pendaftaran_sertifikasi = PendaftaranSertifikasi::find($id);
        $pendaftaran_sertifikasi->status = 'Ditolak';
        $pendaftaran_sertifikasi->save();
        return redirect('/admin/pendaftaran-sertifikasi');
    }
}
