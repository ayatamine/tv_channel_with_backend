@extends('layouts.app')
@section('title','الرئيسية')
@section('content')
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
                            <a class="nav-link link text-white display-6 active" href="{{route('home')}}">الرئيسية</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-white display-6" href="{{route('live')}}">
                            البث المباشر</a></li>
                        <li class="nav-item"><a class="nav-link link text-white display-6" href="{{route('programs')}}">البرامج</a></li>
                        <li class="nav-item">
                            <a class="nav-link link text-white display-6" href="#contact-form">تواصل معنا</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </section>

    <!-- <section class="engine"><a href="https://mobirise.info/q">responsive web templates</a></section> -->
    <section class="carousel slide cid-sggklav0gr" data-interval="false" id="slider1-3" style="max-height:690px">



        <div class="full-screen">
            <div class="mbr-slider slide carousel" data-keyboard="false" data-ride="carousel" data-interval="5000" data-pause="true">
                <div class="carousel-inner" role="listbox">
                    @foreach ($sliders as $slider)
                    <div class="carousel-item slider-fullscreen-image {{$loop->first ? 'active' : '' }}" data-bg-video-slide="false" style="background-image: url(img/sliders/{{$slider->image}});">
                        <div class="container container-slide">
                            <div class="image_wrapper">
                                <div class="mbr-overlay" style="opacity: 0.8;background-color: rgb(1 37 101);max-height: 690px;"></div><img src="img/sliders/{{$slider->image}}" alt="" title="">
                                <!--   <div class="carousel-caption justify-content-center">
                                    <div class="container text-right w-100 pr-3">
                                        <div class="">
                                            <h2 class="mbr-fonts-style display-1 pr-3 mb-2">نفتخر&nbsp;</h2>
                                            <div class="mbr-section-btn text-right" buttons="0"> <a class="btn  display-1 btn-success slider-title-btn" href="">بهويتنا</a></div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-3"><span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span></a>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-3"><span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span></a>
            </div>
        </div>

    </section>

    <section class="header7 cid-sggtLdvPMZ" id="header7-8">


        <div class="container">
            <div class="media p-3 pr-md-3 text-right signal-channel" dir="rtl">
                <img class="align-self-start ml-3" src="assets/images/antel.png" alt="antel" style="    max-height: 85px;">
                <div class="media-body">

                    <div class="row">

                        <h5 class="mt-0 col-12 mb-3 text-primary " id="signal-channel-title">يمكنكم مشاهدة بث قناة حضرموت على قمر النايل سات على التردد التلي </h5>
                        <div class="col-5 text-center mt-12">
                            <p class="mb-05">التردد</p>
                            <h6><strong>12015</strong> <span class="mr-1">عمودي</span></h6>
                        </div>
                        <div class="col-5 text-center">
                            <p class="mb-05">معدل الترميز</p>
                            <h6><strong>27500</strong></h6>
                        </div>
                    </div>
                </div>
                <hr id="hr-bottom-shadow">
            </div>
            <div class="media-container-row" dir="ltr">

                <div class="media-content align-right ml-1" style="    padding-top: 2rem;">
                    <h5 class="mbr-section-title mbr-white pb-3 mbr-fonts-style font-weight-bolder sidelines">
                        <span></span>نبدة عنا
                    </h5>
                    <div class="mbr-section-text mbr-white pb-3">
                        <p class="mbr-text mbr-fonts-style ">
                            قطاع تلفزيون حضرموت، منصة إعلامية رسمية للأحداث والفعاليات في حضرموت واليمن، تمثّل إضافة إعلامية في تقديم خدمة برامجية متميزة من البرامج الإخبارية والسياسية والمتنوعة. جاء انطلاق قطاع تلفزيون حضرموت ، كمنصة إعلامية رسمية للأحداث والفعاليات في حضرموت واليمن
                            ، تنطلق من الدور الريادي لحضرموت في مجال الإعلام ومن عبق تاريخ وحضارة حضرموت عبر الأزمان ، وتعمل على تقديم مجموعة من البرامج الإخبارية والسياسية والاقتصادية والمنوعة، إلى جانب دورها الكبير في إنتاج العديد من الأعمال الدرامية
                            والفنية. بدأت إطلاق بثها التجريبي في العاشر من شهر فبراير من العام 2020م لتكون المنبر الإعلامي الذي ينقل الإبداع والتجدد في نبض حضرموت والوطن

                        </p>
                    </div>

                </div>

                <div class="mbr-figure pr-2 text-right" style="width: 100%;margin-top: -2rem;">
                    <h5 class="mbr-section-title mbr-white pb-3 mbr-fonts-style font-weight-bolder sidelines">
                        <span></span>
                        <a class="font-weight-bolder" href="{{route('live')}}">البث المباشر</a>
                    </h5>
                    <iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/{{$live->link}}?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>

            </div>
        </div>
    </section>

    <section class="clients cid-sggx34dSJt pb-4 d-none d-sm-block" data-interval="false" id="programs-section">



        <div class="container mb-5">
            <div class="media-container-row">
                <div class="col-12 align-center">
                    <h3 class="mbr-section-title mbr-white pb-3 mbr-fonts-style font-weight-bolder sidelines text-white">
                        <span class="header right"></span>البرامج<span class="header left"></span>
                    </h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="carousel slide " role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="5000">
                <div class="carousel-inner" data-visible="5">


                    @if((count($programs1) > 0 ))
                        <div class="carousel-item pr-4 pl-4">
                            <div class="media-container-row">
                                @foreach($programs1 as $p)
                                <div class="col-md-4 program-wrapper">
                                    <a href="" class="wrap-img ">
                                        <img src="img/programs/{{$p->thumbnail}}" class="img-responsive programs-img">
                                    </a>
                                    <h5 class="mt-3">
                                        <a href="" class="text-white">{{$p->title}}</a>
                                    </h5>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if((count($programs2) > 0 ))
                        <div class="carousel-item pr-4 pl-4">
                            <div class="media-container-row">
                                @foreach($programs2 as $p)
                                <div class="col-md-4 program-wrapper">
                                    <a href="" class="wrap-img ">
                                        <img src="img/programs/{{$p->thumbnail}}" class="img-responsive programs-img">
                                    </a>
                                    <h5 class="mt-3">
                                        <a href="" class="text-white">{{$p->title}}</a>
                                    </h5>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if((count($programs3) > 0 ))
                        <div class="carousel-item pr-4 pl-4">
                            <div class="media-container-row">
                                @foreach($programs3 as $p)
                                <div class="col-md-4 program-wrapper">
                                    <a href="" class="wrap-img ">
                                        <img src="img/programs/{{$p->thumbnail}}" class="img-responsive programs-img">
                                    </a>
                                    <h5 class="mt-3">
                                        <a href="" class="text-white">{{$p->title}}</a>
                                    </h5>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="carousel-controls">
                        <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next">
                            <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                        <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev">
                            <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                            <span class="sr-only">Précédent</span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="text-center mt-3 pt-2">
                <a href="{{route('programs')}}" class="btn bg-white  font-weight-bold btn-lg more-programs-btn">المزيد</a>
            </div>
    </section>
    <section class="clients cid-sggx34dSJt pb-4 d-sm-none" data-interval="false" id="programs-sm-section">



        <div class="container mb-5">
            <div class="media-container-row">
                <div class="col-12 align-center">
                    <h3 class="mbr-section-title mbr-white pb-3 mbr-fonts-style font-weight-bolder sidelines text-white">
                        <span class="header right"></span>البرامج<span class="header left"></span>
                    </h3>
                </div>
            </div>
        </div>

        <div class="container">

            <div id="carouselExampleControls" class="carousel slide "
              data-ride="carousel" data-interval="4000" data-pause="true">
                <div class="carousel-inner row text-center">
                    @if((count($programs1) > 0 ))
                    @foreach ($programs1 as $p)


                    <div class="program-wrapper carousel-item {{$loop->first ? 'active' :''}}" style="
                    height: 380px;
                    padding: 2rem 3rem;
                    align-items: center;
                    justify-content: center;">
                        <div class="col-9" style="height: 80%;">
                            <a href="" class="wrap-img ">
                                <img src="{{asset('img/programs/').'/'.$p->thumbnail}}" class="img-responsive programs-img h-100 w-100">
                            </a>
                            <h5 class="mt-3">
                                <a href="" class="text-white">{{$p->title}}</a>
                            </h5>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    @if((count($programs2) > 0 ))
                    @foreach ($programs2 as $p)


                    <div class="program-wrapper carousel-item " style="
                    height: 380px;
                    padding: 2rem 3rem;
                    align-items: center;
                    justify-content: center;">
                        <div class="col-9" style="height: 80%;">
                            <a href="" class="wrap-img ">
                                <img src="{{asset('img/programs/').'/'.$p->thumbnail}}" class="img-responsive programs-img h-100 w-100">
                            </a>
                            <h5 class="mt-3">
                                <a href="" class="text-white">{{$p->title}}</a>
                            </h5>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <a class="carousel-control-prev" href="#programs-sm-section-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#programs-sm-section-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="text-center mt-3 pt-2">
                <a href="{{route('programs')}}" class="btn bg-white  font-weight-bold btn-lg more-programs-btn">المزيد</a>
            </div>
    </section>





@endsection
@section('js')
<script>

    $('#programs-section-carousel > a.carousel-control-prev').click(function(e){
    e.stopPropagation();
        $('#carouselExampleControls').carousel('prev');
        console.log('prev');

    });
</script>
@endsection
