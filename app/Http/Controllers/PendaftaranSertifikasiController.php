<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UjianSertifikasi;
use App\Models\PendaftaranSertifikasi;
use App\Models\Sertifikasi;

class PendaftaranSertifikasiController extends Controller
{
    public function index()
    {
        return view('admin.pendaftaran-sertifikasi.index', [
            'pendaftarans' => PendaftaranSertifikasi::paginate(5),
            'count' => PendaftaranSertifikasi::all()->count()
        ]);
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
        $ujian_sertifikasi->save();
        return redirect('/admin/pendaftaran-sertifikasi');
    }

    public function reject($id)
    {
        $pendaftaran_sertifikasi = PendaftaranSertifikasi::find($id);
        $sertifikasi = Sertifikasi::find($pendaftaran_sertifikasi->sertifikasi_id);
        $pendaftaran_sertifikasi->status = 'Ditolak';
        $sertifikasi->kuota = $sertifikasi->kuota + 1;
        $pendaftaran_sertifikasi->save();
        $sertifikasi->save();
        return redirect('/admin/pendaftaran-sertifikasi');
    }
}
