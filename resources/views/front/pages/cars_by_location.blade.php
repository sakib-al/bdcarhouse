@extends('layouts.master.master')

<?php
$location = \App\Models\City::find(Request::segment(2));
?>

@section('page_title')
    BDCarHouse - {{ $location->name }}
@endsection

@section('content')
<div class="container">
    <div class="block-heading-two">
        <h3><span><i class="fa fa-map-marker"></i>&nbsp;{{ $location->name }}</span>
            <div class="pull-right list-switcher">
                <a target="recent-posts"
                    href="http://carbiz.webhelios.com/index.php/en/show/recentposts_ajax/8/grid"><i
                        class="fa fa-th "></i></a>
                <a target="recent-posts"
                    href="http://carbiz.webhelios.com/index.php/en/show/recentposts_ajax/8/list"><i
                        class="fa fa-th-list "></i></a>
            </div>
        </h3>
    </div>
    <span class="recent-posts">
        <div class="clearfix"></div>
        <div class="text-center grid-box">
            @foreach($city as $row)
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="item grid-box-item">
                        <!-- Image style one starts -->
                        <style>
                            .custom{
                                height: 140px;
                            }
                        </style>


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
                            <h4 class="item-title" style="height: 28px;"><a href="{{route('cars.view',$row->id)}}">{{ $row->product_brand->name }}</a></h4>
                            <div class="bor bg-red"></div>
                            <div class="row">{{ $row->name }} </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 info-dta"><i class="fa fa-tachometer"></i> : {{$row->mileage}}&nbsp;Miles</div>
                            </div>
                            {{-- <div class="row grid-rating-holder">
                                <div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">
                                    <a href="http://carbiz.webhelios.com/index.php/en/car/vitage-car#review">
                                        <span class="stars "><i class="fa fa-star "></i><i class="fa fa-star "></i><i
                                                class="fa fa-star "></i><i class="fa fa-star "></i><i
                                                class="fa fa-star "></i></span> </a>
                                </div>
                            </div> --}}
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="clearfix"></div>
    </span>
</div>
@endsection
