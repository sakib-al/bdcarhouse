@extends('layouts.master.master')

@section('page_title')
    BDCarHouse - Services
@endsection

@section('about')
    active
@endsection

@section('content')
<!-- ========== PORTFOLIO SECTION ========== -->
<section id="portfolio" class="">
    <div class="page-heading-two">
        <div class="container">
            <div class="col-md-7">
                <h5>Services</h5>
            </div>
            <div class="col-md-5">
                <div class="breads">
                    <a href="{{ route('index') }}">Home</a> / Services </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Page heading two ends -->
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="page-sidebar">
                    <p style=text-align: justify>Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit
                        amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum
                        doller sit amet.</p>
                    <p style=text-align: justify>Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit
                        amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet. Lorem ipsum doller sit amet.</p>
                    <p style=text-align: justify>&nbsp</p>
                    <p style=text-align: justify>&nbsp</p>
                    <p style=text-align: justify>&nbsp</p>
                    <p style=text-align: justify>&nbsp</p>
                    <p style=text-align: justify>&nbsp</p>
                    <p style=text-align: justify>&nbsp</p>
                    <p style=text-align: justify>&nbsp</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="page-sidebar sidebar">
                    <p>Phone : +34534223434</p>
                    <p>Mail : webheliosteam@gmail.com</p>
                </div>
            </div>


        </div>
    </div>
    <div class="hr-divider"></div>

</section>
<!-- //End portfolio -->
@endsection
