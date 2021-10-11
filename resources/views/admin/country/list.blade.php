@extends('admin.layouts.adminapp')

@section('title')
    BDCarHouse - City List
@endsection

@section('product')
active
@endsection

@section('country')
    active
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Country List</h1>
        <ul class="breadcrumb">
            <a href="{{ route('admin.country.add') }}" class="btn btn-info"><i class="fa fa-plus">Add {{ $title }}</i></a>
            <li><a href="#"><i class="fa fa-dashboard"></i> country</a></li>
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
                                    <th scope="col" style="width: 20%;">Code</th>
                                    <th scope="col" style="width: 20%;">Status</th>
                                    <th scope="col" style="width: 20%;">Action</th>

                                </tr>
                            </thead>

                            @if(isset($country) && count($country) > 0 )
                            @foreach($country as $key => $row)
                            <tbody>
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->code }}</td>

                                    <td>

                                        @if( $row->status == 'active' )
                                           <a class="btn btn-info btn-sm">Active<a>
                                        @else
                                        <a class="btn btn-danger btn-sm">Inactive<a>
                                        @endif
                                    </td>
                                    <td>

                                        <a href="{{route('admin.country.edit',$row->id)}}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>

                                        {{-- <a href="#deleteModal{{ $row->id }}" data-toggle="modal" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a> --}}

                                        <!-- Delete Modal -->
                                        {{-- <div class="modal fade" id="deleteModal{{ $row->id }}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{!! route('admin.country.delete', $row->id) !!}" method="post">
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger">Permanent Delete</button>
                                                        </form>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
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
