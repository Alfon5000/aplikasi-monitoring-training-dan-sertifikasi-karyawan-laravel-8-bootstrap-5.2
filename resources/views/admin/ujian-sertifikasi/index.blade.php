@extends('admin.layouts.app')

@section('title', 'Ujian Sertifikasi')

@section('ujian-sertifikasi-active', 'active')

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
                <div class="alert alert-danger" role="alert">
                  <h5 class="text-center">Belum Ada @yield('title')!</h5>
                </div>
              @else
                <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Karyawan</th>
                      <th>Nama Sertifikasi</th>
                      <th>Tanggal Ujian</th>
                      <th>Status Pelaksanaan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($ujian_sertifikasis as $ujian_sertifikasi)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ujian_sertifikasi->user->nama }}</td>
                        <td>{{ $ujian_sertifikasi->sertifikasi->nama }}</td>
                        <td>{{ $ujian_sertifikasi->sertifikasi->tanggal_ujian }}</td>
                        <td>
                          <span class="badge badge-{{ $color }}">{{ $status }}</span>
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
