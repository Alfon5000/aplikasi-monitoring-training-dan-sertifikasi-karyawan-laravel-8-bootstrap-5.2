<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\Sertifikasi;
use App\Models\PendaftaranTraining;
use App\Models\PendaftaranSertifikasi;

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
