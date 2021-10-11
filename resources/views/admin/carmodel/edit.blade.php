@extends('admin.layouts.adminapp')

@section('title')
    BDCarHouse - Edit Car Model
@endsection

@section('product')
active
@endsection

@section('model')
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
                <li><a href="#"><i class="fa fa-dashboard"></i> Carmodel</a></li>
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


                                            {!! Form::open([ 'route' => ['admin.carmodel.update',$carmodel->id], 'method' => 'POST', 'id' => 'quickForm' ]) !!}

                                            @csrf


                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="name">@lang('form.name')<span class="text-danger">*</span></label>
                                                    {!! Form::text('name', $carmodel->name, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter carmodel name']) !!}
                                                    {!! $errors->first('name', '<label class="help-block text-danger">:message</label>') !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="code">Name (Bangla)</label>
                                                    <input type="text" name="name_bn" class="form-control" value="{{ $carmodel->name_bn }}" id="name_bn" placeholder="Enter carmodel name bangla">

                                                </div>

                                                <div class="form-group">
                                                    <label for="cuntry">Status</label>
                                                    <select class="form-control" id="status" name="status">
                                                        <option>Select status</option>
                                                        <option value="active"{{($carmodel->status=="active")?"selected":""}}>Active</option>
                                                        <option value="inactive"{{($carmodel->status=="inactive")?"selected":""}}>Inactive</option>

                                                    </select>


                                                </div>

                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <a href="{{ route('admin.carmodel.list') }}" class="btn btn-danger">Cancle</a>
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
                    code: {
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
                        required: "Please provide a name",

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
