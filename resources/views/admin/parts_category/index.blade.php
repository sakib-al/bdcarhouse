@extends('admin.layouts.adminapp')

@section('title')
    BDCarHouse - Parts Category List
@endsection

@section('spare_parts')
active
@endsection

@section('parts_category')
    active
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Category List</h1>
        <ul class="breadcrumb">
            <a href="{{ route('parts.category.create') }}" class="btn btn-info"><i class="fa fa-plus">Add Category</i></a>
            <li><a href="#"><i class="fa fa-dashboard"></i> Category</a></li>
            <li class="active">Here</li>
        </ul>
    </section>

    <!-- Main content -->
    <section id="product_details" class="content" style="margin-top:5px">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header with-border">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 10%;">Sl</th>
                                    <th scope="col" style="width: 20%;">Name</th>
                                    <th scope="col" style="width: 10%;">Status</th>
                                    <th scope="col" style="width: 20%;">Image</th>
                                    <th scope="col" style="width: 13%;">Action</th>

                                </tr>
                            </thead>

                            {{-- @if(isset($category) && count($category) > 0 ) --}}
                            @foreach($category as $row)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $row->name }}</td>

                                    <td>
                                        @if( $row->status == 'active' )
                                           <a class="btn btn-info btn-sm">Active<a>
                                        @else
                                        <a class="btn btn-danger btn-sm">Inactive<a>
                                        @endif
                                    </td>

                                    <td> <img src="{{asset('/')}}parts_image/{{ $row->image ??'' }}" width="90" height="50"></td>

                                    <td>
                                        <a href="{{route('parts.category.edit',$row->id)}}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>

                                        <a href="{{ route('parts.category.delete',$row->id) }}" onclick="return confirm('Are you sure you want to delete ?')"  class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                      </table>
                    </div>
                </div>
            </div>
    </section>
</div>

@endsection
