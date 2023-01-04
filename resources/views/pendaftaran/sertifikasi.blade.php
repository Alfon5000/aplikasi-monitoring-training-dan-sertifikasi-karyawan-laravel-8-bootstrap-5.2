@extends('layouts.app')

@section('title', 'Pendaftaran Sertifikasi')

@section('pendaftaran', 'active')

@section('pendaftaran-sertifikasi', 'active')

@section('content')
  <div class="container my-5">
    <h2>@yield('title')</h2>
    @if ($count > 0)
      <table class="table table-bordered table-striped">
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
              <td>{{ $pendaftaranSertifikasi->training->nama }}</td>
              <td>{{ $pendaftaranSertifikasi->tanggal }}</td>
              <td>{{ $pendaftaranSertifikasi->status }}</td>
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
