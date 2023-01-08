<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Training;
use App\Models\Sertifikasi;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $total_admins = User::where('role', 'Admin')->count();
        $total_karyawans = User::where('role', 'Karyawan')->count();
        $total_trainings = Training::all()->count();
        $total_sertifikasis = Sertifikasi::all()->count();

        return view('admin.index', [
            'total_admins' => $total_admins,
            'total_karyawans' => $total_karyawans,
            'total_trainings' => $total_trainings,
            'total_sertifikasis' => $total_sertifikasis
        ]);
    }
}
