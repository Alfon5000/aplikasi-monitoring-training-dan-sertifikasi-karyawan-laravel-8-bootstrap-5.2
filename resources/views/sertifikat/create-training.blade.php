@extends('layouts.app')

@section('title', 'Tambah Sertifikat Training')

@section('sertifikat', 'active')

@section('sertifikat-training', 'active')

@section('content')
  <div class="container my-5">
    <h2>@yield('title')</h2>
    <form action="/sertifikat/training" method="POST">
      @csrf
      <div class="mb-3">
        <label for="nomor-sertifikat" class="form-label">Nomor Sertifikat</label>
        <input type="text" class="form-control" id="nomor-sertifikat" name="no_sertifikat">
      </div>
      <div class="mb-3">
        <label for="nama-training" class="form-label">Nama Training</label>
        <select name="training_id" id="nama-training" class="form-select">
          <option value="">-- Pilih Training --</option>
          @foreach ($pelaksanaanTrainings as $pelaksanaanTraining)
            <option value="{{ $pelaksanaanTraining->training->id }}">{{ $pelaksanaanTraining->training->nama }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="tanggal-terbit" class="form-label">Tanggal Terbit</label>
        <input type="date" class="form-control" id="tanggal-terbit" name="tanggal_terbit">
      </div>
      <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
      <input type="hidden" name="status_validasi" value="{{ 'Belum Divalidasi' }}">
      <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
  </div>
@endsection
