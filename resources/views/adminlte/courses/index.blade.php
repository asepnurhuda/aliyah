@extends('adminlte.layouts.master')
@section('content')
    <div class="col-12">
        <!-- Button trigger modal -->
        <a class="btn btn-primary" href="{{ route('courses.add') }}">Tambah Mata Pelajaran</a>
    </div>
    <br>
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Semua Mata Pelajaran</h3>
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
                        <th scope="col">Nama Pelajaran</th>
                        <th scope="col">Jumlah Jam</th>
                        <th scope="col">Deksripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($courses->reverse() as $course)
                
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $course->nama }}</a></td>
                        <td>{{ $course->durasi }}</td> 
                        <td>{!! Str::limit($course->deskripsi,75) !!}</td>
                        <td>
                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a> 
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus ini?')" href="{{ route('courses.delete', $course->id) }}">Delete</a> 
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
                    {{ $courses->links() }}
            </div>
    </div>

@stop