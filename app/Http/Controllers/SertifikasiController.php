<?php

namespace App\Http\Controllers;

use App\Models\Metode;
use App\Models\Sertifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.data-sertifikasi.index', ['sertifikasis' => Sertifikasi::paginate(5), 'count' => Sertifikasi::all()->count()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data-sertifikasi.create', ['metodes' => Sertifikasi::$metodes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sertifikasi = new Sertifikasi();
        $sertifikasi->nama = $request->nama;
        $sertifikasi->bidang = $request->bidang;
        $sertifikasi->metode = $request->metode;
        $sertifikasi->tanggal_ujian = $request->tanggal_ujian;
        $sertifikasi->alamat = $request->alamat;
        $sertifikasi->kota = $request->kota;
        $sertifikasi->provinsi = $request->provinsi;
        $sertifikasi->kuota = $request->kuota;
        $sertifikasi->deskripsi = $request->deskripsi;
        $sertifikasi->gambar = $request->file('gambar')->store('gambar-sertifikasi');
        $sertifikasi->save();
        return redirect('/admin/data-sertifikasi')->with('tambah', 'Data Training Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sertifikasi  $sertifikasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.data-sertifikasi.show', ['sertifikasi' => Sertifikasi::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sertifikasi  $sertifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sertifikasi = Sertifikasi::find($id);
        return view('admin.data-sertifikasi.edit', [
            'sertifikasi' => $sertifikasi,
            'metodes' => array_diff(Sertifikasi::$metodes, array($sertifikasi->metode))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sertifikasi  $sertifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sertifikasi = Sertifikasi::find($id);
        $sertifikasi->nama = $request->nama;
        $sertifikasi->bidang = $request->bidang;
        $sertifikasi->metode = $request->metode;
        $sertifikasi->tanggal_ujian = $request->tanggal_ujian;
        $sertifikasi->alamat = $request->alamat;
        $sertifikasi->kota = $request->kota;
        $sertifikasi->provinsi = $request->provinsi;
        $sertifikasi->kuota = $request->kuota;
        $sertifikasi->deskripsi = $request->deskripsi;
        $sertifikasi->gambar = $request->file('gambar')->store('gambar-sertifikasi');
        $sertifikasi->save();
        return redirect('/admin/data-sertifikasi')->with('perbarui', 'Data Sertifikasi Berhasil Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sertifikasi  $sertifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sertifikasi = Sertifikasi::find($id);
        $sertifikasi->delete();
        Storage::delete($sertifikasi->gambar);
        return redirect('/admin/data-sertifikasi')->with('hapus', 'Data Sertifikasi Berhasil Dihapus.');
    }
}
