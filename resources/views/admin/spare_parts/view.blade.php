@extends('admin.layouts.adminapp')

@section('title')
    BDCarHouse - Parts View
@endsection

@section('spare_parts')
active
@endsection

@section('parts')
    active
@endsection


@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>
        View Product
       </h1>
       <ul class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Product</a></li>
          <li class="active">Here</li>
       </ul>
    </section>

    <section style="padding: 10px">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <?php


                                $car_brand_view    = $parts->car_brand;
                                $brand_view        = explode(',',$car_brand_view);

                                $car_model_view    = $parts->car_model;
                                $model_view        = explode(',',$car_model_view);

                            ?>
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th class="text-center">Image </th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Basic Info</th>
                                    <th class="text-center">Optional Info</th>
                                    <th class="text-center">Address Info</th>
                                    <th class="text-center">Description</th>
                                </tr>
                            </thead>

                            <tbody>
                                <td style="width: 5%">1</td>
                                <td style="width: 10%">
                                    <img src="{{asset('/')}}parts_image/{{ $parts->singleImage->name ?? 'no-image.jpg' }}" width="200" height="90">
                                </td>
                                <td class="text-center" style="width: 10%">
                                    {{$parts->parts_name}}
                                </td>

                                <td style="width: 20%">
                                    <div><strong>Parts Brand:</strong>&nbsp;<i>{{ $parts->parts_brand }}</i></div>
                                    <div><strong>Parts Category:</strong>&nbsp;
                                        <i>{{ $parts->categories->name }}</i>
                                    </div>
                                    <div><strong>Price:</strong>&nbsp;<i>{{ $parts->price }}</i></div>
                                </td>

                                <td style="width: 15%" >
                                    <div><strong>Supported Car Brand:</strong>&nbsp;<i>
                                        @foreach ($brand_view as $brand)
                                            {{ getCarBrand($brand) }},
                                        @endforeach
                                    </i></div>
                                    <div><strong>Supported Car Model:</strong>&nbsp;<i>
                                        @foreach ($model_view as $model)
                                            {{ getCarModel($model) }},
                                        @endforeach
                                    </i></div>
                                    <div><strong>Car Year:</strong>&nbsp;<i>{{ $parts->car_year }}</i></div>
                                </td>
                                <td style="width: 15%">
                                    {{-- <div><strong>Country:</strong>&nbsp;<i>{{ $product->countries->name }}</i></div> --}}
                                    <div><strong>Address:</strong>&nbsp;<i>{{ $parts->address }}</i></div>
                                    <div><strong>Phone No:</strong>&nbsp;<i>{{ $parts->phone_no }}</i></div>

                                </td>
                                <td style="width: 20%">
                                    <i>{{ $parts->description }}</i>
                                </td>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            </section>
        </div>


@endsection

@push('custom_js')
    <script src="{{ asset('assets/web/js/jquery-2.1.1.min.js') }}"></script>
@endpush
