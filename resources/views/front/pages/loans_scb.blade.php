@extends('layouts.master.master')
@section('page_title')
BDCarHouse - Standard Chartered Bank Saadiq Auto Finance
@endsection
@section('services')
active
@endsection
@push('custom_css_front')
<link href="{{ asset('assets/web/assets/css/custom_front.css')}}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
{{-- <section id="portfolio" class="">
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

<div class="hr-divider"></div>

</section> --}}

<div class="bank_header little_bottom_m">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img class="img-fluid" src="{{ asset('assets/web/assets/images/img/SC_Master-Logo_big.png')}}">
            </div>
            <div class="col-md-6">
                <h1>Standard Chartered Bank Saadiq Auto Finance</h1>
                <p>An attractive package with no personal guarantor requirement.</p>
            </div>
            <div class="col-md-3 little_top_m">
                <a class="btn" data-toggle="modal" data-target="#exampleModalCenter" href="#">APPLY FOR LOAN</a>
            </div>
        </div>
        <div class="bank_features">
            <div class="row">
                <div class="col-md-8">
                    <h3>Key Product Features</h3>
                    <hr>
                    <table class="table table-bordered">
                        <tr>
                            <td style="width: 20%"><b>Interest Rate</b></td>
                            <td>	11.50%
                                Standard Chartered Bank Saadiq Auto Finance's interest rate may vary from 11.5% to 12.5% depending on customer category.
                                <br>
                                Floating (Variable) Interest<br>
                                N/A</td>
                        </tr>
                        <tr>
                            <td style="width: 20%"><b>Min. financing Amount</b></td>
                            <td>BDT500000</td>
                        </tr>
                        <tr>
                            <td style="width: 20%"><b>Max. financing Amount</b></td>
                            <td>BDT4000000 50%</td>
                        </tr>
                        <tr>
                            <td style="width: 20%"><b>Min. loan tenure</b></td>
                            <td>1 year</td>
                        </tr>
                        <tr>
                            <td style="width: 20%"><b>Max. loan tenure</b></td>
                            <td>7 year</td>
                        </tr>
                        <tr>
                            <td style="width: 20%"><b>Islamic / Conventional</b></td>
                            <td>BDT500000</td>
                        </tr>
                        <tr>
                            <td style="width: 20%"><b>Approval duration</b></td>
                            <td>Standard Chartered Bank may take approximately 20 working days to approve and review your loan request.</td>
                        </tr>

                    </table>
                    <h3>Fees and Charges</h3>
                    <hr>
                    <table class="table table-bordered">

                        <tr>
                            <td style="width: 20%"><b>Processing fee</b></td>
                            <td>1% on approved loan amount.</td>
                        </tr>
                        <tr>
                            <td style="width: 20%"><b>Early Settlement</b></td>
                            <td>1% on overdue amount.</td>
                        </tr>
                        <tr>
                            <td style="width: 20%"><b>Sanction letter fee</b></td>
                            <td>N/A</td>
                        </tr>
                        <tr>
                            <td style="width: 20%"><b>Late Payment Charges</b></td>
                            <td>3% on overdue amount.</td>
                        </tr>
                        <tr>
                            <td style="width: 20%"><b>Other Charges</b></td>
                            <td>CIB Charge: BDT 100.</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4">
                    <div class="side_panel">
                        <h3>Eligibility</h3>
                        <div class="little_heading">Age requirement</div>
                        <p>Age 25years - 60years</p>
                        <div class="little_heading">Min Income requirement</div>
                        <p>BDT48000 gross per month</p>
                        <div class="little_heading">Employment Eligibility</div>
                        <p>
                                Salaried Employee<br>
                                Self Employed<br>
                                Land Owner<br>
                            Bangladeshi by citizenship or by birth.
                            Permanent employees of Govt., Semi Govt. and Autonomous Bodies, Banks and financial institutions,  Senior teachers of University, Govt. School, College, and Madrasha, Executives/Officers of Multinational Companies and renowned NGOs.
                            Worthy businessman having trade license, VAT certificate and TIN.
                            Self-employed professionals like Doctors, Engineers, Architects, and Accountants having sufficient cash flow.
                            Trade license of minimum 3 years for businessmen.
                            Employees working on renewable contract basis with 12 months or more.</p>

                            <h3 class="little_top_m">Other requirements</h3>
                            <div class="little_heading">Car Registration</div>
                            <p>Car will be registerd at the name of bank till end of the loan period or loan formalities.</p>
                            <div class="little_heading">Allows joint applicant?</div>
                            <p>Yes</p>
                            <div class="little_heading">Car Insurance</div>
                            <p>1st class comprehensive insurance of the car.</p>
                            <div class="little_heading">Security</div>
                            <p>Hypothecation over the car.
                                A post-dated cheque.</p>
                            <div class="little_heading">Guarantor</div>
                            <p>2</p>
                    </div>

                </div>
            </div>
            <div class="more_details">
                <h3 class="little_bottom_m">Standard Chartered Bank Saadiq Auto Finance</h3>
                <h3 class="mid_bottom_m">Required Documents</h3>
                <p>Accepted copy of the quotation of the items to be purchased.<br>
                    2 attested photographs.<br>
                    Photocopy of NID/ Passport.<br>
                    Last one years' bank statements.<br>
                    TIN certificates.<br>
                    Last tax return.<br>
                    Letter from employer with details of employment and salary.<br>
                    Rent receipt/ Rental Agreement.<br>
                    Proof of Address ( copy of t&t/ postpaid mobile bill/any utility bill/municipal tax receipt).
                    Whether enjoying any other investment facility with any other banks, the amount, mode and name of the bank including security and present performance to be stated clearly in client's declaration.<br>
                    For service holder: Letter from employer with details of employment position and salary, salary certificate, pay slip, visiting card, copy of employer ID..<br>
                    For Businessmen: Trade License of minimum 3 years/ memorandum of articles & visiting card.<br>
                    For Teachers: salary certificate/ pay slip, visiting card, copy of employer id, any other income documents.<br>
                    For Landlord/Landlady: 3 months' rent amount as reflected in the rental agreement or rent receipt. proof of ownership of property.
                </p>
                <p><b>Note: Additional document may require considering the profile of the applicant.</b></p>
                <h3 class="mid_top_m">Additional Information</h3>
                <p>No prior account relationship required with Standard Chartered.  Additional Info: Maximum allowable age of the vehicle at the end of the loan tenor is 10 years in case of Toyota, and 8 years in case of other brands. Partial payment fee: 2% of the prepayment amount.<br> Minimum Income: For Businessmen Yearly turnover must be BDT 12000000.</p>
            </div>
            <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn large_btn">APPLY FOR LOAN</a>

        </div>
    </div>
     <!-- Modal -->
     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" data-backdrop="true" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
</div>

@endsection
