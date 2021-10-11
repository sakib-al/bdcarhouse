@extends('layouts.master.master')

@section('page_title')
{{-- BDCarHouse - {{ $shop->name }} --}}
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
        margin-top: 35%
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

    .grid-box .grid-box-content{
        padding-top: 20px;
    }

    .no_product h1{
        text-align: center;
        cursor: default;
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
                                <img class="img-responsive" src="{{asset('/')}}image/{{ $user->image }}">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="title_box">
                                <h1 class="text-center">{{ $user->name }}</h1>
                                <p class="text-center">{{ $user->address  }}</p>
                                <h4 class="text-center"><i class="fas fa-1x fa-phone-alt"></i><span>{{ $user->phone }}</span></h4>
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
                    <h3><span><i class="fa fa-bookmark"></i> ALL PARTS</span></h3>
                </div>
                @if(!empty($product) && count($product)>0)
                @foreach ($product as $item)

                    <div class="text-center grid-box">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item grid-box-item">
                                <!-- Image style one starts -->
                                <style>
                                    .custom {
                                        height: 140px;
                                    }
                                </style>
                                <div class="image-style-one">
                                    <!-- Image -->
                                    <a href="{{ route('front.parts.view',$item->id) }}">
                                        <img class="img-responsive custom" alt="{{ $item->name }}"
                                            src="{{asset('/')}}parts_image/{{ $item->singleImage->name ?? 'no-image.jpg' }}">
                                        <!-- image hover style for image #1 -->
                                    </a>
                                </div>
                                <div class="grid-box-content">
                                    <h4 class="item-title">
                                        <a href="{{ route('front.parts.view',$item->id) }}">{{ $item->parts_name }}</a>
                                    </h4>
                                    <div class="bor bg-red"></div>
                                    <div class="row"><b>Category:</b>&nbsp;{{ $item->categories->name }}</div>
                                    <div class="row"><b>Brand:</b>&nbsp;{{ $item->parts_brand }}</div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 info-dta"><b>Price:</b>&nbsp;{{ $item->price }}Tk</div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                <div class="no_product">
                    <h1>NO PRODUCT FOUND</h1>
                </div>
                @endif
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
