@extends('layouts.master.master')

@section('page_title')
BDCarHouse - Blog View
@endsection

@section('blog')
    active
@endsection

@section('content')

<!-- ========== PORTFOLIO SECTION ========== -->

</section>
<script type="text/javascript">
    var switchTo5x = true;
    var pub_id = 'd866253d-fd08-403f-a8d1-bcd324c8163c';
    var url = "//w.sharethis.com/button/buttons.js";

    $.getScript(url, function () {
        stLight.options({
            publisher: pub_id,
            doNotHash: false,
            doNotCopy: true,
            hashAddressBar: false
        });
    });

</script>
<div class="page-heading-two">
    <div class="container">
        <div class="col-md-7">
            <h5>My Blog</h5>
        </div>
        <div class="col-md-5">
            <div class="breads">
                <a href="{{ route('index') }}">Home</a> / My Blog </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!-- Container -->
<div class="container">

    <div class="blog-two">
        <div class="row">

            <div class="col-md-9 col-sm-12 col-xs-12">
                <!-- Blog item starts -->

                <div class="blog-two-item">
                    <!-- blog two Content -->
                    <div class="blog-two-content">
                        <!-- Blog meta -->
                        <div class="blog-meta">
                            <!-- Date -->
                            <i class="fa fa-calendar"></i> &nbsp; Mar 24, 2018 &nbsp;
                            <!-- updated on version 1.6 -->
                            <!-- Author -->
                            <i class="fa fa-user"></i> &nbsp; {{  $my_blog->title }} &nbsp;

                        </div>


                        <!-- Paragraph -->
                        <p>
                            <img src="{{ asset('/')}}image/{{ $my_blog->image ?? '' }}" class="blog-image" alt="">
                        </p>
                        <p style="text-align:" justify="">{!! $my_blog->description !!}</p>
                        <p></p>
                    </div>
                </div>


                <!-- Blog item ends -->
                <!-- Social media sharing section -->

                {{-- <div class="well">
                                <span class="st_sharethis_large" displaytext="ShareThis"></span>
                                <span class="st_facebook_large" displaytext="Facebook"></span>
                                <span class="st_twitter_large" displaytext="Tweet"></span>
                                <span class="st_linkedin_large" displaytext="LinkedIn"></span>
                                <span class="st_pinterest_large" displaytext="Pinterest"></span>
                                <span class="st_email_large" displaytext="Email"></span>

                            </div> --}}



                {{--
                            <div class="agent-holder clearfix">
                                <!-- Team #2 -->
                                <div class="team-two">
                                    <div class="row">

                                        <!-- Team #2 member -->
                                        <div class="col-md-2 col-sm-2 col-xs-12">
                                            <!-- Image -->
                                            <a href="#">
                                <img class="img-responsive user-photo-list" src="http://carbiz.webhelios.com/uploads/profile_photos/nophoto-male.jpg" alt="">

                                </a>

                                        </div>

                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <div class="team-details">
                                                <!-- Name -->
                                                <h4>Admin Doe</h4>

                                                <!-- Social -->
                                                <div class="brand-bg member-social-links">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Team #2 end -->
                            </div> --}}
                <!-- Comments section -->
                {{-- <div class="blog-comments">
                                <div id="disqus_thread"></div>
                                <script type="text/javascript">
                                    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                                    var disqus_shortname = 'webhelios'; // required: replace example with your forum shortname

                                    /* * * DON'T EDIT BELOW THIS LINE * * */
                                    (function() {
                                        var dsq = document.createElement('script');
                                        dsq.type = 'text/javascript';
                                        dsq.async = true;
                                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                    })();
                                </script>
                                <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                <div class="clearfix"></div>

                            </div> --}}


            </div>


            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <!-- Search Widget -->
                    <div class="s-widget">
                        <!-- Heading -->
                        <h5><i class="fa fa-search color"></i>&nbsp; Search</h5>
                        <!-- Widgets Content -->
                        <div class="widget-content search">
                            <form role="form" action="#" method="get">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Type something" value=""
                                        name="search">


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
                        <h5><i class="fa fa-map-marker color"></i>&nbsp; Top Locations</h5>
                        <!-- Widgets Content -->

                        <div class="widget-content categories">
                            <ul class="category-list">
                                @foreach($city as $key => $value)
                                <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                    <span class="fa fa-angle-right"></span>
                                    <a href="{{ route('cars_by_location',$value->id) }}">{{ $value->name }} <span
                                            class="color" dir="rtl">({{ $value->numberOfCars->count() }})</span></a>
                                </li>
                                @endforeach
                                <div class="widget-separator"></div>
                                <div class="s-widget">
                                    <!-- Heading -->
                                    <h5><i class="fa fa-bookmark color"></i>&nbsp; Featured Cars</h5>
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
                                                    <span class="stars stars-sidebar"><i
                                                            class="fa fa-star active"></i><i
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
                        </div>
                    </div>
                    <div class="widget-separator"></div>

                    <div class="widget-separator"></div>
                </div>
            </div>

        </div>
    </div>

</div>
</section>
<!-- //End portfolio -->

@endsection
