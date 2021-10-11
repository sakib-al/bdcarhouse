@extends('admin.layouts.adminapp')

@push('custom_css')

<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
<!--for file uploads-->
<link rel="stylesheet" href="{{ asset('css/image-uploader.min.css')}}">
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!--for tooltip-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/palette-tooltip.css')}}">

<!--for image gallery-->
<link rel="stylesheet" href="{{ asset('css/lightgallery.min.css')}}">

@endpush

@section('title')
    BDCarHouse - Update User
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
           Update User <i class="fa fa-plus"></i>

        </h1>
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Users </a></li>
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


                                            {!! Form::open([ 'route' => ['users.update',$user->id], 'method' => 'POST', 'id' => 'quickForm', 'autocomplete' => 'off', 'files' => true ]) !!}

                                            @csrf


                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="name">@lang('form.name')</label>
                                                    {!! Form::text('name', $user->name, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter name']) !!}
                                                    {!! $errors->first('name', '<label class="bg-danger">:message</label>') !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">@lang('form.email')</label>
                                                    {!! Form::email('email', $user->email, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter email']) !!}
                                                    {!! $errors->first('email', '<label class="bg-danger">:message</label>') !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">@lang('form.address')</label>
                                                    {!! Form::text('address', $user->address, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter address']) !!}
                                                    {!! $errors->first('address', '<label class="bg-danger">:message</label>') !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone_no">@lang('form.phone_no')</label>
                                                    {!! Form::number('phone_no', $user->phone, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter phone no']) !!}
                                                    {!! $errors->first('phone_no', '<label class="bg-danger">:message</label>') !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">@lang('form.password')</label>
                                                    {!! Form::text('password', null, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter password']) !!}
                                                    {!! $errors->first('password', '<label class="bg-danger">:message</label>') !!}
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
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <a href="{{ route('users.list') }}" class="btn btn-danger">Cancle</a>
                                            </div>
                                            <p style="margin-left: 15px;">All Default Photos</p>
                                            <div class="col-md-3" id="photo_div_{{$user->id}}">
                                                <div class="form-group">
                                                    <div class="img-box"
                                                        style="border: 2px solid #ccc; display: inline-block;">
                                                        <img src="{{asset('/image')}}/{{$user->image}}"
                                                            class="img-fluid" style="width: 200px; height: 200px;">
                                                        <div class="img-box-child">
                                                            <div class="btn-group btn-group-sm" role="group"
                                                                aria-label="Basic example">
                                                                <button type="button" class="btn btn-success"><i
                                                                        class="la la-search"></i>
                                                                    Show</button>
                                                                <button type="button" class="btn btn-danger photo-delete"
                                                                    data-id="{{$user->id}}"><i class="la la-smile-o"></i>
                                                                    Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
<!--for image gallery-->
<script src="{{ asset('js/lightgallery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/image-uploader.min.js')}}"></script>
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
            var pageurl = `{{ URL::to('user_img_delete')}}/` + id;
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
@endpush
