@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Project</h1>
    </div>
    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->nama_project }}</td>
                        <td>{{ $post->kategori->nama_kategori }}</td>
                        <td>
                            <a href="{{ url('/dashboard/posts/' . $post->id) }}" class="badge bg-info"><i
                                    class="bi bi-eye-fill"></i></a>
                            <a href="" class="badge bg-warning"><i class="bi bi-pencil-fill"></i></a>
                            <a href="" class="badge bg-danger"><i class="bi bi-x-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
