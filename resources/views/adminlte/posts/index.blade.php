@extends('adminlte.layouts.master')
@section('content')
    <div class="col-12">
        <!-- Button trigger modal -->
        <a class="btn btn-primary" href="{{ route('posts.add') }}">Posting Berita</a>
    </div>
    <br>
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Semua Berita</h3>
            <div class="card-tools">
                <form action="#" method="GET">
                    <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" name="search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul Berita</th>
                    <th scope="col">Isi Konten</th>
                    <th scope="col">User</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts->reverse() as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="#">{{ $post->title }}</a></td>
                    <td>{!! Str::limit($post->content,180) !!}</td> 
                    <td>{{ $post->user->name }}</td>
                    <td>
                        <a target="_blank" href="{{ route('single.post', $post->slug) }}" class="btn btn-info btn-sm">View</a> 
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a> 
                        <a class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus ini?')" href="{{ route('posts.delete', $post->id) }}">Delete</a> 
                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
            <div class="card-text center-block">
                    {{ $posts->links() }}
            </div>
    </div>

@stop