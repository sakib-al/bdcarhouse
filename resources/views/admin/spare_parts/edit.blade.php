@extends('admin.layouts.adminapp')
<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/image-uploader.min.css')}}">
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="{{ asset('css/chosen.min.css')}}">

@section('title')
    BDCarHouse - Update Parts
@endsection

@section('spare_parts')
active
@endsection

@section('parts')
    active
@endsection

@section('content')

<style>
    .text-danger{
        color: red;
    }
</style>


<?php

// Brand Array Edit Data Choosen
$car_brand_array = array();

$car_brand = $parts->car_brand;

if($car_brand){
   $car_brand_array = explode(',', $car_brand);
      if (is_array($car_brand_array)) {
         foreach ($car_brand_array as $key => $val) {
            $car_brand_array[$key] = trim($val);
         }
      }
}

// Car Model Array Edit Data Choosen

$car_model_array = array();

$car_model = $parts->car_model;

if($car_model){
   $car_model_array = explode(',', $car_model);
      if (is_array($car_model_array)) {
         foreach ($car_model_array as $key => $val) {
            $car_model_array[$key] = trim($val);
         }
      }
}


 ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
    Update Parts
   </h1>
   <ul class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Spare Parts</a></li>
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

                     {!! Form::open([ 'route' => ['parts.update',$parts->id], 'method' => 'post', 'id' => 'quickForm', 'files' => true]) !!}

                     @csrf



                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">@lang('form.parts_name')</label>
                                {!! Form::text('parts_name', $parts->parts_name, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter Parts Name']) !!}
                                {!! $errors->first('parts_name', '<label class="bg-danger">:message</label>') !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">@lang('form.parts_brand')</label>
                                {!! Form::text('parts_brand', $parts->parts_brand, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter Parts Brand']) !!}
                                {!! $errors->first('parts_brand', '<label class="bg-danger">:message</label>') !!}

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="parts_category">@lang('form.parts_category')</label>
                                {!! Form::select('parts_category',$category, $parts->categories->id, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter Parts Category']) !!}
                                {!! $errors->first('parts_category', '<label class="bg-danger">:message</label>') !!}

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="car_brand">@lang('form.car_brand')</label>
                                {!! Form::select('car_brand[]',$brand, $car_brand_array, [ 'class' => ' select_choose form-control', 'data-validation-required-message' => 'This field is required', 'multiple', 'placeholder' => 'Enter Supported Car Brand']) !!}
                                {!! $errors->first('car_brand', '<label class="bg-danger">:message</label>') !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="car_model">@lang('form.car_model')</label>
                                {!! Form::select('car_model[]',$carmodel, $car_model_array, [ 'class' => 'select_choose form-control', 'data-validation-required-message' => 'This field is required', 'multiple', 'placeholder' => 'Enter Supported Car Model']) !!}
                                {!! $errors->first('car_model', '<label class="bg-danger">:message</label>') !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="car_year">@lang('form.car_year')</label>
                                {!! Form::text('car_year', $parts->car_year, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter Car Year']) !!}
                                {!! $errors->first('car_year', '<label class="bg-danger">:message</label>') !!}

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="address">@lang('form.address')</label>
                                {!! Form::text('address', $parts->address, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter address']) !!}
                                {!! $errors->first('address', '<label class="bg-danger">:message</label>') !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone_no">@lang('form.phone_no')</label>
                                {!! Form::text('phone_no', $parts->phone_no, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter Phone No']) !!}
                                {!! $errors->first('phone_no', '<label class="bg-danger">:message</label>') !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="price">@lang('form.price')</label>
                                {!! Form::text('price',  $parts->price, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter Price']) !!}
                                {!! $errors->first('price', '<label class="bg-danger">:message</label>') !!}

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="price">Status</label>
                                <select name="status" class="form-control">
                                    <option>Select Option</option>
                                    <option value="1" {{ $parts->status == 1? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $parts->status == 0? 'selected' : '' }}>Inctive</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="price">Is Feature?</label>
                                <select name="is_feature" class="form-control">
                                    <option>Select Option</option>
                                    <option value="yes" {{ $parts->is_feature == "yes" ? 'selected' : '' }}>YES</option>
                                    <option value="no" {{ $parts->is_feature == "no" ? 'selected' : '' }}>NO</option>
                                </select>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Description</label>
                            {!! Form::textarea('description', $parts->description, ['class' => 'form-control', 'placeholder' => 'Enter Description' ]) !!}
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                               <div class="input-field">
                                  <label class="active">Default Product Photos</label>
                                  <div class="prod_def_photo_upload" name='image' style="padding-top: .5rem;" title="Click for photo upload">
                                  </div>

                               </div>
                            </div>
                         </div>


                        <div class="col-md-12">
                            <div class="row">
                               @foreach ($parts->allPartstPhotos as $item)
                               <div class="col-md-3" id="photo_div_{{$item->id}}">
                                <div class="form-group">
                                    <div class="img-box"
                                        style="border: 2px solid #ccc; display: inline-block;">
                                        <img src="{{asset('/')}}parts_image/{{ $item->name ?? 'no-image.jpg' }}"
                                            class="img-fluid" style="width: 200px; height: 200px;">
                                        <div class="img-box-child">
                                            <div class="btn-group btn-group-sm" role="group"
                                                aria-label="Basic example">
                                                <button type="button" class="btn btn-success"><i
                                                        class="la la-search"></i>
                                                    Show</button>
                                                <button type="button" class="btn btn-danger photo-delete"
                                                    data-id="{{$item->id}}"><i class="la la-smile-o"></i>
                                                    Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                               @endforeach

                            </div>
                        </div>
                     <div class="col-md-12 ">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{route('parts.index')}}" type="reset" class="btn btn-danger">Cancle</a>

                     </div>
                     {!! Form::close() !!}
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
<!--push from page-->
<script src="{{ asset('js/select2.full.min.js')}}"></script>
<script src="{{ asset('js/form-select2.js')}}"></script>
<script src="{{ asset('js/chosen.jquery.min.js')}}"></script>
<!--for image upload-->
<script type="text/javascript" src="{{ asset('js/image-uploader.min.js')}}"></script>
<!--script only for product page-->
<script type="text/javascript" src="{{ asset('js/product.js')}}"></script>

<!--for tooltip-->
<script src="{{ asset('js/tooltip.js')}}"></script>

<!--for image gallery-->
<script src="{{ asset('js/lightgallery.min.js')}}"></script>
<script>
   $(function () {

     $('.prod_def_photo_upload').imageUploader();


     });

</script>
<script type="text/javascript">
    //for image gallery
    $(".lightgallery").lightGallery();

    //category photo delete
    $(document).on('click', '.photo-delete', function (e) {
        var id = $(this).attr('data-id');
        if (!confirm('Are you sure you want to delete the photo')) {
            return false;
        }
        if ('' != id) {
            var pageurl = `{{ URL::to('spare-parts/spare_parts_img_delete')}}/` + id;
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

     //  Choosen

     $(".select_choose").chosen({
         disable_search_threshold: 10,
         width : '100%'
     });

 </script>

@endpush('custom_js')
