@extends('layouts.master.master')

@section('page_title')
    BDCarHouse - Contact
@endsection

@section('contact')
    active
@endsection


@section('content')
<!-- ========== PORTFOLIO SECTION ========== -->
<section id="portfolio" class="">
    <div class="page-heading-two">
        <div class="container">
            <div class="col-md-7">
                <h5 class="car-title-detail">Contact Us</h5>
            </div>
            <div class="col-md-5">
                <div class="breads">
                    <a href="#">Home</a> / Contact Us </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Container -->
    <div class="container">

        <div class="contact-us-three">
            <div class="row">

                <div class="col-md-9 col-sm-12 col-xs-12">

                    <!-- Contact Form -->
                    <div class="contact-form">


                        <!-- Form -->
                        <form action="{{ route('user_contact.store') }}" method="post">

                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" value=""
                                            placeholder="Name">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="email" value=""
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" value=""
                                            placeholder="Phone">

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Type your message here.." class="form-control" rows="8"
                                    name="message"></textarea>
                            </div>

                            <div class="hr-divider"></div>
                            <!-- Button -->
                            <input class="btn btn-primary" type="submit" value="Send">

                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>

                    <br />

                </div>


                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="sidebar">

                        <div class="features-item features-item-v2">
                            <div class="features-info">
                                <h3 class="title">Contact <span>Us</span></h3>
                                <p style="margin-top:30px;">
                                    <ul class="contact-text">
                                        <li><span>Address</span>: Unit 10A, House 21, Road 17, Banani C/A, Dhaka 1213</li>

                                    </ul>
                                    <div class="widget-share-links">Please share our website</div>
                                    <div class="brand-bg footer-share-links">

                                        <a class="facebook"
                                            href="#">
                                            <i class="fa fa-facebook circle-3"></i>
                                        </a>
                                        <a class="twitter" target="_blank"
                                            href="#">
                                            <i class="fa fa-twitter circle-3"></i>
                                        </a>
                                        <a class="google-plus"
                                            href="#">
                                            <i class="fa fa-google-plus circle-3"></i>
                                        </a>
                                        <a class="linkedin"
                                            href="#">
                                            <i class="fa fa-linkedin circle-3"></i>
                                        </a>
                                        <a class="pinterest"
                                            href="#">
                                            <i class="fa fa-pinterest circle-3"></i>
                                        </a>

                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- //End portfolio -->
@endsection
