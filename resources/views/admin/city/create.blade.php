@extends('admin.layouts.adminapp')

@section('title')
    BDCarHouse - Add City
@endsection

@section('product')
active
@endsection

@section('city')
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

                                              <form method="POST" action="{{ route('admin.city.store') }}" id="quickForm" name="quickForm">


                                                @csrf

                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="name">@lang('form.name')<span class="text-danger">*</span></label>

                                                        <input type="text" name="name" value="{{ old('name')}}"  class="form-control" placeholder="Enter city name">
                                                        {!! $errors->first('name', '<label class="bg-danger">:message</label>') !!}

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="code">City Code</label>
                                                        <input type="text" name="code" class="form-control" id="code" placeholder="First three letter of City e.g DHK" value="{{old('code')}}">
                                                        {!! $errors->first('code', '<label class="bg-danger">:message</label>') !!}

                                                    </div>
                                                    <div class="form-group">

                                                        @if($country->count() < 1)
                                                           No country found please create <a href="{{route('country.store')}}" class="badge badge-success">Add Country</a>
                                                        @else
                                                            <label for="cuntry">Select Country</label>
                                                            <select class="form-control" id="country_id" name="country_id">

                                                                <option value="0">Select County</option>
                                                                @foreach($country as $data_row)
                                                                    <option value="{{ $data_row->id}}">{{ $data_row->name}}</option>
                                                                @endforeach

                                                            </select>
                                                        @endif


                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cuntry">Status status</label>
                                                        <select class="form-control" id="status" name="status">
                                                            <option value="active">Active</option>
                                                            <option value="inactive">Inactive</option>

                                                        </select>
                                                    </div>

                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <a href="{{ route('admin.city.index') }}" class="btn btn-danger">Cancle</a>
                                                </div>
                                            </form>

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
                    country_id: {
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
                    country_id: {
                        required: "Please select country",
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
