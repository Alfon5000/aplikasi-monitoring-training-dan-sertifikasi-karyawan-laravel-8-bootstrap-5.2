<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Login</title>
</head>

<body class="text-center">
  <main class="form-signin w-25 m-auto mt-5">
    <form>
      @csrf
      <img class="mb-4" src="{{ asset('logo.png') }}" alt="" width="72" height="72">
      <h1 class="h3 mb-3 fw-normal">Silakan Login</h1>
      @if (session()->has('register'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('register') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @elseif (session()->has('gagal'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('gagal') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      <small>Belum punya akun? <a href="/register">Register</a></small>
    </form>
  </main>
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
