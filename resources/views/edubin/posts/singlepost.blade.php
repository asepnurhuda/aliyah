@extends('edubin.layout.master')
@section('content')
<!--====== BLOG PART START ======-->
@include('edubin.partials._banner')
<section id="blog-singel" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details mt-30">
                    <div class="thum">
                        <img src="{{ $post->thumbnail() }}" alt="Blog Details">
                    </div>
                    <div class="cont">
                        <h3>{{ $post->title }}</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-calendar"></i>{{ $post->created_at->format('D, d M Y')}}</a></li>
                            <li><a href="#"><i class="fa fa-user"></i>{{ $post->user->name}}</a></li>
                            <li><a href="#"><i class="fa fa-tags"></i>{{ $post->category->name }}</a></li>
                        </ul>
                        {!! $post->content!!}
                        <ul class="share">
                            <li class="title">Share :</li>
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> <!-- cont -->
                </div> <!-- blog details -->
            </div>
            <div class="col-lg-4">
                <div class="saidbar">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="saidbar-search mt-30">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div> <!-- saidbar search -->
                            <div class="categories mt-30">
                                <h4>Categories</h4>
                                <ul>
                                    @foreach($categories as $category)
                                    <li><a href="#">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> <!-- categories -->
                        <div class="col-lg-12 col-md-6">
                            <div class="saidbar-post mt-30">
                                <h4>Berita Terkini</h4>
                                <ul>
                                @foreach($posts as $post)
                                    <li>
                                        <a href="#">
                                            <div class="singel-post">
                                                <div class="thum">
                                                    <img src="{{ $post->thumbnail() }}" alt="Blog">
                                                </div>
                                                <div class="cont">
                                                    <h6>{{ $post->title }}</h6>
                                                    <span>{{ $post->created_at->format('d M Y') }}</span>
                                                </div>
                                            </div> <!-- singel post -->
                                        </a>
                                    </li>
                                @endforeach   
                                </ul>
                            </div> <!-- saidbar post -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- saidbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
    
    <!--====== BLOG PART ENDS ======-->

@stop 
