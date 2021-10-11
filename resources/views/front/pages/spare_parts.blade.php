@extends('layouts.master.master')

@section('page_title')
BDCarHouse - Spare Parts
@endsection
@section('services')
active
@endsection

@section('content')
<section id="portfolio" class="">
    <div class="page-heading-two">
        <div class="container">
            <div class="col-md-7">
                <h5 class="car-title-detail">Our Popular Spare Parts Shop</h5>
            </div>
            <div class="col-md-5">
                <div class="breads">
                    <a href="#">Home</a> / Service Center </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Container -->
    <div class="container real-estate">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="rs-property">

                    <div class="team-two members">
                        @foreach ($user as $row)
                        @if ($row->id != 1)

                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <!-- Image -->
                                <a href="{{ route('view.parts.shop',$row->id) }}">
                                    <img class="img-responsive"
                                    src="{{asset('/')}}image/{{ $row->image ??'' }}"
                                    alt="brand-photo" />
                                </a>

                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <!-- Name -->
                                <h4> <a href="{{ route('view.parts.shop',$row->id) }}">{{ $row->name }}</a></h4> </br>
                                <p class="contact-types">
                                    <strong>Opening Hours:</strong> &nbsp; 9.00 am - 7.00 pm</a>
                                </p>
                                <p class="contact-types">
                                    <strong>Phone:</strong> {{ $row->phone }} <br \>
                                    <strong>Location:</strong> {{ $row->address }}
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" style="float: right" class="btn">Service Now</a>
                                </p>

                                <!-- Social -->
                                <div class="brand-bg">
                                </div>
                            </div>
                        </div>
                        <div class="user-search-separator"></div>
                        @endif
                        @endforeach
                    </div>
                    <!-- Team #7 end -->
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="sidebar">
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
                        <h5><i class="fa fa-bookmark color"></i>&nbsp; Featured Parts</h5>
                        <!-- Widgets Content -->
                        @foreach ($feature as $parts)
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
                    <div class="s-widget">
                        <!-- Heading -->
                        <h5><i class="fa fa-folder color"></i>&nbsp; Categories</h5>
                        <!-- Widgets Content -->
                        <div class="widget-content categories">
                            <ul class="category-list">
                                @foreach ($category as $parts_category)
                                    <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                        <span class="fa fa-angle-right"></span>
                                        <a href="#">{{ $parts_category->name }}
                                            <span class="color">(1)</span></a>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                    <div class="widget-separator"></div>
                    <div class="s-widget">
                        <!-- Heading -->
                        <h5><i class="fa fa-clock-o color"></i>&nbsp; Recent Parts</h5>
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
                </div>
            </div>
        </div>
    </div>
     <!-- Modal -->
     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" data-backdrop="true"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title text-center" id="exampleModalLongTitle">Book Service Now</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="#">
                     <label>Name</label>
                     <input name="name" type="text" class="form-control">
                     <label>Phone No</label>
                     <input name="phone_no" type="number" class="form-control">
                     <label>Email</label>
                     <input name="email" type="email" class="form-control">
                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                 <button type="button" class="btn btn-primary">Submit</button>
             </div>
         </div>
     </div>
 </div>
</section>

@endsection
