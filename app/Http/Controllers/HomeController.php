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
        $trainings = Training::latest();
        $sertifikasis = Sertifikasi::latest();

        if (request('search')) {
            $trainings->where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('bidang', 'like', '%' . request('search') . '%')
                ->orWhere('metode', 'like', '%' . request('search') . '%');
            $sertifikasis->where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('bidang', 'like', '%' . request('search') . '%')
                ->orWhere('metode', 'like', '%' . request('search') . '%');
        }

        return view('index', [
            'trainings' => $trainings->paginate(2),
            'sertifikasis' => $sertifikasis->paginate(2)
        ]);
    }
}
