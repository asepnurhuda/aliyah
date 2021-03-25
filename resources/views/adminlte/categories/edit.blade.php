@extends('adminlte.layouts.master')
@section('content')
<div class="col-12">
    <div class="card">   
        <div class="card-header">
            <h3 class="card-title">Edit Kategori Berita</h3>
        </div>
    <!-- /.card-header -->
    <!-- form start -->
        <form method="POST" action="{{ route('categories.update', $category->id) }}">
            @csrf
            <div class="card-body">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">Nama Kategori</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Kategori baru">
                        @if ( $errors->has('name') )
                            <small id="nameHelp" class="text-danger"> {{ $errors->first('name') }} </small>
                        @endif
                    </div>
        <!-- /.card-body -->
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>            
@stop 
