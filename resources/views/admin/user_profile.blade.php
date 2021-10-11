@extends('admin.layouts.adminapp')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            USER PROFILE

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> CarHat</a></li>
            <li class="active">User Profile</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">

        @if (\Auth::user()->id==1)
        <section id="product_details" class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <div class="box-header with-border">
                                <h3 class="box-title">Profile Info of: <strong>Admin</strong></h3>
                            </div>
                            <div class="container">
                                <div class="row">

                                    {!! Form::open([ 'route' => ['user.update'], 'method' => 'POST', 'id' => 'quickForm' ]) !!}
                                    {{-- < action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data"> --}}

                                        @csrf

                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <div class="col-md-offset-2 col-md-6">

                                            <div class="form-group">
                                                <label for="name">Name: <small style="color:red">*</small></label>

                                                {!! Form::text('name', $user->name, ['class' =>  'form-control', 'placeholder' => 'Enter Name']) !!}
                                                {{-- <input type="text" class="form-control" id="name" name="name"
                                                    title="Name" value="" required="" placeholder="Name"> --}}
                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email: <small style="color:red">*</small></label>
                                                {!! Form::text('email', $user->email, ['class' =>  'form-control', 'placeholder' => 'Enter Email']) !!}
                                                {{-- <input type="text" class="form-control" id="email" name="email"
                                                    title="Email" value="" placeholder="Email" > --}}
                                            </div>

                                            <div class="form-group">
                                                <label for="address">Address:</label>
                                                {!! Form::text('address', $user->address, ['class' =>  'form-control', 'placeholder' => 'Enter Email']) !!}
                                                {{-- <input type="text" class="form-control" id="address" name="address"
                                                    title="Address" value="" placeholder="Address"> --}}
                                            </div>

                                            <div class="form-group">
                                                <label for="phone">Phone: <small style="color:red">*</small></label>
                                                {!! Form::number('phone', $user->phone, ['class' =>  'form-control', 'placeholder' => 'Enter Email']) !!}
                                                {{-- <input type="text" class="form-control" id="phone" name="phone"
                                                    title="Phone" placeholder="Phone" value="" required=""> --}}
                                            </div>

                                            <div class="col-md-12 text-right mt-10">
                                                <button type="submit" class="btn btn-success"> Update Profile </button>
                                            </div>
                                        </div>




                                    {!! Form::close() !!}
                                </div>
                            </div>

                            <!-- /.content -->
                        </div>
                    </div>
                </div>
            </section>
            @endif

        <section id="product_details" class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <div class="box-header with-border">
                                <h3 class="box-title">Change Password</h3>
                            </div>

                            <div class="container">
                                <div class="row">
                                    {!! Form::open([ 'route' => ['pass.update'], 'method' => 'POST', 'id' => 'quickForm' ]) !!}

                                    @csrf


                                <input type="hidden" name="id"  value="{{ Auth::user()->id }}">
                                        <div class="col-md-offset-2 col-md-6">

                                            <div class="form-group">
                                                <label for="current_password">Old Password <small style="color:red">*</small></label>
                                                {{-- {!! Form::text('current_password', null  ['class' =>  'form-control', 'placeholder' => 'Enter Name']) !!} --}}
                                                {!! Form::text('current_password', null, ['class' =>  'form-control', 'placeholder' => 'Enter Current Password']) !!}

                                            </div>

                                            <div class="form-group">
                                                <label for="new_password">New Password: <small style="color:red">*</small></label>
                                                {!! Form::text('new_password', null, ['class' =>  'form-control', 'placeholder' => 'Enter New Password']) !!}
                                                {{-- {!! Form::text('new_password', null  ['class' =>  'form-control', 'placeholder' => 'Enter Name']) !!} --}}

                                            </div>

                                            <div class="form-group">
                                                <label for="confirm_password">Confirm Password: <small style="color:red">*</small></label>
                                                {!! Form::text('confirm_password', null, ['class' =>  'form-control', 'placeholder' => 'Enter New Password']) !!}
                                                {{-- {!! Form::text('confirm_password', null ['class' =>  'form-control', 'placeholder' => 'Enter Name']) !!} --}}

                                            </div>

                                            <div class="col-md-12 text-right mt-10">
                                                <button type="submit" class="btn btn-success"> Change Password </button>
                                            </div>
                                        </div>





                                    {!! Form::close() !!}
                                </div>
                            </div>


                            <!-- /.content -->
                        </div>
                    </div>
                </div>
        </section>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
