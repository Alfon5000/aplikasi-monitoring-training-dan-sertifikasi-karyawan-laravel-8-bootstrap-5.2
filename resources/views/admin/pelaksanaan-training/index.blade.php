@extends('admin.layouts.app')

@section('title', 'Pelaksanaan Training')

@section('pelaksanaan-training-active', 'active')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @if (session()->has('tambah'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('tambah') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @elseif(session()->has('perbarui'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('perbarui') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @elseif(session()->has('hapus'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('hapus') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          <div class="card">
            <div class="card-header">
              {{-- <div class="card-tools float-left">
                <div class="input-group input-group-sm">
                  <a href="/admin/data-karyawan/create" class="btn btn-primary">Tambah</a>
                </div>
              </div> --}}
              {{-- <div class="card-tools float-right">
                <form action="/admin/data-karyawan">
                  <div class="input-group input-group-sm" style="width: 300px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search"
                      value="{{ request('table_search') }}">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div> --}}
            </div>
            <div class="card-body">
              @if ($count <= 0)
                <h3 class="text-center">@yield('title') Belum Ada!</h3>
              @else
                <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>NIK</th>
                      <th>Nama Karyawan</th>
                      <th>Nama Training</th>
                      <th>Status Pelaksanaan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pelaksanaan_trainings as $pelaksanaan_training)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pelaksanaan_training->user->nik }}</td>
                        <td>{{ $pelaksanaan_training->user->nama }}</td>
                        <td>{{ $pelaksanaan_training->training->nama }}</td>
                        <td>
                          @if ($pelaksanaan_training->statusPelaksanaan->id == 1)
                            <span class="badge badge-danger">{{ $pelaksanaan_training->statusPelaksanaan->nama }}</span>
                          @elseif($pelaksanaan_training->statusPelaksanaan->id == 2)
                            <span class="badge badge-warning">{{ $pelaksanaan_training->statusPelaksanaan->nama }}</span>
                          @else
                            <span class="badge badge-primary">{{ $pelaksanaan_training->statusPelaksanaan->nama }}</span>
                          @endif
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              @endif
            </div>
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 justify-content-center">
                {{ $pelaksanaan_trainings->links() }}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
