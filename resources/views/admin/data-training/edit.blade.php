@extends('admin.layouts.app')

@section('title', 'Ubah Data Training')

@section('data-training-active', 'active')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ubah Data Training</h3>
            </div>
            <form action="/admin/data-training/{{ $training->id }}" method="POST" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama"
                    value="{{ $training->nama }}">
                </div>
                <div class="form-group">
                  <label for="bidang">Bidang</label>
                  <input type="text" class="form-control" id="bidang" placeholder="Bidang" name="bidang"
                    value="{{ $training->bidang }}">
                </div>
                <div class="form-group">
                  <label for="metode">Metode</label>
                  <select class="form-control" id="metode" name="metode">
                    <option value="{{ $training->metode }}">{{ $training->metode }}</option>
                    @foreach ($metodes as $metode)
                      <option value="{{ $metode }}">{{ $metode }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="tanggal-mulai">Tanggal Mulai</label>
                  <input type="date" class="form-control" id="tanggal-mulai" placeholder="Tanggal Mulai"
                    name="tanggal_mulai" value="{{ $training->tanggal_mulai }}">
                </div>
                <div class="form-group">
                  <label for="tanggal-selesai">Tanggal Selesai</label>
                  <input type="date" class="form-control" id="tanggal-selesai" placeholder="Tanggal Selesai"
                    name="tanggal_selesai" value="{{ $training->tanggal_selesai }}">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" id="alamat" rows="3" name="alamat" value="{{ $training->alamat }}">{{ $training->alamat }}</textarea>
                </div>
                <div class="form-group">
                  <label for="kota">Kota</label>
                  <input type="text" class="form-control" id="kota" placeholder="Kota" name="kota"
                    value="{{ $training->kota }}">
                </div>
                <div class="form-group">
                  <label for="provinsi">Provinsi</label>
                  <input type="text" class="form-control" id="provinsi" placeholder="Provinsi" name="provinsi"
                    value="{{ $training->provinsi }}">
                </div>
                <div class="form-group">
                  <label for="kuota">Kuota</label>
                  <input type="number" class="form-control" id="kuota" placeholder="Kuota" name="kuota"
                    value="{{ $training->kuota }}">
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" value="{{ $training->deskripsi }}">{{ $training->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                  <label for="gambar">Gambar</label>
                  <input type="file" class="form-control-file" id="gambar" name="gambar"
                    value="{{ $training->gambar }}">
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Perbarui</button>
                <a href="/admin/data-training" class="btn btn-danger">Batal</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
