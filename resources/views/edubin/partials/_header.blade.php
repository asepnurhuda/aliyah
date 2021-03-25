<!doctype html>
<html lang="en">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>MA - Miftahul Ulum Anggana</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('edubin/images/favicon.png') }}" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('edubin/css/slick.css') }}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('edubin/css/animate.css') }}">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{ asset('edubin/css/nice-select.css') }}">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{ asset('edubin/css/jquery.nice-number.min.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('edubin/css/magnific-popup.css') }}">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('edubin/css/bootstrap.min.css') }}">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('edubin/css/font-awesome.min.css') }}">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('edubin/css/default.css') }}">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('edubin/css/style.css') }}">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ asset('edubin/css/responsive.css') }}">
  
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header id="header-part">
       
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="{{ asset('edubin/images/all-icon/map.png') }}" alt="icon"><span>{{ config('sekolah.alamat_sekolah') }}</span></li>
                                <li><img src="{{ asset('edubin/images/all-icon/email.png') }}" alt="icon"><span>{{ config('sekolah.email_sekolah') }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-opening-time text-lg-right text-center">
                            <p>{{ config('sekolah.jam_kerja') }}</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <!-- <a href="index-2.html"> -->
                                <img src="{{ asset('edubin/images/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="{{ asset('edubin/images/all-icon/support.png') }}" alt="icon">
                                </div>
                                <div class="cont">
                                    <p>Telp Sekolah</p>
                                    <span>{{ config('sekolah.telp_sekolah') }}</span>
                                </div>
                            </div>
                            <!-- <div class="button float-left">
                                <a href="#" class="main-btn">Apply Now</a>
                            </div> -->
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->