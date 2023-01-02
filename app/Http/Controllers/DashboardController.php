<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Training;
use App\Models\Sertifikasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('admin.dashboard.index', [
            'total_karyawan' => User::where('role', 'Karyawan')->count(),
            'total_training' => Training::all()->count(),
            'total_sertifikasi' => Sertifikasi::all()->count()
        ]);
    }
}
