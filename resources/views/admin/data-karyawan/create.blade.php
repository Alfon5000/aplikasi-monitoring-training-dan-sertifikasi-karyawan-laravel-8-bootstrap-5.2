@extends('admin.layouts.app')

@section('title', 'Tambah Data Karyawan')

@section('data-karyawan-active', 'active')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Masukkan Data Karyawan</h3>
            </div>
            <form action="/admin/data-karyawan" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                </div>
                <div class="form-group">
                  <label for="nik">NIK</label>
                  <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik">
                </div>
                <div class="form-group">
                  <label for="tempat-lahir">Tempat Lahir</label>
                  <input type="text" class="form-control" id="tempat-lahir" placeholder="Tempat Lahir"
                    name="tempat_lahir">
                </div>
                <div class="form-group">
                  <label for="tanggal-lahir">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tanggal-lahir" placeholder="Tanggal Lahir"
                    name="tanggal_lahir">
                </div>
                <div class="form-group">
                  <label for="jenis-kelamin">Jenis Kelamin</label>
                  <select class="form-control" id="jenis-kelamin" name="jenis_kelamin">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    @foreach ($jenis_kelamins as $jenis_kelamin)
                      <option value="{{ $jenis_kelamin }}">{{ $jenis_kelamin }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="agama">Agama</label>
                  <select class="form-control" id="agama" name="agama">
                    <option value="">-- Pilih Agama --</option>
                    @foreach ($agamas as $agama)
                      <option value="{{ $agama }}">{{ $agama }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                </div>
                <div class="form-group">
                  <label for="kota">Kota</label>
                  <input type="text" class="form-control" id="kota" placeholder="Kota" name="kota">
                </div>
                <div class="form-group">
                  <label for="provinsi">Provinsi</label>
                  <input type="text" class="form-control" id="provinsi" placeholder="Provinsi" name="provinsi">
                </div>
                <div class="form-group">
                  <label for="pendidikan">Pendidikan</label>
                  <select class="form-control" id="pendidikan" name="pendidikan">
                    <option value="">-- Pilih Pendidikan --</option>
                    @foreach ($pendidikans as $pendidikan)
                      <option value="{{ $pendidikan }}">{{ $pendidikan }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="divisi">Divisi</label>
                  <select class="form-control" id="divisi" name="divisi">
                    <option value="">-- Pilih Divisi --</option>
                    @foreach ($divisis as $divisi)
                      <option value="{{ $divisi }}">{{ $divisi }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <select class="form-control" id="jabatan" name="jabatan">
                    <option value="">-- Pilih Jabatan --</option>
                    @foreach ($jabatans as $jabatan)
                      <option value="{{ $jabatan }}">{{ $jabatan }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="telepon">Telepon</label>
                  <input type="text" class="form-control" id="telepon" placeholder="Telepon" name="telepon">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input type="file" class="form-control-file" id="foto" name="foto">
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="/admin/data-karyawan" class="btn btn-danger">Batal</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
