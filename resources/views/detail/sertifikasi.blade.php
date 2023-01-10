@extends('layouts.app')

@section('title', 'Sertifikasi Detail')

@section('content')
  <div class="container my-5">
    @if ($registered > 0)
      <div class="alert alert-success" role="alert">
        Anda telah terdaftar pada sertifikasi ini.
      </div>
    @endif
    <div class="card">
      <div class="card-header d-flex justify-content-center">
        <img src="{{ asset('storage/' . $sertifikasi->gambar) }}" class="card-img-top my-3" alt="{{ $sertifikasi->nama }}"
          style="max-height: 600px; max-width: 1200px;">
      </div>
      <div class="card-body">
        <h5 class="card-title fw-bold">{{ $sertifikasi->nama }}</h5>
        <p class="card-text">{{ $sertifikasi->deskripsi }}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Bidang</h6>
          <p class="card-text">{{ $sertifikasi->bidang }}</p>
        </li>
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Metode</h6>
          <p class="card-text">{{ $sertifikasi->metode }}</p>
        </li>
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Tanggal Ujian</h6>
          <p class="card-text">{{ $sertifikasi->tanggal_ujian }}</p>
        </li>
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Alamat</h6>
          <p class="card-text">{{ $sertifikasi->alamat }}</p>
        </li>
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Kota</h6>
          <p class="card-text">{{ $sertifikasi->kota }}</p>
        </li>
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Provinsi</h6>
          <p class="card-text">{{ $sertifikasi->provinsi }}</p>
        </li>
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Kuota</h6>
          <p class="card-text">
            @if ($sertifikasi->kuota > 0)
              {{ $sertifikasi->kuota }}
            @else
              Kuota Penuh
            @endif
          </p>
        </li>
      </ul>
      <div class="card-footer">
        @if ($registered <= 0 && $sertifikasi->kuota > 0)
          <form action="/sertifikasi/{{ $sertifikasi->id }}" method="POST" class="d-inline me-2">
            @csrf
            <button type="submit" class="btn btn-primary">Daftar</button>
          </form>
        @endif
        <a href="/" class="btn btn-danger">Kembali</a>
      </div>
    </div>
  </div>
@endsection
