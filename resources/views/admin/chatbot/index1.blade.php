@extends('admin.layouts.adminapp')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <a href="{{ route('chat.create') }}"
            class="btn btn-sm btn-success">Add Question
        </a>
        <h1 class="text-center">
            Chatbot Data List

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
                                            <th style="width: 10%">SL.</th>
                                            <th style="width: 30%">Question</th>
                                            <th>Answer</th>
                                            <th style="width: 11%">Action</th>

                                        </tr>
                                        </thead>
                                    @foreach($chatbot['chatbot'] as $key => $value)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $loop->index+1 }}</td>
                                                    <td>{{ $value->queries }}</td>
                                                    <td>{!! $value->replay !!}</td>
                                                    <td>
                                                        <a href="{{ route('chat.edit',$value->id) }}"
                                                            class="btn btn-sm btn-success">Edit
                                                        </a>

                                                        <a
                                                            href="{{ route('chat.delete',$value->id) }}"
                                                            class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete ?')" title="DELETE">Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>

                        <!-- /.content -->
                    </div>
                </div>
            </div>
    </section>
</div>
@endsection
