<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/web/assets/mobirise-icons/mobirise-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/facebook-plugin/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/tether/tether.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dropdown/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/socicon/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/animatecss/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/theme/css/style.css')}}">
    <link rel="preload" as="style" href="{{asset('assets/mobirise/css/mbr-additional.css')}}">
    <link rel="stylesheet" href="{{asset('assets/mobirise/css/mbr-additional.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/new_style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/programs.css')}}" type="text/css">
</head>
<body>
    <div id="app" style="background-color: #f5f5f5;" dir="rtl">

            <section class="menu cid-sgk2LE65xo" once="menu" id="menu2-y">



                <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
                    <div class="container pt-2">
                        <div class="d-none d-lg-flex justify-content-center top-social-media ">
                            <div class="social-icon"><a href="{{$settings->facebook_link}}"><i class="fa fa-facebook"></i></a></div>
                            <div class="social-icon"><a href="{{$settings->twitter_link}}"><i class="fa fa-twitter"></i></a></div>
                            <div class="social-icon"><a href="{{$settings->youtube_link}}"><i class="fa fa-youtube"></i></a></div>
                            <div class="social-icon"><a href="{{$settings->instagram_link}}"><i class="fa fa-instagram"></i></a></div>
                        </div>
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        </button>
                        <div class="menu-logo">
                            <div class="navbar-brand">
                                <span class="navbar-logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('img').'/'.$settings->logo}}" alt="logo" title="" style="height: 3.8rem;">
                                </a>
                            </span>

                            </div>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                                <li class="nav-item">
                                    <a class="nav-link link text-white display-6
                                    @if((Request::segment(1) =='') || Request::segment(1) =='home') active @endif"
                                    href="{{route('home')}}">الرئيسية</a>
                                </li>
                                <li class="nav-item"><a class="nav-link link text-white display-6
                                    @if(Request::segment(1) =='live') active @endif"
                                     href="{{route('live')}}">
                                    البث المباشر</a></li>
                                <li class="nav-item"><a class="nav-link link text-white display-6
                                    @if(Request::segment(1) =='programs') active @endif"
                                     href="{{route('programs')}}">البرامج</a></li>
                                <li class="nav-item">
                                    <a class="nav-link link text-white display-6" href="#contact-form">تواصل معنا</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </section>
            <section class="carousel slide cid-sggklav0gr" data-interval="false" id="slider1-3" style="height:300px" >



                <div class="full-screen">
                    <div class="mbr-slider slide carousel" data-keyboard="false" data-ride="false" data-interval="3000" data-pause="true">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/background1.jpg);">
                                <div class="container container-slide">
                                    <div class="image_wrapper">
                                        <div class="mbr-overlay" style="opacity: 0.8;background-color: rgb(1 37 101);"></div><img src="assets/images/background1.jpg" alt="" title="">
                                        <div class="carousel-caption justify-content-center">
                                            <div class="container text-right w-100 pr-3 " id="page-title">
                                                <div class="">
                                                    <h2 class="mbr-fonts-style pr-3  text-center">
                                                       {{$title}}
                                                        &nbsp;</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-3"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a>
                        <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-3"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a>
                    </div>
                </div>

            </section>
            @yield('content')
            <section once="footers" class="cid-sggxbRnqr0" id="footer7-m">


                <div class="container" dir='rtl'>
                    <div class="row">
                        <div class="col-md-7 m-auto m-sm-0">
                            <h3 class="mbr-section-title mbr-white pb-3 mbr-fonts-style font-weight-bolder sidelines text-white text-right">
                                </span>تواصل معنا<span class="header left"></span>
                            </h3>
                            <form method="post" action="{{route('message.contact')}}" id="contact-form">
                                @csrf
                                <div class="row mb-3 ">
                                    <div class="group col-sm-6">
                                        <input type="text" required name="contacter_name">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>الاسم *</label>
                                    </div>

                                    <div class="group col-sm-6">
                                        <input type="email" required name="email">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>البريد الالكتروني *</label>
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <div class="group col-sm-6">
                                        <input type="text" id="phone_number" name="phone_number" >
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label id="phonelabel">رقم الجوال</label>
                                    </div>

                                    <div class="group col-sm-6">
                                        <input type="text" required name="subject">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>الموضوع *</label>
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <div class="group col-sm-12">
                                        <textarea name="body" id="" rows="2" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>نص الرسالة*</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-submit float-right">إرسال</button>
                                <div class="row mt-5" style="clear: both">
                                    <div class="group w-100">
                                        @if(Session::has('errors'))
                                        @foreach ($errors->all() as $err)

                                          @endforeach
                                        <div class="alert alert-dismissible fade show  mr-auto ml-auto mb-3" role="alert" style="background-color: #ff3d3d !important;">
                                            {{ $err}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                      @endif
                                        @if(Session::has('success'))

                                        <div class="alert alert-dismissible fade show  mr-auto ml-auto mb-3" role="alert" style="background-color:#269017 !important">
                                                {{Session::get('success')}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif
                                    </div>
                                </div>



                            </form>
                        </div>
                        <div class="col-md-5 contact-section">
                            <h2 class="mbr-section-title mbr-white pb-4 mbr-fonts-style font-weight-bolder sidelines text-white text-right">
                                تواصل معنا<span class="header left"></span>
                            </h2>

                            <div class="pt-1">
                                <h5>معلومات التواصل</h5>
                                <ul class=" list-unstyled p-0 mt-2">
                                    <li>
                                        {{$settings->address }}<i class="fa fa-location-arrow ml-1" aria-hidden="true"></i>
                                    </li>
                                    <li>
                                        {{$settings->phone}} <i class="fa fa-phone ml-1" aria-hidden="true"></i>
                                    </li>
                                    @if($settings->fax != '')
                                    <li>
                                        {{$settings->fax}}<i class="fa fa-fax ml-1" aria-hidden="true"></i>
                                    </li>
                                    @endif

                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="text-center col-12 mt-5" id="copyright-section">
                        <img src="{{asset('img').'/'.$settings->logo}}" alt="" class='img-responsive' id="logo-footer">
                        <h6 class="text-white mt-3 mb-4">
                            جميع الحقوق محفوظة
                        </h6>
                        <li class="list-unstyled">
                            <div class=" d-flex justify-content-center">
                                <div class="social-icon"><a href="{{$settings->facebook_link}}"><i class="fa fa-facebook"></i></a></div>
                                <div class="social-icon"><a href="{{$settings->twitter_link}}"><i class="fa fa-twitter"></i></a></div>
                                <div class="social-icon"><a href="{{$settings->youtube_link}}"><i class="fa fa-youtube"></i></a></div>
                                <div class="social-icon"><a href="{{$settings->instagram_link}}"><i class="fa fa-instagram"></i></a></div>
                            </div>

                        </li>
                    </div>

                </div>
            </section>
    </div>

    <script src="{{asset('assets/web/assets/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/popper/popper.min.js')}}"></script>
    <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5 "></script>
    <script src="https://apis.google.com/js/plusone.js"></script>
    <script src="{{asset('assets/facebook-plugin/facebook-script.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/smoothscroll/smooth-scroll.js')}}"></script>
    <script src="{{asset('assets/tether/tether.min.js')}}"></script>
    <script src="{{asset('assets/dropdown/js/nav-dropdown.js')}}"></script>
    <script src="{{asset('assets/dropdown/js/navbar-dropdown.js')}}"></script>
    <script src="{{asset('assets/touchswipe/jquery.touch-swipe.min.js')}}"></script>
    <script src="{{asset('assets/viewportchecker/jquery.viewportchecker.js')}}"></script>
    <script src="{{asset('assets/ytplayer/jquery.mb.ytplayer.min.js')}}"></script>
    <script src="{{asset('assets/vimeoplayer/jquery.mb.vimeo_player.js')}}"></script>
    <script src="{{asset('assets/mbr-clients-slider/mbr-clients-slider.js')}}"></script>
    <script src="{{asset('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js')}}"></script>
    <script src="{{asset('assets/theme/js/script.js')}}"></script>
    <script src="{{asset('assets/slidervideo/script.js')}}"></script>


    <div id="scrollToTop " class="scrollToTop mbr-arrow-up "><a style="text-align: center; " onclick="scrollToTop()"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up "></i></a></div>
    <input name="animation " type="hidden " style="height: 0;padding: 0;border: 0;">
    <script type="text/javascript">
        function scrollToTop() {
            console.log('ol');
            window.scrollTo(0, 0);
        }
        $('#phonelabel').css('top', '11px').css('color', 'white');
        $(document).on('focus', '#phone_number ', function() {
            $('#phonelabel').css('top', '-15px').css('color', '#5264AE');
        })
        $(document).on('focusout', '#phone_number ', function() {
                if (!$(this).val()) {
                    $('#phonelabel').css('top', '11px').css('color', 'white');

                }
            })
            /*  $(".carouselTicker").carouselTicker({

                 // animation speed
                 speed: 2,

                 // animation delay
                 delay: 30,

                 // or 'next'
                 direction: "prev",

                 // or 'vertical'
                 mode: "horizontal",

                 // callback
                 onCarouselTickerLoad: function() {},

             }); */
    </script>
    @yield('js')
</body>
</html>
