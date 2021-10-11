@extends('admin.layouts.adminapp')
<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/image-uploader.min.css')}}">
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


@section('title')
    BDCarHouse - Add Product
@endsection

@section('product')
active
@endsection

@section('product_list')
    active
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
<style>
    .text-danger{
        color: red;
    }
    .add_btn{
        position: absolute !important;
        margin-left: 82%;
        margin-top: -34px;
        padding: 9px 15px;
        background-color: #3c8dbc !important;
        border-color: #3c8dbc !important;
    }


    @media only screen and (min-width: 1280px) {
        .add_btn{
            position: absolute !important;
            margin-left: 70%;
            margin-top: -34px;
            padding: 9px 15px;
            background-color: #3c8dbc !important;
            border-color: #3c8dbc !important;
        }
    }

    @media only screen and (max-width: 1440px) {
        .add_btn{
            position: absolute !important;
            margin-left: 74%;
            margin-top: -34px;
            padding: 9px 15px;
            background-color: #3c8dbc !important;
            border-color: #3c8dbc !important;
        }
    }

    @media only screen and (min-width: 360px) {
        .add_btn{
            position: absolute !important;
            margin-left: 76%;
            margin-top: -34px;
            padding: 9px 15px;
            background-color: #3c8dbc !important;
            border-color: #3c8dbc !important;
        }
    }

    @media only screen and (min-width: 375px) {
        .add_btn{
            position: absolute !important;
            margin-left: 77%;
            margin-top: -34px;
            padding: 9px 15px;
            background-color: #3c8dbc !important;
            border-color: #3c8dbc !important;
        }
    }

    @media only screen and (min-width: 800px) {
        .add_btn{
            position: absolute !important;
            margin-left: 86%;
            margin-top: -34px;
            padding: 9px 15px;
            background-color: #3c8dbc !important;
            border-color: #3c8dbc !important;
        }
    }

    @media only screen and (min-width: 768px) {
        .add_btn{
            position: absolute !important;
            margin-left: 85%;
            margin-top: -34px;
            padding: 9px 15px;
            background-color: #3c8dbc !important;
            border-color: #3c8dbc !important;
        }
    }

</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
    Add New Product
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
                    {{-- @if($errors->any())
                        {{ implode('', $errors->all('<div>:message</div>')) }}
                    @endif --}}
                     {!! Form::open([ 'route' => 'product.store', 'method' => 'post', 'id' => 'quickForm', 'files' => true]) !!}
                     @csrf

                     <div class="form-group col-md-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name"  name="name" value="{{old('name')}}">
                        {!! $errors->first('name', '<label class="help-block text-danger">:message</label>') !!}
                     </div>

                     <div class="form-group col-md-3">
                        <label for="category">Category</label>
                        {!! Form::select('category', $category, null, ['class'=>'form-control', 'id' => 'category', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Select category']) !!}
                        {!! $errors->first('category', '<label class="help-block text-danger">:message</label>') !!}
                     </div>

                     <div class="form-group col-md-3">
                        <label for="brand">Brand</label>
                        {!! Form::select('brand', $brand, null, ['class'=>'form-control', 'id' => 'brand', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Select brand']) !!}
                        {!! $errors->first('brand', '<label class="help-block text-danger">:message</label>') !!}
                        <a href="#" data-toggle="modal" data-target="#modal_brand" title="Add Car Brand" class="btn btn-success add_btn"><i class="fa fa-plus" aria-hidden="true"></i></a>
                     </div>
                     <div class="form-group col-md-3">
                        <label for="model">Model</label>
                        {!! Form::select('carmodel', $carmodel, null, ['class'=>'form-control', 'id' => 'carmodel', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Select carmodel']) !!}
                        {!! $errors->first('carmodel', '<label class="help-block text-danger">:message</label>') !!}
                        <a href="#" data-toggle="modal" data-target="#modal_model" title="Add Car Brand" class="btn btn-success add_btn"><i class="fa fa-plus" aria-hidden="true"></i></a>
                     </div>
                     <div class="form-group col-md-3">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" placeholder="Price" name="price" value="{{old('price')}}">
                        {!! $errors->first('price', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                        <label for="sku_prefix">SKU Prefix</label>
                        <input type="text" class="form-control" id="sku_prefix" placeholder="SKU Prefix" name="sku_prefix" value="{{old('sku_prefix')}}">
                        {!! $errors->first('sku_prefix', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     {{-- <div class="form-group col-md-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{old('name')}}">
                     </div> --}}
                     <div class="form-group col-md-3">
                        <label for="body_type">Body type</label>
                        <select class="form-control" id="body_type" name="body_type" value="{{old('body_type')}}">
                           <option>Select Body Type</option>
                           <option>2020</option>
                           <option>2019</option>
                           <option>2018</option>
                           <option>2017</option>
                           <option>2016</option>
                           <option>2015</option>
                           <option>2014</option>
                           <option>2013</option>
                           <option>2012</option>
                           <option>2011</option>
                           <option>2010</option>
                           <option>2009</option>
                           <option>2008</option>
                           <option>2007</option>
                           <option>2006</option>
                           <option>2005</option>
                           <option>2004</option>
                           <option>2003</option>
                           <option>2002</option>
                           <option>2001</option>
                           <option>2000</option>
                           <option>1999</option>
                           <option>1998</option>
                           <option>1997</option>
                           <option>1996</option>
                           <option>1995</option>
                           <option>1994</option>
                           <option>1993</option>
                           <option>1992</option>
                           <option>1991</option>
                           <option>1990</option>
                           <option>1989</option>
                           <option>1988</option>
                           <option>1987</option>
                           <option>1986</option>
                           <option>1985</option>
                           <option>1984</option>
                           <option>1983</option>
                           <option>1982</option>
                           <option>1981</option>
                           <option>1980</option>
                           <option>1979</option>
                           <option>1978</option>
                           <option>1977</option>
                           <option>1976</option>
                           <option>1975</option>
                           <option>1974</option>
                           <option>1973</option>
                           <option>1972</option>
                           <option>1971</option>
                           <option>1970</option>
                           <option>1969</option>
                           <option>1968</option>
                           <option>1967</option>
                           <option>1966</option>
                           <option>1965</option>
                           <option>1964</option>
                           <option>1963</option>
                           <option>1962</option>
                           <option>1961</option>
                           <option>1960</option>
                           <option>1959</option>
                           <option>1958</option>
                           <option>1957</option>
                           <option>1956</option>
                           <option>1955</option>
                           <option>1954</option>
                           <option>1953</option>
                           <option>1952</option>
                           <option>1951</option>
                           <option>1950</option>
                           <option>1949</option>
                           <option>1948</option>
                           <option>1947</option>
                           <option>1946</option>
                           <option>1945</option>
                           <option>1944</option>
                           <option>1943</option>
                           <option>1942</option>
                           <option>1941</option>
                           <option>1940</option>
                           <option>1939</option>
                           <option>1938</option>
                           <option>1937</option>
                           <option>1936</option>
                           <option>1935</option>
                           <option>1934</option>
                           <option>1933</option>
                           <option>1932</option>
                           <option>1931</option>
                           <option>1930</option>
                        </select>
                        {!! $errors->first('body_type', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                        <label for="mileage">Mileage</label>
                        <input type="text" class="form-control" id="mileage" placeholder=" Mileage" name=" mileage" value="{{old('mileage')}}">
                        {!! $errors->first('mileage', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                        <label for="transmission">Condition</label>
                        <select class="form-control" id="transmission" name="transmission" value="{{old('transmission')}}">

                           <option>New</option>
                           <option>Used</option>
                           <option>Pre Owend</option>
                           <option>Reconditioned</option>
                           <option>Others</option>
                        </select>
                        {!! $errors->first('transmission', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                        <label for="condition">Transmission</label>
                        <select class="form-control" id="condition" name="condition" value="{{old('condition')}}">
                           <option>Select Transmission</option>
                           <option>Automatic</option>
                           <option>Manual</option>
                           <option>Semi-Automatic</option>
                           <option>Others</option>
                        </select>
                        {!! $errors->first('condition', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                        <label for="fuel_type">Fuel Type</label>
                        <select class="form-control" id="fuel_type" name="fuel_type" value="{{old('fuel_type')}}">
                           <option>Select Fuel Type</option>
                           <option>Gas</option>
                           <option>Disel</option>
                           <option>Petrol</option>
                           <option>Octain</option>
                           <option>Electricity</option>
                           <option>Others</option>
                        </select>
                        {!! $errors->first('fuel_type', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                            <label for="is_featured">Is Featured?</label>
                            <select class="form-control" id="is_featured" name="is_featured">
                                <option>Is Featured?</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>

                            </select>
                            {!! $errors->first('is_featured', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                        <label for="engine_size">Engine Size</label>
                        <input type="text" class="form-control" id="engine_size" placeholder="Engine Size(In Liters)" name="engine_size" value="{{old('engine_size')}}">
                        {!! $errors->first('engine_size', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                        <label for="steering_type">Steering Type</label>
                        <select class="form-control" id="steering_type" name="steering_type" value="{{old('steering_type')}}">
                           <option>Select Steering Type</option>
                           <option>Power Steering</option>
                           <option>Menual Steering</option>
                        </select>
                        {!! $errors->first('steering_type', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                        <label for="engine_type">Engine Type</label>
                        <select class="form-control" id="engine_type" name="engine_type" value="{{old('engine_type')}}">
                           <option>Select Engine Type</option>
                           <option>Inline</option>
                           <option>Straight</option>
                           <option>VEE</option>
                           <option>Flat</option>
                           <option>VR & W</option>
                           <option>Others</option>
                        </select>
                        {!! $errors->first('engine_type', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                        <label for="safety_rating">Safety Rating</label>
                        <select class="form-control" id="safety_rating" name="safety_rating" value="{{old('safety_rating')}}">
                           <option>Select Safety Rating</option>
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                        </select>
                        {!! $errors->first('safety_rating', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                        <label for="no_of_seats">No of Seats</label>
                        <input type="text" class="form-control" id="no_of_seats" placeholder="No of Seats" name="no_of_seats" value="{{old('safety_rating')}}">
                     </div>
                     {!! $errors->first('no_of_seats', '<label class="help-block text-danger">:message</label>') !!}
                     <div class="form-group col-md-3">
                        <label for="gear_type">Gear Type</label>
                        <select class="form-control" id="gear_type" name="gear_type" value="{{old('gear_type')}}">
                           <option>Select Gear Type</option>
                           <option>Autometic</option>
                           <option>Menual</option>
                           <option>Dual</option>
                        </select>
                        {!! $errors->first('gear_type', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                        <label for="reg_no">Reg No</label>
                        <input type="text" class="form-control" id="reg_no" placeholder="Reg No" name="reg_no" value="{{old('reg_no')}}">
                        {!! $errors->first('reg_no', '<label class="help-block text-danger">:message</label>') !!}
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
{{--                     <div class="form-group col-md-3">--}}
{{--                        <label for="title">Title</label>--}}
{{--                        <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{old('title')}}">--}}
{{--                     </div>--}}
                     <div class="form-group col-md-3">
                        <label for="zip_code">Zip Code</label>
                        <input type="text" class="form-control" id="zip_code" placeholder="Zip Code" name="zip_code" value="{{old('zip_code')}}">
                        {!! $errors->first('zip_code', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                        <label for="latitude">Latitude</label>
                        <input type="text" class="form-control" id="latitude" placeholder="Latitude" name="latitude" value="{{old('latitude')}}">
                        {!! $errors->first('latitude', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                        <label for="longitude">Longitude</label>
                        <input type="text" class="form-control" id="longitude" placeholder="Longitude" name="longitude" value="{{old('longitude')}}">
                        {!! $errors->first('longitude', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-3">
                        <label for="phone">Phone</label>
                        <input type="phone" class="form-control" id="phone" name="phone" aria-describedby="emailHelp" placeholder="Phone" value="{{old('phone')}}">
                        {!! $errors->first('phone', '<label class="help-block text-danger">:message</label>') !!}
                     </div>

                    <div class="form-group col-md-3">
                       <label for="city_id">City</label>
                       {!! Form::select('city', $city, null, ['class'=>'form-control', 'id' => 'city_id', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Select City']) !!}
                       {!! $errors->first('city', '<label class="help-block text-danger">:message</label>') !!}
                    </div>
                     {{-- <div class="form-group col-md-3">
                        <label for="country_id">Country</label>
                        {!! Form::select('country', $country, null, ['class'=>'form-control', 'id' => 'country', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Select Country']) !!}
                     </div>
                        <div class="form-group col-md-12">
                           <label for="brochure">brochure</label>
                           <input type="file" class="form-control-file" name="brochure" id="brochure">
                        </div>

                        {{-- <div class="form-group col-md-6">
                           <label for="email">Email address</label>
                           <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email')}}">
                        </div> --}}

                     <div class="form-group col-md-12">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address"></textarea>
                        {!! $errors->first('address', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="form-group col-md-12" style="margin-top:5px;">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter short description about the product"></textarea>
                        {!! $errors->first('description', '<label class="help-block text-danger">:message</label>') !!}
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="input-field">
                              <label class="active">Default Product Photos</label>
                              <div class="prod_def_photo_upload" name='image' style="padding-top: .5rem;" title="Click for photo upload">
                              </div>
                              {{-- {!! $errors->first('image', '<label class="help-block text-danger">:message</label>') !!} --}}
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12 ">
                        <button type="submit" class="btn btn-success">Save</button>
                        <a href="{{route('product.list')}}" type="reset" class="btn btn-danger">Cancle</a>

                     </div>
                     {!! Form::close() !!}
                  </div>
               </div>
               <!-- /.content -->
            </div>
         </div>
      </div>
</section>
</div>


{{-- Modal For Car Brand --}}
<div class="modal  fade" id="modal_brand" tabindex="-1" role="dialog" data-backdrop="true"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle">Add Car Brand</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.brand.store') }}" method="POST">
                    @csrf
                    {{-- <label>Name</label>
                    <input name="name" type="text" class="form-control"> --}}
                    <div class="form-group">
                        <label for="name">@lang('form.name')<span class="text-danger">*</span></label>
                        {!! Form::text('name', null, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter Brand Name']) !!}
                        {!! $errors->first('name', '<label class="bg-danger">:message</label>') !!}

                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Modal For Car Model --}}
<div class="modal  fade" id="modal_model" tabindex="-1" role="dialog" data-backdrop="true"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLongTitle">Add Car Model</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.carmodel.store') }}" method="POST">
                    @csrf
                    {{-- <label>Name</label>
                    <input name="name" type="text" class="form-control"> --}}
                    <div class="form-group">
                        <label for="name">@lang('form.name')<span class="text-danger">*</span></label>
                        {!! Form::text('name', null, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter Model Name']) !!}
                        {!! $errors->first('name', '<label class="bg-danger">:message</label>') !!}

                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom_js')
<!--push from page-->
<script src="{{ asset('js/select2.full.min.js')}}"></script>
<script src="{{ asset('js/form-select2.js')}}"></script>
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

@endpush('custom_js')
