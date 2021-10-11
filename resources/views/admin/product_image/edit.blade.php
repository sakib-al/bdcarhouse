@extends('admin.layouts.adminapp')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Product Image Edit

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
  		<div class="col-md-6">
  			<form action="{{route('product_image.update')}}" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$image->id ?? ''}}" />
  
  <div class="form-group">
    <label for="formGroupExampleInput2">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Name" name="name" value="{{$image->name ?? ''}}">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Product ID</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Product ID" name="product_id" value="{{$image->product_id ?? ''}}">
  </div>
  <button type="submit" class="btn btn-success">Update</button> 
  <a href="{{route('product_image.list')}}" type="reset" class="btn btn-danger">Cancle</a>
</form>
  		</div>	
  		</div>
  	</div>
  </div>


<!-- Test -->

    <!-- /.content -->
  </div>
</div>
</div>
</section>
</div>


<!-- /.content-wrapper -->

@endsection
