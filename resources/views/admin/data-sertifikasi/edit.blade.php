@extends('admin.layouts.app')

@section('title', 'Ubah Data Sertifikasi')

@section('data-sertifikasi-active', 'active')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ubah Data Sertifikasi</h3>
            </div>
            <form action="/admin/data-sertifikasi/{{ $sertifikasi->id }}" method="POST" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama"
                    value="{{ $sertifikasi->nama }}">
                </div>
                <div class="form-group">
                  <label for="tanggal-ujian">Tanggal Ujian</label>
                  <input type="date" class="form-control" id="tanggal-mulai" placeholder="Tanggal Ujian"
                    name="tanggal_ujian" value="{{ $sertifikasi->tanggal_ujian }}">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" id="alamat" rows="3" name="alamat" value="{{ $sertifikasi->alamat }}"></textarea>
                </div>
                <div class="form-group">
                  <label for="kota">Kota</label>
                  <input type="text" class="form-control" id="kota" placeholder="Kota" name="kota"
                    value="{{ $sertifikasi->kota }}">
                </div>
                <div class="form-group">
                  <label for="provinsi">Provinsi</label>
                  <input type="text" class="form-control" id="provinsi" placeholder="Provinsi" name="provinsi"
                    value="{{ $sertifikasi->provinsi }}">
                </div>
                <div class="form-group">
                  <label for="kuota">Kuota</label>
                  <input type="number" class="form-control" id="kuota" placeholder="Kuota" name="kuota"
                    value="{{ $sertifikasi->kuota }}">
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" value="{{ $sertifikasi->deskripsi }}"></textarea>
                </div>
                <div class="form-group">
                  <label for="gambar">Gambar</label>
                  <input type="file" class="form-control-file" id="gambar" name="gambar"
                    value="{{ $sertifikasi->gambar }}">
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="/admin/data-sertifikasi" class="btn btn-danger">Batal</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
