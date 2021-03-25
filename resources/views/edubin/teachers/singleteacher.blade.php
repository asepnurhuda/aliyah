@extends('edubin.layout.master')
@section('content')

@include('edubin.partials._banner')

<!--====== TEACHERS PART START ======-->

<!--====== TEACHERS PART START ======-->
    
<section id="teachers-singel" class="pt-70 pb-120 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="teachers-left mt-50">
                        <div class="hero">
                            <img src="/{{ $teacher->thumbnail }}" alt="Teachers">
                        </div>
                        <div class="name">
                            <h6>{{ $teacher->nama }}</h6>
                            <span>{{ $teacher->course->name }}</span>
                        </div>
                        <div class="social">
                            <ul>
                                <li><a href="{{ $teacher->fb }}"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="{{ $teacher->ig }}"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{ $teacher->linkedin }}"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </div>
                        <div class="description">
                            <p>{!! $teacher->biografi !!}</p>
                        </div>
                    </div> <!-- teachers left -->
                </div>
                <div class="col-lg-8">
                    <div class="teachers-right mt-50">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a id="courses-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses" aria-selected="false">Courses</a>
                            </li>
                            
                        </ul> <!-- nav -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="dashboard-cont">
                                    <div class="singel-dashboard pt-40">
                                        <h5>About</h5>
                                        <p>{!! $teacher->deskripsi !!}</p>
                                    </div> <!-- singel dashboard -->
                                </div> <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                <div class="courses-cont pt-20">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="singel-course mt-30">
                                                <div class="thum">
                                                    <div class="image">
                                                        <br>
                                                        <br>
                                                    </div>
                                                    <div class="price">
                                                        <span>{{ $teacher->course_id}}</span>
                                                    </div>
                                                </div>
                                                <div class="cont border">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span>( High level )</span>
                                                    <br>
                                                    <a href="#"><h4>{{ $teacher->course->nama }}</h4></a>
                                                    <div class="review-description">
                                                        <p>{!! $teacher->course->deskripsi !!}</p>
                                                    </div>
                                                    <br>
                                                    <div class="course-teacher">
                                                        <div class="thum">
                                                            <a href="#"><img src="/{{ $teacher->thumbnail }}" alt="teacher"></a>
                                                        </div>
                                                        <div class="name">
                                                            <a href="#"><h6>{{ $teacher->nama }}</h6></a>
                                                        </div>
                                                        <div class="admin">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-user"></i><span>10</span></a></li>
                                                                <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- singel course -->
                                        </div>
                                    </div> <!-- row -->
                                </div> <!-- courses cont -->
                            </div>
                        </div> <!-- tab content -->
                    </div> <!-- teachers right -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

<!--====== TEACHERS PART ENDS ======-->

@stop