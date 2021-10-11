@extends('layouts.master.master')

@section('cars')
    active
@endsection

<?php
$cat = \App\Models\Category::find(Request::segment(2));
?>

@section('page_title')
    BDCarHouse - {{ $cat->name }}
@endsection

@section('content')
<div class="container">
    <div class="block-heading-two">
        <h3><span><i class="fa fa-clock-o"></i> {{ $cat->name }} </span>

        </h3>
    </div>
    <span class="recent-posts">
        <div class="clearfix"></div>
        <div class="text-center grid-box">
            @foreach($category as $category_car)

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="item grid-box-item">
                    <!-- Image style one starts -->

                    <div class="image-style-one">
                        <!-- Image -->
                        <a href="{{route('cars.view',$category_car->id)}}">
                            <img class="img-responsive" alt="Vitage Car"
                                src="{{asset('/')}}image/{{ $category_car->singleImage->name ?? '' }}">



                        </a>
                    </div>

                    <div class="grid-box-content">
                        <span class="price-tag" data-toggle="tooltip" data-placement="left"
                            data-original-title="Featured"> $ {{ $category_car->price }} </span>
                        <span class="condition-tag" data-toggle="tooltip" data-placement="left"
                            data-original-title="Featured">{{ $category_car->transmission }}</span>

                        <a class="b-tooltip" title="{{ $category_car->name }}" href="#">
                            <img src="{{ asset('assets/web/assets/images/img/luxury-car.png')}}"
                                class="fa cat-img-small fa-car bg-red">
                        </a>
                        <div class="cat-title" style="height: 17px;">{{ $category_car->name }}</div>
                        <h4 class="item-title" style="height: 28px;"><a
                                href="{{route('cars.view',$category_car->id)}}">{{ $category_car->product_brand->name }}</a>
                        </h4>
                        <div class="bor bg-red"></div>
                        <div class="row">{{ $category_car->carmodels->name }} </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 info-dta"><i class="fa fa-tachometer"></i> :
                                {{ $category_car->mileage }} &nbsp;Miles</div>
                        </div>

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
