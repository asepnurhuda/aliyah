@extends('adminlte.layouts.master')
@section('content')
    <!-- Button trigger modal -->

    <!-- End button trigger modal -->
    
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Peserta PPDB baru bikin akun</h3>
            <div class="card-tools">
                <form action="#" method="GET">
                    <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" name="search" class="form-control float-right" placeholder="Cari nama depan">
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
                        <th scope="col">No Pendaftaran</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Nama Pendaftar</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{ route('ppdb.detail', $student->id) }}">{{ $student->no_pendaftaran }}</a></td>
                        <td>{{ $student->nisn }}</td>
                        <td>{{ $student->nama_depan }} {{ $student->nama_belakang }}</a></td>
                        <td>{!! Str::limit($student->alamat,100) !!}</td> 
                        <td>{{ $student->status }}</td> 
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
            <div class="card-text center-block">
                    {{ $students->links() }}
            </div>
    </div>

@stop