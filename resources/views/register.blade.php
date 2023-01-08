<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Register</title>
</head>

<body class="text-center">
  <main class="form-signin w-50 m-auto my-5">
    <form action="/register" method="POST" enctype="multipart/form-data">
      @csrf
      <img class="mb-4" src="{{ asset('logo.png') }}" alt="" width="72" height="72">
      <h1 class="h3 mb-3 fw-normal">Silakan Register</h1>
      <div class="row">
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="nama">
            <label for="floatingInput">Nama</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="nik">
            <label for="floatingInput">NIK</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="tempat_lahir">
            <label for="floatingInput">Tempat Lahir</label>
          </div>
          <div class="form-floating">
            <input type="date" class="form-control" id="floatingInput" name="tanggal_lahir">
            <label for="floatingInput">Tanggal Lahir</label>
          </div>
          <div class="form-floating">
            <select class="form-select" id="jenis-kelamin" name="jenis_kelamin">
              <option value="">-- Pilih Jenis Kelamin --</option>
              @foreach ($jenis_kelamins as $jenis_kelamin)
                <option value="{{ $jenis_kelamin }}">{{ $jenis_kelamin }}</option>
              @endforeach
            </select>
            <label for="jenis-kelamin">Jenis Kelamin</label>
          </div>
          <div class="form-floating">
            <select class="form-select" id="agama" name="agama">
              <option value="">-- Pilih Agama --</option>
              @foreach ($agamas as $agama)
                <option value="{{ $agama }}">{{ $agama }}</option>
              @endforeach
            </select>
            <label for="agama">Agama</label>
          </div>
          <div class="form-floating">
            <textarea class="form-control" id="alamat" name="alamat"></textarea>
            <label for="alamat" name="alamat">Alamat</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="kota">
            <label for="floatingInput">Kota</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="provinsi">
            <label for="floatingInput">Provinsi</label>
          </div>
          <div class="form-floating">
            <select class="form-select" id="pendidikan" name="pendidikan">
              <option value="">-- Pilih Pendidikan --</option>
              @foreach ($pendidikans as $pendidikan)
                <option value="{{ $pendidikan }}">{{ $pendidikan }}</option>
              @endforeach
            </select>
            <label for="pendidikan">Pendidikan</label>
          </div>
          <div class="form-floating">
            <select class="form-select" id="divisi" name="divisi">
              <option value="">-- Pilih Divisi --</option>
              @foreach ($divisis as $divisi)
                <option value="{{ $divisi }}">{{ $divisi }}</option>
              @endforeach
            </select>
            <label for="divisi">Divisi</label>
          </div>
          <div class="form-floating">
            <select class="form-select" id="jabatan" name="jabatan">
              <option value="">-- Pilih Jabatan --</option>
              @foreach ($jabatans as $jabatan)
                <option value="{{ $jabatan }}">{{ $jabatan }}</option>
              @endforeach
            </select>
            <label for="jabatan">Jabatan</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="telepon" name="telepon">
            <label for="telepon">Telepon</label>
          </div>
          <div class="form-floating">
            <input type="email" class="form-control" id="email" name="email">
            <label for="email">Email</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password">
            <label for="password">Password</label>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" type="file" id="foto" name="foto">
            <label for="foto" class="form-label">Foto</label>
          </div>
        </div>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
      <small>Sudah punya akun? <a href="/login">Login</a></small>
    </form>
  </main>
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
