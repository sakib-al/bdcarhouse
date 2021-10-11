@extends('admin.layouts.adminapp')

@section('title')
    BDCarHouse - Blog List
@endsection

@section('product')
active
@endsection

@section('blog')
    active
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Blog List</h1>
        <ul class="breadcrumb">
            <a href="{{ route('admin.blog.add') }}" class="btn btn-info"><i class="fa fa-plus">Add </i></a>
            <li><a href="#"><i class="fa fa-dashboard"></i> Blog</a></li>
            <li class="active">Here</li>
        </ul>
    </section>

    <!-- Main content -->
    <section id="product_details" class="content" style="margin-top:5px">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header with-border">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 10%;">SL</th>
                                    <th scope="col" style="width: 20%;">Title</th>
                                    <th scope="col" style="width: 30%;">Description</th>
                                    <th scope="col" style="width: 10%;">Image</th>
                                    <th scope="col" style="width: 20%;">Action</th>

                                </tr>
                            </thead>

                            @if(isset($blog) && count($blog) > 0 )
                            @foreach($blog as $key => $row)
                            <tbody>
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $row->title }}</td>
                                    <td>{!! $row->description !!}</td>
                                    <td> <img src="{{asset('/')}}image/{{ $row->image ??'' }}" width="90" height="50"></td>

                                    <td>
                                        <a href="{{route('admin.blog.edit',$row->id)}}"
                                            class="btn btn-sm btn-success">Edit
                                        </a>
                                           {{-- <a
                                            href="{{route('admin.blog.view',$row->id)}}"
                                            class="btn btn-sm btn-info" title="VIEW">View</a>
                                            --}}
                                        <a
                                            href="{{route('admin.blog.delete',$row->id)}}"
                                            class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete ?')" title="DELETE">Delete
                                        </a>

                                    </td>




                                </tr>
                            </tbody>
                            @endforeach
                            @endif

                        </table>

                        <!-- /.content -->
                    </div>
                </div>
            </div>
    </section>
</div>


<!-- /.content-wrapper -->
<script>

    function  deleteData(id) {
        if (confirm('you want delete this. Are you sure ?')) {
            $('#delete-form-'+id).submit();
        }else{
            return false;
        }
    }

</script>
@endsection
