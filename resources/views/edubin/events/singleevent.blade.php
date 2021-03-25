@extends('edubin.layout.master')
@section('content')

@include('edubin.partials._banner')

<!--====== EVENTS PART START ======-->

<section id="event-singel" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="events-left">
                            <h3>{{ $event->name }}</h3>
                            <a href="#"><span><i class="fa fa-calendar"></i> {{ $event->date }}</span></a>
                            <a href="#"><span><i class="fa fa-clock-o"></i> {{ $event->start }} - {{ $event->finish }} WITA</span></a>
                            <a href="#"><span><i class="fa fa-map-marker"></i> {{ $event->room }}</span></a>
                            <img src="/{{ $event->thumbnail() }}" alt="Event">
                            <p>{!! $event->description !!}</p>
                        </div> <!-- events left -->
                    </div>
                    <div class="col-lg-4">
                        <div class="events-right">
                            <div class="events-coundwon bg_cover" data-overlay="8" style="background-image: url(images/event/singel-event/coundown.jpg)">
                                <div data-countdown="{{ $event->date }}"></div>
                                <div class="events-coundwon-btn pt-30">
                                    <a href="#" class="main-btn">Tanggal : {{ date('d M Y', strtotime($event->date)) }}</a>
                                </div>
                            </div> <!-- events coundwon -->
                            <div class="events-address mt-30">
                                <ul>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Mulai</h6>
                                                <span>{{ $event->start }} WITA</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-bell-slash"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Selesai</h6>
                                                <span>{{ $event->finish }} WITA</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-map"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Alamat</h6>
                                                <span>{!! $event->address !!}</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                </ul>
                                <div id="contact-map" class="mt-25"></div> <!-- Map -->
                            </div> <!-- events address -->
                        </div> <!-- events right -->
                    </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
    </section>

    <!--====== EVENTS PART ENDS ======-->

@stop