@extends('layouts.master.master')

@section('page_title')
BDCarHouse - Service Center
@endsection
@section('services')
active
@endsection

@section('content')
<section id="portfolio" class="">
    <div class="page-heading-two">
        <div class="container">
            <div class="col-md-7">
                <h5 class="car-title-detail">Our Popular Service Center</h5>
            </div>
            <div class="col-md-5">
                <div class="breads">
                    <a href="http://carbiz.webhelios.com/index.php/en/">Home</a> / Service Center </div>
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
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <!-- Image -->
                                <a href="http://carbiz.webhelios.com/index.php/en/profile/50/Subhan Gujjar">
                                    <img class="img-responsive"
                                        src="{{ asset('assets/web/assets/images/img/multi_brand.png')}}"
                                        alt="brand-photo" />
                                </a>

                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <!-- Name -->
                                <h4> <a href="#">Multi Brand Workshop</a></h4>
                                <p class="contact-types">
                                    <strong>Opening Hours:</strong> &nbsp; 9.00 am - 7.00 pm</a>
                                </p>
                                <p class="contact-types">
                                    <strong>Phone:</strong> +923134848722 <br \>
                                    <strong>Email:</strong> <a href="mailto:ag019236@gmail.com">ag019236@gmail.com</a>
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" style="float: right" class="btn">Service Now</a>
                                </p>

                                <!-- Social -->
                                <div class="brand-bg">
                                </div>
                            </div>
                        </div>
                        <div class="user-search-separator"></div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <!-- Image -->
                                <a href="http://carbiz.webhelios.com/index.php/en/profile/50/Subhan Gujjar">
                                    <img class="img-responsive"
                                        src="{{ asset('assets/web/assets/images/img/navana.jpg')}}"
                                        alt="brand-photo" />
                                </a>

                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <!-- Name -->
                                <h4> <a href="#">Navana Toyota 3S Center</a></h4>
                                <p class="contact-types">
                                    <strong>Opening Hours:</strong> &nbsp; 9.00 am - 7.00 pm</a>
                                </p>
                                <p class="contact-types">
                                    <strong>Phone:</strong> +923134848722 <br \>
                                    <strong>Email:</strong> <a href="mailto:ag019236@gmail.com">ag019236@gmail.com</a>
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" style="float: right" class="btn">Service Now</a>
                                </p>

                                <!-- Social -->
                                <div class="brand-bg">
                                </div>
                            </div>
                        </div>
                        <div class="user-search-separator"></div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <!-- Image -->
                                <a href="http://carbiz.webhelios.com/index.php/en/profile/50/Subhan Gujjar">
                                    <img class="img-responsive"
                                        src="{{ asset('assets/web/assets/images/img/millenium.jpg')}}"
                                        alt="brand-photo" />
                                </a>

                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <!-- Name -->
                                <h4> <a href="#">Millennium Service Center Limited</a></h4>
                                <p class="contact-types">
                                    <strong>Opening Hours:</strong> &nbsp; 9.00 am - 7.00 pm</a>
                                </p>
                                <p class="contact-types">
                                    <strong>Phone:</strong> +923134848722 <br \>
                                    <strong>Email:</strong> <a href="mailto:ag019236@gmail.com">ag019236@gmail.com</a>
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" style="float: right" class="btn">Service Now</a>
                                </p>

                                <!-- Social -->
                                <div class="brand-bg">
                                </div>
                            </div>
                        </div>
                        <div class="user-search-separator"></div>
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <!-- Image -->
                                <a href="http://carbiz.webhelios.com/index.php/en/profile/50/Subhan Gujjar">
                                    <img class="img-responsive"
                                        src="{{ asset('assets/web/assets/images/img/honda.png')}}"
                                        alt="brand-photo" />
                                </a>

                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <!-- Name -->
                                <h4> <a href="#">Honda Service Center Mohakhali</a></h4>
                                <p class="contact-types">
                                    <strong>Opening Hours:</strong> &nbsp; 9.00 am - 7.00 pm</a>
                                </p>
                                <p class="contact-types">
                                    <strong>Phone:</strong> +923134848722 <br \>
                                    <strong>Email:</strong> <a href="mailto:ag019236@gmail.com">ag019236@gmail.com</a>
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" style="float: right" class="btn">Service Now</a>
                                </p>

                                <!-- Social -->
                                <div class="brand-bg">
                                </div>
                            </div>
                        </div>
                        <div class="user-search-separator"></div>
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
                                        <a
                                            href="{{route('cars.view',$top_cars->id)}}"><img
                                                class="img-responsive img-thumbnail"
                                                src="{{ asset('/')}}image/{{ $top_cars->singleImage->name ?? '' }}"
                                                alt="" /></a>
                                        <!-- Heading -->
                                        <div class="widget-car-title"><a
                                                href="{{route('cars.view',$top_cars->id)}}">{{ $top_cars->name }}</a></div>

                                        <div class="price">
                                            <strong>City</strong>: Honolulu <br />
                                            <span class="stars stars-sidebar"><i class="fa fa-star active"></i><i
                                                    class="fa fa-star active"></i><i
                                                    class="fa fa-star active"></i><i
                                                    class="fa fa-star active"></i><i
                                                    class="fa fa-star-half-o active"></i></span> </div>
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
                            @foreach ($category as $cat_list)
                            <ul class="category-list">
                                <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                    <span class="fa fa-angle-right"></span>
                                    <a href="{{ route('category_wise_cars',$cat_list->id ) }}">{{ $cat_list->name }}
                                        <span class="color">({{ $cat_list->cars->count() }})</span></a>
                                </li>
                            </ul>
                            @endforeach

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
