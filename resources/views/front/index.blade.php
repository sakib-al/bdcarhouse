<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BDCarHouse - Search and Buy Your Cars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="Developer" content="Bijoy Sarkar, Sakib al Hossain, Abdul Hannan">
    <!-- ========== FAVICON ========== -->
    <link rel="shortcut icon" href="{{ asset('assets/web/assets/images/img/favicon.ico')}}">
    <style type="text/css">
        .footer-share-links i {
            padding-top: 11px;
        }

        .member-social-links i {
            padding-top: 11px;
        }

        .img-responsive {
            height: 140px;
        }

        .go-top {
            right: 21px !important;
        }

    </style>
    <link href="{{ asset('assets/web/assets/css/all-css.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/web/assets/img/font-awsome.min.css')}}">
    {{-- Chat bot Css/JS --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/bot/assets/css/desing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bot/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bot/assets/css/custom.css') }}">
    <script src="{{ asset('assets/bot/assets/js/desing.js') }}"></script>
    <!-- font-awsome -->
    <script src="https://kit.fontawesome.com/60d9ccbe64.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/web/assets/js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{ asset('assets/web/assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script type="text/javascript">
        var base_url = '#';

    </script>
    <!-- added on version 1.5 -->
    <script type="text/javascript">
        var old_ie = 0;

    </script>
    {{-- Layer Slide  --}}
    <link
        href="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/css/layerslider.css')}}"
        rel="stylesheet">
    <script src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/js/greensock.js')}}"
        type="text/javascript"></script>
    <script
        src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/js/layerslider.transitions.js')}}"
        type="text/javascript"></script>
    <script
        src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/js/layerslider.kreaturamedia.jquery.js')}}"
        type="text/javascript"></script>
    <style>
        #layerslider * {
            font-family: Lato, 'Open Sans', sans-serif;
        }

    </style>
    {{-- END LAYER SLIDE --}}
    <style>
        #header,
        #header.box-header .box-header-wrap,
        #header.sticky-header.box-header {
            background: #ffffff;
        }

        .main-nav ul li .dropdown {
            background: #ffffff;
        }

        #header .dropdown-items>li {
            background: #ffffff;
        }

        #header.static-header .main-nav>ul>li>a,
        #header.box-header .box-header-wrap .main-nav>ul>li>a {
            color: #666
        }

        #header .dropdown-items>li a {
            color: #666
        }

        #header.static-header .main-nav>ul>li>a:hover,
        #header.box-header .box-header-wrap .main-nav>ul>li>a:hover {
            color: #32c8de
        }

        #header .dropdown-items>li a:hover {
            color: #32c8de
        }

        #header.static-header .main-nav>ul>.active>a {
            color: #32c8de
        }

        #header .dropdown-items>.active a {
            color: #32c8de
        }

        .home-search-panel {
            padding: 15px 0 0 0;
            border-top: 2px solid #bbb;
            background-image: linear-gradient(20deg, rgb(191, 53, 157), rgb(220, 76, 53), rgb(253, 255, 129));
            background-image: linear-gradient(to right top, rgb(25, 182, 143), rgb(68, 100, 148));
            background: rgba(0, 0, 0, 0) linear-gradient(to right, rgb(17, 153, 142), rgb(56, 239, 125)) repeat scroll 0% 0%;
            background: rgba(0, 0, 0, 0) linear-gradient(to right, rgb(0, 180, 219), rgb(0, 131, 176)) repeat scroll 0% 0%;
            background: rgba(0, 0, 0, 0) linear-gradient(to right, rgb(103, 178, 111), rgb(76, 162, 205)) repeat scroll 0% 0%;
        }

        .irs-grid-text {
            color: #fff !important;
        }

    </style>
</head>
<!--/head-->

<body class="page-top" dir="ltr">
    <div id="page-wrap" class="animsition">
        <script type="text/javascript">
            var menu_title = 'MENU';

        </script>
        <div class="offcanvas-overlay"></div>
        <div class="top-bar box-top-bar">
            <div class="container">
                <!-- Contact starts -->
                <div class="tb-contact pull-left">
                    <!-- Email -->
                    <i class="fa fa-envelope color"></i> &nbsp; <a
                        href="mailto:bdcarhouse@info.com">bdcarhouse@info.com</a> &nbsp;&nbsp;
                    <!-- Phone -->
                    <i class="fa fa-phone color"></i> &nbsp; +991345345677
                </div>
                <!-- Contact ends -->
                <div class="tb-language dropdown pull-right">
                    <a href="#" data-target="#" data-toggle="dropdown"><i class="fa fa-globe"></i> English <i
                            class="fa fa-angle-down color"></i></a>
                    <ul class="dropdown-menu dropdown-mini" role="menu">
                        <li class="active"><a href="#">English</a></li>
                    </ul>
                </div>
                <!-- Social media starts -->
                <div class="tb-social pull-right">
                    <div class="brand-bg text-right">
                        <!-- Brand Icons -->
                        <a target="_blank" href="#" class="facebook"><i
                                class="fa fa-facebook square-2 rounded-1"></i></a>
                        <a target="_blank" href="#" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
                        <a target="_blank" href="#" class="google-plus"><i
                                class="fa fa-google-plus square-2 rounded-1"></i></a>
                        <a target="_blank" href="#" class="linkedin"><i
                                class="fa fa-linkedin square-2 rounded-1"></i></a>
                        <a target="_blank" href="#" class="pinterest"><i
                                class="fa fa-pinterest square-2 rounded-1"></i></a>
                    </div>
                </div>
                <!-- Social media ends -->
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <header id="header" class="sticky box-header">
            <div class="container">
                <div class="row box-header-wrap">
                    <div class="col-sm-2 col-xs-4 logo-col">
                        <div id="logo" class="logos">
                            <h3>
                                <a href="{{ route('index') }}" class="standard-logo pull-left">
                                    <img src="{{ asset('assets/web/assets/images/logo/bd_car_house_logo.png')}}"
                                        alt="Logo" style="height:63px">
                                </a>
                            </h3>
                        </div>
                    </div>
                    <div class="col-sm-10 col-xs-8">
                        <nav class="main-nav pull-right">
                            <ul>
                                <li class="active">
                                    <a href="">Home</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('cars') }}">CARS</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('advance-search') }}">Advanced Search</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('about') }}">About</a>
                                </li>
                                {{-- <li class="">
                                <a href="{{ route('blog') }}">Blog post</a>
                                <a href="{{ route('services') }}">Services</a>
                                </li> --}}
                                <li class="has-sub has-child">
                                    <span class="submenu-button"></span>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                                    <div class="dropdown left-indent">
                                        <ul class="dropdown-items">
                                            <li class=" -child">
                                                <a href="{{ route('loans') }}">Loans</a>
                                            </li>
                                            <li class=" -child">
                                                <a href="{{ route('spare_parts') }}">Spare Parts</a>
                                            </li>
                                            <li class=" -child">
                                                <a href="{{ route('service_center') }}">Service Centers</a>
                                            </li>
                                            <li class=" -child">
                                                <a href="#">BRTA Support</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="">
                                    <a href="{{route('contact')}}">Contact</a>
                                </li>
                                <li class="">
                                    <a class="" href="{{route('login1')}}">Login</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="offcanvas-toggler pull-right">
                            <i id="offcanvas-opener" class="fa fa-bars"></i>
                            <i id="offcanvas-closer" class="fa fa-close"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== START MOBILE NAV ========== -->
        <nav class="mobile-nav">
            <ul>
                <li class="active">
                    <a href="{{ route('index') }}">Home</a>
                </li>
                <li class="">
                    <a href="{{ route('cars') }}">CARS</a>
                </li>
                <li class="">
                    <a href="{{ route('advance-search') }}">Advanced Search</a>
                </li>
                <li class="">
                    <a href="{{ route('about') }}">About</a>
                </li>
                {{-- <li class="">
                    <a href="{{ route('blog') }}">Blog post</a>
                </li> --}}
                <li class="has-sub has-child">
                    <span class="submenu-button"></span>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                    <ul class="dropdown-items">
                        <li class=" -child">
                            <a href="{{ route('loans') }}">Loans</a>
                        </li>
                        <li class=" -child">
                            <a href="{{ route('spare_parts') }}">Spare Parts</a>
                        </li>
                        <li class=" -child">
                            <a href="{{ route('service_center') }}">Service Center</a>
                        </li>
                        <li class=" -child">
                            <a href="#">BRTA Support</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{ route('about') }}">About Us</a>
                </li>
                <li class="">
                    <a href="{{ route('contact') }}">Contact Us</a>
                </li>
                <li class="">
                    <a href="{{route('login1')}}">Login</a>
                </li>
            </ul>
        </nav>
        <!-- end mobile nav -->
        <!-- ========== TEXT SLIDER SECTION ========== -->
        <section class="advanced-slider-wrapper">
            <div id="layerslider" style="width:100%;height:500px;">
                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                    <img src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/img/fw-2.jpg')}}"
                        class="ls-bg" alt="Slide background" />
                    <img alt="slide-image"
                        data-src="http://carbiz.webhelios.com/application/modules/themes/views/default/assets/layerslider/img/food.png"
                        src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/img/car1.png')}}"
                        data-ls="offsetxin:0;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;"
                        style="top: 160px; left: 550px;white-space: nowrap;" class="ls-l ls-preloaded">
                    <p data-ls="durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;durationout:1000;"
                        style="top: 220px; left: 112.5px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#82d10c;border-radius:3px;white-space: nowrap;"
                        class="ls-l">BUY SELL CARS</p>
                    <p data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;"
                        style="top: 339px; left: 121.5px; font-family:'Indie Flower';font-size:31px;color:#6db509;white-space: nowrap;"
                        class="ls-l">ALL IN ONE PLACE</p>
                    <h1 style="top: 287px; left: 112.5px; font-weight: 900; padding: 0px 20px; font-family: Raleway; font-size: 24px; line-height: 40px; color: rgb(68, 68, 68); background: none repeat scroll 0% 0% rgb(255, 255, 255);white-space: nowrap;"
                        class="ls-l">JUST ONE CLICK AWAY</h1>
                    <img class="ls-l ls-linkto-3" style="top:460px;left:610px;white-space: nowrap;"
                        data-ls="offsetxin:-50;delayin:1000;rotatein:-40;offsetxout:-50;rotateout:-40;"
                        src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/img/left.png')}}"
                        alt="slide-image">
                    <img class="ls-l ls-linkto-2" style="top:460px;left:650px;white-space: nowrap;"
                        data-ls="offsetxin:50;delayin:1000;offsetxout:50;"
                        src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/img/right.png')}}"
                        alt="slide-image">
                </div>
                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                    <img src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/img/fw-2.jpg')}}"
                        class="ls-bg" alt="Slide background" />
                    <img alt="slide-image"
                        data-src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/img/car2.png')}}"
                        src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/img/car2.png')}}"
                        data-ls="offsetxin:0;easingin:easeInOutQuart;scalexin:0.7;scaleyin:0.7;offsetxout:-800;durationout:1000;"
                        style="top: 150px; left: 650.5px;white-space: nowrap;" class="ls-l ls-preloaded">
                    <p data-ls="durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;durationout:1000;"
                        style="top: 220px; left: 112.5px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#E85858;border-radius:3px;white-space: nowrap;"
                        class="ls-l">SEARCH FROM VARIOUS CATEGORIES</p>
                    <p data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-400;"
                        style="top: 287px; left: 121.5px; font-family:'Indie Flower';font-size:31px;color:#f04705;white-space: nowrap;"
                        class="ls-l">FIND CARS, VANS, TRUCKS ...</p>
                    <img class="ls-l ls-linkto-1" style="top:460px;left:610px;white-space: nowrap;"
                        data-ls="offsetxin:-50;delayin:1000;rotatein:-40;offsetxout:-50;rotateout:-40;"
                        src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/img/left.png')}}"
                        alt="slide-image">
                    <img class="ls-l ls-linkto-3" style="top:460px;left:650px;white-space: nowrap;"
                        data-ls="offsetxin:50;delayin:1000;offsetxout:50;"
                        src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/img/right.png')}}"
                        alt="slide-image">
                </div>
                <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                    <img src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/img/fw-2.jpg')}}"
                        class="ls-bg" alt="Slide background" />
                    <img class="ls-l" style="top:160px;left:140px;white-space: nowrap;"
                        data-ls="offsetxin:-200;durationin:2000;offsetxout:-200;"
                        src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/img/car4.png')}}"
                        alt="slide-image">
                    <p class="ls-l"
                        style="top:220px;left:640px;font-weight: 300;height:40px;padding-right:10px;padding-left:10px;font-size:30px;line-height:37px;color:#ffffff;background:#FFAA55;border-radius:3px;white-space: nowrap;"
                        data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-400;durationout:1000;">
                        POST YOUR CAR AND ...
                    </p>
                    <p class="ls-l"
                        style="top:290px;left:736px;font-family:'Indie Flower';font-size:31px;color:#F96F4A;white-space: nowrap;"
                        data-ls="offsetxin:0;durationin:2000;delayin:2000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% top 0;offsetxout:-600;">
                        GET A BUYER WITHIN HOURS
                    </p>
                    <img class="ls-l ls-linkto-2" style="top:430px;left:960px;white-space: nowrap;"
                        data-ls="offsetxin:-50;delayin:1000;offsetxout:-50;"
                        src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/img/left.png')}}"
                        alt="slide-image">
                    <img class="ls-l ls-linkto-1" style="top:430px;left:1000px;white-space: nowrap;"
                        data-ls="offsetxin:50;delayin:1000;offsetxout:50;"
                        src="{{ asset('assets/web/application/modules/themes/views/default/assets/layerslider/img/right.png')}}"
                        alt="slide-image">
                </div>
            </div>
            <!-- Initializing the slider -->
            <script>
                var skins_path =
                    'http://carbiz.webhelios.com/application/modules/themes/views/default/assets/layerslider/skins/'
                jQuery("#layerslider").layerSlider({
                    responsive: false,
                    responsiveUnder: 1280,
                    layersContainer: 1280,
                    skin: 'noskin',
                    hoverPrevNext: false,
                    skinsPath: skins_path
                });

            </script>
        </section>
        <!-- //End simple slider -- >
    <!-- ========== PORTFOLIO SECTION ========== -->
        <section id="portfolio" class="">
            <link rel="stylesheet"
                href="{{ asset('assets/web/application/modules/themes/views/default/assets/ionrange-slider/css/ion.rangeSlider.css')}}">
            <script
                src="{{ asset('assets/web/application/modules/themes/views/default/assets/ionrange-slider/js/ion.rangeSlider.min.js')}}"
                defer></script>
            <div class="home-search-panel">
                <div class="re-big-form">
                    <div class="container">
                        <!-- Nav tab style 2 starts -->
                        <div class="nav-tabs-two search-panel-tab">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                            </ul>
                            <!-- Tab content -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab-1">
                                    {!! Form::open([ 'route' => 'search1', 'method' => 'GET','files' => true])!!}
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label for="category">Car categories</label>
                                                <select class="form-control chosen-select" id="car_category"
                                                    name="car_category">
                                                    <option>Select Category</option>
                                                    @foreach ($category as $car_category_item)
                                                    <option value="{{ $car_category_item->id }}">
                                                        {{  $car_category_item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label for="brand">Car Brand</label>
                                                {!! Form::select('brand', $brand, null, ['class'=>'form-control
                                                chosen-select', 'id' => 'brand', 'data-validation-required-message' =>
                                                'This field is required', 'placeholder' => 'Select Brand']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label for="carmodel">Car Model</label>
                                                {!! Form::select('carmodel', $carmodel, null, ['class'=>'form-control
                                                chosen-select', 'id' => 'carmodel', 'placeholder' => 'Select Car
                                                Model']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group">
                                                <label for="input-11">Condition</label>
                                                <select name="condition" id="condition"
                                                    class="form-control chosen-select">
                                                    <option data-name="" value="">Select Condition</option>
                                                    <option data-name="New" value="condition_new">New</option>
                                                    <option data-name="Used" value="condition_used">Used</option>
                                                    <option data-name="Pre Owned" value="condition_pre_owned">Pre
                                                        Owned
                                                    </option>
                                                    <option data-name="Reconditioned" value="condition_recondition">
                                                        Reconditioned
                                                    </option>
                                                    <option data-name="Other" value="condition_other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div style="clear:both"></div>
                                        <div class="col-md-3 col-sm-4 col-xs-12 col-md-offset-5 ">
                                            <label>&nbsp;</label>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-warning"><i
                                                        class="fa fa-search"></i>&nbsp; Search Cars
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script
                src="{{ asset('assets/web/application/modules/themes/views/default/assets/jquery-ui/jquery-ui.js')}}"
                defer></script>
            <link href="{{ asset('assets/web/application/modules/themes/views/default/assets/css/select2.css')}}"
                rel="stylesheet">
            <script src="{{ asset('assets/web/application/modules/themes/views/default/assets/js/select2.js')}}">
            </script>
            <style>
                .custom {
                    height: 140px;
                }

            </style>
            <script type="text/javascript">
                var ua = navigator.userAgent.toLowerCase();
                var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
                // added on version 1.5
                var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
                var isSsl = '0';
                //end
                jQuery(window).resize(function () {
                    if (!isAndroid) {
                        jQuery('.chosen-select').select2({
                            theme: "classic"
                        });
                    }
                });
                $(document).ready(function () {
                    if (!isAndroid) {
                        jQuery('.chosen-select').select2({
                            theme: "classic"
                        });
                    }
                    jQuery('#select-brand').change(function () {
                        var val = jQuery(this).val();
                        jQuery.post(
                            "http://carbiz.webhelios.com/index.php/en/show/get_models_ajax/", {
                                brand: val
                            },
                            function (html) {
                                jQuery('#select-model').empty();
                                jQuery('#select-model').html(html);
                            },
                            "html"
                        );
                    }).change();
                    var distance_unit = 'Miles';
                    jQuery("#slider-price-sell").slider({
                        min: 1,
                        max: 500,
                        value: 25,
                        slide: function (event, ui) {
                            jQuery("#price-slider-sell").val(ui.value);
                            jQuery("#amount").html(ui.value + ' ' + distance_unit);
                        }
                    });
                    jQuery("#amount").html(jQuery("#slider-price-sell").slider("value") + ' ' + distance_unit);
                    var min_mileage = 0,
                        max_mileage = 500;
                    $.ajax({
                        dataType: "json",
                        url: "http://carbiz.webhelios.com/index.php/en/show/get_min_max_car_mileage_ajax/",
                        success: function (data) {
                            min_mileage = data['min_mileage'];
                            max_mileage = data['max_mileage'];
                            $("#mileage").ionRangeSlider({
                                min: min_mileage,
                                max: max_mileage,
                                type: 'double',
                                prefix: "Miles",
                                maxPostfix: "+",
                                prettify: false,
                                hasGrid: true
                            });
                        },
                        error: function () {
                            $("#mileage").ionRangeSlider({
                                min: 0,
                                max: 500000,
                                type: 'double',
                                prefix: "Miles",
                                maxPostfix: "+",
                                prettify: false,
                                hasGrid: true
                            });
                        }
                    });
                    var min_price = 0,
                        max_price = 500;
                    $.ajax({
                        dataType: "json",
                        url: "http://carbiz.webhelios.com/index.php/en/show/get_min_max_car_price_ajax/",
                        success: function (data) {
                            min_price = data['min_price'];
                            max_price = data['max_price'];
                            $("#price").ionRangeSlider({
                                min: min_price,
                                max: max_price,
                                type: 'double',
                                prefix: "&#x24;",
                                maxPostfix: "+",
                                prettify: false,
                                hasGrid: true
                            });
                        },
                        error: function () {
                            $("#price").ionRangeSlider({
                                min: 0,
                                max: 5000,
                                type: 'double',
                                prefix: "&#x24;",
                                maxPostfix: "+",
                                prettify: false,
                                hasGrid: true
                            });
                        }
                    });
                });
                // updated on version 1.5
                function findLocation() {
                    if (isChrome == true && isSsl == 0) {
                        var r = confirm(
                            "Location service by google is not available for non ssl sites(Only in Chrome browser). Do you want to use your ip address for getting your location ? NB- The result may not be exactly same as google"
                        );
                        if (r == true) {
                            $.get("//ipinfo.io", function (response) {
                                var arr = response.loc.split(",");
                                $('#geo_lat').val(arr[0]);
                                $('#geo_lng').val(arr[1]);
                            }, "jsonp");
                        }
                    } else {
                        if (!!navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(function (position) {
                                $('#geo_lat').val(position.coords.latitude);
                                $('#geo_lng').val(position.coords.longitude);
                            });
                        } else {
                            alert('No Geolocation Support.');
                        }
                    }
                }
                //end
                $(document).ready(function () {
                    var site_url = 'http://carbiz.webhelios.com/index.php/en/';
                    jQuery('#country').change(function () {
                        // jQuery('#city').val('');
                        // jQuery('#selected_city').val('');
                        var val = jQuery(this).val();
                        var loadUrl = site_url + '/show/get_locations_by_parent_ajax/' + val;
                        jQuery.post(
                            loadUrl, {},
                            function (responseText) {
                                jQuery('#state').html(responseText);
                                var sel_country = '';
                                var sel_state = '';
                                if (val == sel_country)
                                    jQuery('#state').val(sel_state);
                                else
                                    jQuery('#state').val('');
                                jQuery('#state').focus();
                                jQuery('#state').trigger('change');
                            }
                        );
                    }).change();
                    var city_field_type = 'dropdown';
                    jQuery('#state').change(function () {
                        var val = jQuery(this).val();
                        var sel_state = '';
                        var sel_city = '';
                        var city = '';
                        if (city_field_type == 'dropdown')
                            populate_city(val); //populate the city drop down
                        if (val == sel_state) {
                            jQuery('#selected_city').val(sel_city);
                            jQuery('#city').val(city);
                        } else {
                            jQuery('#selected_city').val('');
                            jQuery('#city').val('');
                        }
                    }).change();
                });

                function populate_city(parent) {
                    var site_url = 'http://carbiz.webhelios.com/index.php/en/';
                    var loadUrl = site_url + '/show/get_city_val_dropdown_by_parent_ajax/' + parent;
                    jQuery.post(
                        loadUrl, {},
                        function (responseText) {
                            jQuery('#city_dropdown').html(responseText);
                            var sel_city = '';
                            jQuery('#city_dropdown').val(sel_city);
                        }
                    );
                }

            </script>
            <!-- property search big form -->
            <!-- Container -->
            <div class="container main-container">
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12 content-body">
                        <div class="block-heading-two">
                            <h3><span><i class="fa fa-bookmark"></i> Featured Cars</span></h3>
                        </div>
                        <div class="icon-box-1 text-center">
                            <span class="recent-posts">
                                <div class="clearfix"></div>
                                <div class="text-center grid-box">
                                    @foreach($featured as $row)
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                        <div class="item grid-box-item">
                                            <!-- Image style one starts -->
                                            <div class="image-style-one">
                                                <!-- Image -->
                                                <a href="{{route('cars.view',$row->id)}}">
                                                    <img class="img-responsive custom" alt="Vitage Car"
                                                        src="{{asset('/')}}image/{{ $row->singleImage->name ?? '' }}">
                                                    <!-- image hover style for image #1 -->
                                                </a>
                                            </div>
                                            <div class="grid-box-content">
                                                <span class="price-tag" data-toggle="tooltip" data-placement="left"
                                                    data-original-title="Featured"> $ {{ $row->price }} </span>
                                                <span class="condition-tag" data-toggle="tooltip" data-placement="left"
                                                    data-original-title="Featured">{{$row->transmission}}</span>
                                                <a class="b-tooltip" title="Luxury Car" href="#">
                                                    <!--i class="category-fa-icon fa cat-img-small fa-car bg-red"></i-->
                                                    <img src="{{ asset('assets/web/assets/images/img/luxury-car.png')}}"
                                                        class="fa cat-img-small fa-car bg-red">
                                                </a>
                                                <div class="cat-title" style="height: 17px;">{{ $row->categories->name}}
                                                </div>
                                                <h4 class="item-title" style="height: 28px;"><a
                                                        href="{{route('cars.view',$row->id)}}">{{ $row->product_brand->name }}</a>
                                                </h4>
                                                <div class="bor bg-red"></div>
                                                <div class="row">{{ $row->name }} </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta"><i
                                                            class="fa fa-tachometer"></i> : {{$row->mileage}}&nbsp;Miles
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="clearfix"></div>
                            </span>
                            <div class="clearfix"></div>
                            <!-- category box end -->
                        </div>
                        <div class="clearfix"></div>
                        <!-- category box end -->
                        <div class="block-heading-two">
                            <h3><span><i class="fa fa-map-marker"></i> Top Locations</span>
                            </h3>
                        </div>
                        <span class="location-widget">
                            @foreach($city as $key => $value)
                            <div class="col-md-3 col-sm-3">
                                <ul class="list-10">
                                    <li>
                                        <a href="{{ route('cars_by_location',$value->id) }}">{{ $value->name }} <span
                                                class="color" dir="rtl">({{ $value->numberOfCars->count() }})</span></a>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                            <div class="clearfix"></div>
                        </span>
                        <div class="block-heading-two">
                            <h3><span><i class="fa fa-folder"></i> Categories</span></h3>
                        </div>
                        <div class="icon-box-1 text-center">
                            @foreach($category as $key => $value)
                            <div class="col-md-3 col-sm-4 col-xs-6">
                                <!-- Icon Box One Item -->
                                <div class="icon-box-1-item category-item">
                                    <!-- Icon Box One Icon -->
                                    <a href="{{ route('category_wise_cars',$value->id ) }}">
                                        <img alt="{{ $value->name }}" class="car-icon"
                                            src="{{asset('/')}}image/{{ $value->image ??'' }}" />
                                    </a>
                                    <div class="category-bor bg-red"></div>
                                    <!-- Icon Box One Headeing -->
                                    <div class="cat-main-widget-title">
                                        <a href="{{ route('category_wise_cars',$value->id ) }}">
                                            @if($value->cars->count() == 0)
                                            {{ $value->name }}
                                            @else
                                            {{ $value->name }}&nbsp;({{ $value->cars->count() }})
                                            @endif
                                        </a>
                                    </div>
                                    <!-- Icon Box One Paragraph -->
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="clearfix"></div>
                        <script type="text/javascript">
                            jQuery(document).ready(function () {
                                jQuery('.see_all_sub_cat').click(function (e) {
                                    e.preventDefault();
                                    jQuery('#category-modal').modal('show');
                                    var load_url = jQuery(this).attr('href');
                                    jQuery.post(
                                        load_url, {},
                                        function (responseText) {
                                            jQuery('#category-modal  .modal-body').html(
                                                responseText);
                                        }
                                    );
                                });
                            });

                        </script>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <!-- Search Widget -->
                            <div class="s-widget">
                                <!-- Heading -->
                                <h5><i class="fa fa-search color"></i>&nbsp; Search</h5>
                                <!-- Widgets Content -->
                                <div class="widget-content search">
                                    <form role="form" action="search" method="get">
                                        <div class="input-group">
                                            <input class="form-control" type="text" placeholder="Type something"
                                                value="" required="required" name="search">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget-separator"></div>
                            <div class="s-widget">
                                <!-- Heading -->
                                <h5><i class="fa fa-building color"></i>&nbsp; Top Cars</h5>
                                <!-- Widgets Content -->
                                @foreach ($top as $key => $top_cars)
                                <div class="widget-content hot-properties">
                                    <ul class="list-unstyled">
                                        <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                            <!-- Image -->
                                            <a href="{{route('cars.view',$top_cars->id)}}"><img
                                                    class="img-responsive img-thumbnail"
                                                    src="{{ asset('/')}}image/{{ $top_cars->singleImage->name ?? '' }}"
                                                    alt="" /></a>
                                            <!-- Heading -->
                                            <div class="widget-car-title"><a
                                                    href="{{route('cars.view',$top_cars->id)}}">{{ $top_cars->name }}</a>
                                            </div>
                                            <div class="price">
                                                <strong>City</strong>: Honolulu <br />
                                                <span class="stars stars-sidebar"><i class="fa fa-star active"></i><i
                                                        class="fa fa-star active"></i><i
                                                        class="fa fa-star active"></i><i
                                                        class="fa fa-star active"></i><i
                                                        class="fa fa-star-half-o active"></i>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                            <div class="widget-separator"></div>
                            <div class="s-widget">
                                <!-- Heading -->
                                <h5><i class="fa fa-clock-o color"></i>&nbsp; Recent Cars</h5>
                                <!-- Widgets Content -->
                                <div class="widget-content hot-properties">
                                    <ul class="list-unstyled">
                                        @foreach($latest as $key => $latest_car )
                                        <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                            <!-- Image -->
                                            <a href="{{route('cars.view',$latest_car->id)}}"><img
                                                    class="img-responsive img-thumbnail"
                                                    src="{{ asset('/')}}image/{{ $latest_car->singleImage->name ?? '' }}"
                                                    alt="Brand New Ford SUV" /></a>
                                            <!-- Heading -->
                                            <div class="widget-car-title"><a
                                                    href="{{route('cars.view',$latest_car->id)}}">{{ $latest_car->name }}</a>
                                            </div>
                                            <!-- Price -->
                                            <div class="price">
                                                <strong>City</strong>: Dhaka <br />
                                                <span class="stars stars-sidebar"><i class="fa fa-star active"></i><i
                                                        class="fa fa-star active"></i><i
                                                        class="fa fa-star active"></i><i
                                                        class="fa fa-star active"></i><i
                                                        class="fa fa-star active"></i></span> </div>
                                            <div class="clearfix"></div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-separator"></div>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    jQuery('#newsletter-form').submit(function (e) {
                                        e.preventDefault();
                                        var data = jQuery(this).serializeArray();
                                        var loadUrl = jQuery(this).attr('action');
                                        jQuery.post(
                                            loadUrl,
                                            data,
                                            function (responseText) {
                                                jQuery('#newsletter-form').html(responseText);
                                            }
                                        );
                                    });
                                });

                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //End portfolio -->
        <!-- ==========  SERVICES SECTION  ========== -->
        <section id="services" class="services bg-gradient-dark p-t-80">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="features-item features-item-v2">
                            <div class="features-info">
                                <h3 class="title">Contact <span>Us</span></h3>
                                <p style="margin-top:30px;">
                                    <ul class="contact-text">
                                        <li><span>Address</span> Unit 10A, House 21, Road 17, Banani C/A, Dhaka 1213
                                        </li>
                                    </ul>
                                    <div class="widget-share-links">Please share our website</div>
                                    <div class="brand-bg footer-share-links">
                                        <a class="facebook"
                                            href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fcarbiz.webhelios.com%2F">
                                            <i class="fa fa-facebook circle-3"></i>
                                        </a>
                                        <a class="twitter" target="_blank"
                                            href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fcarbiz.webhelios.com%2F&amp;text=">
                                            <i class="fa fa-twitter circle-3"></i>
                                        </a>
                                        <a class="google-plus"
                                            href="https://plus.google.com/share?url=http%3A%2F%2Fcarbiz.webhelios.com%2F">
                                            <i class="fa fa-google-plus circle-3"></i>
                                        </a>
                                        <a class="linkedin"
                                            href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fcarbiz.webhelios.com%2F&amp;title=">
                                            <i class="fa fa-linkedin circle-3"></i>
                                        </a>
                                        <a class="pinterest"
                                            href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fcarbiz.webhelios.com%2F&amp;description=">
                                            <i class="fa fa-pinterest circle-3"></i>
                                        </a>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- //.col-sm-4 -->
                    <div class="col-sm-4">
                        <!-- EACH FEATURE -->
                        <div class="features-item features-item-v2">
                            <div class="features-info">
                                <h3 class="title">Useful <span>Links</span></h3>
                                <ul class="useful-links">
                                    <li><a href="{{ route('cars') }}"><span class="fa fa-angle-right"></span> All
                                            Cars</a></li>
                                    <li><a href="{{ route('all_categories') }}"><span class="fa fa-angle-right"></span>
                                            Categories</a></li>
                                    <li><a href="{{ route('service_center') }}"><span class="fa fa-angle-right"></span>
                                            Service Centers</a></li>
                                    <li><a href="{{ route('spare_parts') }}"><span class="fa fa-angle-right"></span>
                                            Spare Parts</a></li>
                                    <li><a href="{{ route('advance-search') }}"><span
                                                class="fa fa-angle-right"></span>Advanced Search</a></li>
                                    <li><a href="#"><span class="fa fa-angle-right"></span>Terms and Condition</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- //.col-sm-4 -->
                    <div class="col-sm-4">
                        <!-- EACH FEATURE -->
                        <div class="features-item features-item-v2">
                            <div class="features-info">
                                <h3 class="title">About <span>Us</span></h3>
                                <p>Established in 2020, BdCarHouse today is an organization with a vision for presence
                                    all around Bangladesh. It has a strong team that is focused to ensure that
                                    BdCarHouse is at the top of its game.</p>
                            </div>
                        </div>
                        <!-- //features-item -->
                    </div>
                    <!-- //.col-sm-4 -->
                </div>
                <!-- //row -->
            </div>
            <!-- //container -->
        </section>
        <!-- //End services -->
        <!-- ========== FOOTER ========== -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p class="copyright m-b-10">© Copyright 2020 <b><a style="color: white"
                                    href="https://www.arobil.com/">Arobil.LTD</a> </b>. All rights reserved</p>
                    </div>
                    <!-- //col-sm-12 -->
                </div>
                <!-- //row -->
            </div>
            <!-- //container -->
        </footer>
        <!-- //End footer -->
        {{-- CHATBOT INTERFACE START --}}
        <div id="chatbot_position">
            <button class="chatbox-open">
                <i class="fa fa-comment fa-2x" aria-hidden="true"></i>
            </button>
            <button class="chatbox-close">
                <i class="fa fa-close fa-2x" aria-hidden="true"></i>
            </button>
            <section class="chatbox-popup">
                <header class="chatbox-popup__header">
                    <aside style="flex:3">
                        <i class="fa fa-user-circle fa-4x chatbox-popup__avatar" aria-hidden="true"> </i>
                    </aside>
                    <aside style="flex:8">
                        <h1>Car Hut</h1> Agent (Online)
                    </aside>
                    <a class="button btn_a" href="{{ route('login1') }}">Admin login</a>
                    <!-- <aside style="flex:1">
              <button class="chatbox-maximize"><i class="fa fa-window-maximize" aria-hidden="true"></i></button>
            </aside> -->
                </header>
                <main class="chatbox-popup__main form">
                    Ask me any question about<br> Car Hut.
                </main>
                <footer class="chatbox-popup__footer">
                    <aside style="flex:10">
                        <form id="form">
                            <div class="input-data">
                                <button class="input_button" type="submit"
                                    style="float:right; margin-top:-20px;"></button>
                                <input id="data" name="queries" style="width:100%;" class="form-control" type="text"
                                    placeholder="Type something here.." autocomplete='off' required>
                            </div>
                        </form>
                    </aside>
            </section>
        </div>
        {{-- CHATBOT INTERFACE END --}}
        {{-- CHAT BOT SCRIPT --}}
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).ready(function () {
                $("#form").submit(function (event) {
                    event.preventDefault();
                    var value = $("#data").val();
                    var msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + value +
                        '</p></div></div>';
                    $(".form").append(msg);
                    $("#data").val('');
                    // start ajax code
                    $.ajax({
                        url: '/bot_msg',
                        type: 'get',
                        dataType: "json",
                        data: {
                            value: value,
                            "_token": $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (result) {
                            var replay =
                                '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user "></i></div><div class="msg-header"><p>' +
                                result + '</p></div></div>';
                            $(".form").append(replay);
                            // when chat goes down the scroll bar automatically comes to the bottom
                            $(".form").scrollTop($(".form")[0].scrollHeight);
                        }
                    });
                });
            });

        </script>
        {{-- CHAT BOT SCRIPT END --}}
        <!-- Go to top button -->
        <button data-rippleria-color="#fff" class="go-top ripple"><i class="fa fa-angle-up"></i></button>
        {{-- Chat Bot Button --}}
        {{-- <button data-rippleria-color="#fff" class=""><i class="fa fa-comment"></i></button> --}}
    </div>
    <!-- //End page-wrap -->
    <!-- ==================   SCRIPT PART   ================= -->
    <script type="text/javascript"
        src="http://carbiz.webhelios.com/application/modules/themes/views/default/assets/js/bootstrap.min.js" async>
    </script>
    <script type="text/javascript"
        src="http://carbiz.webhelios.com/application/modules/themes/views/default/assets/js/plugins/animsition.min.js"
        async></script>
    <script type="text/javascript"
        src="http://carbiz.webhelios.com/application/modules/themes/views/default/assets/js/plugins/count-to.min.js"
        async></script>
    <script type="text/javascript"
        src="http://carbiz.webhelios.com/application/modules/themes/views/default/assets/js/plugins/flex-slider.min.js"
        async></script>
    <script type="text/javascript"
        src="http://carbiz.webhelios.com/application/modules/themes/views/default/assets/js/app.js" async></script>
    <div id="ie-msg-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Upgrade browser </h4>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">Please upgrade your browser</div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            if (old_ie == 1) {
                jQuery('#ie-msg-modal').modal('show');
            }
            jQuery('.signin').click(function (e) {
                e.preventDefault();
                jQuery('#signin-modal').modal('show');
            });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            jQuery('.list-switcher').each(function () {
                var view_type = 'grid';
                var alias = 'home';
                if (view_type == 'grid')
                    jQuery(this).children(":first").trigger('click');
                else if (view_type != 'grid' && alias == 'ad_search')
                    jQuery(this).children(":nth-child(2)").trigger('click');
                else
                    jQuery(this).children(":first").trigger('click');
            });
            jQuery('.featured-list-switcher').each(function () {
                jQuery(this).children(":first").trigger('click');
            });
            fix_grid_height();
        });

        function fix_grid_height() {
            var maxHeight = -1;
            $('.item-title').each(function () {
                maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
            });
            $('.item-title').each(function () {
                $(this).height(maxHeight);
            });
            var maxHeight = -1;
            $('.cat-title').each(function () {
                maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
            });
            $('.cat-title').each(function () {
                $(this).height(maxHeight);
            });
            var maxHeight = -1;
            $('.info-phone').each(function () {
                maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
            });
            $('.info-phone').each(function () {
                $(this).height(maxHeight);
            });
            var maxHeight = -1;
            $('.price-heading').each(function () {
                maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
            });
            $('.price-heading').each(function () {
                $(this).height(maxHeight);
            });
            // jQuery('.find-my-location').tooltip();
            // jQuery('.hot-tag').tooltip();
            // jQuery('.hot-tag-list').tooltip();
        }

    </script>
</body>

</html>
