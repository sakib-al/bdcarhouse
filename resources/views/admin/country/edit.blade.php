

@extends('admin.layouts.adminapp')

@section('title')
    BDCarHouse - Edit City
@endsection

@section('product')
active
@endsection

@section('country')
    active
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Country Edit
   </h1>
   <ul class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Country {{ $title }}</a></li>
      <li class="active">Here</li>
   </ul>
</section>
<!-- Main content -->
<section id="product_details" class="content">
   <div class="row">
   <div class="col-xs-12">
   <div class="box box-success">
      <div class="box-header with-border">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="col-md-6">
                     {!! Form::open([ 'route' => ['admin.country.update',$country->id], 'method' => 'POST', 'id' => 'quickForm' ]) !!}
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label for="name">@lang('form.name')<span class="text-danger">*</span></label>
                           {!! Form::text('name', $country->name, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter name']) !!}
                           {!! $errors->first('name', '<label class="help-block text-danger">:message</label>') !!}
                        </div>
                        <div class="form-group">
                           <label for="formGroupExampleInput2">Code</label>
                           <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Code" name="code" value="{{$country->code ?? ''}}">
                        </div>
                        <div class="form-group">
                           <label for="cuntry">Status</label>
                           <select class="form-control" id="status" name="status">
                              <option>Select status</option>
                              <option value="1"{{($country->status=="active")?"selected":""}}>Active</option>
                              <option value="0"{{($country->status=="inactive")?"selected":""}}>Inactive</option>
                           </select>
                           </div>
                           <button type="submit" class="btn btn-success col-md-offset-4">Update</button>
                           <a href="{{route('admin.country.list')}}" type="reset" class="btn btn-danger">Cancle</a>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Test -->
               <!-- /.content -->
            </div>
         </div>
      </div>
</section>
</div>
<!-- /.content-wrapper -->
@endsection

