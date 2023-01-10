<?php

namespace App\Http\Controllers;

use App\Models\SertifikatKompetensi;
use Illuminate\Http\Request;

class SertifikatKompetensiController extends Controller
{
    public function index()
    {
        return view('admin.sertifikat-kompetensi.index', [
            'sertifikat_kompetensis' => SertifikatKompetensi::paginate(5),
            'count' => SertifikatKompetensi::all()->count()
        ]);
    }

    public function accept($id)
    {
        $sertifikat_kompetensi = SertifikatKompetensi::find($id);
        $sertifikat_kompetensi->status_validasi = 'Valid';
        $sertifikat_kompetensi->save();
        return redirect('admin/sertifikat-kompetensi');
    }

    public function reject($id)
    {
        $sertifikat_kompetensi = SertifikatKompetensi::find($id);
        $sertifikat_kompetensi->status_validasi = 'Tidak Valid';
        $sertifikat_kompetensi->save();
        return redirect('admin/sertifikat-kompetensi');
    }
}
