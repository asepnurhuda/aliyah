@extends('adminlte.layouts.master')
@section('content')
    <div class="col-12">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Admin
        </button>
    </div>
    <br>
    <div class="col-md-12">
                    @if(session('gagal'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('gagal') }}
                        </div>
                    @endif
                </div>
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Admin</h3>
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
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td> 
                        <td>
                            <a href="{{ route('admin.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a> 
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus ini?')" href="{{ route('admin.delete', $user->id) }}">Delete</a> 
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
                    
            </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('admin.create') }}">
                @csrf
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">Nama</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nama">
                        @if ( $errors->has('name') )
                            <span class="help-block"> {{ $errors->first('name') }} </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        @if ( $errors->has('email') )
                            <span class="help-block"> {{ $errors->first('email') }} </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                        @if ( $errors->has('password') )
                            <span class="help-block"> {{ $errors->first('password') }} </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password2') ? 'has-error' : '' }}">
                        <label for="password2">Ulangi Password</label>
                        <input name="password2" type="password" class="form-control" id="password2" placeholder="Ulangi Password">
                        @if ( $errors->has('password2') )
                            <span class="help-block"> {{ $errors->first('password2') }} </span>
                        @endif
                    </div>
                
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
            </form>
        </div>
    </div>
    </div>
@stop