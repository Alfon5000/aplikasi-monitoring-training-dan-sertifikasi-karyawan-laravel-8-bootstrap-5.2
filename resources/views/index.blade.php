@extends('layouts.app')

@section('title', 'Home')

@section('home', 'active')

@section('content')
  <div class="container">
    <div class="row mb-5">
      <h2>Daftar Training</h2>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($trainings as $training)
          <div class="col">
            <div class="card">
              <div class="card-header bg-primary text-light text-center">
                <h5 class="card-title mt-2">{{ $training->nama }}</h5>
              </div>
              <div class="text-center">
                <img src="{{ asset('storage/gambar-training/' . $training->gambar) }}"
                  class="card-img-top img-thumbnail rounded mt-3" alt="{{ $training->nama }}"
                  style="height: 120px; width: 200px;">
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">Bidang</h5>
                <p class="card-text">{{ $training->bidang }}</p>
                <h5 class="card-title fw-bold">Metode</h5>
                <p class="card-text">{{ $training->metode }}</p>
                <h5 class="card-title fw-bold">Kuota</h5>
                <p class="card-text">{{ $training->kuota }}</p>
              </div>
              <div class="card-footer text-center">
                <a href="/training/{{ $training->id }}" class="btn btn-primary w-100">Detail</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="mt-5">
        {{ $trainings->links() }}
      </div>
    </div>
    <hr>
    <div class="row mb-5">
      <h2>Daftar Sertifikasi</h2>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach ($sertifikasis as $sertifikasi)
          <div class="col">
            <div class="card">
              <div class="card-header bg-primary text-light text-center">
                <h5 class="card-title mt-2">{{ $sertifikasi->nama }}</h5>
              </div>
              <div class="text-center">
                <img src="{{ asset('storage/gambar-sertifikasi/' . $sertifikasi->gambar) }}"
                  class="card-img-top img-thumbnail rounded mt-3" alt="{{ $sertifikasi->nama }}"
                  style="height: 120px; width: 200px;">
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold">Bidang</h5>
                <p class="card-text">{{ $sertifikasi->bidang }}</p>
                <h5 class="card-title fw-bold">Metode</h5>
                <p class="card-text">{{ $sertifikasi->metode }}</p>
                <h5 class="card-title fw-bold">Kuota</h5>
                <p class="card-text">{{ $sertifikasi->kuota }}</p>
              </div>
              <div class="card-footer text-center">
                <a href="/sertifikasi/{{ $sertifikasi->id }}" class="btn btn-primary w-100">Detail</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="mt-5">
        {{ $sertifikasis->links() }}
      </div>
    </div>
  </div>
@endsection
