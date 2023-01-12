<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UjianSertifikasi;
use App\Models\SertifikatTraining;
use App\Models\PelaksanaanTraining;
use App\Models\SertifikatKompetensi;

class SertifikatKaryawanController extends Controller
{
    public function indexSertifikasi()
    {
        $sertifikatKompetensis = SertifikatKompetensi::where('user_id', '=', auth()->user()->id)->latest()->paginate(5);
        $count = SertifikatKompetensi::all()->count();
        $status = '';
        $color = '';

        foreach ($sertifikatKompetensis as $sertifikatKompetensi) {
            if ($sertifikatKompetensi->tanggal_kadaluarsa >= date('Y-m-d')) {
                $status = 'Berlaku';
                $color = 'primary';
            } else {
                $status = 'Kadaluarsa';
                $color = 'secondary';
            }
        }

        return view('sertifikat.index-sertifikasi', [
            'sertifikatKompetensis' => $sertifikatKompetensis,
            'count' => $count,
            'status' => $status,
            'color' => $color
        ]);
    }

    public function indexTraining()
    {
        $sertifikatTrainings = SertifikatTraining::where('user_id', '=', auth()->user()->id)->latest()->paginate(5);
        $count = SertifikatTraining::all()->count();

        return view('sertifikat.index-training', [
            'sertifikatTrainings' => $sertifikatTrainings,
            'count' => $count
        ]);
    }

    public function createSertifikasi()
    {
        $ujianSertifikasis = UjianSertifikasi::whereRelation('sertifikasi', 'tanggal_ujian', '<', date('Y-m-d'))->where('user_id', '=', auth()->user()->id)->get();

        return view('sertifikat.create-sertifikasi', [
            'ujianSertifikasis' => $ujianSertifikasis
        ]);
    }

    public function createTraining()
    {
        $pelaksanaanTrainings = PelaksanaanTraining::whereRelation('training', 'tanggal_selesai', '<', date('Y-m-d'))->where('user_id', '=', auth()->user()->id)->get();

        return view('sertifikat.create-training', [
            'pelaksanaanTrainings' => $pelaksanaanTrainings
        ]);
    }

    public function storeSertifikasi(Request $request)
    {
        $sertifikat = new SertifikatKompetensi;
        $sertifikat->no_sertifikat = $request->no_sertifikat;
        $sertifikat->user_id = $request->user_id;
        $sertifikat->sertifikasi_id = $request->sertifikasi_id;
        $sertifikat->tanggal_terbit = $request->tanggal_terbit;
        $sertifikat->tanggal_kadaluarsa = $request->tanggal_kadaluarsa;
        $sertifikat->status_validasi = $request->status_validasi;
        $sertifikat->save();
        return redirect('/sertifikat/sertifikasi');
    }

    public function storeTraining(Request $request)
    {
        $sertifikat = new SertifikatTraining;
        $sertifikat->no_sertifikat = $request->no_sertifikat;
        $sertifikat->user_id = $request->user_id;
        $sertifikat->training_id = $request->training_id;
        $sertifikat->tanggal_terbit = $request->tanggal_terbit;
        $sertifikat->status_validasi = $request->status_validasi;
        $sertifikat->save();
        return redirect('/sertifikat/training');
    }
}
