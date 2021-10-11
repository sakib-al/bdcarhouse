@extends('admin.layouts.adminapp')

@section('title')
    BDCarHouse - User Query List
@endsection

@section('user_info')
active
@endsection

@section('contact_info')
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
            User Query List

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

                    <div class="panel-content collapse show">
                        <div class="panel-body card-dashboard">

                            <div>
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%;">SL</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">User Info</th>
                                            <th class="text-center">User Query</th>
                                            <th style="width: 5%">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        {{-- @if(isset($product) && count($product) > 0 ) --}}
                                        @foreach($info as $row)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>
                                                <p><b>Phone No:&nbsp;</b>{{ $row->phone }}</p>
                                                <p><b>Email:&nbsp;</b>{{ $row->email }}</p>
                                            </td>
                                            <td>{{ $row->details }}</td>
                                            <td>
                                                <a
                                                    href="{{ route('user_contact.delete',$row->id) }}"
                                                    class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete ?')" title="DELETE">Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        {{-- @endif --}}

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
