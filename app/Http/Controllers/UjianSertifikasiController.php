<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UjianSertifikasi;

class UjianSertifikasiController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $ujian_sertifikasis = UjianSertifikasi::latest()->paginate(5);
        $count = UjianSertifikasi::all()->count();
        $status = '';
        $color = '';

        foreach ($ujian_sertifikasis as $ujian_sertifikasi) {
            if ($ujian_sertifikasi->sertifikasi->tanggal_ujian > date('Y-m-d')) {
                $status = 'Belum Mulai';
                $color = 'danger';
            } elseif ($ujian_sertifikasi->sertifikasi->tanggal_ujian < date('Y-m-d')) {
                $status = 'Selesai';
                $color = 'success';
            } else {
                $status = 'Sedang Dilaksanakan';
                $color = 'warning';
            }
        }

        return view('admin.ujian-sertifikasi.index', [
            'ujian_sertifikasis' => $ujian_sertifikasis,
            'count' => $count,
            'status' => $status,
            'color' => $color
        ]);
    }
}
