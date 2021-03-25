@extends('edubin.layout.master')
@section('content')
    <!--====== CONTACT PART START ======-->
    
    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if(session('sukses'))
                        <div class="alert alert-success" role="alert">
                            {{ session('sukses') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-12">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
                </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->

    </section>
    
    <!--====== CONTACT PART ENDS ======-->
@stop