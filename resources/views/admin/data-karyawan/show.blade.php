@extends('admin.layouts.app')

@section('title', 'Detail Karyawan')

@section('data-karyawan-active', 'active')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-primary">
            <div class="card-body">
              <div class="mb-5 text-center">
                <img src="{{ asset('storage/' . $user->foto) }}" alt="{{ $user->nama }}" class="img-thumbnail"
                  style="height: 275px;">
              </div>
              <strong>NIK</strong>
              <p class="text-muted">
                {{ $user->nik }}
              </p>
              <hr>
              <strong>Nama Lengkap</strong>
              <p class="text-muted">
                {{ $user->nama }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-primary">
            <div class="card-body">
              <strong>Tempat Lahir</strong>
              <p class="text-muted">
                {{ $user->tempat_lahir }}
              </p>
              <hr>
              <strong>Tanggal Lahir</strong>
              <p class="text-muted">{{ $user->tanggal_lahir }}</p>
              <hr>
              <strong>Jenis Kelamin</strong>
              <p class="text-muted">{{ $user->jenisKelamin }}</p>
              <hr>
              <strong>Agama</strong>
              <p class="text-muted">{{ $user->agama }}</p>
              <hr>
              <strong>Telepon</strong>
              <p class="text-muted">{{ $user->telepon }}</p>
              <hr>
              <strong>Email</strong>
              <p class="text-muted">{{ $user->email }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-primary">
            <div class="card-body">
              <strong>Alamat</strong>
              <p class="text-muted">{{ $user->alamat }}</p>
              <hr>
              <strong>Kota</strong>
              <p class="text-muted">{{ $user->kota }}</p>
              <hr>
              <strong>Provinsi</strong>
              <p class="text-muted">{{ $user->provinsi }}</p>
              <hr>
              <strong>Pendidikan</strong>
              <p class="text-muted">{{ $user->pendidikan }}</p>
              <hr>
              <strong>Divisi</strong>
              <p class="text-muted">{{ $user->divisi }}</p>
              <hr>
              <strong>Jabatan</strong>
              <p class="text-muted">{{ $user->jabatan }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
