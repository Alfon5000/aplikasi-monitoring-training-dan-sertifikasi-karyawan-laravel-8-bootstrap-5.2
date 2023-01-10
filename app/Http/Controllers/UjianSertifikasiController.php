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
        return view('admin.ujian-sertifikasi.index', [
            'ujian_sertifikasis' => UjianSertifikasi::latest()->paginate(5),
            'count' => UjianSertifikasi::all()->count()
        ]);
    }
}
