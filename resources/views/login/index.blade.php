@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

        <main class="form-signin">
            <h1 class="h3 mb-4 fw-normal text-center ">CeKing Masuk</h1>
          <form action="/login" method="post">
            @csrf
            <!-- <img class="mb-4"z src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error("email") is-invalid @enderror" id="email" placeholder="name@example.com" autofocus requires value="{{ old('email') }}">
              <label for="email"><i class="bi bi-envelope-fill"></i> Alamat email</label>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <label for="password"><i class="bi bi-eye"></i> Kata Sandi</label>
            </div>
        
            <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
            <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> -->
          </form>
          <small class="d-block text-center mt-3">Belum Daftar? <a href="/register">Daftar Sekarang!</a></small>
        </main>

    </div>
</div>


@endsection