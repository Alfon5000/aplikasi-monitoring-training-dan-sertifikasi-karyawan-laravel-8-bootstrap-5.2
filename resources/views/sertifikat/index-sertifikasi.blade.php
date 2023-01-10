@extends('layouts.app')

@section('title', 'Sertifikat Kompetensi')

@section('sertifikat', 'active')

@section('sertifikat-sertifikasi', 'active')

@section('content')
  <div class="container my-5">
    <h2>@yield('title')</h2>
    <a href="/sertifikat/sertifikasi/create" class="btn btn-primary mb-3">Tambah</a>
    @if ($count > 0)
      <table class="table table-bordered table-striped text-center">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nomor Sertifikat</th>
            <th scope="col">Nama Sertifikasi</th>
            <th scope="col">Tanggal Terbit</th>
            <th scope="col">Tanggal Kadaluarsa</th>
            <th scope="col">Status Sertifikat</th>
            <th scope="col">Status Validasi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($sertifikatKompetensis as $sertifikatKompetensi)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $sertifikatKompetensi->no_sertifikat }}</td>
              <td>{{ $sertifikatKompetensi->sertifikasi->nama }}</td>
              <td>{{ $sertifikatKompetensi->tanggal_terbit }}</td>
              <td>{{ $sertifikatKompetensi->tanggal_kadaluarsa }}</td>
              <td>
                <span class="badge text-bg-{{ $color }}">{{ $status }}</span>
              </td>
              <td>
                @if ($sertifikatKompetensi->status_validasi == 'Belum Divalidasi')
                  <span class="badge text-bg-secondary">{{ $sertifikatKompetensi->status_validasi }}</span>
                @elseif($sertifikatKompetensi->status_validasi == 'Valid')
                  <span class="badge text-bg-primary">{{ $sertifikatKompetensi->status_validasi }}</span>
                @else
                  <span class="badge text-bg-danger">{{ $sertifikatKompetensi->status_validasi }}</span>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          {{ $sertifikatKompetensis->links() }}
        </tfoot>
      </table>
    @else
      <div class="alert alert-danger" role="alert">
        Belum Ada @yield('title')!
      </div>
    @endif
  </div>
@endsection
