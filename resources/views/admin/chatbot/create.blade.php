@extends('admin.layouts.adminapp')

@section('product')
active
@endsection

@section('chat_bot')
    active
@endsection

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1 class="text-center">
            Chatbot Add Question

        </h1>
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Brand</a></li>
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
                                    <table class="table table-striped table-bordered table-sm" id="process_data_table">
                                        <thead>
                                        <tr>

                                            <th style="width: 44%">Question</th>
                                            <th style="width: 44%">Answer</th>
                                            <th style="width: 12%">Action</th>

                                        </tr>
                                        </thead>
                                        {!! Form::open([ 'route' => ['chat.store'], 'method' => 'POST', 'id' => 'quickForm', 'files' => true , 'novalidate' ]) !!}
                                        @csrf
                                            <tbody>
                                                <tr>

                                                    <td style="width: 40%"><textarea name="question" cols="65"></textarea></td>
                                                    <td ><textarea name="reply" cols="65"></textarea></td>
                                                    <td style="width: 12%">
                                                        <div><button type="submit" class="btn btn-sm btn-success">Save</button>

                                                            <a
                                                                href="{{ route('chat.bot') }}"
                                                                class="btn btn-sm btn-danger"  title="Cancel">Cancel
                                                            </a>
                                                        </div>


                                                    </td>
                                                </tr>
                                            </tbody>

                                    </table>
                                </div>

                        <!-- /.content -->
                    </div>
                </div>
            </div>
    </section>
</div>
@endsection
