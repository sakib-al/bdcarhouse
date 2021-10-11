@extends('admin.layouts.adminapp')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Product Image ADD

        </h1>
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Product Image</a></li>
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
                                    @if($errors->any())
                                    {{ implode('', $errors->all(':message')) }}
                                    @endif
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <form action="{{route('product_image.store')}}" method="post">
                                            @csrf

                                            <div class="form-group">
                                                <label for="formGroupExampleInput2">Name</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput2"
                                                    placeholder="Name" name="name" value="{{old('name')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="formGroupExampleInput2">Product ID</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput2"
                                                    placeholder="Product ID" name="product_id" value="{{old('product_id')}}">
                                            </div>
                                            <div class="form-actions mt-10 text-center">
                                                    <a href="{{route('product_image.list')}}">
                                                        <button type="button" class="btn btn-danger">
                                                            <i class="ft-x"></i> Cancel
                                                        </button>
                                                    </a>
                                                    <button type="submit" class="btn btn-success">
                                                        <i class="la la-check-square-o"></i> Submit
                                                    </button>
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
