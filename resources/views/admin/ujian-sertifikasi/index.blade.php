@extends('admin.layouts.app')

@section('title', 'Ujian Sertifikasi')

@section('ujian-sertifikasi-active', 'active')

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
                      <th>Nama Sertifikasi</th>
                      <th>Status Pelaksanaan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($ujian_sertifikasis as $ujian_sertifikasi)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ujian_sertifikasi->user->nik }}</td>
                        <td>{{ $ujian_sertifikasi->user->nama }}</td>
                        <td>{{ $ujian_sertifikasi->sertifikasi->nama }}</td>
                        <td>
                          @if ($ujian_sertifikasi->statusPelaksanaan->id == 1)
                            <span class="badge badge-danger">{{ $ujian_sertifikasi->statusPelaksanaan->nama }}</span>
                          @elseif($ujian_sertifikasi->statusPelaksanaan->id == 2)
                            <span class="badge badge-warning">{{ $ujian_sertifikasi->statusPelaksanaan->nama }}</span>
                          @else
                            <span class="badge badge-primary">{{ $ujian_sertifikasi->statusPelaksanaan->nama }}</span>
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
                {{ $ujian_sertifikasis->links() }}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
