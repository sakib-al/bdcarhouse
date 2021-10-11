@extends('admin.layouts.adminapp')
<style>
.error{
    color:red;
}
</style>

@section('title')
    BDCarHouse - Add Country
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
                {{ $title }} <i class="fa fa-plus"></i>

            </h1>
            <ul class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> City</a></li>
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


                                                {!! Form::open([ 'route' => ['admin.country.store'], 'method' => 'POST', 'id' => 'quickForm']) !!}

                                                @csrf


                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="name">@lang('form.name')<span class="text-danger">*</span></label>
                                                        {!! Form::text('name', null, [ 'class' => 'form-control', 'data-validation-required-message' => 'This field is required', 'placeholder' => 'Enter name']) !!}
                                                        {!! $errors->first('name', '<label class="bg-danger">:message</label>') !!}

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="code">Country Code</label>
                                                        <input type="text" name="code" class="form-control" id="code" placeholder="E.g BD">



                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cuntry">Status</label>
                                                        <select class="form-control" id="status" name="status">
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>

                                                        </select>
                                                    </div>

                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                    <a href="{{ route('admin.city.index') }}" class="btn btn-danger">Cancle</a>
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
                    code: {
                        required: "Please provide a code",

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
