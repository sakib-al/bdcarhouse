@extends('layouts.master.master')

@section('page_title')
    BDCarHouse - {{$product->name}}
@endsection

@section('cars')
    active
@endsection

@section('content')
<section id="portfolio" class="">
    <link
        href="{{ asset('assets/web/application/modules/themes/views/default/assets/gallery/css/lightGallery.css')}}"
        rel="stylesheet">
    <script
        src="{{ asset('assets/web/application/modules/themes/views/default/assets/magnific/js/jquery.magnific-popup.min.js')}}">
    </script>
    <link
        href="{{ asset('assets/web/application/modules/themes/views/default/assets/magnific/css/magnific-popup.css')}}"
        rel="stylesheet">
    <!-- Page heading two starts -->
    <script
        src="{{ asset('assets/web/application/modules/themes/views/default/assets/gallery/js/jquery.lightSlider.min.js')}}">
    </script>
    <script
        src="{{ asset('assets/web/application/modules/themes/views/default/assets/gallery/js/lightGallery.min.js')}}">
    </script>

    <style>
        .tab-content{
            padding-left: 0px !important;
            padding-right: 0px !important;
        }
        .single-property{
            padding-left: 0px !important;
            padding-right: 0px !important;
        }
        .tab-pane{
            padding-left: 0px !important;
            padding-right: 0px !important;
        }
    </style>


    <!-- Page heading two starts -->
    <div class="page-heading-two">
        <div class="container">
            <div class="col-md-7">
                <h5 class="car-title-detail">Cars <span>
                    ( <a href="#">{{ $product->categories->name}}</a> )</span></h5>
            </div>
            <div class="col-md-5">
                <div class="breads detail-page-breads">
                    <a href="#">Home</a> / Car detail </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Page heading two ends -->
    <div class="container real-estate" style="padding-top: 10px">

        <!-- Actual content -->
        <div class="rs-property">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">

                    <!-- Nav tab style 1 starts -->
                    <div class="nav-tabs-one">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#p-nav-1" data-toggle="tab">Details</a></li>
                            <li><a href="#p-nav-2" data-toggle="tab">Contact</a></li>
                            <li class="review-tab"><a href="#p-nav-3" data-toggle="tab">Review</a></li>
                        </ul>
                        <!-- Tab content -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="p-nav-1">

                                <div class="single-property">
                                    <div class="detail-slider">
                                        <ul id="imageGallery">
                                            @foreach ($product->allDefaultPhotos as $item)
                                                <li data-thumb="{{asset('/image')}}/{{  $item->name  }}"
                                                data-src="{{asset('/image')}}/{{  $item->name  }}">
                                                <span class="helper"></span><img
                                                    src="{{asset('/image')}}/{{  $item->name  }}" />
                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>

                                    <hr />
                                    <div class="info-box">
                                        <i class="bg-red category"><img
                                                src="{{ asset('assets/web/assets/images/img/luxury-car.png')}}"
                                                class="map-marker" /></i>

                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-center" colspan="4">Specification</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="15%">
                                                                Brand:
                                                            </th>
                                                            <td width="35%">{{ $product->product_brand->name }}</td>
                                                            <th width="15%">
                                                                Model:
                                                            </th>
                                                            <td width="35%">{{ $product->carmodels->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Year:
                                                            </th>
                                                            <td>
                                                                {{$product->body_type}}
                                                            </td>
                                                            <th>
                                                                Grade:
                                                            </th>
                                                            <td>{{$product->grade}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Chassis No:
                                                            </th>
                                                            <td>{{$product->chassis_no}}</td>
                                                            <th>
                                                                Engine size:
                                                            </th>
                                                            <td>{{$product->engine_size}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Mileage:
                                                            </th>
                                                            <td>{{$product->mileage}}</td>
                                                            <th>
                                                                Transmission:
                                                            </th>
                                                            <td>{{$product->transmission}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Color:
                                                            </th>
                                                            <td> {{$product->color}}</td>
                                                            <th>
                                                                Score:
                                                            </th>
                                                            <td>{{ $product->safety_rating }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Body Type</th>
                                                            <td> 2018</td>
                                                            <th>Fuel Type:</th>
                                                            <td>{{$product->fuel_type}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Gear Type:</th>
                                                            <td>{{$product->gear_type}}</td>
                                                            <th>No of Seats:</th>
                                                            <td>{{$product->no_of_seats}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Price</th>
                                                            <td colspan="3">{{$product->price}}$</td>
                                                        </tr>
                                                        {{-- <tr>
                                                            <td>
                                                                Remarks:
                                                            </td>
                                                            <td colspan="3">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Manufactured:
                                                            </td> --}}
                                                            {{-- <td colspan="3">
                                                                <input type="text" id="vin" value="ZRT260-"
                                                                    onkeypress="return vin_onkeypress(event)"
                                                                    style="width:auto;vertical-align:-3px;">
                                                                <button class="btn" onclick="yearCheck()">Check</button>
                                                                <span id="result"
                                                                    style="vertical-align:middle;font-weight:bold;margin-left:10px;"></span>
                                                                <div class="alert alert-info" style="margin-bottom:0;">
                                                                    *Just for your reference: This search system is based on
                                                                    online information. It may not be fully accurate sometimes.
                                                                    For 100% accurate information, please contact your Sales
                                                                    Consultant.
                                                                </div>

                                                                <script>
                                                                    function vin_onkeypress(e) {
                                                                        if (e.keyCode == 13) {
                                                                            if (e.preventDefault) e.preventDefault();
                                                                            this.yearCheck();
                                                                        }
                                                                    }

                                                                    function yearCheck() {
                                                                        $('#result').html("Checking...");
                                                                        $.ajax({
                                                                            type: 'GET',
                                                                            url: "/api/year?vin=" + $('#vin').val(),
                                                                            success: function (msg) {
                                                                                $('#result').html(msg);
                                                                            }
                                                                        });
                                                                    }

                                                                </script>
                                                            </td> --}}
                                                        </tr>
                                                    </tbody>
                                                </table>
                                        {{-- <div class="sub-cat">
                                            <a
                                                href="#">{{ $product->categories->name}}</a>
                                        </div>

                                        <div class="ad-detail-info">
                                            <span class="span-left"><i class="fa fa-clock-o bg-red"></i> Added:</span>

                                            <span class="span-right">Mar 23, 2018 </span>
                                        </div>

                                        <div class="ad-detail-info">
                                            <span class="span-left"><i class="fa fa-money bg-yellow"></i> Price:</span>

                                            <span class="span-right">&#x24;{{$product->price}} </span>
                                        </div>
                                       <div class="ad-detail-info">
                                            <span class="span-left"><i class="fa fa-diamond bg-green"></i> Brand:</span>

                                            <span class="span-right">{{ $product->product_brand->name }}</span>
                                        </div>

                                        <div class="ad-detail-info">
                                            <span class="span-left"><i class="fa fa-diamond bg-green"></i> Model:</span>

                                            <span class="span-right">{{ $product->carmodels->name }}</span>
                                        </div>

                                        <div class="ad-detail-info">
                                            <span class="span-left"><i class="fa fa-calendar-check-o bg-lblue"></i> Body type:</span>

                                            <span class="span-right">{{$product->body_type}}</span>
                                        </div>

                                        <div class="ad-detail-info">
                                            <span class="span-left"><i class="fa fa-tachometer bg-purple"></i>Mileage:</span>

                                            <span class="span-right">{{$product->mileage}}</span>
                                        </div>

                                        <div class="ad-detail-info">
                                            <span class="span-left"><i class="fa fa-cogs bg-red"></i>Transmission:</span>

                                            <span class="span-right">{{$product->transmission}}</span>
                                        </div>

                                        <div class="ad-detail-info">
                                            <span class="span-left"><i class="fa fa-flask bg-orange"></i> Fuel Type:</span>

                                            <span class="span-right">{{$product->fuel_type}}</span>
                                        </div>

                                        <div class="ad-detail-info">
                                            <span class="span-left"><i class="fa fa-map-marker bg-blue "></i>Location:</span>

                                            <span class="span-right">
                                                <a
                                                    href="#">{{$product->address}}</a>
                                            </span>
                                        </div> --}}

                                        {{-- <div class="ad-detail-info">
                                            <span class="span-left"><i class="fa fa-star bg-yellow price-icon"></i>
                                                Review:</span>

                                            <span class="span-right">
                                                <a
                                                    href="#">
                                                    <span class="stars "><i class="fa fa-star active"></i><i
                                                            class="fa fa-star active"></i><i
                                                            class="fa fa-star active"></i><i
                                                            class="fa fa-star active"></i><i
                                                            class="fa fa-star active"></i></span> </a>
                                                5.0/(1 Votes)
                                            </span>
                                        </div>



                                        <div class="ad-detail-info">
                                            <span class="span-left"><i class="fa fa-eye bg-purple view-icon"></i>Views:</span>

                                            <span class="span-right"> 1043 </span>
                                        </div>

                                        <div class="ad-detail-info">
                                            <span class="span-left"><i class="fa fa-bookmark bg-orange"></i>Featured:</span>

                                            <span class="span-right"> Yes </span>
                                        </div>

                                        <div class="ad-detail-info">
                                            <span class="span-left"><i class="fa fa-file-word-o bg-red"></i>brochure:</span>

                                            <span class="span-right">
                                                <a target="_blank"
                                                    href="http://carbiz.webhelios.com/uploads/brochure/"></a>
                                            </span>
                                        </div> --}}

                                        {{-- <div class="ad-detail-info">
                                            <span class="span-right">
                                                <a target="_blank"
                                                    href="#"><i
                                                        class="fa fa-print fa-lg"></i> Print</a></span>
                                        </div> --}}
                                        <div class="share-links">
                                            <span class='st_sharethis_hcount' displayText='Share This'></span>
                                            <span class='st_facebook_hcount' displayText='Facebook'></span>
                                            <span class='st_twitter_hcount' displayText='Tweet'></span>
                                            <span class='st_linkedin_hcount' displayText='LinkedIn'></span>
                                            <span class='st_pinterest_hcount' displayText='Pinterest'></span>
                                            <span class='st_email_hcount' displayText='Email'></span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>




                                    <!-- heading -->
                                    <h4 class="info-subtitle"><i class="fa fa-tasks"></i> Description</h4>

                                    <!-- paragraph -->
                                    <p>
                                        <p>{{$product->description}}</p>
                                    </p>
                                    <hr />
                                    <div class="clearfix"></div>


                                    <!-- heading -->
                                    <h4 class="info-subtitle"><i class="fa fa-puzzle-piece"></i> Other Information</h4>

                                    <!-- paragraph -->
                                    <p>
                                        <ul class="custom-data-list">
                                            <li><span class="span-left">Engine Size:</span><span
                                                    class="span-right">{{$product->engine_size}}</span>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li><span class="span-left">Steering Type:</span><span
                                                    class="span-right">{{ $product->steering_type }}</span>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li><span class="span-left">Safety Rating:</span><span
                                                    class="span-right">{{ $product->safety_rating }}</span>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li><span class="span-left">Engine Type:</span><span
                                                    class="span-right">{{$product->engine_type}}</span>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li><span class="span-left">No of Seats:</span><span
                                                    class="span-right">{{$product->no_of_seats}}</span>
                                                <div class="clearfix"></div>
                                            </li>
                                            <li><span class="span-left">Gear Type:</span><span
                                                    class="span-right">{{$product->gear_type}}</span>
                                                <div class="clearfix"></div>
                                            </li>
                                            <ul>
                                    </p>

                                    <div class="clearfix"></div>


                                    <hr />


                                    <div id="ad-address"><span>{{$product->address}}</span></div>

                                    {{-- <h4 class="info-subtitle"><i class="fa fa-map-marker"></i> Location on Map</h4> --}}
                                    {{-- <div class="gmap" id="details-map"></div>
                                    <div id="dir-panel"></div>
                                    <!-- added on version 1.8 -->
                                    <div class="clearfix"></div>
                                    <a href="javascript:void(0);" onclick="calcRoute()"
                                        class="pull-right btn btn-primary" style="width:100%">Get Direction</a>
                                    <div class="clearfix"></div> --}}


                                    {{-- <style???>
                                        .fb-comments,
                                        .fb-comments iframe[style] {
                                            width: 100% !important;
                                        }

                                    </style???> --}}
                                    <div id="fb-root"></div>
                                    {{-- <script>
                                        var fb_app_id = 'webhelios';

                                        (function (d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = "//connect.facebook.net/en_EN/sdk.js#xfbml=1&appId=" +
                                                fb_app_id + "&version=v2.0";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));

                                    </script>

                                    <div style="clear:both;margin-top:10px;"></div>
                                    <div class="fb-comments"
                                        data-href=" http://carbiz.webhelios.com/index.php/en/car/audi-for-sale"
                                        data-numposts="10" data-colorscheme="light"></div> --}}

                                </div>
                            </div>

                            <div class="tab-pane fade" id="p-nav-2">

                                <div class="single-property sp-agent">

                                    <div class="clearfix"></div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th class="text-center" colspan="4">Contact Information</th>
                                            </tr>
                                            <tr>
                                                <th>City:</th>
                                                <td>{{ $product->cities->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Address:</th>
                                                <td>{{$product->address}}</td>
                                            </tr>
                                            <tr>
                                                <th>Zip Code:</th>
                                                <td>{{$product->zip_code}}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone No:</th>
                                                <td>{{ $product->phone }}</td>
                                            </tr>
                                        </table>
                                    </div>

                                    {{-- <div class="rs-enquiry">
                                        <h3>Send email to car owner</h3>
                                        <div class="ajax-loading recent-loading"><img
                                                src="http://carbiz.webhelios.com/application/modules/themes/views/default/assets/img/loading.gif"
                                                alt="loading..."></div>
                                        <div class="clearfix"></div>
                                        <span class="agent-email-form-holder">
                                        </span>
                                    </div> --}}

                                </div>

                            </div>

                            <div class="tab-pane fade" id="p-nav-3">
                                <div class="ajax-loading review-loading"><img
                                        src="http://carbiz.webhelios.com/application/modules/themes/views/default/assets/img/loading.gif"
                                        alt="loading..."></div>

                                <div class="alert alert-info" role="alert">You must be logged in to submit review.</div>
                                <div style="margin-top:20px"></div>
                                <h4 class="info-subtitle"><i class="fa fa-rocket"></i> Recent reviews</h4>
                                <div id="reviews-holder" class="team-two">

                                    <div class="row review-2 review-row">

                                        <div class="col-md-2 col-xs-12">
                                            <a href="http://carbiz.webhelios.com/index.php/en/profile/2/User Doe">
                                                <img alt="user-image"
                                                    src="http://carbiz.webhelios.com/uploads/profile_photos/nophoto-male.jpg"
                                                    class="img-responsive user-img">
                                            </a>
                                        </div>
                                        <div class="col-md-10 col-xs-12">
                                            <h4>User Doe</h4>
                                            <p class="contact-types">
                                                <span class="stars"><i class="fa fa-star active"></i><i
                                                        class="fa fa-star active"></i><i
                                                        class="fa fa-star active"></i><i
                                                        class="fa fa-star active"></i><i
                                                        class="fa fa-star active"></i></span>
                                                <div class="clearfix"></div>
                                                <strong>Posted on:</strong> Oct 10, 2020
                                                <!-- updated on version 1.6 -->
                                            </p>
                                            <p>n</p>
                                        </div>

                                    </div>
                                    <hr />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="sidebar">

                        <div class="s-widget">
                            <h5><i class="fa fa-photo color"></i>&nbsp; Image  Gallery</h5>

                            <div class="widget-content gallery">
                                @foreach ($product->allDefaultPhotos as $item)
                                <div class="thumb pull-left">
                                    <a href="{{asset('/image')}}/{{  $item->name  }}"
                                        class="lightbox">
                                        <img src="{{asset('/image')}}/{{  $item->name  }}" alt=""
                                            class="img-responsive " />
                                    </a>
                                </div>
                                @endforeach

                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="s-widget">
                            <h5><i class="fa fa-tags color"></i>&nbsp; Tags</h5>
                            <div class="widget-content tags">
                                <a class="label label-color"
                                    href="#">{{ $product->product_brand->name }}</a>
                                <a class="label label-color"
                                    href="#">{{ $product->carmodels->name }}</a>
                                <a class="label label-color"
                                    href="#">{{ $product->categories->name}}</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <span><img class="img-responsive" alt="Ad1" src="//placehold.it/300x250"></span>
                        <div class="widget-separator"></div>
                        <!-- Search Widget -->
                        <div class="s-widget">
                            <!-- Heading -->
                            <h5><i class="fa fa-search color"></i>&nbsp; Search</h5>
                            <!-- Widgets Content -->
                            <div class="widget-content search">
                                <form role="form" action="/search" method="get">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Type something" value="" name="search">
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
                            <h5><i class="fa fa-clock-o color"></i>&nbsp; Recent Cars</h5>
                            <!-- Widgets Content -->

                            <div class="widget-content hot-properties">
                                <ul class="list-unstyled">


                                    @foreach($latest as $key => $latest_car )

                                    <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                        <!-- Image -->
                                        <a href="{{route('cars.view',$latest_car->id)}}"><img
                                                class="img-responsive img-thumbnail"
                                                src="{{ asset('/')}}image/{{ $latest_car->singleImage->name ?? 'no-image.jpg' }}"
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
                        <div class="s-widget">
                            <!-- Heading -->
                            <h5><i class="fa fa-map-marker color"></i>&nbsp; Top Locations</h5>
                            <!-- Widgets Content -->

                            <div class="widget-content categories">
                                <ul class="category-list">
                                    @foreach($city as $key => $value)
                                    <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                        <span class="fa fa-angle-right"></span>
                                        <a href="{{ route('cars_by_location',$value->id) }}">{{ $value->name }} <span class="color" dir="rtl">({{ $value->numberOfCars->count() }})</span></a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="widget-separator"></div>
                        <div class="clearfix"></div>
                        <div class="s-widget">
                            <i class="fa fa-flag color"></i>&nbsp; <a class="js-report" type="button"
                                href="http://carbiz.webhelios.com/index.php/en/user/reportpost/4">Report this car</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('custom_js')
        <script type="text/javascript">

             // LIGHT BOX NEED

             $(document).ready(function () {
                $('.lightbox').magnificPopup({
                    type: 'image'
                });

                jQuery('.review-detail').click(function (e) {
                    e.preventDefault();
                    var loadUrl = jQuery(this).attr('href');
                    jQuery.post(
                        loadUrl, {},
                        function (responseText) {
                            jQuery('#reviewModal .modal-body').html(responseText);
                            jQuery('#reviewModal').modal('show');
                        }
                    );

                });

                jQuery('#video_url').change(function () {

                    var url = jQuery(this).val();

                    showVideoPreview(url);

                }).change();


            });

            // Light Box NEED

            // Light Box Slide
            //added on version 1.9
            $(function () {
                function imageLoaded() {
                    counter--;
                    if (counter === 0) {
                        var rtl = false;

                        $('#imageGallery').lightSlider({
                            gallery: false,
                            item: 1,
                            speed: 1000,
                            pause: 3000,
                            rtl: rtl,
                            auto: true,
                            loop: true,
                            thumbItem: 9,
                            slideMargin: 0,
                            currentPagerPosition: 'left',
                            onSliderLoad: function (plugin) {
                                plugin.lightGallery();

                            }
                        });

                    }
                }
                var images = $('.gallery img');
                var counter = images.length; // initialize the counter

                images.each(function () {
                    if (this.complete) {
                        imageLoaded.call(this);
                    } else {
                        $(this).one('load', imageLoaded);
                    }
                });
            });

        </script>
    @endpush

