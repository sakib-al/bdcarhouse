@extends('layouts.master.master')

@section('page_title')
BDCarHouse - Spare Parts
@endsection
@section('services')
active
@endsection

@section('content')
{{-- Custom CSS --}}
<style>
    .company_cover{
        height: 290px;
        /* min-width: auto;
        max-width: 890px; */
    }

    .heading_box{
        border-right: 1px solid #ddd;
        border-left: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        -webkit-box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.16);
        box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.16);
        margin-bottom: 15px;
        padding-bottom: 15px;
    }
    .img_box{
        margin-left: 20px;
    }
    .title_box{
        padding-top: 5%;
    }
    .title_box h1{
        font-size: 42px;
        padding-bottom: 5px;
    }
    .title_box p{
        font-size: 16px;
    }

    .title_box h4{
        margin-top: 6px;
    }
    .title_box span{
        margin-left: 9px;
    }

</style>
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
    <div class="container">
        <div class="col-md-12">
            <!-- Icon Box One Item -->
            <div class="heading_box">
                <div class="row">
                    <div class="col-md-2">
                        <div class="img_box">
                            <img class="img-responsive" src="{{asset('/')}}image/tvs.png">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="title_box">
                            <h1 class="text-center">Tvs Auto Bangladesh Ltd</h1>
                            <p class="text-center">304,Tejgaon I/A (3rd Floor), Dhaka-1208</p>
                            <h4 class="text-center"><i class="fas fa-1x fa-phone-alt"></i><span>01717637555</span></h4>
                        </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>



                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!-- Container -->
    <div class="container real-estate">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">

                <div class="block-heading-two">
                    <h3><span><i class="fa fa-bookmark"></i> Featured Cars</span></h3>
                </div>

                <div class="icon-box-1 text-center">

                    <span class="recent-posts">
                        <div class="clearfix"></div>
                        <div class="text-center grid-box">
                            {{-- @foreach($featured as $row) --}}
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                    <div class="item grid-box-item">
                                        <!-- Image style one starts -->

                                        <div class="image-style-one">
                                            <!-- Image -->
                                            <a href="#">
                                                <img class="img-responsive custom" alt="Vitage Car"
                                                    src="">
                                                <!-- image hover style for image #1 -->
                                            </a>

                                        </div>

                                        <div class="grid-box-content">
                                            <span class="price-tag" data-toggle="tooltip" data-placement="left" data-original-title="Featured"> $ DEMO </span>
                                            <span class="condition-tag" data-toggle="tooltip" data-placement="left"
                                                data-original-title="Featured">DEMO</span>

                                            <a class="b-tooltip" title="Luxury Car"
                                                href="#">
                                                <!--i class="category-fa-icon fa cat-img-small fa-car bg-red"></i-->
                                                <img src="{{ asset('assets/web/assets/images/img/luxury-car.png')}}"
                                                    class="fa cat-img-small fa-car bg-red">
                                            </a>
                                            <div class="cat-title" style="height: 17px;">DEMO</div>
                                            <h4 class="item-title" style="height: 28px;"><a href="#}">DEMO</a></h4>
                                            <div class="bor bg-red"></div>
                                            <div class="row">DEMO</div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 info-dta"><i class="fa fa-tachometer"></i> : DEMO&nbsp;Miles</div>
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            {{-- @endforeach --}}

                        </div>
                        <div class="clearfix"></div>
                    </span>


                    <div class="clearfix"></div>
                    <!-- category box end -->


                </div>
                {{-- <div class="rs-property">

                    <div class="team-two members">
                        @foreach ($user as $row)
                        @if ($row->id != 1)

                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <!-- Image -->
                                <a href="#">
                                    <img class="img-responsive"
                                    src="{{asset('/')}}image/{{ $row->image ??'' }}"
                                    alt="brand-photo" />
                                </a>

                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <!-- Name -->
                                <h4> <a href="#">{{ $row->name }}</a></h4> </br>
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
                </div> --}}

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
                            <form role="form" action="http://carbiz.webhelios.com/index.php/en/show/advfilter"
                                method="post">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Type something" value=""
                                        name="plainkey">
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
                        {{-- @foreach ($feature as $parts)
                            <div class="widget-content hot-properties">
                                <ul class="list-unstyled">
                                    <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                        <!-- Image -->
                                        <a
                                            href="#"><img
                                                class="img-responsive img-thumbnail"
                                                src=""
                                                alt="" /></a>
                                        <!-- Heading -->
                                        <div class="widget-car-title"><a
                                                href="#">DEMO</a></div>

                                        <div class="price">
                                            <strong>Price</strong>: 5600 <br />
                                            <span class="stars stars-sidebar"><i class="fa fa-star active"></i><i
                                                    class="fa fa-star active"></i><i
                                                    class="fa fa-star active"></i><i
                                                    class="fa fa-star active"></i><i
                                                    class="fa fa-star-half-o active"></i></span> </div>
                                    </li>

                                </ul>
                            </div>
                        @endforeach --}}
                    </div>

                    <div class="widget-separator"></div>
                    <div class="s-widget">
                        <!-- Heading -->
                        <h5><i class="fa fa-folder color"></i>&nbsp; Categories</h5>
                        <!-- Widgets Content -->
                        <div class="widget-content categories">
                            <ul class="category-list">
                                {{-- @foreach ($category as $parts_category)
                                    <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                        <span class="fa fa-angle-right"></span>
                                        <a href="#">{{ $parts_category->name }}
                                            <span class="color">(1)</span></a>
                                    </li>
                                @endforeach --}}


                            </ul>
                        </div>
                    </div>
                    <div class="widget-separator"></div>
                    <div class="s-widget">
                        <!-- Heading -->
                        <h5><i class="fa fa-clock-o color"></i>&nbsp; Recent Parts</h5>
                        <!-- Widgets Content -->
                        {{-- @foreach ($recent as $parts)
                            <div class="widget-content hot-properties">
                                <ul class="list-unstyled">
                                    <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                        <!-- Image -->
                                        <a
                                            href="#"><img
                                                class="img-responsive img-thumbnail"
                                                src=""
                                                alt="" /></a>
                                        <!-- Heading -->
                                        <div class="widget-car-title"><a
                                                href="#">{{ $parts->parts_name }}</a></div>

                                        <div class="price">
                                            <strong>Price</strong>: 5600<br />
                                            <span class="stars stars-sidebar"><i class="fa fa-star active"></i><i
                                                    class="fa fa-star active"></i><i
                                                    class="fa fa-star active"></i><i
                                                    class="fa fa-star active"></i><i
                                                    class="fa fa-star-half-o active"></i></span> </div>
                                    </li>

                                </ul>
                            </div>
                        @endforeach --}}
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
