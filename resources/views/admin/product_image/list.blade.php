@extends('admin.layouts.adminapp')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Product Image
            <small><a href="{{route('product_image.add')}}" class="btn btn-sm btn-primary">+ Add New</a></small>
        </h1>
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Product Image</a></li>
            <li class="active">Here</li>
        </ul>
    </section>

    <!-- Main content -->
    <section id="product_details" class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header with-border">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 10%;">Sl</th>
                                    <th scope="col" style="width: 30%;">Name</th>
                                    <th scope="col" style="width: 30%;">Product ID</th>
                                    <th scope="col" style="width: 30%;">Action</th>

                                </tr>
                            </thead>

                            @if(isset($product_image) && count($product_image) > 0 )
                            @foreach($product_image as $key => $row)
                            <tbody>
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->product_id}}</td>
                                    <td><a href="{{route('product_image.edit',$row->id)}}"
                                            class="btn btn-sm btn-success">Edit</a> <a
                                            href="{{route('product_image.delete',$row->id)}}"
                                            class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete ?')" title="DELETE">Delete</a></td>

                                </tr>
                            </tbody>
                            @endforeach
                            @endif

                        </table>

                        <!-- /.content -->
                    </div>
                </div>
            </div>
    </section>
</div>


<!-- /.content-wrapper -->

@endsection
