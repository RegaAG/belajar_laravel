@extends('dashboard.layouts.main')

@section('container')
    <div class="container mb-5">
        <div class="row">
            <div class="col-md 8">
                <h1 class="text-center m-3">{{ $nama_project }}</h1>
                <img src="https://picsum.photos/1200/400" class="img-fluid" alt="...">
                <h5 class="text-dark mt-3">Kategori : {{ $kategori }}</h5>
                <p>{!! $body !!}</p>
                <a class="btn btn-info" href="/dashboard/posts">Back</a>
            </div>
        </div>
    </div>
@endsection
