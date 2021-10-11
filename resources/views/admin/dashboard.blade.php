@extends('admin.layouts.adminapp')

@section('dasboard')
active
@endsection
@section('title')
BDCarHouse - Dashboard
@endsection


@section('content')

{{-- Custom CSS Dashboard --}}

<style>
    .bg-info-dash{
        background-color: #17a2b8;
    }

    .bg-success-dash{
        background-color: #28a745;
    }

    .bg-warning-dash{
        background-color: #ffc107;
    }

    .bg-danger-dash{
        background-color: #dc3545;
    }

</style>

<link rel="stylesheet" href="{{ asset('assets/web/assets/img/font-awsome.min.css')}}">

<script src="https://kit.fontawesome.com/60d9ccbe64.js" crossorigin="anonymous"></script>

<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


{{-- END Dashboard --}}



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> CarHat</a></li>
            <li class="active">Here</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="col-md-8 col-md-offset-2">
            <h1>
                <marquee>Welcome {{ Auth::user()->name }}</marquee>
            </h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info-dash">
                    <div class="inner">
                        <h3>{{ $total_product }}</h3>

                        <h4 class="text-center"><b>Total Cars</b></h4>
                    </div>
                    <div class="icon">
                        <span class="iconify" data-icon="mdi:car-sports" data-inline="false"></span>

                    </div>
                    <a href="{{ route('product.list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success-dash">
                    <div class="inner">
                        <h3>{{ $total_category }}</h3>

                        <h4 class="text-center"><b>Total Category</b></h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('admin.category.list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger-dash">
                    <div class="inner">
                        <h3>{{ $total_brand }}</h3>

                        <h4 class="text-center"><b>Total Brand</b></h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{ route('admin.brand.list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning-dash">
                    <div class="inner">
                        <h3>{{ $total_user }}</h3>

                        <h4 class="text-center"><b>Total User</b></h4>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add "></i>
                    </div>
                    <a href="{{ route('users.list') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>



            <!-- ./col -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
