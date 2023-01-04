@extends('layouts.app')

@section('title', 'Ujian Sertifikasi')

@section('pelaksanaan', 'active')

@section('pelaksanaan-sertifikasi', 'active')

@section('content')
  <div class="container my-5">
    <h2>@yield('title')</h2>
    @if ($count > 0)
      <table class="table table-bordered table-striped">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Sertifikasi</th>
            <th scope="col">Status Ujian</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($ujianSertifikasis as $ujianSertifikasi)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $ujianSertifikasi->sertifikasi->nama }}</td>
              <td>{{ $ujianSertifikasi->status }}</td>
              <td>{{ $ujianSertifikasi->keterangan }}</td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          {{ $ujianSertifikasis->links() }}
        </tfoot>
      </table>
    @else
      <div class="alert alert-danger" role="alert">
        Belum Ada @yield('title')!
      </div>
    @endif
  </div>
@endsection
