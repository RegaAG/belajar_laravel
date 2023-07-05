@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-signin w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">{{ $title }}</h1>
        <form action="/register" method="POST">
          @csrf
          <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
            <label for="floatingInput">Email address</label>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>                
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" name="name" placeholder="Name" value="{{ old('name') }}" required>
            <label for="floatingInput">Name</label>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>                
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" name="username" placeholder="Username"  value="{{ old('username') }}" required>
            <label for="floatingInput">Username</label>
            @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>                
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword"  name="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>                
            @enderror
          </div>
          <button class="btn btn-primary w-100 py-2 my-3" type="submit">Register</button>
        </form>
        <small>Sudah Punya Akun ? <a href="/login">Login Disini</a></small>
    </main>
  </div>
</div>

@endsection