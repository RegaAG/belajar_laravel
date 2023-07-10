@extends('layouts.main')


@section('container')
    <h1 class="text-center mb-3">{{ $title }}</h1>

    <div class="row">
        <div class="col-md-6">
            <form action="/project">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search">
                    <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card mb-5">
        <img src="https://picsum.photos/1200/400" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title fs-3 my-3">Judul : {{ $posts[0]->nama_project }}</h5>
            <a href="{{ $posts[0]->user->name }}" class="text-decoration-none text-dark">
                <h6 class="card-subtitle">Pembuat : {{ $posts[0]->user->name }}</h6>
            </a>
            <a href="project/kategori/{{ $posts[0]->kategori->nama_kategori }}" class="text-decoration-none text-dark">
                <p class="card-text fs-5 my-3">Kategori : {{ $posts[0]->kategori->nama_kategori }}</p>
            </a>
            <p class="card-text fs-5 my-3">Keterangan : {{ $posts[0]->keterangan }}</p>
            <p class="card-text fs-6 my-3">{{ $posts[0]->created_at->diffForHumans() }}</p>
            <a href="/project/{{ $posts[0]->nama_project }}" class="btn btn-primary my-3">Read More</a>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="https://picsum.photos/500/350" class="card-img-top" alt="...">
                        <div class="card-body my-1">
                            <h5 class="card-title my-3">Judul Project : {{ $post->nama_project }}</h5>
                            <a href="{{ $post->user->name }}" class="text-decoration-none text-dark">
                                <h6 class="card-subtitle my-3">Pembuat : {{ $post->user->name }}</h6>
                            </a>
                            <p class="card-text my-3">Keterangan : {{ $post->keterangan }}</p>
                            <p class="card-text fs-6 my-3">{{ $post->created_at->diffForHumans() }}</p>
                            <a href="/project/{{ $post->nama_project }}" class="btn btn-primary my-3">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
