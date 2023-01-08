<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\Sertifikasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $trainings = Training::where('tanggal_mulai', '>', now()->toDate())->latest();
        $sertifikasis = Sertifikasi::where('tanggal_ujian', '>', now()->toDate())->latest();
        $count_trainings = $trainings->count();
        $count_sertifikasis = $sertifikasis->count();
        $total_count = $count_trainings + $count_sertifikasis;

        if ($request->search) {
            $trainings->where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('bidang', 'like', '%' . $request->search . '%')
                ->orWhere('metode', 'like', '%' . $request->search . '%');
            $sertifikasis->where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('bidang', 'like', '%' . $request->search . '%')
                ->orWhere('metode', 'like', '%' . $request->search . '%');
            $count_trainings = $trainings->count();
            $count_sertifikasis = $sertifikasis->count();
            $total_count = $count_trainings + $count_sertifikasis;
        }

        return view('index', [
            'trainings' => $trainings->paginate(2)->withQueryString(),
            'sertifikasis' => $sertifikasis->paginate(2)->withQueryString(),
            'total_count' => $total_count
        ]);
    }
}
