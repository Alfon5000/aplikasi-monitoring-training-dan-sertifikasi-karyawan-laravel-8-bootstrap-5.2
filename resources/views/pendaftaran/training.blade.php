@extends('layouts.app')

@section('title', 'Pendaftaran Training')

@section('pendaftaran', 'active')

@section('pendaftaran-training', 'active')

@section('content')
  <div class="container my-5">
    <h2>@yield('title')</h2>
    @if ($count > 0)
      <table class="table table-bordered table-striped">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Training</th>
            <th scope="col">Status Pendaftaran</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pendaftaranTrainings as $pendaftaranTraining)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $pendaftaranTraining->training->nama }}</td>
              <td>{{ $pendaftaranTraining->status }}</td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          {{ $pendaftaranTrainings->links() }}
        </tfoot>
      </table>
    @else
      <div class="alert alert-danger" role="alert">
        Belum Ada @yield('title')!
      </div>
    @endif
  </div>
@endsection
