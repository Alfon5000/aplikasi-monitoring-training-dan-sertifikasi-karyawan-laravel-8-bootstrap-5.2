@extends('layouts.app')

@section('title', 'Pendaftaran Sertifikasi')

@section('pendaftaran', 'active')

@section('pendaftaran-sertifikasi', 'active')

@section('content')
  <div class="container my-5">
    <h2>@yield('title')</h2>
    @if ($count > 0)
      <table class="table table-bordered table-striped text-center">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Sertifikasi</th>
            <th scope="col">Tanggal Pendaftaran</th>
            <th scope="col">Status Pendaftaran</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pendaftaranSertifikasis as $pendaftaranSertifikasi)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $pendaftaranSertifikasi->sertifikasi->nama }}</td>
              <td>{{ $pendaftaranSertifikasi->tanggal }}</td>
              <td>
                @if ($pendaftaranSertifikasi->status == 'Menunggu Konfirmasi')
                  <span class="badge text-bg-secondary">{{ $pendaftaranSertifikasi->status }}</span>
                @elseif ($pendaftaranSertifikasi->status == 'Disetujui')
                  <span class="badge text-bg-primary">{{ $pendaftaranSertifikasi->status }}</span>
                @else
                  <span class="badge text-bg-danger">{{ $pendaftaranSertifikasi->status }}</span>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          {{ $pendaftaranSertifikasis->links() }}
        </tfoot>
      </table>
    @else
      <div class="alert alert-danger" role="alert">
        Belum Ada @yield('title')!
      </div>
    @endif
  </div>
@endsection
