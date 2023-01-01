@extends('admin.layouts.app')

@section('title', 'Data Training')

@section('data-training-active', 'active')

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
              <div class="card-tools float-left">
                <div class="input-group input-group-sm">
                  <a href="/admin/data-training/create" class="btn btn-primary">Tambah</a>
                </div>
              </div>
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
                      <th>Nama</th>
                      <th>Gambar</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Kuota</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($trainings as $training)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $training->nama }}</td>
                        <td>
                          <img src="{{ asset('storage/' . $training->gambar) }}" alt="{{ $training->nama }}"
                            class="img-thumbnail" style="max-height: 100px">
                        </td>
                        <td>{{ $training->tanggal_mulai }}</td>
                        <td>{{ $training->tanggal_selesai }}</td>
                        <td>{{ $training->kuota }}</td>
                        <td>
                          <a href="/admin/data-training/{{ $training->id }}" class="btn btn-info">Detail</a>
                          <a href="/admin/data-training/{{ $training->id }}/edit" class="btn btn-warning">Ubah</a>
                          <form action="/admin/data-training/{{ $training->id }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              @endif
            </div>
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 justify-content-center">
                {{ $trainings->links() }}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
