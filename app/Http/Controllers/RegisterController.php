<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RegisterController extends Controller
{
    public function index()
    {
        $jenis_kelamins = User::$jenis_kelamins;
        $agamas = User::$agamas;
        $pendidikans = User::$pendidikans;
        $jabatans = User::$jabatans;
        $divisis = User::$divisis;
        return view('register', [
            'jenis_kelamins' => $jenis_kelamins,
            'agamas' => $agamas,
            'pendidikans' => $pendidikans,
            'jabatans' => $jabatans,
            'divisis' => $divisis
        ]);
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->nama = $request->nama;
        $user->nik = $request->nik;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->agama = $request->agama;
        $user->alamat = $request->alamat;
        $user->kota = $request->kota;
        $user->provinsi = $request->provinsi;
        $user->pendidikan = $request->pendidikan;
        $user->divisi = $request->divisi;
        $user->jabatan = $request->jabatan;
        $user->telepon = $request->telepon;
        $user->email = $request->email;
        $user->password = Crypt::encryptString($request->password);
        $user->foto = $request->file('foto')->store('foto-user');
        $user->role = 'Karyawan';
        $user->save();
        return redirect('/login')->with('register', 'Register Berhasil! Silakan Login.');
    }
}
