@extends('adminlte.layouts.master')
@section('content')
    <div class="col-12">
        <!-- Button trigger modal -->
        <a class="btn btn-primary" href="{{ route('teachers.add') }}">Tambah Guru</a>
    </div>
    <br>
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Semua Guru</h3>
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
                        <th scope="col">Nama</th>
                        <th scope="col">Mapel</th>
                        <th scope="col">Biografi</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($teachers->reverse() as $teacher)
                
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $teacher->nama }}</a></td>
                        <td>{{ $teacher->course->nama }}</td> 
                        <td>{!! Str::limit($teacher->biografi,100) !!}</td> 
                        <td>{!! Str::limit($teacher->deskripsi,180) !!}</td>
                        <td>{{ $teacher->fb }}</td> 
                        <td>
                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning btn-sm">Edit</a> 
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus ini?')" href="{{ route('teachers.delete', $teacher->id) }}">Delete</a> 
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
                    {{ $teachers->links() }}
            </div>
    </div>

@stop