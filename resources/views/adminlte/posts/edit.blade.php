
@extends('adminlte.layouts.master')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Postingan</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            <div class="card-body">
            @csrf
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label for="title">Judul Berita</label>
                    <input name="title" type="text" class="form-control" id="title" value="{{ $post->title }}">
                    @if ( $errors->has('title') )
                        <small id="titleHelp" class="text-danger"> {{ $errors->first('title') }} </small>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
                    <label for="category_id">Kategori Berita</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if($category->id == $post->category_id) selected @endif>{{ $category->name }} </option>
                        @endforeach
                    </select>
                        @if ( $errors->has('category_id') )
                            <small id="category_idHelp" class="text-danger"> {{ $errors->first('category_id') }} </small>
                        @endif
                </div>

                <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                    <label for="content">Isi Konten</label>
                    <textarea name="content" class="form-control" id="editor">{{ $post->content }}</textarea>
                    @if ( $errors->has('content') )
                        <small id="contentHelp" class="text-danger"> {{ $errors->first('content') }} </small>
                    @endif
                </div>
                
                <div class="input-group {{ $errors->has('thumbnail') ? 'has-error' : '' }}">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-info">
                        <i class="fa fa-picture-o"></i> Pilih Gambar
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="thumbnail">
                        @if ( $errors->has('thumbnail') )
                            <small id="thumbnailHelp" class="text-danger"> {{ $errors->first('thumbnail') }} </small>
                        @endif
                </div>
                <img id="holder" style="margin-top:15px;max-height:100px;">

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