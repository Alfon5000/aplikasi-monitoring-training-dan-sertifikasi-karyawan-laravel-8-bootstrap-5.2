<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\Sertifikasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trainings = Training::latest();
        $sertifikasis = Sertifikasi::latest();

        if (request('search')) {
            $trainings->where('nama', 'like', '%' . request('search') . '%');
            $sertifikasis->where('nama', 'like', '%' . request('search') . '%');
        }

        return view('index', [
            'trainings' => $trainings->paginate(4),
            'sertifikasis' => $sertifikasis->paginate(4)
        ]);
    }

    public function trainingDetail($id)
    {
        $training = Training::find($id);
        return view('detail.training', ['training' => $training]);
    }

    public function sertifikasiDetail($id)
    {
        $sertifikasi = Sertifikasi::find($id);
        return view('detail.sertifikasi', ['sertifikasi' => $sertifikasi]);
    }
}
