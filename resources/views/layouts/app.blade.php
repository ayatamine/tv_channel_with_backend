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
</head>
<body>
    <div id="app" style="background-color: #f5f5f5;" dir="rtl">


            @yield('content')
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
</body>
</html>
