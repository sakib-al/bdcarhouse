@extends('admin.layouts.adminapp')

@section('title')
    BDCarHouse - User List
@endsection

@section('settings')
active
@endsection

@section('user')
    active
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> User List</h1>
        <ul class="breadcrumb">
            <a href="{{ route('users.create') }}" class="btn btn-info"><i class="fa fa-plus">Add User</i></a>
            <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
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
                                    <th scope="col" style="width: 5%;">Sl</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>

                            {{-- @if(isset($brand) && count($brand) > 0 ) --}}
                            @foreach($users as $row)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td><img src="{{asset('/')}}image/{{ $row->image ??'' }}" width="90" height="50"></td>
                                    <td>{{ $row->name }}</td>
                                    <td>
                                        @if ($row->role == 1)
                                            Admin
                                        @else
                                            User
                                        @endif
                                    </td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->address }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $row->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>

                                        <a href="{{ route('users.delete', $row->id) }}" onclick="return confirm('Are you sure you want to delete ?')" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                            {{-- @endif --}}

                        </table>
                        {{-- <div style="float: right">
                            {{ $brand->links() }}
                        </div> --}}

                        <!-- /.content -->
                    </div>
                </div>
            </div>
    </section>
</div>


<!-- /.content-wrapper -->
{{-- <script>

    function  deleteData(id) {
        if (confirm('you want delete this. Are you sure ?')) {
            $('#delete-form-'+id).submit();
        }else{
            return false;
        }
    }

</script> --}}
@endsection
