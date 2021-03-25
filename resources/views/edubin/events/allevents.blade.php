@extends('edubin.layout.master')
@section('content')

@include('edubin.partials._banner')

<!--====== TEACHERS PART START ======-->

<!--====== EVENTS PART START ======-->
    
<section id="event-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            @foreach($events as $event)
            <div class="col-lg-6">
                <div class="singel-event-list mt-30">
                    <div class="event-thum">
                        <img src="{{ $event->thumbnail() }}" alt="Event">
                    </div>
                    <div class="event-cont">
                        <span><i class="fa fa-calendar"></i> {{ $event->date }}</span>
                        <a href="{{ route('single-event', $event->id) }}"><h4>{{ $event->name }} </h4></a>
                        <span><i class="fa fa-clock-o"></i> {{ $event->start }} - {{ $event->finish }} WITA</span>
                        <span><i class="fa fa-map-marker"></i> {{ $event->room  }}</span>
                        <p>{!! $event->description !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <nav class="courses-pagination mt-50">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">{{ $events->links() }}</li>
                    </ul>
                </nav>  <!-- courses pagination -->
            </div>
        </div>  <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== EVENTS PART ENDS ======-->

<!--====== TEACHERS PART ENDS ======-->

@stop