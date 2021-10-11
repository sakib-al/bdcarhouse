@extends('admin.layouts.adminapp')

@push('custom_css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/image-uploader.min.css')}}">
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endpush
@section('title')
    BDCarHouse - Create User
@endsection

@section('settings')
active
@endsection

@section('user')
    active
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Add User <i class="fa fa-plus"></i>

        </h1>
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> User </a></li>
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

                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">


                                            {!! Form::open([ 'route' => ['users.store'], 'method' => 'POST', 'id' => 'quickForm', 'autocomplete' => 'off', 'files' => true ]) !!}

                                            @csrf


                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="name">@lang('form.name')</label>
                                                    {!! Form::text('name', null, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter name']) !!}
                                                    {!! $errors->first('name', '<label class="bg-danger">:message</label>') !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">@lang('form.email')</label>
                                                    {!! Form::email('email', null, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter email']) !!}
                                                    {!! $errors->first('email', '<label class="bg-danger">:message</label>') !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">@lang('form.address')</label>
                                                    {!! Form::text('address', null, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter address']) !!}
                                                    {!! $errors->first('address', '<label class="bg-danger">:message</label>') !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone_no">@lang('form.phone_no')</label>
                                                    {!! Form::number('phone_no', null, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter phone no']) !!}
                                                    {!! $errors->first('phone_no', '<label class="bg-danger">:message</label>') !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">@lang('form.password')</label>
                                                    {!! Form::text('password', null, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter password']) !!}
                                                    {!! $errors->first('password', '<label class="bg-danger">:message</label>') !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="user_type">User Type</label>
                                                    <select class="form-control" name="user_type">
                                                        <option value="1">Admin</option>
                                                        <option value="0">User</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-field">
                                                            <label class="active">Default Product Photos</label>
                                                            <div class="prod_def_photo_upload"  name="image" style="padding-top: .5rem;" title="Click for photo upload">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <a href="{{ route('users.list') }}" class="btn btn-danger">Cancle</a>
                                            </div>
                                        {!! Form::close() !!}

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- /.content -->
                    </div>
                </div>
            </div>
    </section>
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
@endpush
