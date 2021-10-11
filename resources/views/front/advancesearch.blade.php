@extends('layouts.master.master')

@section('page_title')
BDCarHouse - Advance Search
@endsection

@section('search')
    active
@endsection

@section('content')

<!-- ========== PORTFOLIO SECTION ========== -->
<section id="portfolio" class="">
    <div class="page-heading-two">
        <div class="container">
            <div class="col-md-7">
                <h5>Advanced Search <span>Narrow down your search</span></h5>
            </div>
            <div class="col-md-5">
                <div class="breads">
                    <a href="{{ route('index') }}">Home</a> / Advanced Search </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>


    <!-- Page heading two ends -->

    <div class="container">
        <!-- blog two -->
        <div class="blog-two">
            <link
                href="{{ asset('assets/web/application/modules/themes/views/default/assets/jquery-ui/jquery-ui.css')}}"
                rel="stylesheet">
            <script
                src="{{ asset('assets/web/application/modules/themes/views/default/assets/jquery-ui/jquery-ui.js')}}">
            </script>

            <link href="{{ asset('assets/web/application/modules/themes/views/default/assets/css/select2.css')}}"
                rel="stylesheet">
            <script src="{{ asset('assets/web/application/modules/themes/views/default/assets/js/select2.js')}}">
            </script>

            <link rel="stylesheet"
                href="{{ asset('assets/web/application/modules/themes/views/default/assets/ionrange-slider/css/ion.rangeSlider.css')}}">
            <script
                src="{{ asset('assets/web/application/modules/themes/views/default/assets/ionrange-slider/js/ion.rangeSlider.min.js')}}">
            </script>


            <div class="row">
                <!-- Sidebar column -->
                <div class="col-md-3 col-sm-3">
                    <div class="sidebar">
                        {!! Form::open([ 'route' => 'advanced.search', 'method' => 'GET','files' => true])
                        !!}




                        <div class="s-widget">
                            <h5><i class="fa fa-search color"></i>&nbsp; Search Filters</h5>
                            <!-- Form Group -->
                            <div class="widget-content search">

                                <!-- Search Widget -->
                                <div class="form-group">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Type anything" value=""
                                            name="advanced_search">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <select class="form-control chosen-select" id="car_category" name="car_category">
                                        <option>Select Category</option>
                                        @foreach ($category as $car_category_item)
                                        <option value="{{ $car_category_item->id }}">{{  $car_category_item->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="brand">Car Brand</label>
                                    {!! Form::select('brand', $brand, null, ['class'=>'form-control
                                    chosen-select', 'id' => 'brand', 'data-validation-required-message' =>
                                    'This field is required', 'placeholder' => 'Select Brand']) !!}

                                </div>

                                <div class="form-group">
                                    <label for="carmodel">Car Model</label>
                                    {!! Form::select('carmodel', $carmodel, null, ['class'=>'form-control
                                    chosen-select', 'id' => 'carmodel', 'placeholder' => 'Select Car
                                    Model']) !!}
                                </div>

                                <div class="form-group">
                                    <label for="carmodel">Car Condition</label>
                                    <select name="condition" id="condition" class="form-control chosen-select">
                                        <option data-name="" value="">Select Condition</option>
                                        <option data-name="New" value="condition_new">New</option>
                                        <option data-name="Used" value="condition_used">Used</option>
                                        <option data-name="Pre Owned" value="condition_pre_owned">Pre Owned</option>
                                        <option data-name="Reconditioned" value="condition_recondition">Reconditioned
                                        </option>
                                        <option data-name="Other" value="condition_other">Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="carmodel">Fuel Type</label>
                                    <select name="fuel_type" id="fuel_type" class="form-control chosen-select">
                                        <option data-name="" value="null">Select Fuel Type</option>
                                        <option data-name="Gas" value="gas">Gas</option>
                                        <option data-name="Disel" value="diesel">Disel</option>
                                        <option data-name="Petrol" value="petrol">Petrol</option>
                                        <option data-name="Octane" value="octane">Octane</option>
                                        <option data-name="Electricity" value="electricity">Electricity</option>
                                        <option data-name="Others" value="others">Others</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Mileage Range</label>
                                    <input type="text" id="mileage_slider" name="mileage_slider" value="" />
                                </div>

                                <div class="form-group">
                                    <label>Price Range</label>
                                    <input type="text" id="price_slider" name="price_slider" value="" />
                                </div>



                                <div class="form-group">
                                    <label for="carmodel">City</label>
                                    <select class="form-control chosen-select" name="city" id="car_city">
                                        <option>Select city</option>
                                        @foreach ($city as $car_city_item)
                                        <option value="{{ $car_city_item->id }}">{{  $car_city_item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>




                                {{-- <div class="form-group">
                                                <label>Search radius: <span class="price-range-amount-view" id="amount"></span></label>
                                                <div class="clearfix"></div>
                                                <a href="javascript:void(0);" onclick="findLocation()" class="btn btn-warning btn-xs adv-find-my-location"><i class="fa fa-location-arrow"></i></a>
                                                <div id="slider-price-sell" class="adv-price-range-slider"></div>
                                                <input type="hidden" id="price-slider-sell" name="distance" value="">
                                                <input type="hidden" id="geo_lat" name="geo_lat" value="">
                                                <input type="hidden" id="geo_lng" name="geo_lng" value="">
                                            </div> --}}

                                {{-- <div class="form-group">
                                                <select name="sort_by" class="form-control chosen-select">
                                <option value="">Order By</option>
                                                                    <option value="rating_asc" >Rating Ascending</option>
                                                                    <option value="rating_desc" >Rating Descending</option>
                                                                    <option value="id_asc" >Id Ascending</option>
                                                                    <option value="id_desc" >Id Descending</option>
                                                            </select>
                                            </div> --}}
                                <!-- Button -->
                                {!! Form::close() !!}

                                <button class="btn btn-success submit-search-button" type="submit">Search</button>&nbsp;
                                <button class="btn btn-default reset" type="reset">Reset</button>
                            </div>

                        </div>

                        </form>

                    </div>



                </div>
                <!-- end of left bar -->

                <!-- Mainbar column -->
                <div class="col-md-9 col-sm-9 result-container">
                    <h5><span>Results</span>
                        <div class="pull-right list-switcher">
                            <a class="result-grid" href="#"><i class="fa fa-th "></i></a>
                            <a class="result-list" href="#"><i class="fa fa-th-list "></i></a>

                            <a class="result-map" href="#"><i class="fa fa-map-marker "></i></a>
                        </div>
                    </h5>
                    <div class="clearfix"></div>
                    <div class="results">
                        {{-- Search Content Goes Here --}}

                        {{-- Conditional Query For Search --}}
                        <?php
$foreach = '';
if (Request::segment(1) == 'advance-search') {
    $foreach = $product;
}else{
    $foreach = $advance;
}
?>

                        {{-- End Conditional Query For Search --}}

                        <div class="text-center grid-box">
                            @foreach($foreach as $key => $row)
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="item grid-box-item">
                                    <!-- Image style one starts -->
                                    <style>
                                        .custom {
                                            height: 140px;
                                        }

                                    </style>

                                    <div class="image-style-one">
                                        <!-- Image -->
                                        <a href="{{route('cars.view',$row->id)}}">
                                            <img class="img-responsive custom" alt="Vitage Car"
                                                src="{{asset('/')}}image/{{ $row->singleImage->name ?? '' }}">
                                            <!-- image hover style for image #1 -->
                                        </a>

                                    </div>

                                    <div class="grid-box-content">
                                        <span class="price-tag" data-toggle="tooltip" data-placement="left"
                                            data-original-title="Featured"> $ {{ $row->price }} </span>
                                        <span class="condition-tag" data-toggle="tooltip" data-placement="left"
                                            data-original-title="Featured">{{$row->transmission}}</span>


                                        <a class="b-tooltip" title="Luxury Car" href="#">
                                            <!--i class="category-fa-icon fa cat-img-small fa-car bg-red"></i-->
                                            <img src="http://carbiz.webhelios.com/uploads/car-icons/luxury-car.png"
                                                class="fa cat-img-small fa-car bg-red">
                                        </a>
                                        <div class="cat-title" style="height: 17px;">{{ $row->categories->name}}</div>
                                        <h4 class="item-title" style="height: 28px;"><a
                                                href="{{route('cars.view',$row->id)}}">{{ $row->product_brand->name }}</a>
                                        </h4>
                                        <div class="bor bg-red"></div>
                                        <div class="row">{{ $row->name }} </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 info-dta"><i
                                                    class="fa fa-tachometer"></i> : {{$row->mileage}}&nbsp;Miles</div>
                                        </div>
                                        {{-- <div class="row grid-rating-holder">
                                                <div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">
                                                    <a href="http://carbiz.webhelios.com/index.php/en/car/vitage-car#review">
                                                        <span class="stars "><i class="fa fa-star "></i><i class="fa fa-star "></i><i
                                                                class="fa fa-star "></i><i class="fa fa-star "></i><i
                                                                class="fa fa-star "></i></span> </a>
                                                </div>
                                            </div> --}}
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
















                        {{-- Search Content End here --}}
                    </div>
                    {{-- <div class="ajax-loading recent-loading"><img
                            src="http://carbiz.webhelios.com/application/modules/themes/views/default/assets/img/loading.gif"
                            alt="loading..."></div>
                    <a href="" class="load-more-recent btn btn-primary" style="width:100%">Load More</a> --}}
                </div>
                <!-- end of main content -->
            </div>
            <!-- end of row -->
            <div style="clear:both;margin-top:30px;">

                <script type="text/javascript">
                    var ua = navigator.userAgent.toLowerCase();
                    var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");

                    // added on version 1.5
                    var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
                    var isSsl = '0';
                    //end

                    jQuery(window).resize(function () {
                        if (!isAndroid) {
                            $('.chosen-select').select2({
                                theme: "classic"
                            });
                        }
                    });

                    var per_page = '8';
                    var recent_count = '8';

                    $(document).ready(function () {
                        if (!isAndroid) {
                            $('.chosen-select').select2({
                                theme: "classic"
                            });
                        }

                        jQuery('#select-brand').change(function () {
                            var val = jQuery(this).val();
                            jQuery.post(
                                "http://carbiz.webhelios.com/index.php/en/show/get_models_ajax/", {
                                    brand: val
                                },
                                function (html) {

                                    jQuery('#select-model').empty();
                                    jQuery('#select-model').html(html);
                                },
                                "html"
                            );
                        }).change();

                        var min_mileage = 0,
                            max_mileage = 500;
                        $.ajax({
                            dataType: "json",
                            url: "http://carbiz.webhelios.com/index.php/en/show/get_min_max_car_mileage_ajax/",
                            success: function (data) {
                                min_mileage = data['min_mileage'];
                                max_mileage = data['max_mileage'];
                                $("#mileage_slider").ionRangeSlider({
                                    min: min_mileage,
                                    max: max_mileage,
                                    type: 'double',
                                    prefix: "Miles",
                                    maxPostfix: "+",
                                    prettify: false,
                                    hasGrid: true
                                });
                            },
                            error: function () {
                                $("#mileage_slider").ionRangeSlider({
                                    min: 0,
                                    max: 500000,
                                    type: 'double',
                                    prefix: "Miles",
                                    maxPostfix: "+",
                                    prettify: false,
                                    hasGrid: true
                                });
                            }
                        });

                        var min_price = 0,
                            max_price = 500;
                        $.ajax({
                            dataType: "json",
                            url: "http://carbiz.webhelios.com/index.php/en/show/get_min_max_car_price_ajax/",
                            success: function (data) {
                                min_price = data['min_price'];
                                max_price = data['max_price'];
                                $("#price_slider").ionRangeSlider({
                                    min: min_price,
                                    max: max_price,
                                    type: 'double',
                                    prefix: "&#x24;",
                                    maxPostfix: "+",
                                    prettify: false,
                                    hasGrid: true
                                });
                            },
                            error: function () {
                                $("#price_slider").ionRangeSlider({
                                    min: 0,
                                    max: 5000,
                                    type: 'double',
                                    prefix: "&#x24;",
                                    maxPostfix: "+",
                                    prettify: false,
                                    hasGrid: true
                                });
                            }
                        });



                        var distance = parseInt('25');

                        var distance_unit = 'Miles';

                        $("#slider-price-sell").slider({

                            min: 1,

                            max: 500,

                            value: distance,

                            slide: function (event, ui) {

                                $("#price-slider-sell").val(ui.value);
                                $("#amount").html(ui.value + ' ' + distance_unit);

                            }

                        });
                        $("#price-slider-sell").val(distance);
                        $("#amount").html($("#slider-price-sell").slider("value") + ' ' + distance_unit);


                    });

                    // updated on version 1.5
                    function findLocation() {
                        if (isChrome == true && isSsl == 0) {
                            var r = confirm(
                                "Location service by google is not available for non ssl sites(Only in Chrome browser). Do you want to use your ip address for getting your location ? NB- The result may not be exactly same as google"
                            );
                            if (r == true) {
                                $.get("//ipinfo.io", function (response) {
                                    var arr = response.loc.split(",");

                                    $('#geo_lat').val(arr[0]);
                                    $('#geo_lng').val(arr[1]);

                                }, "jsonp");

                            }
                        } else {
                            if (!!navigator.geolocation) {

                                navigator.geolocation.getCurrentPosition(function (position) {

                                    $('#geo_lat').val(position.coords.latitude);
                                    $('#geo_lng').val(position.coords.longitude);


                                });

                            } else {
                                alert('No Geolocation Support.');
                            }
                        }
                    }
                    //end

                </script>

                <script type="text/javascript">
                    $(document).ready(function () {

                        var site_url = 'http://carbiz.webhelios.com/index.php/en/';
                        jQuery('#country').change(function () {
                            // jQuery('#city').val('');
                            // jQuery('#selected_city').val('');
                            var val = jQuery(this).val();

                            var loadUrl = site_url + '/show/get_locations_by_parent_ajax/' + val +
                                '/state';

                            jQuery.post(
                                loadUrl, {},
                                function (responseText) {
                                    jQuery('#state').html(responseText);
                                    var sel_country = '';
                                    var sel_state = '';
                                    if (val == sel_country)
                                        jQuery('#state').val(sel_state);
                                    else
                                        jQuery('#state').val('');
                                    jQuery('#state').focus();
                                    jQuery('#state').trigger('change');

                                }
                            );
                        }).change();

                        var city_field_type = 'dropdown';

                        jQuery('#state').change(function () {
                            var val = jQuery(this).val();
                            var sel_state = '';
                            var sel_city = '';
                            var city = 'any';

                            if (city_field_type == 'dropdown')
                                populate_city(val); //populate the city drop down

                            if (val == sel_state) {
                                jQuery('#selected_city').val(sel_city);
                                jQuery('#city').val(city);
                            } else {
                                jQuery('#selected_city').val('');
                                jQuery('#city').val('');
                            }

                        }).change();

                    });

                    function populate_city(parent) {
                        if (parent == '') parent = 0;

                        var site_url = 'http://carbiz.webhelios.com/index.php/en/';
                        var loadUrl = site_url + '/show/get_city_val_dropdown_by_parent_ajax/' + parent + '/city';
                        jQuery.post(
                            loadUrl, {},
                            function (responseText) {
                                jQuery('#city_dropdown').html(responseText);
                                var sel_state = '';
                                var sel_country = '';
                                var sel_city = 'any';
                                if (parent == sel_state) {
                                    jQuery('#city_dropdown').val(sel_city);
                                    if (!isAndroid) {
                                        $("#city_dropdown").select2("val", sel_city);
                                    }
                                } else {
                                    jQuery('#city_dropdown').val('');
                                    if (!isAndroid) {
                                        $("#city_dropdown").select2("val", '');
                                    }
                                }
                            }
                        );
                    }

                    jQuery(document).ready(function () {

                        jQuery('.reset').click(function (e) {
                            e.preventDefault();
                            jQuery('#advance-search-form input').each(function () {
                                jQuery(this).val('');
                            });

                            jQuery('select[name=city]').select2("val", "any");
                            jQuery('select[name=category]').select2("val", "any");
                            jQuery('select[name=sort_by]').select2("val", "");

                            jQuery('#advance-search-form').submit();
                        });

                        jQuery('#advance-search-form').submit(function (e) {
                            e.preventDefault();
                            var loadUrl = jQuery('#advance-search-form').attr('action');
                            var data = jQuery('#advance-search-form').serialize();
                            jQuery('.recent-loading').show();

                            jQuery.post(
                                loadUrl,
                                data,
                                function (result) {
                                    //document.title = result.title;
                                    if (result.url != window.location) {
                                        window.history.pushState({
                                            path: result.url
                                        }, '', result.url);
                                    }

                                    jQuery('.results').html(result.content);
                                    jQuery('.recent-loading').hide();

                                    if (jQuery('.results .img-responsive').length < recent_count) {
                                        jQuery('.load-more-recent').hide();
                                    }
                                    fix_grid_height();

                                },
                                'json'
                            );

                        });

                        jQuery('.load-more-recent').click(function (e) {
                            e.preventDefault();
                            var next = parseInt(recent_count) + parseInt(per_page);

                            var url = jQuery('#advance-search-form').attr('action');
                            url = url.replace('/' + recent_count, '/' + next);
                            jQuery('#advance-search-form').attr('action', url);
                            recent_count = next;

                            jQuery('#advance-search-form').submit();
                        });

                        jQuery('.result-grid').click(function (e) {
                            e.preventDefault();
                            jQuery('.result-grid').addClass('selected');
                            jQuery('.result-list').removeClass('selected');

                            var url = jQuery('#advance-search-form').attr('action');
                            var action = url.replace('/list/', '/grid/');
                            jQuery('#advance-search-form').attr('action', action);
                            jQuery('#advance-search-form').submit();
                        });

                        jQuery('.result-list').click(function (e) {
                            e.preventDefault();
                            jQuery('.result-grid').removeClass('selected');
                            jQuery('.result-list').addClass('selected');

                            var url = jQuery('#advance-search-form').attr('action');
                            var action = url.replace('/grid/', '/list/');
                            jQuery('#advance-search-form').attr('action', action);
                            jQuery('#advance-search-form').submit();

                        });

                        jQuery('.result-map').click(function (e) {
                            e.preventDefault();
                            jQuery('#toggle-form').submit();
                        });

                        var initialURL = location.href;

                    });

                </script>
            </div>
        </div>


</section>
<!-- //End portfolio -->


@endsection
