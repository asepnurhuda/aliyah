@extends('adminlte.layouts.master')
@section('content')
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
            <h3 class="card-title">Edit Administrator</h3>
        </div>
    <!-- /.card-header -->
    <!-- form start -->
        <form method="POST" action="{{ route('admin.update', $admin->id) }}">
            @csrf
            <div class="card-body">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">Nama</label>
                        <input name="name" type="text" class="form-control" id="name" value={{ $admin->name }}>
                        @if ( $errors->has('name') )
                            <span class="help-block"> {{ $errors->first('name') }} </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" value={{ $admin->email }}>
                        @if ( $errors->has('email') )
                            <span class="help-block"> {{ $errors->first('email') }} </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Password Baru">
                        @if ( $errors->has('password') )
                            <span class="help-block"> {{ $errors->first('password') }} </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('password2') ? 'has-error' : '' }}">
                        <label for="password2">Ulangi Password</label>
                        <input name="password2" type="password" class="form-control" id="password2" placeholder="Ulangi Password Baru">
                        @if ( $errors->has('password2') )
                            <span class="help-block"> {{ $errors->first('password2') }} </span>
                        @endif
                    </div>
        <!-- /.card-body -->
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>            
@stop 
