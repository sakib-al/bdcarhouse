@extends('admin.layouts.adminapp')

@section('title')
    BDCarHouse - Edit Product
@endsection

@section('product')
active
@endsection

@section('product_list')
    active
@endsection

@push('custom_css')

<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
<!--for file uploads-->
<link rel="stylesheet" href="{{ asset('css/image-uploader.min.css')}}">
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!--for tooltip-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/palette-tooltip.css')}}">

<!--for image gallery-->
<link rel="stylesheet" href="{{ asset('css/lightgallery.min.css')}}">

@endpush('custom_css')

<?php
   $body_type = config('static_array.body_type');
   $transmission = config('static_array.transmission');
   $condition = config('static_array.condition');
   $fuel_type = config('static_array.fuel_type');
   $steering_type = config('static_array.steering_type');
   $engine_type = config('static_array.engine_type');
   $safety_rating = config('static_array.safety_rating');
   $is_featured = config('static_array.is_featured');

   ?>
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Product Edit
        </h1>
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Product</a></li>
            <li class="active">Here</li>
        </ul>
    </section>
    <!-- Main content -->
    <section id="product" class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-md-12">
                                {{-- {!! Form::open([ 'route' => 'product.update', 'method' => 'post']) !!} --}}
                                {!! Form::open([ 'route' => 'product.update', 'method' => 'post','files' => true]) !!}
                                @csrf
                                {!! Form::hidden('id', Request::segment(4)) !!}
                                <div class="form-group col-md-3">
                                    <label for="category">Category</label>
                                    {!! Form::select('category', $category,$product->category_id, ['class'=>'form-control',
                                    'id' => 'category', 'data-validation-required-message' => 'This field is required',
                                    'placeholder' => 'Select category']) !!}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="brand">Brand</label>
                                    {!! Form::select('brand', $brand,$product->brand_id, ['class'=>'form-control', 'id' =>
                                    'brand', 'data-validation-required-message' => 'This field is required',
                                    'placeholder' => 'Select brand']) !!}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="model">Model</label>
                                    {!! Form::select('carmodel', $carmodel, $product->model_id,
                                    ['class'=>'form-control', 'id' => 'carmodel', 'data-validation-required-message' =>
                                    'This field is required', 'placeholder' => 'Select carmodel']) !!}
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" placeholder="Price" name="price"
                                        value="{{$product->price}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="sku_prefix">SKU Prefix</label>
                                    <input type="text" class="form-control" id="sku_prefix" placeholder="SKU Prefix"
                                        name="sku_prefix" value="{{$product->sku_prefix}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                        value="{{$product->name}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="body_type">Body type</label>
                                    <select class="form-control" id="body_type" name="body_type">
                                        @if($body_type)
                                        @foreach($body_type as $key => $val)
                                        <option value="{{$key}}" {{$key == $product->body_type ? 'selected' : ''}}>
                                            {{$val}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="mileage">Mileage</label>
                                    <input type="text" class="form-control" id="mileage" placeholder=" Mileage"
                                        name=" mileage" value="{{$product->mileage}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="transmission">Transmission</label>
                                    <select class="form-control" id="transmission" name="transmission">
                                        @if($transmission)
                                        @foreach($transmission as $key => $val)
                                        <option value="{{$key}}" {{$key == $product->transmission ? 'selected' : ''}}>
                                            {{$val}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="condition">Condition</label>
                                    <select class="form-control" id="condition" name="condition"
                                        value="{{$product->condition}}">

                                        @if($condition)
                                        @foreach($condition as $key => $val)
                                        <option value="{{$key}}" {{$key == $product->condition ? 'selected' : ''}}>
                                            {{$val}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="fuel_type">Fuel Type</label>
                                    <select class="form-control" id="fuel_type" name="fuel_type"
                                        value="{{$product->fuel_type}}">

                                        @if($fuel_type)
                                        @foreach($fuel_type as $key => $val)
                                        <option value="{{$key}}" {{$key == $product->fuel_type ? 'selected' : ''}}>
                                            {{$val}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="is_featured">is Featured?</label>
                                    <select class="form-control" id="is_featured" name="is_featured"
                                        value="{{$product->is_featured}}">
                                        @if($is_featured)
                                        @foreach($is_featured as $key => $val)
                                        <option value="{{$key}}" {{$key == $product->is_featured ? 'selected' : ''}}>
                                            {{$val}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="engine_size">Engine Size</label>
                                    <input type="text" class="form-control" id="engine_size" placeholder="Engine Size"
                                        name="engine_size" value="{{$product->engine_size}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="steering_type">Steering Type</label>
                                    <select class="form-control" id="steering_type" name="steering_type">

                                        @if($steering_type)
                                        @foreach($steering_type as $key => $val)
                                        <option value="{{$key}}" {{$key == $product->steering_type ? 'selected' : ''}}>
                                            {{$val}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="engine_type">Engine Type</label>
                                    <select class="form-control" id="engine_type" name="engine_type"
                                        value="{{$product->engine_type}}">

                                        @if($engine_type)
                                        @foreach($engine_type as $key => $val)
                                        <option value="{{$key}}" {{$key == $product->engine_type ? 'selected' : ''}}>
                                            {{$val}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="reg_no">Reg No</label>
                                    <input type="text" class="form-control" id="reg_no" placeholder="Reg No"
                                        name="reg_no" value="{{$product->reg_no}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="grade">Grade</label>
                                    <input type="text" class="form-control" id="grade" placeholder="Grade" name="grade" value="{{old('grade')}}">
                                    {!! $errors->first('grade', '<label class="help-block text-danger">:message</label>') !!}
                                 </div>
                                 <div class="form-group col-md-3">
                                    <label for="chassis_no">Chassis No</label>
                                    <input type="text" class="form-control" id="chassis_no" placeholder="Reg No" name="chassis_no" value="{{old('chassis_no')}}">
                                    {!! $errors->first('chassis_no', '<label class="help-block text-danger">:message</label>') !!}
                                 </div>
                                 <div class="form-group col-md-3">
                                    <label for="color">Color</label>
                                    <input type="text" class="form-control" id="color" placeholder="Reg No" name="color" value="{{old('color')}}">
                                    {!! $errors->first('color', '<label class="help-block text-danger">:message</label>') !!}
                                 </div>
                                <div class="form-group col-md-3">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                                        value="{{$product->title}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="zip_code">Zip Code</label>
                                    <input type="text" class="form-control" id="zip_code" placeholder="Zip Code"
                                        name="zip_code" value="{{$product->zip_code}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" class="form-control" id="latitude" placeholder="Latitude"
                                        name="latitude" value="{{$product->latitude}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" class="form-control" id="longitude" placeholder="Longitude"
                                        name="longitude" value="{{$product->longitude}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="safety_rating">Safety Rating</label>
                                    <select class="form-control" id="safety_rating" name="safety_rating">
                                        @if($safety_rating)
                                        @foreach($safety_rating as $key => $val)
                                        <option value="{{$key}}" {{$key == $product->safety_rating ? 'selected' : ''}}>
                                            {{$val}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="no_of_seats">No of Seats</label>
                                    <input type="text" class="form-control" id="no_of_seats" placeholder="No of Seats"
                                        name="no_of_seats" value="{{$product->no_of_seats}}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="gear_type">Gear Type</label>
                                    <select class="form-control" id="gear_type" name="gear_type">

                                        @if($safety_rating)
                                        @foreach($safety_rating as $key => $val)
                                        <option value="{{$key}}" {{$key == $product->safety_rating ? 'selected' : ''}}>
                                            {{$val}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                 <div class="form-group col-md-3">
                                    <label for="city_id">City</label>
                                    {!! Form::select('city', $city, $product->city_id, ['class'=>'form-control', 'id' =>
                                    'city', 'data-validation-required-message' => 'This field is required']) !!}
                                </div>

                              {{--  <div class="form-group col-md-3">
                                    <label for="country_id">Country</label>
                                    {!! Form::select('country', $country, $product->country, ['class'=>'form-control',
                                    'id' => 'country', 'data-validation-required-message' => 'This field is required',
                                    'placeholder' => 'Select Country']) !!}
                                </div> --}}
                                <div class="form-group col-md-3">
                                    <label for="phone">Phone</label>
                                    <input type="phone" class="form-control" id="phone" name="phone"
                                        aria-describedby="emailHelp" placeholder="Phone" value="{{$product->phone}}">
                                </div>
                                {{-- <div class="form-group col-md-12">
                                    <label for="brochure">brochure</label>
                                    <input type="file" class="form-control-file" name="brochure" id="brochure">
                                </div> --}}



                                {{-- <div class="form-group">
                                    <img
                                        src="{{asset('public/media/images/products/'.$product->id.'/'.$product->brochure)}}" />
                                </div> --}}
                                <div class="form-group col-md-12">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" id="address" name="address"
                                        rows="3">{{$product->address}}</textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description"
                                        rows="3">{{$product->description}}</textarea>
                                </div>
                                        @if($product->allDefaultPhotos && $product->allDefaultPhotos->count() > 0)
                                        <p style="margin-left: 15px;">All Default Photos</p>
                                        <div class="col-md-12">
                                            <div class="row">
                                                @foreach($product->allDefaultPhotos as $image)
                                                <div class="col-md-3" id="photo_div_{{$image->id}}">
                                                    <div class="form-group">
                                                        <div class="img-box"
                                                            style="border: 2px solid #ccc; display: inline-block;">
                                                            <img src="{{asset($image->relative_path)}}/{{$image->name}}"
                                                                class="img-fluid" style="width: 200px; height: 200px;">
                                                            <div class="img-box-child">
                                                                <div class="btn-group btn-group-sm" role="group"
                                                                    aria-label="Basic example">
                                                                    <button type="button" class="btn btn-success"><i
                                                                            class="la la-search"></i>
                                                                        Show</button>
                                                                    <button type="button" class="btn btn-danger photo-delete"
                                                                        data-id="{{$image->id}}"><i class="la la-smile-o"></i>
                                                                        Delete</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                    </div>
                                </div>
                                @endif
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-field">
                                            <label class="active">All Default Photos</label>
                                            <div class="prod_def_photo_upload" name='image' style="padding-top: .5rem;"
                                                title="Click for photo upload"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{route('product.list')}}" type="reset" class="btn btn-danger">Cancle</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.content -->
                    </div>
                </div>
            </div>
    </section>
</div>
<!-- /.content-wrapper -->

@endsection


@push('custom_js')
<!--for image gallery-->
<script src="{{ asset('js/lightgallery.min.js')}}"></script>
<script type="text/javascript">
    //for image gallery
    $(".lightgallery").lightGallery();

    //product photo delete
    $(document).on('click', '.photo-delete', function (e) {
        var id = $(this).attr('data-id');
        if (!confirm('Are you sure you want to delete the photo')) {
            return false;
        }
        if ('' != id) {
            var pageurl = `{{ URL::to('admin/prod_img_delete')}}/` + id;
            $.ajax({
                type: 'get',
                url: pageurl,
                async: true,
                beforeSend: function () {
                    $("body").css("cursor", "progress");
                    //blockUI();
                },
                success: function (data) {
                    // console.log(data.status);
                    if (data.status == 'true') {
                        $('#photo_div_' + id).fadeOut();
                    } else {
                        alert('something wrong please you should reload the page');
                    }

                },
                complete: function (data) {
                    $("body").css("cursor", "default");
                    //$.unblockUI();
                }
            });
        }


    })

</script>
<script>
    $(function () {
        $('.prod_def_photo_upload').imageUploader();

    });

</script>
<!--for image upload-->
<script type="text/javascript" src="{{ asset('js/image-uploader.min.js')}}"></script>
@endpush('custom_js')
