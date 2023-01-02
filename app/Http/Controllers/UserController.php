<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', 'Karyawan')->latest();
        $count = User::all()->count();

        if (request('table_search')) {
            $users->where('nama', 'like', '%' . request('table_search') . '%');
        }

        return view('admin.data-karyawan.index', [
            'users' => $users->paginate(5)->withQueryString(),
            'count' => $count
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data-karyawan.create', [
            'jenis_kelamins' => User::$jenis_kelamins,
            'agamas' => User::$agamas,
            'pendidikans' => User::$pendidikans,
            'jabatans' => User::$jabatans,
            'divisis' => User::$divisis
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect('/admin/data-karyawan')->with('tambah', 'Data Karyawan Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.data-karyawan.show', ['user' => User::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.data-karyawan.edit', [
            'user' => $user,
            'user_password' => Crypt::decryptString($user->password),
            'jenis_kelamins' => array_diff(User::$jenis_kelamins, array($user->jenis_kelamin)),
            'agamas' => array_diff(User::$agamas, array($user->agama)),
            'pendidikans' => array_diff(User::$pendidikans, array($user->pendidikan)),
            'jabatans' => array_diff(User::$jabatans, array($user->jabatan)),
            'divisis' => array_diff(User::$divisis, array($user->divisi))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
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
        $user->save();
        return redirect('/admin/data-karyawan')->with('perbarui', 'Data Karyawan Berhasil Diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Storage::delete($user->foto);
        return redirect('/admin/data-karyawan')->with('hapus', 'Data Karyawan Berhasil Dihapus.');
    }
}
