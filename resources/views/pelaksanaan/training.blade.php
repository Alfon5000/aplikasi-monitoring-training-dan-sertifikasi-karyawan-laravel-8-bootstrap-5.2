@extends('layouts.app')

@section('title', 'Pelaksanaan Training')

@section('pelaksanaan', 'active')

@section('pelaksanaan-training', 'active')

@section('content')
  <div class="container my-5">
    <h2>@yield('title')</h2>
    @if ($count > 0)
      <table class="table table-bordered table-striped text-center">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Training</th>
            <th scope="col">Tanggal Mulai</th>
            <th scope="col">Tanggal Selesai</th>
            <th scope="col">Status Pelaksanaan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pelaksanaanTrainings as $pelaksanaanTraining)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $pelaksanaanTraining->training->nama }}</td>
              <td>{{ $pelaksanaanTraining->training->tanggal_mulai }}</td>
              <td>{{ $pelaksanaanTraining->training->tanggal_selesai }}</td>
              <td>
                <span class="badge text-bg-{{ $color }}">{{ $status }}</span>
              </td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          {{ $pelaksanaanTrainings->links() }}
        </tfoot>
      </table>
    @else
      <div class="alert alert-danger" role="alert">
        Belum Ada @yield('title')!
      </div>
    @endif
  </div>
@endsection
