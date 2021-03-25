
@extends('adminlte.layouts.master')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Slider Baru</h3>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
        <!-- form start -->
            <form method="POST" action="{{ route('sliders.create') }}">
            @csrf
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label for="title">Judul Slider</label>
                    <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}">
                    @if ( $errors->has('title') )
                        <small id="titleHelp" class="text-danger"> {{ $errors->first('title') }} </small>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                    <label for="content">Isi Konten</label>
                    <textarea name="content" type="text" class="form-control" id="editor"></textarea>
                    @if ( $errors->has('content') )
                        <small id="contentHelp" class="text-danger"> {{ $errors->first('content') }} </small>
                    @endif
                </div>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="thumbnail">
                </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
        </div>
        <div class="card-footer">
            <div class="form-group">
                <input type="submit" class="btn btn-info" value="Submit">
            </div>
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