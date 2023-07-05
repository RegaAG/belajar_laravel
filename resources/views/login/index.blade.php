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
        <form>
          <h1 class="h3 mb-3 fw-normal text-center">{{ $title }}</h1>
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="btn btn-primary w-100 py-2 my-3" type="submit">Login</button>
        </form>
        <small>Belum Punya Akun ? <a href="/register">Daftar Disini</a></small>
    </main>
  </div>
</div>

@endsection