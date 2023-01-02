@extends('admin.layouts.app')

@section('title', 'Pendaftaran Training')

@section('pendaftaran-training-active', 'active')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @include('flash-message')
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
                <h3 class="text-center">@yield('title') Belum Ada!</h3>
              @else
                <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Pendaftar</th>
                      <th>Nama Training</th>
                      <th>Tanggal Pendaftaran</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($pendaftarans as $pendaftaran)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pendaftaran->user->nama }}</td>
                        <td>{{ $pendaftaran->training->nama }}</td>
                        <td>{{ $pendaftaran->tanggal }}</td>
                        <td>
                          @if ($pendaftaran->status == 'Menunggu Konfirmasi')
                            <span class="badge badge-secondary">{{ $pendaftaran->status }}</span>
                          @elseif($pendaftaran->status == 'Disetujui')
                            <span class="badge badge-primary">{{ $pendaftaran->status }}</span>
                          @else
                            <span class="badge badge-danger">{{ $pendaftaran->status }}</span>
                          @endif
                        </td>
                        <td>
                          @if ($pendaftaran->status == 'Menunggu Konfirmasi')
                            <form action="/admin/pendaftaran-training/accept/{{ $pendaftaran->id }}" method="POST"
                              class="d-inline">
                              @method('PUT')
                              @csrf
                              <button class="btn btn-primary">Setuju</button>
                            </form>
                            <form action="/admin/pendaftaran-training/reject/{{ $pendaftaran->id }}" method="POST"
                              class="d-inline">
                              @method('PUT')
                              @csrf
                              <button class="btn btn-danger">Tolak</button>
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
                {{ $pendaftarans->links() }}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
