

@extends('layouts.master.master')
@section('page_title')
BDCarHouse - All Categories
@endsection

@section('cars')
    active
@endsection

@section('content')
<!-- ========== PORTFOLIO SECTION ========== -->
<section id="portfolio" class="">
   <div class="page-heading-two">
      <div class="container">
         <div class="col-md-7">
            <h5>Categories</h5>
         </div>
         <div class="col-md-5">
            <div class="breads">
               <a href="{{ route('index') }}">Home</a> / Categories
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
   <!-- Container -->
   <div class="container">
      <div class="row">
         <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="icon-box-1 text-center">
               @foreach($category as $key => $value)
               <div class="col-md-3 col-sm-4 col-xs-6">
                  <!-- Icon Box One Item -->
                  <div class="icon-box-1-item category-item">
                     <!-- Icon Box One Icon -->
                     <a href="{{ route('category_wise_cars',$value->id ) }}">
                     <img alt="{{ $value->name }}" class="car-icon"
                        src="{{asset('/')}}image/{{ $value->image ??'' }}"/>
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
               <!-- Icon Box One Paragraph -->
               <div class="clearfix"></div>
            </div>
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
               <div class="widget-separator"></div>
               <div class="s-widget">
                  <!-- Heading -->
                  <h5><i class="fa fa-map-marker color"></i>&nbsp; Top Locations</h5>
                  <!-- Widgets Content -->
                  <div class="widget-content categories">
                     <ul class="category-list">
                        <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">

                           @foreach($city as $key => $value)
                                    <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                        <span class="fa fa-angle-right"></span>
                                        <a href="{{ route('cars_by_location',$value->id) }}">{{ $value->name }} <span class="color" dir="rtl">({{ $value->numberOfCars->count() }})</span></a>
                                    </li>
                                    @endforeach
                        </li>

                     </ul>
                  </div>
               </div>
               <div class="widget-separator"></div>
               <div class="s-widget">
                  <!-- Heading -->
                  <h5><i class="fa fa-folder color"></i>&nbsp; Featured posts</h5>
                  <!-- Widgets Content -->
                  <div class="widget-content hot-properties">
                     <div class="alert alert-info">No Posts</div>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- //End portfolio -->
<!-- ==========  SERVICES SECTION  ========== -->

@endsection

