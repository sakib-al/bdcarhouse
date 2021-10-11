@extends('layouts.master.master')

@section('page_title')
    BDCarHouse - {{ $parts->parts_name }}
@endsection

@section('services')
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

        .price_label{
            position: absolute;
            margin-top: -29px;
            margin-left: 79px;
            background-color: #ffbf00;
            padding: 6px 12px !important;
        }
    </style>


    <!-- Page heading two starts -->
    <div class="page-heading-two">
        <div class="container">
            <div class="col-md-7">
                <h5 class="car-title-detail">Spare Parts<span>
                    ( <a href="#">{{ $parts->parts_name }}</a> )</span></h5>
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

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="p-nav-1">

                                <div class="single-property">
                                    <div class="detail-slider">
                                        <ul id="imageGallery">
                                            @foreach ($parts->allPartstPhotos as $image)
                                                <li data-thumb="{{asset('/parts_image')}}/{{  $image->name  }}"
                                                data-src="{{asset('/parts_image')}}/{{  $image->name  }}">
                                                <span class="helper"></span><img
                                                    src="{{asset('/parts_image')}}/{{  $image->name  }}" />
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

                                                <p>Factory Product Information<br>

                                                    Brand: Mannol<br>
                                                    Product Name: Mannol Elite SAE 5W-40 Engine Oil<br>
                                                    Weight: 4 Ltrs<br>
                                                    Weight: Oil Weight 5W-40<br>
                                                    Container Type: Plastic Can<br>
                                                    Manufacturer Part Number: 7903<br>
                                                    Color: Varies depending on specification<br>
                                                    Physical State: Liquid<br>
                                                    Odor: Petroleum odor<br>
                                                    High Mileage Formula:<br>
                                                    Oil Composition: Fully Synthetic<br>
                                                    Oil Type: Gasoline & Diesel Engine Oil<br>
                                                    SAE Viscosity: 15W-40<br>
                                                    Standards: API Service Categories: API SN/CF<br>
                                                    ILSAC Class:<br>
                                                    ACEA: A3/B4<br>
                                                    Energy Conserving:<br>
                                                    Country of Origin: Germany<br>
                                                    Shipping Information: —Self-catering-Dhaka<br>

                                                    Innovative, universal, ester-containing, fully synthetic, high-quality motor oil for modern gasoline and diesel engines with and without turbocharging, including “old” brands and high mileage. Developed according to the requirements of European manufacturers.</p>

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


                                    <div class="clearfix"></div>


                                    <hr/>


                                    <div id="fb-root"></div>

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
                                 @foreach ($parts->allPartstPhotos as $image)
                                    <div class="thumb pull-left">
                                        <a href="{{asset('/parts_image')}}/{{  $image->name  }}"
                                            class="lightbox">
                                            <img src="{{asset('/parts_image')}}/{{  $image->name  }}" alt=""
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
                                    href="#">{{ $parts->categories->name }}</a>
                                <a class="label label-color"
                                    href="#">{{ $parts->parts_brand }}</a>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <div class="s-widget">
                            <h5><i class="fa fa-tags color"></i>&nbsp; Price</h5>
                            <div class="widget-content tags">
                                <a class="label label-color price_label"
                                    href="#">{{ $parts->price }}$</a>


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
                            @foreach ($recent as $parts)
                            <div class="widget-content hot-properties">
                                <ul class="list-unstyled">
                                    <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                        <!-- Image -->
                                        <a
                                            href="{{route('front.parts.view',$parts->id)}}"><img
                                                class="img-responsive img-thumbnail"
                                                src="{{asset('/')}}parts_image/{{ $parts->singleImage->name ?? 'no-image.jpg' }}"
                                                alt="" /></a>
                                        <!-- Heading -->
                                        <div class="widget-car-title"><a
                                                href="{{route('front.parts.view',$parts->id)}}">{{ $parts->parts_name }}</a></div>

                                        <div class="price">
                                            <strong>Price</strong>: {{ $parts->price }} <br />
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        @endforeach
                        </div>
                        <div class="widget-separator"></div>
                        <div class="clearfix"></div>
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

