@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-signin w-100 m-auto">
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>         
      @endif
      @if (session()->has('loginErorr'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginErorr') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>         
      @endif
        <form action="/login" method="POST">
          @csrf
          <h1 class="h3 mb-3 fw-normal text-center">{{ $title }}</h1>
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autocomplete="no" value="{{ old("email") }}"  required>
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>                
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>
          <button class="btn btn-primary w-100 py-2 my-3" type="submit">Login</button>
        </form>
        <small>Belum Punya Akun ? <a href="/register">Daftar Disini</a></small>
    </main>
  </div>
</div>
@endsection