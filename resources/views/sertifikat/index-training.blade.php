@extends('layouts.app')

@section('title', 'Sertifikat Training')

@section('sertifikat', 'active')

@section('sertifikat-training', 'active')

@section('content')
  <div class="container my-5">
    <h2>@yield('title')</h2>
    <a href="/sertifikat/training/create" class="btn btn-primary mb-3">Tambah</a>
    @if ($count > 0)
      <table class="table table-bordered table-striped text-center">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nomor Sertifikat</th>
            <th scope="col">Nama Training</th>
            <th scope="col">Tanggal Terbit</th>
            <th scope="col">Status Validasi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($sertifikatTrainings as $sertifikatTraining)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $sertifikatTraining->no_sertifikat }}</td>
              <td>{{ $sertifikatTraining->training->nama }}</td>
              <td>{{ $sertifikatTraining->tanggal_terbit }}</td>
              <td>
                @if ($sertifikatTraining->status_validasi == 'Belum Divalidasi')
                  <span class="badge text-bg-secondary">{{ $sertifikatTraining->status_validasi }}</span>
                @elseif($sertifikatTraining->status_validasi == 'Valid')
                  <span class="badge text-bg-primary">{{ $sertifikatTraining->status_validasi }}</span>
                @else
                  <span class="badge text-bg-danger">{{ $sertifikatTraining->status_validasi }}</span>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          {{ $sertifikatTrainings->links() }}
        </tfoot>
      </table>
    @else
      <div class="alert alert-danger" role="alert">
        Belum Ada @yield('title')!
      </div>
    @endif
  </div>
@endsection
