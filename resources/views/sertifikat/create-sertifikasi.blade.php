@extends('layouts.app')

@section('title', 'Tambah Sertifikat Kompetensi')

@section('sertifikat', 'active')

@section('sertifikat-sertifikasi', 'active')

@section('content')
  <div class="container my-5">
    <h2>@yield('title')</h2>
    <form action="/sertifikat/sertifikasi" method="POST">
      @csrf
      <div class="mb-3">
        <label for="nomor-sertifikat" class="form-label">Nomor Sertifikat</label>
        <input type="text" class="form-control" id="nomor-sertifikat" name="no_sertifikat">
      </div>
      <div class="mb-3">
        <label for="nama-sertifikasi" class="form-label">Nama Sertifikasi</label>
        <select name="sertifikasi_id" id="nama-sertifikasi" class="form-select">
          <option value="">-- Pilih Sertifikasi --</option>
          @foreach ($ujianSertifikasis as $ujianSertifikasi)
            <option value="{{ $ujianSertifikasi->sertifikasi->id }}">{{ $ujianSertifikasi->sertifikasi->nama }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="tanggal-terbit" class="form-label">Tanggal Terbit</label>
        <input type="date" class="form-control" id="tanggal-terbit" name="tanggal_terbit">
      </div>
      <div class="mb-3">
        <label for="tanggal-kadaluarsa" class="form-label">Tanggal Kadaluarsa</label>
        <input type="date" class="form-control" id="tanggal-kadaluarsa" name="tanggal_kadaluarsa">
      </div>
      <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
      <input type="hidden" name="status_validasi" value="{{ 'Belum Divalidasi' }}">
      <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
  </div>
@endsection
