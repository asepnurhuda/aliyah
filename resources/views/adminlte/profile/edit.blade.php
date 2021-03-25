
@extends('adminlte.layouts.master')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Profil Sekolah</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('profile.update', $profile->id) }}">
            <div class="card-body">
            @csrf
                <div class="form-group {{ $errors->has('sekilas') ? 'has-error' : '' }}">
                    <label for="sekilas">Sekilas</label>
                    <textarea name="sekilas" type="text" class="form-control" id="editor1">{{ old('sekilas',$profile->sekilas) }}</textarea>
                    @if ( $errors->has('sekilas') )
                        <small id="sekilasHelp" class="text-danger"> {{ $errors->first('sekilas') }} </small>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('pilih_kami') ? 'has-error' : '' }}">
                    <label for="pilih_kami">Mengapa Pilih Kami</label>
                    <textarea name="pilih_kami" type="text" class="form-control" id="editor2">{{ old('pilih_kami', $profile->pilih_kami ) }}</textarea>
                    @if ( $errors->has('pilih_kami') )
                        <small id="pilih_kamiHelp" class="text-danger"> {{ $errors->first('pilih_kami') }} </small>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('visi') ? 'has-error' : '' }}">
                    <label for="visi">Visi</label>
                    <textarea name="visi" type="text" class="form-control">{{ old('visi', $profile->visi) }}</textarea>
                    @if ( $errors->has('visi') )
                        <small id="visiHelp" class="text-danger"> {{ $errors->first('visi') }} </small>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('misi') ? 'has-error' : '' }}">
                    <label for="misi">Misi</label>
                    <textarea name="misi" type="text" class="form-control" id="editor3">{{ old('misi', $profile->misi ) }}</textarea>
                    @if ( $errors->has('misi') )
                        <small id="misiHelp" class="text-danger"> {{ $errors->first('misi') }} </small>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('tentang_kami') ? 'has-error' : '' }}">
                    <label for="tentang_kami">Tentang Kami</label>
                    <textarea name="tentang_kami" type="text" class="form-control" id="editor4"> {{ old('tentang_kami', $profile->tentang_kami) }}</textarea>
                    @if ( $errors->has('tentang_kami') )
                        <small id="tentang_kamiHelp" class="text-danger"> {{ $errors->first('tentang_kami') }} </small>
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
        ClassicEditor
        .create( document.querySelector( '#editor3' ) )
        .catch( error => {
            console.error( error );
        } );
        ClassicEditor
        .create( document.querySelector( '#editor4' ) )
        .catch( error => {
            console.error( error );
        } );
    $(document).ready(function(){
        $('#lfm').filemanager('image');
    });

</script>
@stop