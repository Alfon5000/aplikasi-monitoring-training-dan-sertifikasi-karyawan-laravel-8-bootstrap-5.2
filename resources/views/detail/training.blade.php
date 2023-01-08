@extends('layouts.app')

@section('title', 'Training Detail')

@section('content')
  <div class="container my-5">
    @if ($registered > 0)
      <div class="alert alert-success" role="alert">
        Anda telah terdaftar pada training ini.
      </div>
    @endif
    <div class="card">
      <div class="card-header d-flex justify-content-center">
        <img src="{{ asset('storage/' . $training->gambar) }}" class="card-img-top my-3" alt="{{ $training->nama }}"
          style="max-height: 600px; max-width: 1200px;">
      </div>
      <div class="card-body">
        <h5 class="card-title fw-bold">{{ $training->nama }}</h5>
        <p class="card-text">{{ $training->deskripsi }}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Bidang</h6>
          <p class="card-text">{{ $training->bidang }}</p>
        </li>
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Metode</h6>
          <p class="card-text">{{ $training->metode }}</p>
        </li>
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Tanggal Mulai</h6>
          <p class="card-text">{{ $training->tanggal_mulai }}</p>
        </li>
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Tanggal Selesai</h6>
          <p class="card-text">{{ $training->tanggal_selesai }}</p>
        </li>
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Alamat</h6>
          <p class="card-text">{{ $training->alamat }}</p>
        </li>
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Kota</h6>
          <p class="card-text">{{ $training->kota }}</p>
        </li>
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Provinsi</h6>
          <p class="card-text">{{ $training->provinsi }}</p>
        </li>
        <li class="list-group-item">
          <h6 class="card-title fw-bold">Kuota</h6>
          <p class="card-text">
            @if ($training->kuota > 0)
              {{ $training->kuota }}
            @else
              Kuota Penuh
            @endif
          </p>
        </li>
      </ul>
      <div class="card-footer">
        @if ($registered <= 0 && $training->kuota > 0)
          <form action="/training/{{ $training->id }}" method="POST" class="d-inline me-2">
            @csrf
            <button type="submit" class="btn btn-primary">Daftar</button>
          </form>
        @endif
        <a href="/" class="btn btn-danger">Kembali</a>
      </div>
    </div>
  </div>
@endsection
