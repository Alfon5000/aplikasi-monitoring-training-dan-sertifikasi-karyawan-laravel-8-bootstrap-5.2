@extends('admin.layouts.app')

@section('title', 'Ubah Data Karyawan')

@section('data-karyawan-active', 'active')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ubah Data Karyawan</h3>
            </div>
            <form action="/admin/data-karyawan/{{ $user->id }}" method="POST" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama"
                    value="{{ $user->nama }}">
                </div>
                <div class="form-group">
                  <label for="nik">NIK</label>
                  <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik"
                    value="{{ $user->nik }}">
                </div>
                <div class="form-group">
                  <label for="tempat-lahir">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tempat-lahir" placeholder="Tempat Lahir"
                    name="tempat_lahir" value="{{ $user->tempat_lahir }}">
                </div>
                <div class="form-group">
                  <label for="tanggal-lahir">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tanggal-lahir" placeholder="Tanggal Lahir"
                    name="tanggal_lahir" value="{{ $user->tanggal_lahir }}">
                </div>
                <div class="form-group">
                  <label for="jenis-kelamin">Jenis Kelamin</label>
                  <select class="form-control" id="jenis-kelamin" name="jenis_kelamin">
                    <option value="{{ $user->jenis_kelamin }}">{{ $user->jenis_kelamin }}</option>
                    @foreach ($jenis_kelamins as $jenis_kelamin)
                      <option value="{{ $jenis_kelamin }}">{{ $jenis_kelamin }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="agama">Agama</label>
                  <select class="form-control" id="agama" name="agama">
                    <option value="{{ $user->agama }}">{{ $user->agama }}</option>
                    @foreach ($agamas as $agama)
                      <option value="{{ $agama }}">{{ $agama }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" id="alamat" rows="3" name="alamat" value="{{ $user->alamat }}">{{ $user->alamat }}</textarea>
                </div>
                <div class="form-group">
                  <label for="kota">Kota</label>
                  <input type="text" class="form-control" id="kota" placeholder="Kota" name="kota"
                    value="{{ $user->kota }}">
                </div>
                <div class="form-group">
                  <label for="provinsi">Provinsi</label>
                  <input type="text" class="form-control" id="provinsi" placeholder="Provinsi" name="provinsi"
                    value="{{ $user->provinsi }}">
                </div>
                <div class="form-group">
                  <label for="pendidikan">Pendidikan</label>
                  <select class="form-control" id="pendidikan" name="pendidikan">
                    <option value="{{ $user->pendidikan }}">{{ $user->pendidikan }}</option>
                    @foreach ($pendidikans as $pendidikan)
                      <option value="{{ $pendidikan }}">{{ $pendidikan }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="divisi">Divisi</label>
                  <select class="form-control" id="divisi" name="divisi">
                    <option value="{{ $user->divisi }}">{{ $user->divisi }}</option>
                    @foreach ($divisis as $divisi)
                      <option value="{{ $divisi }}">{{ $divisi }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <select class="form-control" id="jabatan" name="jabatan">
                    <option value="{{ $user->jabatan }}">{{ $user->jabatan }}</option>
                    @foreach ($jabatans as $jabatan)
                      <option value="{{ $jabatan }}">{{ $jabatan }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="telepon">Telepon</label>
                  <input type="text" class="form-control" id="telepon" placeholder="Telepon" name="telepon"
                    value="{{ $user->telepon }}">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                    value="{{ $user->email }}">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                    value="{{ $user_password }}">
                </div>
                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input type="file" class="form-control-file" id="foto" name="foto"
                    value="{{ $user->foto }}">
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="/admin/data-karyawan" class="btn btn-danger">Batal</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
