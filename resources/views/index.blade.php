@extends('layouts.app')

@section('title', 'Beranda')

@section('beranda', 'active')

@section('content')
  <div class="container">
    <div class="my-3">
      @if (session()->has('daftar'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('daftar') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @elseif (session()->has('login'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('login') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
    </div>
    @include('layouts.search')
    <div class="row mb-5">
      <h2>Daftar Training & Sertifikasi</h2>
      @if ($total_count > 0)
        <div class="row row-cols-1 row-cols-md-4 g-4">
          @foreach ($trainings as $training)
            <div class="col">
              <div class="card">
                <div class="card-header bg-primary text-light text-center">
                  <h5 class="card-title mt-2">{{ $training->nama }}</h5>
                </div>
                <div class="text-center">
                  <img src="{{ asset('storage/' . $training->gambar) }}" class="card-img-top img-thumbnail rounded mt-3"
                    alt="{{ $training->nama }}" style="height: 120px; width: 200px;">
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <h5 class="card-title fw-bold">Bidang</h5>
                      <p class="card-text">{{ $training->bidang }}</p>
                    </li>
                    <li class="list-group-item">
                      <h5 class="card-title fw-bold">Metode</h5>
                      <p class="card-text">{{ $training->metode }}</p>
                    </li>
                    <li class="list-group-item">
                      <h5 class="card-title fw-bold">Kuota</h5>
                      <p class="card-text">
                        @if ($training->kuota > 0)
                          {{ $training->kuota }}
                        @else
                          Kuota Penuh
                        @endif
                      </p>
                    </li>
                  </ul>
                </div>
                <div class="card-footer text-center">
                  <a href="/training/{{ $training->id }}" class="btn btn-primary w-100">Detail</a>
                </div>
              </div>
            </div>
          @endforeach
          @foreach ($sertifikasis as $sertifikasi)
            <div class="col">
              <div class="card">
                <div class="card-header bg-primary text-light text-center">
                  <h5 class="card-title mt-2">{{ $sertifikasi->nama }}</h5>
                </div>
                <div class="text-center">
                  <img src="{{ asset('storage/' . $sertifikasi->gambar) }}"
                    class="card-img-top img-thumbnail rounded mt-3" alt="{{ $sertifikasi->nama }}"
                    style="height: 120px; width: 200px;">
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <h5 class="card-title fw-bold">Bidang</h5>
                      <p class="card-text">{{ $sertifikasi->bidang }}</p>
                    </li>
                    <li class="list-group-item">
                      <h5 class="card-title fw-bold">Metode</h5>
                      <p class="card-text">{{ $sertifikasi->metode }}</p>
                    </li>
                    <li class="list-group-item">
                      <h5 class="card-title fw-bold">Kuota</h5>
                      <p class="card-text">
                        @if ($sertifikasi->kuota > 0)
                          {{ $sertifikasi->kuota }}
                        @else
                          Kuota Penuh
                        @endif
                      </p>
                    </li>
                  </ul>
                </div>
                <div class="card-footer text-center">
                  <a href="/sertifikasi/{{ $sertifikasi->id }}" class="btn btn-primary w-100">Detail</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @else
        <div class="alert alert-danger" role="alert">
          Tidak Ada Training & Sertifikasi
        </div>
      @endif
      <div class="mt-5">
        {{ $sertifikasis->links() }}
      </div>
    </div>
  </div>
@endsection
