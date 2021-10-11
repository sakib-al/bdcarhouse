@extends('admin.layouts.adminapp')

@section('title')
    BDCarHouse - Brand Edit
@endsection

@section('product')
active
@endsection

@section('brand')
    active
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $title }} <i class="fa fa-plus"></i>

            </h1>
            <ul class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> brand</a></li>
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


                                            {!! Form::open([ 'route' => ['admin.brand.update',$brand->id], 'method' => 'POST', 'id' => 'quickForm' ]) !!}

                                            @csrf


                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="name">@lang('form.name')<span class="text-danger">*</span></label>
                                                    {!! Form::text('name', $brand->name, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter name']) !!}
                                                    {!! $errors->first('name', '<label class="help-block text-danger">:message</label>') !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="name_bn">Name (Bangla)</label>
                                                    <input type="text" name="name_bn" class="form-control" value="{{ $brand->name_bn }}" id="name_bn" placeholder="Enter name">

                                                </div>

                                                <div class="form-group">
                                                    <label for="cuntry">Status</label>
                                                    <select class="form-control" id="status" name="status">
                                                        <option>Select status</option>
                                                        <option value="1"{{($brand->status=="active")?"selected":""}}>Active</option>
                                                        <option value="2"{{($brand->status=="inactive")?"selected":""}}>Inactive</option>

                                                    </select>
                                                </div>

                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{ route('admin.brand.list') }}" class="btn btn-danger">Cancle</a>
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


    <!-- /.content-wrapper -->


@endsection
@push('custom_js')
    <script type="text/javascript">
        $(document).ready(function () {

            $('#quickForm').validate({
                rules: {
                    name: {
                        required: true,

                    },

                    name_bn: {
                        required: true,


                    },
                    status: {
                        required: true,

                    },

                },
                messages: {
                    name: {
                        required: "Please enter name",
                    },

                    name_bn: {
                        required: "Please select carmodel",
                    },

                    status: {
                        required: "Please select status"

                    },

                },

                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>

@endpush
