@extends('adminlte.layouts.master')
@section('content')
    <div class="col-12">
        <!-- Button trigger modal -->
        <a class="btn btn-primary" href="{{ route('events.add') }}">Tambah Agenda</a>
    </div>
    <br>
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Agenda Sekolah</h3>
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
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Mulai</th>
                        <th scope="col">Berakhir</th>
                        <th scope="col">Ruangan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($events->reverse() as $event)
                
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $event->name }}</a></td>
                        <td>{!! Str::limit($event->description,180) !!}</td>
                        <td>{{ $event->start }}</td> 
                        <td>{{ $event->finish }}</td> 
                        <td>{{ $event->room }}</td> 
                        <td>{!! $event->address !!}</td>
                        <td>
                            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning btn-sm">Edit</a> 
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus ini?')" href="{{ route('events.delete', $event->id) }}">Delete</a> 
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
                    {{ $events->links() }}
            </div>
    </div>

@stop