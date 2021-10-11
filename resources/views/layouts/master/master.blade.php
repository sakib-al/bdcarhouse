<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>@yield('page_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- ========== FAVICON ========== -->
    <link rel="shortcut icon"
        href="{{ asset('assets/web/assets/images/img/favicon.ico')}}">

    <style type="text/css">
        .footer-share-links i {
            padding-top: 11px;
        }

        .member-social-links i {
            padding-top: 11px;
        }

    </style>
    <link href="{{ asset('assets/web/assets/css/all-css.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/web/assets/img/font-awsome.min.css')}}">
    @stack('custom_css_front')

    <script src="https://kit.fontawesome.com/60d9ccbe64.js" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
    <script src="http://carbiz.webhelios.com/application/modules/themes/views/default/assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <![endif]-->

    <script src="{{ asset('assets/web/assets/js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{ asset('assets/web/assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script type="text/javascript">
        var base_url = 'http://carbiz.webhelios.com/';

    </script>
    <!-- added on version 1.5 -->
    <script type="text/javascript">
        var old_ie = 0;

    </script>

<style>
    .top-bar {
        background: #222222;
    }

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



    <script type="text/javascript">
        var base_url = 'http://carbiz.webhelios.com/';

    </script>
    <!-- added on version 1.5 -->
    <script type="text/javascript">
        var old_ie = 0;

    </script>
    <!--[if lte IE 8]> <script type="text/javascript"> old_ie = 1; </script> < ![endif]-->


</head>
<!--/head-->

<body class="page-top" dir="ltr">
    <script src="{{ asset('assets/web/assets/custom_js/login.js')}}"></script>

    <div id="page-wrap" class="animsition">

        <script type="text/javascript">
            var menu_title = 'MENU';

        </script>
        <div class="offcanvas-overlay"></div>

        <div class="top-bar static-top-bar">
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

                </div>
                <!-- Social media starts -->
                <div class="tb-social pull-right">
                    <div class="brand-bg text-right">
                        <!-- Brand Icons -->
                        <a target="_blank" href="#" class="facebook"><i
                                class="fa fa-facebook square-2 rounded-1"></i></a>
                        <a target="_blank" href="#" class="twitter"><i
                                class="fa fa-twitter square-2 rounded-1"></i></a>
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
        <header id="header" class="sticky full-header static-header">
            <div class="container">
                <div class="row box-header-wrap">
                    <div class="col-sm-2 col-xs-4 logo-col">
                        <div id="logo" class="logos">

                            <h3>
                                <a href="{{ route('index') }}" class="standard-logo pull-left">
                                    <img src="{{ asset('assets/web/assets/images/logo/bd_car_house_logo.png')}}" alt="Logo"
                                        style="height:63px">
                                </a>
                            </h3>

                        </div>
                    </div>
                    <div class="col-sm-10 col-xs-8">
                        <nav class="main-nav pull-right">
                            <ul>
                                <li class="@yield('home')">

                                    <a href="{{ route('index') }}">Home</a>

                                </li>
                                <li class="@yield('cars')">

                                    <a href="{{ route('cars') }}">CARS</a>

                                </li>
                                <li class="@yield('search')">

                                    <a href="{{ route('advance-search') }}">Advanced Search</a>

                                </li>

                                <li class="@yield('about')">

                                    <a href="{{ route('about') }}">About</a>

                                </li>

                                <li class="@yield('services') has-sub has-child">
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
                                {{-- <li class="@yield('blog')">
                                    <a href="{{ route('blog') }}">Blog
                                        post</a>
                                </li> --}}

                                <li class="@yield('contact')">

                                    <a href="{{ route('contact') }}">Contact Us</a>

                                </li>
                                {{-- <li class="">
                                    <a class="signup"
                                        href="{{ route('signup') }}">Signup</a>
                                </li> --}}
                                <li class="">
                                    <a class="" href="{{ route('login1') }}">Login</a>
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

        {{-- ==========CONTENT GOES HERE============== --}}


        @yield('content')



        {{-- ================CONTENT END HERE============== --}}


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
                                        <li><span>Address</span>: Unit 10A, House 21, Road 17, Banani C/A, Dhaka 1213</li>
                                        <li><span>Phone</span>: +991345345677</li>
                                        <li><span>Email</span>: bdcarhouse@info.com</li>
                                    </ul>
                                    <div class="widget-share-links">Please share our website</div>
                                    <div class="brand-bg footer-share-links">

                                        <a class="facebook"
                                            href="#">
                                            <i class="fa fa-facebook circle-3"></i>
                                        </a>
                                        <a class="twitter" target="_blank"
                                            href="#">
                                            <i class="fa fa-twitter circle-3"></i>
                                        </a>
                                        <a class="google-plus"
                                            href="#">
                                            <i class="fa fa-google-plus circle-3"></i>
                                        </a>
                                        <a class="linkedin"
                                            href="#">
                                            <i class="fa fa-linkedin circle-3"></i>
                                        </a>
                                        <a class="pinterest"
                                            href="#">
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
                                    <li><a href="{{ route('cars') }}"><span class="fa fa-angle-right"></span> All Cars</a></li>
                                    <li><a href="{{ route('all_categories') }}"><span class="fa fa-angle-right"></span> Categories</a></li>
                                    <li><a href="{{ route('service_center') }}"><span class="fa fa-angle-right"></span> Service Centers</a></li>
                                    <li><a href="{{ route('spare_parts') }}"><span class="fa fa-angle-right"></span> Spare Parts</a></li>
                                    <li><a href="{{ route('advance-search') }}"><span class="fa fa-angle-right"></span>Advanced Search</a></li>
                                    <li><a href="#"><span class="fa fa-angle-right"></span>Terms and Condition</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- EACH FEATURE -->
                        <div class="features-item features-item-v2">
                            <div class="features-info">
                                <h3 class="title">About <span>Us</span></h3>
                                <p>Established in 2020, BdCarHouse today is an organization with a vision for presence all around Bangladesh. It has a strong team that is focused to ensure that BdCarHouse is at the top of its game.</p>
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
                        <p class="copyright m-b-10">© Copyright 2020 <a style="color: white" href="https://www.arobil.com/"><b>Arobil.LTD </b></a>. All rights reserved</p>
                    </div>
                    <!-- //col-sm-12 -->
                </div>
                <!-- //row -->
            </div>
            <!-- //container -->
        </footer>
        <!-- //End footer -->


        <!-- Go to top button -->
        <button data-rippleria-color="#fff" class="go-top ripple"><i class="fa fa-angle-up"></i></button>


    </div>
    <!-- //End page-wrap -->

      <!-- ==================   SCRIPT PART   ================= -->

      <script type="text/javascript" src="{{ asset('assets/web/application/modules/themes/views/default/assets/js/bootstrap.min.js')}}" async></script>
      <script type="text/javascript" src="http://carbiz.webhelios.com/application/modules/themes/views/default/assets/js/app.js" async></script>
      <script type="text/javascript" src="{{ asset('assets/web/application/modules/themes/views/default/assets/js/app.js')}}" async></script>



    <div id="signin-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" style="display: none;">

        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header login-modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                    <h4 class="modal-title" id="myModalLabel"><span class="fa fa-sign-in"></span> Login to your Account
                    </h4>

                </div>

                <div class="modal-body">

                    <!-- Login starts -->
                    <div class="well login-reg-form">

                        <!-- Form -->
                        <form action="#" class="form-horizontal"
                            role="form" method="post">
                            <!-- Form Group -->
                            <div class="form-group">
                                <!-- Label -->
                                <label for="user" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <!-- Input -->
                                    <input type="text" class="form-control" name="useremail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            demo user : user@webhelios.com pass: 12345
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember Me </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <!-- Button -->
                                    <button type="submit" class="btn btn-success">Login</button>&nbsp;
                                    <button type="reset" class="btn btn-white">Reset</button>
                                </div>
                            </div>
                            <div class="col-sm-offset-3 col-sm-9">
                                <a href="http://carbiz.webhelios.com/index.php/en/account/recoverpassword"
                                    class="black">Forgot Password ?</a> | <a
                                    href="http://carbiz.webhelios.com/index.php/en/account/signup" class="black">Sign
                                    Up</a>
                            </div>
                        </form>
                        <br /><br />
                        <!-- Social Media Login -->
                        <div class="s-media text-center">
                            <!-- Button -->
                            <a href="javascript:void(0);" onclick="login();" class="btn btn-primary"><i
                                    class="fa fa-facebook"></i> &nbsp; Login with Facebook</a>
                        </div>
                    </div>
                    <!-- Login ends -->

                </div>

                <div class="modal-footer">

                </div>

            </div>

            <!-- /.modal-content -->

        </div>

        <!-- /.modal-dialog -->

    </div>


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

    <!-- added on version 1.8 -->
    <div id="adblock-msg-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel2">Adblock Detected</h4>
                </div>

                <div class="modal-body">
                    <img alt="Adblock Detected"
                        src="http://carbiz.webhelios.com/application/modules/themes/views/default/assets/img/adblock.png"
                        class="img-fluid" />
                    <br />
                    <br />
                    <div class="alert alert-danger">Please disbale adblock and refresh the page again</div>
                </div>

                <div class="modal-footer">
                </div>

            </div>
        </div>
    </div>
    <!-- end -->

    <!-- added on version 1.8 -->
    {{-- <div id="cookiescript-popup" style="display:none">
        <div id="cookiescript-wrapper" style="">
            This site uses cookies. By continuing to use this site you agree to our use of cookies.
            <div style="clear:both"></div>
            <a href="http://carbiz.webhelios.com/index.php/en/show/page/cookie_policy" class="btn btn-warning">Read
                more</a>
            <a href="#" class="btn btn-success agree-cookie">I agree</a>
            <div id="cookiescript-pixel" style="width: 1px; height: 1px; float: left;"></div>
        </div>
    </div>
    <script src="http://carbiz.webhelios.com/assets/admin/assets/jquery-cookie/jquery_cookie.js" defer></script>
    <script type="text/javascript">
        $(document).ready(function () {
            if ($.cookie('agree-terms') != 1) {
                $('#cookiescript-popup').show('slow');
            }

            $('.agree-cookie').click(function (e) {
                e.preventDefault();
                $.cookie('agree-terms', 1, {
                    expires: 30
                });
                $('#cookiescript-popup').hide('slow');
            });

        });

    </script> --}}
    <!-- end -->

    {{-- <script type="text/javascript">
        jQuery(document).ready(function() {

            if (old_ie == 1) {
                jQuery('#ie-msg-modal').modal('show');
            }

            jQuery('.signin').click(function(e) {
                e.preventDefault();
                jQuery('#signin-modal').modal('show');
            });

        });
    </script> --}}
    <script type="text/javascript">
        $(document).ready(function() {

            jQuery('.list-switcher').each(function() {
                var view_type = 'grid';
                var alias = 'contact';
                if (view_type == 'grid')
                    jQuery(this).children(":first").trigger('click');
                else if (view_type != 'grid' && alias == 'ad_search')
                    jQuery(this).children(":nth-child(2)").trigger('click');
                else
                    jQuery(this).children(":first").trigger('click');
            });

            jQuery('.featured-list-switcher').each(function() {
                jQuery(this).children(":first").trigger('click');
            });

            fix_grid_height();


        });

        function fix_grid_height() {
            var maxHeight = -1;
            $('.item-title').each(function() {
                maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
            });

            $('.item-title').each(function() {
                $(this).height(maxHeight);
            });

            var maxHeight = -1;
            $('.cat-title').each(function() {
                maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
            });

            $('.cat-title').each(function() {
                $(this).height(maxHeight);
            });

            var maxHeight = -1;
            $('.info-phone').each(function() {
                maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
            });

            $('.info-phone').each(function() {
                $(this).height(maxHeight);
            });

            var maxHeight = -1;
            $('.price-heading').each(function() {
                maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
            });

            $('.price-heading').each(function() {
                $(this).height(maxHeight);
            });
            // jQuery('.find-my-location').tooltip();
            // jQuery('.hot-tag').tooltip();
            // jQuery('.hot-tag-list').tooltip();
        }
    </script>
    {{-- <script type="text/javascript">
        $(document).ready(function() {

            jQuery('.list-switcher').each(function() {
                var view_type = 'grid';
                var alias = 'contact';
                if (view_type == 'grid')
                    jQuery(this).children(":first").trigger('click');
                else if (view_type != 'grid' && alias == 'ad_search')
                    jQuery(this).children(":nth-child(2)").trigger('click');
                else
                    jQuery(this).children(":first").trigger('click');
            });

            jQuery('.featured-list-switcher').each(function() {
                jQuery(this).children(":first").trigger('click');
            });

            fix_grid_height();


        });

        function fix_grid_height() {
            var maxHeight = -1;
            $('.item-title').each(function() {
                maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
            });

            $('.item-title').each(function() {
                $(this).height(maxHeight);
            });

            var maxHeight = -1;
            $('.cat-title').each(function() {
                maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
            });

            $('.cat-title').each(function() {
                $(this).height(maxHeight);
            });

            var maxHeight = -1;
            $('.info-phone').each(function() {
                maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
            });

            $('.info-phone').each(function() {
                $(this).height(maxHeight);
            });

            var maxHeight = -1;
            $('.price-heading').each(function() {
                maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
            });

            $('.price-heading').each(function() {
                $(this).height(maxHeight);
            });
            // jQuery('.find-my-location').tooltip();
            // jQuery('.hot-tag').tooltip();
            // jQuery('.hot-tag-list').tooltip();
        }
    </script> --}}

    @stack('custom_js')
</body>

<!-- Mirrored from northui.com/carbiz/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Oct 2017 13:39:34 GMT -->

</html>
