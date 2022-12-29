@extends('admin.layouts.app')

@section('title', 'Data Karyawan')

@section('data-karyawan-active', 'active')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools float-left">
                                <div class="input-group input-group-sm">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                            <div class="card-tools float-right">
                                <div class="input-group input-group-sm" style="width: 300px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        {{-- <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Provinsi</th> --}}
                                        <th>Telepon</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->nama }}</td>
                                            <td>{{ $user->nik }}</td>
                                            {{-- <td>{{ $user->tempat_lahir }}</td>
                                            <td>{{ $user->tanggal_lahir }}</td>
                                            <td>{{ $user->jenis_kelamin }}</td>
                                            <td>{{ $user->agama }}</td>
                                            <td>{{ $user->alamat }}</td>
                                            <td>{{ $user->kota }}</td>
                                            <td>{{ $user->provinsi }}</td> --}}
                                            <td>{{ $user->telepon }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <button type="submit" class="btn btn-info">Detail</button>
                                                <button type="submit" class="btn btn-warning">Ubah</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
