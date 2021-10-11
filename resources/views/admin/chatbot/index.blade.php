@extends('admin.layouts.adminapp')


@push('custom_css')

<link rel="stylesheet" type="text/css" href="{{ asset('tables/app-assets/vendors/css/vendors.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('tables/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">

@endpush

@section('product')
active
@endsection

@section('chat_bot')
    active
@endsection

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1 class="text-center">
            Chatbot Data List

        </h1>
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Brand</a></li>
            <li class="active">Here</li>
        </ul>
    </section>


    <!-- Main content -->

    <section id="product_details" class="content">
        <div class="row">
            <div class="col-12">
                <div class="panel">
                    <div class="panel-heading">
                        <a href="{{ route('chat.create') }}"
                            class="btn btn-sm btn-success">Add Question
                        </a>


                        {{-- <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a> --}}

                    </div>
                    <div class="panel-content collapse show">
                        <div class="panel-body card-dashboard">

                            <div>
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th style="width: 10%">SL</th>
                                            <th style="width: 30%">Question</th>
                                            <th>Answer</th>
                                            <th style="width: 15%">Action</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($chatbot['chatbot'] as $key => $value)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $value->queries }}</td>
                                            <td>{!! $value->replay !!}</td>
                                            <td>
                                                <a href="{{ route('chat.edit',$value->id) }}"
                                                    class="btn btn-sm btn-success">Edit
                                                </a>

                                                <a
                                                    href="{{ route('chat.delete',$value->id) }}"
                                                    class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete ?')" title="DELETE">Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>

                                    {{-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> --}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section id="product_details" class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header with-border">


                                <div class="container">
                                    <table class="table table-striped table-bordered table-sm" id="process_data_table">
                                        <thead>
                                        <tr>
                                            <th style="width: 10%">SL.</th>
                                            <th style="width: 30%">Question</th>
                                            <th>Answer</th>
                                            <th style="width: 11%">Action</th>

                                        </tr>
                                        </thead>
                                    @foreach($chatbot['chatbot'] as $key => $value)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $loop->index+1 }}</td>
                                                    <td>{{ $value->queries }}</td>
                                                    <td>{!! $value->replay !!}</td>
                                                    <td>
                                                        <a href="{{ route('chat.edit',$value->id) }}"
                                                            class="btn btn-sm btn-success">Edit
                                                        </a>

                                                        <a
                                                            href="{{ route('chat.delete',$value->id) }}"
                                                            class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete ?')" title="DELETE">Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>

                        <!-- /.content -->
                    </div>
                </div>
            </div>
    </section> --}}
</div>

@push('custom_js')

<script src="{{ asset('tables/app-assets/vendors/js/vendors.min.js')}}"></script>
<script src="{{ asset('tables/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{ asset('tables/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"></script>
@endpush
@endsection
