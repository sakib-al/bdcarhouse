@extends('layouts.master.master')

@section('content')
<!-- ========== PORTFOLIO SECTION ========== -->
<section id="portfolio" class="">
    <div class="page-heading-two">
        <div class="container">
            <div class="col-md-7">
                <h5 class="car-title-detail">Signup</h5>
            </div>
            <div class="col-md-5">
                <div class="breads">
                    <a href="http://carbiz.webhelios.com/index.php/en/">Home</a> / Signup </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h4>Register for New Account</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas urna ut enim semper, tempus adipiscing nisi ornare. Vivamus ut rdum urna, at aliquam nulla. Fusce laoreet metus eget nisl varius posuere. Aliquam sapien augue,
                    semper ut magna ut, rutrum malesuada sapien.
                    <br /><br/>
                    <h5>Your data will be safe with us</h5>
                    Mauris ac dui consectetur, condimentum est ac, tristique velit. Phasellus varius volutpat sem quis semper. Nullam id egestas purus, eget rhoncus erat. Aenean at nullaortis. In semper fermentum nibh, in congue urna sollicitudin eu. Curaagna. Proin egestas
                    lorem vel tincidunt interdum. Integer aliquet varius tellus, eu feugiat justo vestibulum id. Morbi ultrices ultrices . Nullam rutrum sem ante, ut eleifend purus porttitor in.
                    <br /> Mauris ac dui consectetur, condimentum est ac, tristique velit. Phasellus varius volutpat sem quis semper. Nullam id egestas purus, eget rhoncus erat. A diam laoreet lobortis. In semper fermentum nibh, in congue urna
                    sollicitudin eu. Curaagna. Proin egestas lorem vel tincidunt interdum. Integer aliquet varius tellus, eu feugiat justo vestibulum id. Morbi ultrices ultrices . Nullam rutrum sem ante, ut eleifend purus porttitor in.</p>
                <br /> </div>
            <div class="col-md-7">
                <!-- Login starts -->
                <div class="well login-reg-form">
                    <!-- Heading -->
                    <h4>Register your Account</h4>
                    <!-- added on version 1.9 -->
                    <hr />
                    <!-- Form -->
                    <!-- Form Horizontal -->
                    <form style="max-width: 615px" class="form-horizontal" role="form" action="http://carbiz.webhelios.com/index.php/en/account/register/" method="post">

                        <input type="hidden" name="package_id" value="">

                        <!-- Form Group -->
                        <div class="form-group">
                            <!-- Label -->
                            <label for="name" class="col-sm-3 control-label">First Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <!-- Input -->
                                <input type="text" name="first_name" value="" placeholder="First Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Label -->
                            <label for="name" class="col-sm-3 control-label">Last Name <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <!-- Input -->
                                <input type="text" name="last_name" value="" placeholder="Last Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="useremail" value="" placeholder="Email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Username <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" name="username" value="" placeholder="Username" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="your-city" class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-5">
                                <select class="form-control" name="gender">
                                                        <option value="male" >Male</option>
                                                        <option value="female" >Female</option>
                    </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Company Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="company_name" value="" placeholder="Company Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="text" name="phone" value="" placeholder="Phone" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Password <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Confirm Password <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="password" name="repassword" placeholder="Confirm Password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <input type="hidden" name="terms_conditon" id="terms_conditon" value="">

                                <!-- Checkbox -->
                                <div class="checkbox">
                                    <label>
                            <input type="checkbox" name="terms_conditon_field" id="terms_conditon_field" >
                            I have read the <a target="_blank" href="http://carbiz.webhelios.com/index.php/en/page/terms_and_conditions">Terms and Condition</a>
                        </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <!-- Buton -->
                                <button type="submit" class="btn btn-success">Register</button>&nbsp;
                                <button type="reset" class="btn btn-white">Reset</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    
                </div>
                <!-- Login ends -->
            </div>
        </div>

    </div>

    <script type="text/javascript">
        jQuery(document).ready(function(e) {
            jQuery('#terms_conditon_field').click(function(e) {
                var val = jQuery(this).attr('checked');
                jQuery('#terms_conditon').val(val);

            });

        });
    </script>
</section>
<!-- //End portfolio -->
@endsection
