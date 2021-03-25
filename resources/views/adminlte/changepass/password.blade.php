@extends('adminlte.layouts.master')
@section('content')
<div class="row">
        <div class="col-md-12">
            <div>
                @if(session('warning'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('warning') }}
                    </div>
                @endif
            </div> 
        </div>     
        <div class="col-12">
            <!-- RECENT PURCHASES -->
            <div class="card">	
                <div class="card-header">
                    <div class="panel-heading">
                        <h3 class="panel-title">Change Password</h3>
                    </div>
                </div>

                <div class="card-body">
                    
                        <form action="{{ route('changepass.store', auth()->user()->id) }}" method="post">
                        @csrf
                            <input name="oldpassword" type="password" class="form-control" placeholder="Old Password">
                            <br>
                            <input name="newpassword" type="password" class="form-control" placeholder="New Password">
                            <br>
                            <input name="newpassword2" type="password" class="form-control" placeholder="Repeat New Password">
                            <br>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
@stop