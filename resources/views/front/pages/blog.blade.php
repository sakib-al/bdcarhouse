@extends('layouts.master.master')

@section('page_title')
BDCarHouse - Blog view
@endsection

@section('blog')
    active
@endsection

@section('content')
<!-- ========== PORTFOLIO SECTION ========== -->
<section id="portfolio" class="">
    <div class="page-heading-two">
        <div class="container">
            <div class="col-md-7">
                <h5>Blog Post</h5>
            </div>
            <div class="col-md-5">
                <div class="breads">
                    <a href="{{ route('index') }}">Home</a> / Blog Post </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Container -->
    <div class="container">
        <div class="blog-one">
            <div class="row">

                <div class="col-md-9 col-sm-12 col-xs-12">

                    @foreach ($blog as $blog_view)
                    <!-- Blog item starts -->
                    <div class="blog-one-item row">
                        <!-- blog One Img -->
                        <div class="blog-one-img col-md-3 col-sm-3 col-xs-3">
                            <!-- Image -->
                            <a href="{{ route('my_blog', ['id'=>$blog_view->id]) }}"><img
                                    src="{{ asset('/')}}image/{{ $blog_view->image ?? '' }}" alt=""
                                    class="img-responsive img-thumbnail" /></a>
                        </div>
                        <!-- blog One Content -->

                        <div class="blog-one-content  col-md-9 col-sm-9 col-xs-9">
                            <!-- Heading -->

                            <h3><a href="{{ route('my_blog', ['id'=>$blog_view->id]) }}">{{  $blog_view->title }}</a>
                            </h3>

                            <!-- Blog meta -->
                            <div class="blog-meta">
                                <!-- Date -->
                                <i class="fa fa-calendar"></i> &nbsp; Mar 24, 2018 &nbsp;
                                <!-- updated on version 1.6 -->
                                <!-- Author -->
                                <i class="fa fa-user"></i> &nbsp; Admin Doe</a>

                            </div>
                            <!-- Paragraph -->
                            <p>{!! $blog_view->description !!} &nbsp;<a
                                    href="{{ route('my_blog', ['id'=>$blog_view->id]) }}">View More</a>
                            </p>
                        </div>
                    </div>

                    <!-- Blog item ends -->

                    <!-- Blog item starts -->

                    <!-- Blog item ends -->
                    <ul class="pagination">
                    </ul>

                    @endforeach
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

                    </div>
                </div>

            </div>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53fb1205151cc4cf">
            </script>
</section>
<!-- //End portfolio -->
@endsection
