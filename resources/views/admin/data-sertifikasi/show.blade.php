@extends('admin.layouts.app')

@section('title', 'Detail Sertifikasi')

@section('data-sertifikasi-active', 'active')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-body">
              <div class="mb-5 text-center">
                <img src="{{ asset('storage/' . $sertifikasi->gambar) }}" alt="{{ $sertifikasi->nama }}"
                  class="img-thumbnail" style="height: 275px;">
              </div>
              <strong>Nama</strong>
              <p class="text-muted">
                {{ $sertifikasi->nama }}
              </p>
              <hr>
              <strong>Tanggal Ujian</strong>
              <p class="text-muted">
                {{ $sertifikasi->tanggal_ujian }}
              </p>
              <hr>
              <strong>Alamat</strong>
              <p class="text-muted">
                {{ $sertifikasi->alamat }}
              </p>
              <hr>
              <strong>Kota</strong>
              <p class="text-muted">
                {{ $sertifikasi->kota }}
              </p>
              <hr>
              <strong>Provinsi</strong>
              <p class="text-muted">
                {{ $sertifikasi->provinsi }}
              </p>
              <hr>
              <strong>Kuota</strong>
              <p class="text-muted">
                {{ $sertifikasi->kuota }}
              </p>
              <hr>
              <strong>Deskripsi</strong>
              <p class="text-muted">
                {{ $sertifikasi->deskripsi }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
