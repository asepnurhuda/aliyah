
@extends('adminlte.layouts.master')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Mata Pelajaran</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('courses.update', $course->id) }}">
            <div class="card-body">
            @csrf
                <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                    <label for="nama">Nama Pelajaran</label>
                    <input name="nama" type="text" class="form-control" id="nama" value="{{ $course->nama }}">
                    @if ( $errors->has('nama') )
                        <small id="namaHelp" class="text-danger"> {{ $errors->first('nama') }} </small>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('durasi') ? 'has-error' : '' }}">
                    <label for="durasi">Jumlah Jam</label>
                    <input name="durasi" type="text" class="form-control" id="durasi" value="{{ $course->durasi }}">
                    @if ( $errors->has('durasi') )
                        <small id="durasiHelp" class="text-danger"> {{ $errors->first('durasi') }} </small>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : '' }}">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="editor">{{ $course->deskripsi }}</textarea>
                    @if ( $errors->has('deskripsi') )
                        <small id="deskripsiHelp" class="text-danger"> {{ $errors->first('deskripsi') }} </small>
                    @endif
                </div>

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>      

@stop

@section('footer')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    $(document).ready(function(){
        $('#lfm').filemanager('image');
    });

</script>
@stop