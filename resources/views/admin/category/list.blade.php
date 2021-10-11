@extends('admin.layouts.adminapp')

@section('title')
    BDCarHouse - Category List
@endsection

@section('product')
active
@endsection

@section('category')
    active
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Category List</h1>
        <ul class="breadcrumb">
            <a href="{{ route('admin.category.add') }}" class="btn btn-info"><i class="fa fa-plus">Add {{ $title }}</i></a>
            <li><a href="#"><i class="fa fa-dashboard"></i> Category</a></li>
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
                                    <th scope="col" style="width: 10%;">Sl</th>
                                    <th scope="col" style="width: 20%;">Name</th>
                                    <th scope="col" style="width: 20%;">Name (Bangla)</th>
                                    <th scope="col" style="width: 10%;">Status</th>
                                    <th scope="col" style="width: 20%;">Image</th>
                                    <th scope="col" style="width: 13%;">Action</th>

                                </tr>
                            </thead>

                            @if(isset($category) && count($category) > 0 )
                            @foreach($category as $key => $row)
                            <tbody>
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->name_bn }}</td>
                                    <td>
                                        @if( $row->status == 'active' )
                                           <a class="btn btn-info btn-sm">Active<a>
                                        @else
                                        <a class="btn btn-danger btn-sm">Inactive<a>
                                        @endif
                                    </td>

                                    <td> <img src="{{asset('/')}}image/{{ $row->image ??'' }}" width="90" height="50"></td>

                                    <td>
                                        <a href="{{route('admin.category.edit',$row->id)}}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>

                                        <a href="#deleteModal{{ $row->id }}" data-toggle="modal" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>

                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="deleteModal{{ $row->id }}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{!! route('admin.category.delete', $row->id) !!}" method="post">
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger">Permanent Delete</button>
                                                        </form>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Delete Modal -->
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
