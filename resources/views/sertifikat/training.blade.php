@extends('layouts.app')

@section('title', 'Sertifikat Training')

@section('sertifikat', 'active')

@section('sertifikat-training', 'active')

@section('content')
  <div class="container my-5">
    <h2>@yield('title')</h2>
    @if ($count > 0)
      <table class="table table-bordered table-striped text-center">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nomor Sertifikat</th>
            <th scope="col">Nama Training</th>
            <th scope="col">Tanggal Terbit</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($sertifikatTrainings as $sertifikatTraining)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $sertifikatTraining->training->no_sertifikat }}</td>
              <td>{{ $sertifikatTraining->training->nama }}</td>
              <td>{{ $sertifikatTraining->tanggal_terbit }}</td>
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
