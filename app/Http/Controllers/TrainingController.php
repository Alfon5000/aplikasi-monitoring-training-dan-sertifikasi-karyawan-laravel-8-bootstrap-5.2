<?php

namespace App\Http\Controllers;

use App\Models\Metode;
use App\Models\Sertifikasi;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.data-training.index', ['trainings' => Training::paginate(5), 'count' => Training::all()->count()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data-training.create', ['metodes' => Training::$metodes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $training = new Training;
        $training->nama = $request->nama;
        $training->bidang = $request->bidang;
        $training->metode = $request->metode;
        $training->tanggal_mulai = $request->tanggal_mulai;
        $training->tanggal_selesai = $request->tanggal_selesai;
        $training->alamat = $request->alamat;
        $training->kota = $request->kota;
        $training->provinsi = $request->provinsi;
        $training->kuota = $request->kuota;
        $training->deskripsi = $request->deskripsi;
        $training->gambar = $request->file('gambar')->store('gambar-training');
        $training->save();
        return redirect('/admin/data-training')->with('tambah', 'Data Training Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.data-training.show', ['training' => Training::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $training = Training::find($id);
        return view('admin.data-training.edit', [
            'training' => $training,
            'metodes' => array_diff(Training::$metodes, array($training->metode))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $training = Training::find($id);
        $training->nama = $request->nama;
        $training->bidang = $request->bidang;
        $training->metode = $request->metode;
        $training->tanggal_mulai = $request->tanggal_mulai;
        $training->tanggal_selesai = $request->tanggal_selesai;
        $training->alamat = $request->alamat;
        $training->kota = $request->kota;
        $training->provinsi = $request->provinsi;
        $training->kuota = $request->kuota;
        $training->deskripsi = $request->deskripsi;
        $training->gambar = $request->file('gambar')->store('gambar-training');
        $training->save();
        return redirect('/admin/data-training')->with('perbarui', 'Data Training Berhasil Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $training = Training::find($id);
        $training->delete();
        Storage::delete($training->gambar);
        return redirect('/admin/data-training')->with('hapus', 'Data Training Berhasil Dihapus.');
    }
}
