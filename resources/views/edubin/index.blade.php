@extends('edubin.layout.master')
@section('content')

<!--====== SEARCH BOX PART START ======-->
    
<div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== SLIDER PART START ======-->
    
    <section id="slider-part" class="slider-active">
    @foreach($sliders as $slider)
        <div class="single-slider bg_cover pt-150" style="background-image: url({{ $slider->thumbnail }})" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">{{ $slider->title }}</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">{!! $slider->content !!}</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{ route('daftar') }}">Daftar</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="{{ route('all-events') }}">Cek Agenda</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    @endforeach
    </section>
    
    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== CATEGORY PART START ======-->
    
    <section id="category-part">
        <div class="container">
            <div class="category pt-40 pb-80">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="category-text pt-40">
                            <h2>{{ config('sekolah.slogan')}}</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                        <div class="row category-slied mt-40">
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="{{ asset('edubin/images/all-icon/ctg-1.png') }}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Bahasa Arab</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="{{ asset('edubin/images/all-icon/ctg-2.png') }}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Sains</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img src="{{ asset('edubin/images/all-icon/ctg-3.png') }}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Pengatahuan</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="{{ asset('edubin/images/all-icon/ctg-1.png') }}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Ekstrakulikuler</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="{{ asset('edubin/images/all-icon/ctg-2.png') }}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Konseling</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img src="{{ asset('edubin/images/all-icon/ctg-3.png') }}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Pengajian</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                        </div> <!-- category slied -->
                    </div>
                </div> <!-- row -->
            </div> <!-- category -->
        </div> <!-- container -->
    </section>
    
    <!--====== CATEGORY PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Tentang</h5>
                        <h2>MA Miftahul Ulum Anggana</h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                    <p>
                    {!! empty($profile->tentang_kami) ? 'Madrasah Aliyah Miftahul Ulum' : $profile->tentang_kami !!}
                    </p>
                        <a href="{{ route('profile') }}" class="main-btn mt-55">Lihat Profile Sekolah</a>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50">
                        <div class="event-title">
                            <h3>Agenda Sekolah</h3>
                        </div> <!-- event title -->
                        <ul>
                            @foreach($events as $event)
                            <li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i> {{ $event->date }}</span>
                                    <a href="{{ route('single-event', $event->id) }}"><h4>{{ $event->name }}</h4></a>
                                    <span><i class="fa fa-clock-o"></i> {{ $event->start }} - {{ $event->finish }} WITA</span>
                                    <span><i class="fa fa-map-marker"></i> {{ $event->room }}</span>
                                </div>
                            </li>
                            @endforeach
                        </ul> 
                    </div> <!-- about event -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
            <img src="{{ asset('edubin/images/about/bg-2.png') }}" alt="About">
        </div>
    </section>
    <!--====== ABOUT PART ENDS ======-->
   
    <!--====== APPLY PART START ======-->
    
    <section id="apply-aprt" class="pb-120">
        <div class="container">
            <div class="apply">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-1">
                            <h3>Daftar Sekarang</h3>
                            <p>{{ config('sekolah.daftar_sekarang') }}</p>
                            <a href="/daftar" class="main-btn">Daftar</a>
                        </div> <!-- apply cont -->
                    </div>
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-2">
                            <h3>Lengkapi Data Anda</h3>
                            <p>{{ config('sekolah.lengkapi_persyaratan') }}</p>
                            <a href="/login" class="main-btn">Login</a>
                        </div> <!-- apply cont -->
                    </div> 
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== APPLY PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    
    <section id="teachers-part" class="pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Staff Pengajar</h5>
                        <h2>Temui Guru Kami</h2>
                    </div> <!-- section title -->
                    <div class="teachers-cont">
                        <p>{{ config('sekolah.ketemu_guru') }}</p>
                        <a href="{{ route('all-teachers') }}" class="main-btn mt-55">Info Pengajar</a>
                    </div> <!-- teachers cont -->
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="teachers mt-20">
                        <div class="row">
                            @foreach( $teachers as $teacher )
                            <div class="col-sm-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="{{ $teacher->thumbnail() }}" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="{{ route('single-teacher', $teacher->id ) }}"><h6>{{ $teacher->nama }}</h6></a>
                                        <span>{{ $teacher->course->nama }}</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                            @endforeach
                        </div> <!-- row -->
                    </div> <!-- teachers -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEACHERS PART ENDS ======-->


    <!--====== VIDEO FEATURE PART START ======-->
    
    <section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url({{ asset('edubin/images/bg-1.jpg') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="video text-lg-left text-center pt-50">
                        <a class="Video-popup" href="https://www.youtube.com/watch?v=bRRtdzJH1oE"><i class="fa fa-play"></i></a>
                    </div> <!-- row -->
                </div>
                <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                    <div class="feature pt-50">
                        <div class="feature-title">
                            <h3>Facilitas Kami</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{ asset('edubin/images/all-icon/f-1.png') }}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Perpustakaan Lengkap</h4>
                                        <p>Perpustakaan disertai dengan buku-buku terbaru dan terlengkap bidang keagamaan.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{ asset('edubin/images/all-icon/f-2.png') }}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Laboratorium Komputer</h4>
                                        <p>Praktikum komputer menjadi lebih kondusif dengan laboratorium komputer dilengkapi dengan koneksi internet.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{ asset('edubin/images/all-icon/f-3.png') }}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Ruang Kelas Representatif</h4>
                                        <p>Ruang kelas Madrasah Aliyah Miftahul Ulum sesuai untuk standar pengajaran yang nyaman dan baik.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                        </ul>
                    </div> <!-- feature -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="feature-bg"></div> <!-- feature bg -->
    </section>
    
    <!--====== VIDEO FEATURE PART ENDS ======-->

    <!--====== NEWS PART START ======-->
    
    <section id="news-part" class="pt-115 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>Latest News</h5>
                        <h2>Berita Terkini</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="singel-news mt-30">
                        <div class="news-thum pb-25">
                        @if( empty($postfeatured) )
                            
                        @else
                            <img src="{{ $postfeatured->thumbnail() }}">
                        @endif
                        </div>
                        <div class="news-cont">
                            <ul>
                                <li><a href="#"><i class="fa fa-calendar"></i>{{ !$postfeatured ? 'Default' : $postfeatured->created_at->format('d M Y')}}</a></li>
                                <li><a href="#"> <span>By</span> {{ !$postfeatured ? 'Admin' : $postfeatured->user->name }}</a></li>
                            </ul>
                            <a href="blog-singel.html"><h3>{{ !$postfeatured ? 'Belum ada postingan' : $postfeatured->title }}</h3></a>
                            <p>{!! !$postfeatured ? 'Belum ada postingan' : Str::limit($postfeatured->content,400) !!}</p>
                        </div>
                    </div> <!-- singel news -->
                </div>
                <div class="col-lg-6">
                @foreach($posts as $post)
                    <div class="singel-news news-list">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="{{ $post->thumbnail() }}" alt="News">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-calendar"></i>{{ !$post->created_at ? 'Belum ada postingan' : $post->created_at->format('d M Y') }}</a></li>
                                        <li><a href="#"> <span>By</span> {{ !$post->user->name ? 'Admin' : $post->user->name }} </a></li>
                                    </ul>
                                    <a href="{{ route('single.post', $post->slug) }}"><h3>{{ $post->title }}</h3></a>
                                    <p>{!! $post->content ? 'Belum ada postingan' : Str::limit($post->content,110) !!}</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- singel news -->
                    @endforeach
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== NEWS PART ENDS ======-->

@endsection