@extends('layouts.app')

@section('title', 'Profil')

@section('profil-active', 'active')

@section('content')
  <div class="container my-5">
    <div class="card">
      <div class="card-header d-flex justify-content-center">
        <img src="{{ asset('storage/' . $user->foto) }}" class="card-img-top my-3 img-thumbnail" alt="{{ $user->nama }}"
          style="max-height: 400px; max-width: 400px;">
      </div>
      <div class="d-flex p-3">
        <div class="w-50">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <h6 class="card-title fw-bold">Nama Lengkap</h6>
              <p class="card-text">{{ $user->nama }}</p>
            </li>
            <li class="list-group-item">
              <h6 class="card-title fw-bold">Tempat Lahir</h6>
              <p class="card-text">{{ $user->tempat_lahir }}</p>
            </li>
            <li class="list-group-item">
              <h6 class="card-title fw-bold">Tanggal Lahir</h6>
              <p class="card-text">{{ $user->tanggal_lahir }}</p>
            </li>
            <li class="list-group-item">
              <h6 class="card-title fw-bold">Jenis Kelamin</h6>
              <p class="card-text">{{ $user->jenis_kelamin }}</p>
            </li>
            <li class="list-group-item">
              <h6 class="card-title fw-bold">Agama</h6>
              <p class="card-text">{{ $user->agama }}</p>
            </li>
            <li class="list-group-item">
              <h6 class="card-title fw-bold">Alamat</h6>
              <p class="card-text">{{ $user->alamat }}</p>
            </li>
            <li class="list-group-item">
              <h6 class="card-title fw-bold">Kota</h6>
              <p class="card-text">{{ $user->kota }}</p>
            </li>
          </ul>
        </div>
        <div class="w-50">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <h6 class="card-title fw-bold">Provinsi</h6>
              <p class="card-text">{{ $user->provinsi }}</p>
            </li>
            <li class="list-group-item">
              <h6 class="card-title fw-bold">Pendidikan</h6>
              <p class="card-text">{{ $user->pendidikan }}</p>
            </li>
            <li class="list-group-item">
              <h6 class="card-title fw-bold">Divisi</h6>
              <p class="card-text">{{ $user->divisi }}</p>
            </li>
            <li class="list-group-item">
              <h6 class="card-title fw-bold">Jabatan</h6>
              <p class="card-text">{{ $user->jabatan }}</p>
            </li>
            <li class="list-group-item">
              <h6 class="card-title fw-bold">Telepon</h6>
              <p class="card-text">{{ $user->telepon }}</p>
            </li>
            <li class="list-group-item">
              <h6 class="card-title fw-bold">Email</h6>
              <p class="card-text">{{ $user->email }}</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
