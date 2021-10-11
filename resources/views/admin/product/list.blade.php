@extends('admin.layouts.adminapp')

@section('title')
    BDCarHouse - Product List
@endsection

@section('product')
active
@endsection

@section('product_list')
    active
@endsection


@push('custom_css')

<link rel="stylesheet" type="text/css" href="{{ asset('tables/app-assets/vendors/css/vendors.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('tables/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">

@endpush

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1 class="text-center">
            Product Data List

        </h1>
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Product</a></li>
            <li class="active">Here</li>
        </ul>
    </section>


    <!-- Main content -->

    <section id="product_details" class="content">
        <div class="row">
            <div class="col-12">
                <div class="panel">
                    <div class="panel-heading">
                        <a href="{{route('product.add')}}"
                            class="btn btn-sm btn-success">Add Product
                        </a>


                        {{-- <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a> --}}

                    </div>
                    <div class="panel-content collapse show">
                        <div class="panel-body card-dashboard">

                            <div>
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th style="width: 8%">SL</th>
                                            <th>Name</th>
                                            <th style="width: 13%">Category</th>
                                            <th style="width: 13%">Brand</th>
                                            <th style="width: 7%">Is Feature?</th>
                                            <th style="width: 8%">Image</th>
                                            <th style="width: 11%">Action</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @if(isset($product) && count($product) > 0 )
                                        @foreach($product as $key => $row)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->categories->name}}</td>
                                            <td>{{ $row->product_brand->name }}</td>
                                            <td>
                                                @if( $row->is_featured == 'Yes' )
                                                   <a class="btn btn-info btn-sm">YES<a>
                                                @else
                                                <a class="btn btn-danger btn-sm">NO<a>
                                                @endif
                                            </td>
                                            <td><img src="{{asset('/')}}image/{{ $row->singleImage->name ?? 'no-image.jpg' }}" width="90" height="50"></td>
                                            <td>
                                                <a href="{{route('product.edit',$row->id)}}"
                                                    class="btn btn-sm btn-success">Edit
                                                </a>

                                                <a href="{{route('product.view',$row->id)}}"
                                                    class="btn btn-sm btn-info">View
                                                </a>

                                                <a
                                                    href="{{route('product.delete',$row->id)}}"
                                                    class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete ?')" title="DELETE">Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif

                                    </tbody>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@push('custom_js')

<script src="{{ asset('tables/app-assets/vendors/js/vendors.min.js')}}"></script>
<script src="{{ asset('tables/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{ asset('tables/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"></script>
@endpush
@endsection
