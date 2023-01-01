@extends('admin.layouts.app')

@section('title', 'Detail Training')

@section('data-training-active', 'active')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-body">
              <div class="mb-5 text-center">
                <img src="{{ asset('storage/' . $training->gambar) }}" alt="{{ $training->nama }}" class="img-thumbnail"
                  style="height: 275px;">
              </div>
              <strong>Nama</strong>
              <p class="text-muted">
                {{ $training->nama }}
              </p>
              <hr>
              <strong>Tanggal Mulai</strong>
              <p class="text-muted">
                {{ $training->tanggal_mulai }}
              </p>
              <hr>
              <strong>Tanggal Selesai</strong>
              <p class="text-muted">
                {{ $training->tanggal_selesai }}
              </p>
              <hr>
              <strong>Alamat</strong>
              <p class="text-muted">
                {{ $training->alamat }}
              </p>
              <hr>
              <strong>Kota</strong>
              <p class="text-muted">
                {{ $training->kota }}
              </p>
              <hr>
              <strong>Provinsi</strong>
              <p class="text-muted">
                {{ $training->provinsi }}
              </p>
              <hr>
              <strong>Deskripsi</strong>
              <p class="text-muted">
                {{ $training->deskripsi }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
