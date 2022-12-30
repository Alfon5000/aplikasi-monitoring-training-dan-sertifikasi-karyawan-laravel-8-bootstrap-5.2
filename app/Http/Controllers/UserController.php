<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agama;
use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\Pendidikan;
use Illuminate\Support\Str;
use App\Models\JenisKelamin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role_id', 2)->paginate(5);
        // if (request('table_search')) {
        //     $users->where('nama', 'like', '%' . request('table_search') . '%');
        // }
        return view('admin.data-karyawan.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data-karyawan.create', [
            'jenis_kelamins' => JenisKelamin::all(),
            'agamas' => Agama::all(),
            'pendidikans' => Pendidikan::all(),
            'jabatans' => Jabatan::all(),
            'divisis' => Divisi::all()
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
        $user->role_id = 2;
        $user->jenis_kelamin_id = $request->jenis_kelamin_id;
        $user->agama_id = $request->agama_id;
        $user->pendidikan_id = $request->pendidikan_id;
        $user->jabatan_id = $request->jabatan_id;
        $user->divisi_id = $request->divisi_id;
        $user->nama = $request->nama;
        $user->nik = $request->nik;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->alamat = $request->alamat;
        $user->kota = $request->kota;
        $user->provinsi = $request->provinsi;
        $user->telepon = $request->telepon;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);
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
            'jenis_kelamins' => JenisKelamin::where('id', '!=', $user->jenis_kelamin_id)->get(),
            'agamas' => Agama::where('id', '!=', $user->agama_id)->get(),
            'pendidikans' => Pendidikan::where('id', '!=', $user->pendidikan_id)->get(),
            'jabatans' => Jabatan::where('id', '!=', $user->jabatan_id)->get(),
            'divisis' => Divisi::where('id', '!=', $user->divisi_id)->get()
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
        $user->jenis_kelamin_id = $request->jenis_kelamin_id;
        $user->agama_id = $request->agama_id;
        $user->pendidikan_id = $request->pendidikan_id;
        $user->jabatan_id = $request->jabatan_id;
        $user->divisi_id = $request->divisi_id;
        $user->nama = $request->nama;
        $user->nik = $request->nik;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->alamat = $request->alamat;
        $user->kota = $request->kota;
        $user->provinsi = $request->provinsi;
        $user->telepon = $request->telepon;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
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
        return redirect('/admin/data-karyawan')->with('hapus', 'Data Karyawan Berhasil Dihapus.');
    }
}
