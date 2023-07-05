@extends('layouts.main')


@section('container')

<div class="container mb-5">
    <div class="row">
        <div class="col-md 8">
            <h1 class="text-center m-3">{{ $title }}</h1>
            <img src="https://picsum.photos/1200/400" class="img-fluid" alt="...">
            <a class="text-decoration-none" href="kategori/{{ $post->kategori->nama_kategori }}"><h5 class="text-dark mt-3">Kategori : {{ $post->kategori->nama_kategori }}</h5></a>
            <p>{!! $post->body !!}</p>
            <a class="btn btn-info" href="/project">Back</a>
        </div>
    </div>
</div>
@endsection