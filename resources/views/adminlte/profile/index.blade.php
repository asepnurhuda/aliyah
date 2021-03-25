@extends('adminlte.layouts.master')
@section('content')
    <div class="col-12">
        <!-- Button trigger modal -->
        <a class="btn btn-primary" href="{{ route('profile.add') }}">Tambah Profile Sekolah</a>
    </div>
    <br>
    <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3 class="card-title">Profil Sekolah</h3>
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
                        <th scope="col">Sekilas</th>
                        <th scope="col">Pilih Kami</th>
                        <th scope="col">Visi</th>
                        <th scope="col">Misi</th>
                        <th scope="col">Tentang Kami</th>
                        <th scope="col">Thumbnail</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($profiles as $profile)
                    <tr>
                        <td>{{ $loop->iteration }}</></td>
                        <td>{!! $profile->sekilas !!}</></td>
                        <td>{!! $profile->pilih_kami !!}</></td>
                        <td>{!! $profile->visi !!}</></td>
                        <td>{!! $profile->misi !!}</></td>
                        <td>{!! $profile->tentang_kami !!}</></td>
                        <td>{{ $profile->thumbnail }}</></td>
                        <td>
                            <a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-warning btn-sm">Edit</a> 
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus ini?')" href="{{ route('profile.delete', $profile->id) }}">Delete</a> 
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
                    {{ $profiles->links() }}
            </div>
    </div>

@stop