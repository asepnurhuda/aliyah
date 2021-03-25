@extends('adminlte.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <!-- RECENT PURCHASES -->
            <div class="card">	
                <div class="card-header">
                    <h3>Dashboard</h3>
                </div>
                <div class="card-body">
                    <h4>Selamat datang <b>{{ auth()->user()->name }}</b>.</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-lg-3 col-6">
            
            <div class="small-box bg-warning">
                <div class="inner">
                <h3>40</h3>
                <p>User Registrations</p>
                </div>
                <div class="icon">
                <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
    </div> -->

@stop 
