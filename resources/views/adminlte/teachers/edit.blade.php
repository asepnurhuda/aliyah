
@extends('adminlte.layouts.master')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Guru</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        
        <form method="POST" action="{{ route('teachers.update', $teacher->id) }}">
            <div class="card-body">
            @csrf
                <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                    <label for="nama">Nama</label>
                    <input name="nama" type="text" class="form-control" id="nama" value="{{ $teacher->nama }}">
                    @if ( $errors->has('nama') )
                        <small id="namaHelp" class="text-danger"> {{ $errors->first('nama') }} </small>
                    @endif
                </div>
                
                <div class="form-group">
                <label for="course_id">Pelajaran</label>
                    <select name="course_id" class="form-control">
                        @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group {{ $errors->has('biografi') ? 'has-error' : '' }}">
                    <label for="biografi">Biografi Singkat</label>
                    <textarea name="biografi" class="form-control" id="editor1">{{ $teacher->biografi }}</textarea>
                    @if ( $errors->has('biografi') )
                        <small id="biografiHelp" class="text-danger"> {{ $errors->first('biografi') }} </small>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('fb') ? 'has-error' : '' }}">
                    <label for="fb">Facebook</label>
                    <input name="fb" class="form-control" value="{{ $teacher->fb }}"></input>
                    @if ( $errors->has('fb') )
                        <small id="fbHelp" class="text-danger"> {{ $errors->first('fb') }} </small>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('ig') ? 'has-error' : '' }}">
                    <label for="ig">Instagram</label>
                    <input name="ig" class="form-control" value="{{ $teacher->ig }}"></input>
                    @if ( $errors->has('ig') )
                        <small id="igHelp" class="text-danger"> {{ $errors->first('ig') }} </small>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('linkedin') ? 'has-error' : '' }}">
                    <label for="linkedin">LinkedIn</label>
                    <input name="linkedin" class="form-control" value="{{ $teacher->linkedin }}"></input>
                    @if ( $errors->has('linkedin') )
                        <small id="linkedinHelp" class="text-danger"> {{ $errors->first('linkedin') }} </small>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : '' }}">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="editor2">{{ $teacher->deskripsi }}</textarea>
                    @if ( $errors->has('deskripsi') )
                        <small id="deskripsiHelp" class="text-danger"> {{ $errors->first('deskripsi') }} </small>
                    @endif
                </div>
                <div class="input-group {{ $errors->has('thumbnail') ? 'has-error' : '' }}">
                    <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="thumbnail">
                        @if ( $errors->has('thumbnail') )
                            <small id="thumbnailHelp" class="text-danger"> {{ $errors->first('thumbnail') }} </small>
                        @endif
                </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                <div class="form-group">
                <input type="submit" class="btn btn-info" value="Submit">
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