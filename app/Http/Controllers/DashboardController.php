<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $total_karyawan = User::where('role_id', 2)->count();
        // $total_training = Training::count();
        // $total_sertifikasi = Sertifikasi::count();
        return view('admin.dashboard.index', ['total_karyawan' => $total_karyawan]);
    }
}
