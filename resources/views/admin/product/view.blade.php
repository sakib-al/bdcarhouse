@extends('admin.layouts.adminapp')

@section('title')
    BDCarHouse - Product View
@endsection

@section('product')
active
@endsection

@section('product_list')
    active
@endsection

<?php
$body_type = config('static_array.body_type');
$transmission = config('static_array.transmission');
$condition = config('static_array.condition');
$fuel_type = config('static_array.fuel_type');
$steering_type = config('static_array.steering_type');
$engine_type = config('static_array.engine_type');
$safety_rating = config('static_array.safety_rating');

?>
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
        View Product
       </h1>
       <ul class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Product</a></li>
          <li class="active">Here</li>
       </ul>
    </section>

    <section style="padding: 10px">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">

                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th class="text-center">Image </th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Basic Info</th>
                                    <th class="text-center">Optional Info</th>
                                    <th class="text-center">Address Info</th>
                                    <th class="text-center">Description</th>
                                </tr>
                            </thead>

                            <tbody>
                                <td style="width: 5%">1</td>
                                <td style="width: 10%">
                                   <div><img src="{{asset('/image')}}/{{  $product->singleImage->name ?? 'no-image.jpg'  }}" width="200" height="90"></div>
                                </td>
                                <td style="width: 10%">
                                    {{$product->name}}
                                </td>

                                <td style="width: 20%">
                                    <div><strong>Car categories:</strong>&nbsp;<i>{{ $product->categories->name }}</i></div>
                                    <div><strong>Car Brand:</strong>&nbsp;<i>{{ $product->product_brand->name }}</i></div>
                                    {{-- <div><strong>Car Model:</strong>&nbsp;<i>{{ $product->carmodels->name }}</i></div> --}}
                                    <div><strong>Body type:</strong>&nbsp;<i>{{$product->body_type}}</i></div>
                                    <div><strong>Price:</strong>&nbsp;<i>{{$product->price}}</i></div>
                                    <div><strong>Mileage:</strong>&nbsp;<i>{{$product->mileage}}</i></div>
                                    <div><strong>Transmission:</strong>&nbsp;<i>{{$product->condition}}</i></div>
                                    <div><strong>Condition:</strong>&nbsp;<i>{{$product->transmission}}</i></div>
                                    <div><strong>Fuel Type:</strong>&nbsp;<i>{{$product->fuel_type}}</i></div>
                                    <div><strong>Color:</strong>&nbsp;<i>{{$product->color}}</i></div>
                                </td>

                                <td style="width: 15%" >
                                    <div><strong>Reg No:</strong>&nbsp;<i>{{$product->reg_no}}</i></div>
                                    <div><strong>Grade:</strong>&nbsp;<i>{{$product->grade}}</i></div>
                                    <div><strong>Chassis No:</strong>&nbsp;<i>{{$product->chassis_no}}</i></div>
                                    <div><strong>Engine Size:</strong>&nbsp;<i>{{$product->engine_size}}</i></div>
                                    <div><strong>Steering Type:</strong>&nbsp;<i>{{ $product->steering_type }}</i></div>
                                    <div><strong>Safety Rating:</strong>&nbsp;<i>{{ $product->safety_rating }}</i></div>
                                    <div><strong>Engine Type:</strong>&nbsp;<i>{{$product->engine_type}}</i></div>
                                    <div><strong>No of Seats:</strong>&nbsp;<i>{{$product->no_of_seats}}</i></div>
                                    <div><strong>Gear Type:</strong>&nbsp;<i>{{$product->gear_type}}</i></div>
                                </td>
                                <td style="width: 15%">
                                    {{-- <div><strong>Country:</strong>&nbsp;<i>{{ $product->countries->name }}</i></div> --}}
                                    <div><strong>City:</strong>&nbsp;<i>{{ $product->cities->name }}</i></div>
                                    <div><strong>Zip Code:</strong>&nbsp;<i>{{$product->zip_code}}</i></div>
                                    <div><strong>Address:</strong>&nbsp;<i>{{$product->address}}</i></div>
                                </td>
                                <td style="width: 20%">
                                    <i>{{$product->description}}</i>
                                </td>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            </section>
        </div>


@endsection

@push('custom_js')
    <script src="{{ asset('assets/web/js/jquery-2.1.1.min.js') }}"></script>
@endpush
