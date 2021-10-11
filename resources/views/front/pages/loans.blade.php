@extends('layouts.master.master')
@section('page_title')
BDCarHouse - Loans
@endsection
@section('services')
active
@endsection
@push('custom_css_front')
<link href="{{ asset('assets/web/assets/css/custom_front.css')}}" rel="stylesheet" type="text/css" />
<style>
    .modal-content {
        margin-top: 37% !important;
    }
</style>
@endpush
@section('content')
<section id="portfolio" class="">
    <div class="page-heading-two">
        <div class="container">
            <div class="col-md-7">
                <h5>Bank Loans Services</h5>
            </div>
            <div class="col-md-5">
                <div class="breads">
                    <a href="{{ route('index') }}">Home</a> / Loans </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Page heading two ends -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="side_bar">
                    <h3>Compare Products</h3>
                    <div class="select_box">
                        <p>United Commercial Bank (UCB) - 10%</p>
                        <p>United Commercial Bank (UCB) - 10%</p>
                    </div>
                    <a class="btn" href="#">Compare (2/3)</a>
                    <div class="hr-divider"></div>
                    <hr>
                    <hr>
                    <h5>Compare the Lowest Car Loan Interest in Bangladesh</h5>
                    <div class="hr-divider"></div>
                    <P style="text-align: justify">Having a car is a dream for everyone and we know you also have a
                        dream for this. But you may wonder how much it is going to cost you if you take loan from any
                        bank. We have worked to show you the best offers on the web about Car Loan in Bangladesh.
                        Finding the lowest car loan interest in Bangladesh can help you save money while buying a car.
                        The eligibility to get a car loan in Bangladesh varies depending on various factors. What's the
                        'best' for one person may not be best for you! So we recommend you read the offers from the
                        individual auto loan providers to find out the best car loan for you. Compare car loan features
                        from more than 30 banks and financial institutions below.</P>
                    <hr>
                    <hr>
                </div>
            </div>
            <div class="col-md-9">
                <div class="content_bar">
                    <div class="card">
                        <div class="card-header">
                            <img src="{{ asset('assets/web/assets/images/img/gift.png')}}">
                            <h5 style="display: inline-block">Best Car Loans</h5>
                        </div>
                        {{-- Main Tab --}}
                        <div class="card-body">
                            <div class="bank_body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <input type="checkbox">
                                        <a href="{{ route('loans_scb') }}"><img class="img-fluid"
                                                src="{{ asset('assets/web/assets/images/img/standard_bank.png')}}">&nbsp;Standard
                                            Chartered Bank Saadiq Auto Finance</a>
                                        <p>Standard Chartered Bank Saadiq Auto Finance's interest rate may vary from
                                            11.5% to 12.5% depending on customer category.</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="profit">
                                            <p>Profit Rate</p>
                                            <h4>11.5%</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="installment">
                                            <p>Monthly Installment</p>
                                            <h4>BDT</h4>
                                            <h4>16,488.00</h4>
                                            <p class="text-right">36 month</p>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="apply">
                                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                                                class="btn">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                                <button id="tab_1" class="info">+More Info</button>
                            </div>
                            <div class="more_info panel_1" style="display: none">
                                <div class="more_info_body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="summary">
                                                <h4>Summary</h4>
                                                <p>Standard Chartered Bank Saadiq Auto Finance's interest rate may vary
                                                    from 11.5% to 12.5% depending on customer category.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <h4 class="text-center">Monthly Repayment</h4>
                                            <p class="text-center">BDT 16,488.00</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h4 class="text-center">Total Interest Payable</h4>
                                            <p class="text-center">BDT 93,568.12</p>
                                        </div>
                                        <div class="col-md-2">
                                            <h4 class="text-center">Total Amount Payable</h4>
                                            <p class="text-center">BDT 593,568.12</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="info_detail">
                                    <div class="box-detail">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="features">
                                                    <div class="heading">Product Features</div>
                                                    <div class="box">
                                                        <div class="title">Financial Amount (min to max)</div>
                                                        <div class="description">BDT 500,000 - 4,000,000</div>
                                                    </div>
                                                    <div class="box">
                                                        <div class="title">Loan Tenure (min to max)</div>
                                                        <div class="description">1 - 7 years</div>
                                                    </div>
                                                    <div class="box">
                                                        <div class="title">Interest rate)</div>
                                                        <div class="description">11.5%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="features">
                                                    <div class="heading">Eligibility</div>
                                                    <div class="box">
                                                        <div class="title">Min. Salary requirement</div>
                                                        <div class="description">BDT 48,000</div>
                                                    </div>
                                                    <div class="box">
                                                        <div class="title">Age requirements (min-max))</div>
                                                        <div class="description">25 - 60 years</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                                            class="btn">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Tab 2 --}}
                    <div class="single-body">
                        <div class="bank_body">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="checkbox">
                                    <a href="#"><img class="img-fluid"
                                            src="{{ asset('assets/web/assets/images/img/ucb_bank.png')}}">&nbsp;UCB Auto
                                        Loan</a>
                                    <p>UCB Auto Loan considers 10% interest rate for all.</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="profit">
                                        <p>Profit Rate</p>
                                        <h4>10%</h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="installment">
                                        <p>Monthly Installment</p>
                                        <h4>BDT</h4>
                                        <h4>16,133.59</h4>
                                        <p class="text-right">36 month</p>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="apply">
                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                                            class="btn">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <button id="tab_2" class="info">+More Info</button>
                        </div>
                        <div class="more_info panel_2" style="display: none">
                            <div class="more_info_body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="summary">
                                            <h4>Summary</h4>
                                            <p>UCB Auto Loan considers 10% interest rate for all.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <h4 class="text-center">Monthly Repayment</h4>
                                        <p class="text-center">BDT 16,133.59</p>
                                    </div>
                                    <div class="col-md-2">
                                        <h4 class="text-center">Total Interest Payable</h4>
                                        <p class="text-center">BDT 80,809.37</p>
                                    </div>
                                    <div class="col-md-2">
                                        <h4 class="text-center">Total Amount Payable</h4>
                                        <p class="text-center">BDT 580,809.37</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info_detail">
                                <div class="box-detail">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="features">
                                                <div class="heading">Product Features</div>
                                                <div class="box">
                                                    <div class="title">Financial Amount (min to max)</div>
                                                    <div class="description">BDT 0 - 2,000,000</div>
                                                </div>
                                                <div class="box">
                                                    <div class="title">Loan Tenure (min to max)</div>
                                                    <div class="description">1 - 5 years</div>
                                                </div>
                                                <div class="box">
                                                    <div class="title">Interest rate)</div>
                                                    <div class="description">10%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="features">
                                                <div class="heading">Eligibility</div>
                                                <div class="box">
                                                    <div class="title">Min. Salary requirement</div>
                                                    <div class="description">BDT 20,000</div>
                                                </div>
                                                <div class="box">
                                                    <div class="title">Age requirements (min-max))</div>
                                                    <div class="description">25 - 65 years</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    {{-- Tab 3 --}}
                    <div class="single-body">
                        <div class="bank_body">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="checkbox">
                                    <a href="#"><img class="img-fluid"
                                            src="{{ asset('assets/web/assets/images/img/dbbl.png')}}">&nbsp;DBBL Auto
                                        Line</a>
                                    <p>DBBL will finance DBBL Auto Line for personal use only.</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="profit">
                                        <p>Profit Rate</p>
                                        <h4>10%</h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="installment">
                                        <p>Monthly Installment</p>
                                        <h4>BDT</h4>
                                        <h4>16,133.59</h4>
                                        <p class="text-right">36 month</p>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="apply">
                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                                            class="btn">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <button id="tab_3" class="info">+More Info</button>
                        </div>
                        <div class="more_info panel_3" style="display: none">
                            <div class="more_info_body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="summary">
                                            <h4>Summary</h4>
                                            <p>DBBL will finance DBBL Auto Line for personal use only.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <h4 class="text-center">Monthly Repayment</h4>
                                        <p class="text-center">BDT 16,133.59</p>
                                    </div>
                                    <div class="col-md-2">
                                        <h4 class="text-center">Total Interest Payable</h4>
                                        <p class="text-center">BDT 80,809.37</p>
                                    </div>
                                    <div class="col-md-2">
                                        <h4 class="text-center">Total Amount Payable</h4>
                                        <p class="text-center">BDT 580,809.37</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info_detail">
                                <div class="box-detail">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="features">
                                                <div class="heading">Product Features</div>
                                                <div class="box">
                                                    <div class="title">Financial Amount (min to max)</div>
                                                    <div class="description">BDT 1,00,000 - 2,000,000</div>
                                                </div>
                                                <div class="box">
                                                    <div class="title">Loan Tenure (min to max)</div>
                                                    <div class="description">1 - 5 years</div>
                                                </div>
                                                <div class="box">
                                                    <div class="title">Interest rate)</div>
                                                    <div class="description">10%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="features">
                                                <div class="heading">Eligibility</div>
                                                <div class="box">
                                                    <div class="title">Min. Salary requirement</div>
                                                    <div class="description">BDT 25,000</div>
                                                </div>
                                                <div class="box">
                                                    <div class="title">Age requirements (min-max))</div>
                                                    <div class="description">21 - 65 years</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    {{-- Tab 4 --}}
                    <div class="single-body">
                        <div class="bank_body">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="checkbox">
                                    <a href="#"><img class="img-fluid"
                                            src="{{ asset('assets/web/assets/images/img/prime-bank.gif')}}">&nbsp;Prime
                                        Bank Car Loan</a>
                                    <p>Special facilities for Professionals.</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="profit">
                                        <p>Profit Rate</p>
                                        <h4>10.5%</h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="installment">
                                        <p>Monthly Installment</p>
                                        <h4>BDT</h4>
                                        <h4>16,251.22</h4>
                                        <p class="text-right">36 month</p>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="apply">
                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                                            class="btn">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <button id="tab_4" class="info">+More Info</button>
                        </div>
                        <div class="more_info panel_4" style="display: none">
                            <div class="more_info_body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="summary">
                                            <h4>Summary</h4>
                                            <p>Special facilities for Professionals.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <h4 class="text-center">Monthly Repayment</h4>
                                        <p class="text-center">BDT 16,251.22</p>
                                    </div>
                                    <div class="col-md-2">
                                        <h4 class="text-center">Total Interest Payable</h4>
                                        <p class="text-center">BDT 85,043.98</p>
                                    </div>
                                    <div class="col-md-2">
                                        <h4 class="text-center">Total Amount Payable</h4>
                                        <p class="text-center">BDT 585,043.98</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info_detail">
                                <div class="box-detail">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="features">
                                                <div class="heading">Product Features</div>
                                                <div class="box">
                                                    <div class="title">Financial Amount (min to max)</div>
                                                    <div class="description">BDT 200000 - 4,000,000</div>
                                                </div>
                                                <div class="box">
                                                    <div class="title">Loan Tenure (min to max)</div>
                                                    <div class="description">1 - 5 years</div>
                                                </div>
                                                <div class="box">
                                                    <div class="title">Interest rate)</div>
                                                    <div class="description">10.5%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="features">
                                                <div class="heading">Eligibility</div>
                                                <div class="box">
                                                    <div class="title">Min. Salary requirement</div>
                                                    <div class="description">BDT 30,000</div>
                                                </div>
                                                <div class="box">
                                                    <div class="title">Age requirements (min-max))</div>
                                                    <div class="description">22 - 65 years</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    {{-- Tab 5 --}}
                    <div class="single-body">
                        <div class="bank_body">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="checkbox">
                                    <a href="#"><img class="img-fluid"
                                            src="{{ asset('assets/web/assets/images/img/citybank.gif')}}">&nbsp;City
                                        Bank Manarah Auto Finance</a>
                                    <p>City Bank Manarah Auto Finance is designed for those customers who want to buy a
                                        brand new or reconditioned unregistered personal vehicle under the Islamic
                                        Shariah.</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="profit">
                                        <p>Profit Rate</p>
                                        <h4>10.5%</h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="installment">
                                        <p>Monthly Installment</p>
                                        <h4>BDT</h4>
                                        <h4>16,251.22</h4>
                                        <p class="text-right">36 month</p>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="apply">
                                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                                            class="btn">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <button id="tab_5" class="info">+More Info</button>
                        </div>
                        <div class="more_info panel_5" style="display: none">
                            <div class="more_info_body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="summary">
                                            <h4>Summary</h4>
                                            <p>City Bank Manarah Auto Finance is designed for those customers who want
                                                to buy a brand new or reconditioned unregistered personal vehicle under
                                                the Islamic Shariah.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <h4 class="text-center">Monthly Repayment</h4>
                                        <p class="text-center">BDT 16,251.22</p>
                                    </div>
                                    <div class="col-md-2">
                                        <h4 class="text-center">Total Interest Payable</h4>
                                        <p class="text-center">BDT 85,043.98</p>
                                    </div>
                                    <div class="col-md-2">
                                        <h4 class="text-center">Total Amount Payable</h4>
                                        <p class="text-center">BDT 585,043.98</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info_detail">
                                <div class="box-detail">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="features">
                                                <div class="heading">Product Features</div>
                                                <div class="box">
                                                    <div class="title">Financial Amount (min to max)</div>
                                                    <div class="description">BDT 300000 - 4,000,000</div>
                                                </div>
                                                <div class="box">
                                                    <div class="title">Loan Tenure (min to max)</div>
                                                    <div class="description">1 - 5 years</div>
                                                </div>
                                                <div class="box">
                                                    <div class="title">Interest rate)</div>
                                                    <div class="description">10.5%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="features">
                                                <div class="heading">Eligibility</div>
                                                <div class="box">
                                                    <div class="title">Min. Salary requirement</div>
                                                    <div class="description">BDT 30,000</div>
                                                </div>
                                                <div class="box">
                                                    <div class="title">Age requirements (min-max))</div>
                                                    <div class="description">22 - 60 years</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" data-backdrop="true"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLongTitle">Car Loans Application</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control">
                            <label>Phone No</label>
                            <input name="phone_no" type="number" class="form-control">
                            <label>Email</label>
                            <input name="email" type="email" class="form-control">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hr-divider"></div>
</section>
{{-- More info Script --}}
<script>
    $(document).ready(function () {
        $("#tab_1").click(function () {
            $(".panel_1").toggle();
        });
    });
    $(document).ready(function () {
        $("#tab_2").click(function () {
            $(".panel_2").toggle();
        });
    });
    $(document).ready(function () {
        $("#tab_3").click(function () {
            $(".panel_3").toggle();
        });
    });
    $(document).ready(function () {
        $("#tab_4").click(function () {
            $(".panel_4").toggle();
        });
    });
    $(document).ready(function () {
        $("#tab_5").click(function () {
            $(".panel_5").toggle();
        });
    });
</script>
@endsection
