@extends('admin.layouts.app')

@section('title', 'Validasi Sertifikat Training')

@section('sertifikat-training-active', 'active')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @include('admin.layouts.flash-message')
          <div class="card">
            <div class="card-header">
              {{-- <div class="card-tools float-left">
          <div class="input-group input-group-sm">
            <a href="/admin/data-training/create" class="btn btn-primary">Tambah</a>
          </div>
        </div> --}}
              {{-- <div class="card-tools float-right">
          <form action="/admin/data-training">
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
                <div class="alert alert-danger" role="alert">
                  <h5 class="text-center">Belum Ada @yield('title')!</h5>
                </div>
              @else
                <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nomor Sertifikat</th>
                      <th>Nama Karyawan</th>
                      <th>Nama Training</th>
                      <th>Status Validasi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($sertifikat_trainings as $sertifikat_training)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sertifikat_training->no_sertifikat }}</td>
                        <td>{{ $sertifikat_training->user->nama }}</td>
                        <td>{{ $sertifikat_training->training->nama }}</td>
                        <td>
                          @if ($sertifikat_training->status_validasi == 'Belum Divalidasi')
                            <span class="badge badge-secondary">{{ $sertifikat_training->status_validasi }}</span>
                          @elseif ($sertifikat_training->status_validasi == 'Valid')
                            <span class="badge badge-primary">{{ $sertifikat_training->status_validasi }}</span>
                          @else
                            <span class="badge badge-danger">{{ $sertifikat_training->status_validasi }}</span>
                          @endif
                        </td>
                        <td>
                          @if ($sertifikat_training->status_validasi == 'Belum Divalidasi')
                            <form action="/admin/sertifikat-training/accept/{{ $sertifikat_training->id }}" method="POST"
                              class="d-inline">
                              @method('PUT')
                              @csrf
                              <button class="btn btn-primary">Valid</button>
                            </form>
                            <form action="/admin/sertifikat-training/reject/{{ $sertifikat_training->id }}" method="POST"
                              class="d-inline">
                              @method('PUT')
                              @csrf
                              <button class="btn btn-danger">Tidak Valid</button>
                            </form>
                          @else
                            Tidak Ada Aksi
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
                {{ $sertifikat_trainings->links() }}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
