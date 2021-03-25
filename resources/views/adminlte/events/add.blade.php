
@extends('adminlte.layouts.master')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Agenda Baru</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">
            <form method="POST" action="{{ route('events.create') }}">
            @csrf
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">Nama</label>
                    <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}">
                    @if ( $errors->has('name') )
                        <small id="nameHelp" class="text-danger"> {{ $errors->first('name') }} </small>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                    <label for="description">Deskripsi Singkat</label>
                    <textarea name="description" class="form-control" id="editor1">{{ old('description') }}</textarea>
                    @if ( $errors->has('description') )
                        <small id="descriptionHelp" class="text-danger"> {{ $errors->first('description') }} </small>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
                    <label for="date">Tanggal Kegiatan</label>
                    <input type="date" name="date" class="form-control" value="{{ old('date') }}"></input>
                    @if ( $errors->has('date') )
                        <small id="dateHelp" class="text-danger"> {{ $errors->first('date') }} </small>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('start') ? 'has-error' : '' }}">
                    <label for="start">Mulai</label>
                    <input type="time" name="start" class="form-control" value="{{ old('start') }}"></input>
                    @if ( $errors->has('start') )
                        <small id="startHelp" class="text-danger"> {{ $errors->first('start') }} </small>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('finish') ? 'has-error' : '' }}">
                    <label for="finish">Selesai</label>
                    <input type="time" name="finish" class="form-control" value="{{ old('finish') }}"></input>
                    @if ( $errors->has('finish') )
                        <small id="finishHelp" class="text-danger"> {{ $errors->first('finish') }} </small>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('room') ? 'has-error' : '' }}">
                    <label for="room">Ruangan</label>
                    <input name="room" class="form-control" value="{{ old('room') }}"></input>
                    @if ( $errors->has('room') )
                        <small id="roomHelp" class="text-danger"> {{ $errors->first('room') }} </small>
                    @endif
                </div>
                
                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                    <label for="address">Lokasi Acara</label>
                    <textarea name="address" class="form-control" id="editor2">{{ old('address') }}</textarea>
                    @if ( $errors->has('address') )
                        <small id="addressHelp" class="text-danger"> {{ $errors->first('address') }} </small>
                    @endif
                </div>

                <div class="input-group {{ $errors->has('thumbnail') ? 'has-error' : '' }}">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control lfm" type="text" name="thumbnail">
                        @if ( $errors->has('thumbnail') )
                            <small id="thumbnailHelp" class="text-danger"> {{ $errors->first('thumbnail') }} </small>
                        @endif
                </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                            
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
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
        ClassicEditor
        .create( document.querySelector( '#editor2' ) )
        .catch( error => {
            console.error( error );
        } );
    $(document).ready(function(){
        $('#lfm').filemanager('image');
    });

</script>
@stop