@extends('layouts.app')

@section('title', 'Ujian Sertifikasi')

@section('pelaksanaan', 'active')

@section('pelaksanaan-sertifikasi', 'active')

@section('content')
  <div class="container my-5">
    <h2>@yield('title')</h2>
    @if ($count > 0)
      <table class="table table-bordered table-striped text-center">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Sertifikasi</th>
            <th scope="col">Tanggal Ujian</th>
            <th scope="col">Status Ujian</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($ujianSertifikasis as $ujianSertifikasi)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $ujianSertifikasi->sertifikasi->nama }}</td>
              <td>{{ $ujianSertifikasi->sertifikasi->tanggal_ujian }}</td>
              <td>
                @if ($ujianSertifikasi->status == 'Belum Mulai')
                  <span class="badge text-bg-danger">{{ $ujianSertifikasi->status }}</span>
                @elseif ($ujianSertifikasi->status == 'Sedang Dilaksanakan')
                  <span class="badge text-bg-warning">{{ $ujianSertifikasi->status }}</span>
                @else
                  <span class="badge text-bg-success">{{ $ujianSertifikasi->status }}</span>
                @endif
              </td>
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
