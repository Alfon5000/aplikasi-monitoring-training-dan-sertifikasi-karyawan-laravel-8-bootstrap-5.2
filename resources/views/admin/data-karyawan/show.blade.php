@extends('admin.layouts.app')

@section('title', 'Detail Karyawan')

@section('data-karyawan-active', 'active')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-body">
              <strong>NIK</strong>
              <p class="text-muted">
                {{ $user->nik }}
              </p>
              <hr>
              <strong>Nama Lengkap</strong>
              <p class="text-muted">
                {{ $user->nama }}
              </p>
              <hr>
              <strong>Tempat Lahir</strong>
              <p class="text-muted">
                {{ $user->tempat_lahir }}
              </p>
              <hr>
              <strong>Tanggal Lahir</strong>
              <p class="text-muted">{{ $user->tanggal_lahir }}</p>
              <hr>
              <strong>Jenis Kelamin</strong>
              <p class="text-muted">{{ $user->jenisKelamin->nama }}</p>
              <hr>
              <strong>Agama</strong>
              <p class="text-muted">{{ $user->agama->nama }}</p>
              <hr>
              <strong>Telepon</strong>
              <p class="text-muted">{{ $user->telepon }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-body">
              <strong>Email</strong>
              <p class="text-muted">{{ $user->email }}</p>
              <hr>
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
              <p class="text-muted">{{ $user->pendidikan->nama }}</p>
              <hr>
              <strong>Jabatan</strong>
              <p class="text-muted">{{ $user->jabatan->nama }}</p>
              <hr>
              <strong>Divisi</strong>
              <p class="text-muted">{{ $user->divisi->nama }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
