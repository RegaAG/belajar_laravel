@extends('layouts.main')


@section('container')


<h1 class="text-center mb-5">{{ $title }}</h1>

<div class="container mb-5">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4 my-3">
            <a href="project/kategori/{{ $post->nama_kategori }}" class="text-decoration-none">
            <div class="card">
                <img src="https://picsum.photos/200/100" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center text-dark none my-3">Kategori : {{ $post->nama_kategori }}</h5>
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>


@endsection