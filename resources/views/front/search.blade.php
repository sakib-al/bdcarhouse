@extends('layouts.master.master')

@section('page_title')
    BDCarHouse - Search
@endsection

@section('content')
<?php


$products = $data['products'] ?? '';
$spareparts = $data['spareparts'] ?? '';

?>

<div class="container main-container">

    <div class="block-heading-two">
        <h3><span><i class="fa fa-search color"></i> Search</span></h3>
    </div>
    <div class="icon-box-1 text-center">

        <span class="recent-posts">
            <div class="clearfix"></div>
            <div class="text-center grid-box">
                @if(!empty($products) && count($products)>0)
                @foreach($products as $row)
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="item grid-box-item">
                            <!-- Image style one starts -->

                            <div class="image-style-one">
                                <!-- Image -->
                                <a href="{{route('cars.view',$row->id)}}">
                                    <img class="img-responsive custom" alt="Vitage Car"
                                        src="{{asset('/')}}image/{{ $row->singleImage->name ?? '' }}">
                                    <!-- image hover style for image #1 -->
                                </a>

                            </div>

                            <div class="grid-box-content">
                                <span class="price-tag" data-toggle="tooltip" data-placement="left" data-original-title="Featured">
                                    Contact for price </span>
                                <span class="condition-tag" data-toggle="tooltip" data-placement="left"
                                    data-original-title="Featured">{{$row->transmission}}</span>

                                <a class="b-tooltip" title="Luxury Car"
                                    href="#">
                                    <!--i class="category-fa-icon fa cat-img-small fa-car bg-red"></i-->
                                    <img src="http://carbiz.webhelios.com/uploads/car-icons/luxury-car.png"
                                        class="fa cat-img-small fa-car bg-red">
                                </a>
                                <div class="cat-title" style="height: 17px;">{{ $row->categories->name}}</div>
                                <h4 class="item-title" style="height: 28px;"><a href="http://carbiz.webhelios.com/index.php/en/car/vitage-car">{{ $row->product_brand->name }}</a></h4>
                                <div class="bor bg-red"></div>
                                <div class="row">{{ $row->name }} </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta"><i class="fa fa-tachometer"></i> : {{$row->mileage}}&nbsp;Miles</div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                    {{-- No Product Found Text --}}
                    <h1 class="text-center">NO PRODUCT FOUND</h1>
                @endif


                @if(!empty($spareparts) && count($spareparts)>0)

                    @foreach ($spareparts as $item)

                        <div class="text-center grid-box row">
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
                                        <h4 class="item-title" style="height: 28px;"><a
                                                href="{{ route('front.parts.view',$item->id) }}">{{ $item->parts_name }}</a></h4>
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
        
                    @endif



                    <div class="clearfix"></div>
                </div>

            </div>
            <div class="clearfix"></div>
        </span>


        <div class="clearfix"></div>
        <!-- category box end -->


    </div>
</div>

@endsection
